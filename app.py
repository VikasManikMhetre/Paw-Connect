from flask import Flask, request, jsonify, render_template, redirect, url_for, session
from flask_mysqldb import MySQL


app = Flask(__name__)
app.secret_key = '8f3bd5c6491a8e29c34e2d56ef4a4e20'

# MySQL Configuration
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'myflaskdb'

mysql = MySQL(app)

@app.route('/logout')
def logout():
    session.clear()
    return render_template("login.php")



@app.route('/create.html')
def create_html():
    return render_template("/create.html")

# Create Operation
@app.route('/create', methods=['POST'])
def create_user():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        mobile=request.form['tel']
        password=request.form['password']



        cur = mysql.connection.cursor()
        cur.execute("INSERT INTO users (name, email, mobile, password) VALUES (%s, %s, %s, %s)", (name, email, mobile, password))
        mysql.connection.commit()
        cur.execute("SET @id := 0;")
        cur.execute("UPDATE users SET id = @id := (@id + 1);")
        mysql.connection.commit()
        cur.close()
        return render_template("/login.php")

@app.route("/update.html")
def update_html():
    return render_template("update.html")
    

#update user
@app.route('/update', methods=['POST'])
def update_user():
    user_id = request.form['id']  # Getting ID from the form
    name = request.form['name']
    email = request.form['email']
    cur = mysql.connection.cursor()
    cur.execute("UPDATE users SET name=%s, email=%s WHERE id=%s", (name, email, user_id))
    mysql.connection.commit()
    cur.close()
    return render_template("/index.html")


@app.route("/delete.html")
def delete_html():
    return render_template("/delete.html")

# Delete Operation (taking ID from form)
@app.route('/delete', methods=['POST'])
def delete_user():
    user_id = request.form['id']  # Getting ID from the form
    cur = mysql.connection.cursor()
    cur.execute("DELETE FROM users WHERE id=%s", (user_id,))
    mysql.connection.commit()
    cur.execute("SET @id := 0;")
    cur.execute("UPDATE users SET id = @id := (@id + 1);")
    mysql.connection.commit()
    cur.close()

    
    return render_template("/index.html")

@app.route('/read', methods=['GET'])
def read_users():
    # Get a cursor to interact with the database
    cur = mysql.connection.cursor()
    
    # Execute SQL query to fetch all users
    cur.execute("SELECT * FROM users")
    
    # Fetch all the records
    users = cur.fetchall()
    
    # Close the cursor after fetching data
    cur.close()
    
    # Pass the data to the template and render it
    return render_template('read.html', users=users)

@app.route("/signup.php")
def signup_php():
    return render_template("signup.php")

@app.route("/admin_signup")
def admin_signup_php():
    return render_template("admin_signup.php")

@app.route('/admin_create', methods=['POST'])
def create_admin_user():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        mobile=request.form['tel']
        password=request.form['password']



        cur = mysql.connection.cursor()
        cur.execute("INSERT INTO admin_users (name, email, mobile, password) VALUES (%s, %s, %s, %s)", (name, email, mobile, password))
        mysql.connection.commit()
        cur.execute("SET @id := 0;")
        cur.execute("UPDATE users SET id = @id := (@id + 1);")
        mysql.connection.commit()
        cur.close()
        return render_template("/admin_login.php")

@app.route('/admin_login')
def admin_login_php():
    user=session.get('name', 'name is not register')
    return render_template("admin_login.php", user_name=user)


@app.route("/api_login_check",methods=['POST'])
def login_check():
    if request.method == 'POST':
        # Fetch email and password from form
        email = request.form['email']
        password = request.form['password']

        # Establish database connection and execute query
        try:
            cur = mysql.connection.cursor()
            cur.execute("SELECT * FROM users WHERE email = %s AND password = %s", (email, password))
            user = cur.fetchone()

            if user:
                # Store user data in session
                session['email'] = user[4]  # Assuming 4th index is email in myflaskdb in table users
                session['password'] = user[3]  # Assuming 3rd index is password in myflaskdb in table users
                session['name']=user[1]
                
                # Redirect to index.html
                return render_template('/home.php',user_name=user[1])
            else:
                # Invalid credentials
                session['loginmessage'] = "Invalid UserId or Password!"
                return render_template('/login.php', login_message="Invalid UserId or Password!")
        except Exception as e:
            return jsonify({"error ": str(e)})
    else:
        return jsonify({"error": "Invalid request method!"})

@app.route("/admin_dashboard.php")
def admin_dashbord_php():
    user=session.get('name', 'name is not register')
    return render_template("admin_dashboard.php",user_name=user)



@app.route("/api_admin_check",methods=['POST'])
def admin_login_check():
    if request.method == 'POST':
        # Fetch email and password from form
        email = request.form['email']
        password = request.form['password']

        # Establish database connection and execute query
        try:
            cur = mysql.connection.cursor()
            cur.execute("SELECT * FROM admin_users WHERE email = %s AND password = %s", (email, password))
            user = cur.fetchone()

            if user:
                # Store user data in session
                session['email'] = user[4]  # Assuming 4th index is email in myflaskdb in table users
                session['password'] = user[3]  # Assuming 3rd index is password in myflaskdb in table users
                session['name']=user[1]
                
                # Redirect to index.html
                return render_template('/admin_dashboard.php',user_name=user[1])
            else:
                # Invalid credentials
                session['loginmessage'] = "Invalid UserId or Password!"
                return render_template('/admin_login.php', login_message="Invalid UserId or Password!")
        except Exception as e:
            return jsonify({"error ": str(e)})
    else:
        return jsonify({"error": "Invalid request method!"})


@app.route('/home.php')
def home_php():
    user=session.get('name', 'name is not register')
    return render_template("home.php",user_name=user)

@app.route('/index.html')
def index_html():
    return render_template("index.html")

@app.route('/login.html')
def login_html():
    return render_template("login.html")

@app.route('/book_appointment.php')
def book_appointment():
    user=session.get('name', 'name is not register')
    return render_template("book_appointment.php", user_name=user)


@app.route('/our_team.php')
def our_team():
    user=session.get('name', 'name is not register')
    return render_template("our_team.php", user_name=user)


@app.route('/add_appointment', methods=['POST'])
def add_appointment():
    if request.method == 'POST':
        try:
            # Fetch appointment details
            owner_name = request.form['owner_name']
            owner_tel = request.form['owner_tel']
            reason_to_book = request.form['reason_to_book']
            dog_name = request.form['dog_name']
            dog_gender = request.form['dog_gender']
            dog_weight = request.form['dog_weight']
            date_of_appointment = request.form['date_of_appointment']
            explain_reason = request.form['explain_reason']
            email_user = session.get('email', 'Email not set')
            password_user = session.get('password', 'Password not set')
            medication = "Not Inserted"

            # Generate dynamic table name based on the date
            table_name = f"appointment_{date_of_appointment.replace('-', '_')}"
            
            # Database interaction
            cur = mysql.connection.cursor()

            # Check if the table exists; if not, create it dynamically
            cur.execute(f"""
                CREATE TABLE IF NOT EXISTS `{table_name}` (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    owner_name VARCHAR(255),
                    owner_tel VARCHAR(20),
                    reason_to_book TEXT,
                    dog_name VARCHAR(255),
                    dog_gender VARCHAR(10),
                    dog_weight FLOAT,
                    date_of_appointment DATE,
                    explain_reason TEXT,
                    email_apt VARCHAR(255),
                    pass_apt VARCHAR(255),
                    medication TEXT
                ) ENGINE=InnoDB;
            """)

            # Check the row count in the table
            cur.execute(f"SELECT COUNT(*) FROM `{table_name}`")
            row_count = cur.fetchone()[0]
            if row_count >= 10:
                message = "The appointment limit for this date has been reached."
                return render_template('/book_appointment.php', user_name=session.get('name', 'Name not registered'), message=message)

            # Insert the new appointment
            cur.execute(f"""
                INSERT INTO `{table_name}` 
                (owner_name, owner_tel, reason_to_book, dog_name, dog_gender, dog_weight, date_of_appointment, explain_reason, email_apt, pass_apt, medication) 
                VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
            """, (owner_name, owner_tel, reason_to_book, dog_name, dog_gender, dog_weight, date_of_appointment, explain_reason, email_user, password_user, medication))
            
            # Commit the changes
            mysql.connection.commit()
            cur.close()

            # Show success message
            message = "Appointment added successfully!"
            return render_template('/book_appointment.php', user_name=session.get('name', 'Name not registered'), message=message)

        except Exception as e:
            # Handle any errors and return a JSON response
            message = f"An error occurred: {str(e)}"
            return render_template('/home.php', user_name=session.get('name', 'Name not registered'), message=message)
    else:
        # Return an error for invalid HTTP methods
        message = "Invalid request method!"
        return render_template('/home.php', user_name=session.get('name', 'Name not registered'), message=message)


@app.route("/appointment_user.php")
def history_appointment_user():
    return render_template("appointment_user.php")
@app.route("/history_appointment_user")
def api_history_appointment_user():
    try:
        # Get email and password from session
        email = session.get('email', 'Email not set')
        password = session.get('password', 'Password not set')

        if not email or not password:
            return jsonify({"error": "Email or password not set in session"}), 400
        
        # Get a cursor to interact with the database
        cur = mysql.connection.cursor()
        mydb = "myflaskdb"
        
        # Get the list of all tables excluding 'users' and 'admin_user'
        cur.execute("""
            SELECT table_name 
            FROM information_schema.tables 
            WHERE table_schema = %s 
            AND table_name NOT IN ('users', 'admin_user')
        """, (mydb,))
        
        tables = cur.fetchall()
        
        all_data = []

        # Loop through all tables
        for table in tables:
            table_name = table[0]
            
            if table_name.isidentifier():
                # Ensure email and password are valid columns in the table
                cur.execute(f"DESCRIBE `{table_name}`")
                columns = [desc[0] for desc in cur.fetchall()]

                if "email_apt" in columns and "pass_apt" in columns:
                    query = f"SELECT * FROM `{table_name}` WHERE email_apt= %s AND pass_apt= %s"
                    cur.execute(query, (email, password))
                    rows = cur.fetchall()

                    # Add each row with the table name and column headers
                    if rows:
                        for row in rows:
                            row_data = dict(zip(columns, row))
                            row_data["table_name"] = table_name  # Add table name to distinguish from other tables
                            all_data.append(row_data)

        cur.close()

        # Pass data to the template for rendering
        user = session.get('name', 'name is not register')
        return render_template('spacific_users_appointments.php', users=all_data, user_name=user)
    
    except Exception as e:
        return jsonify({"error": str(e)}), 500






@app.route('/spacific_users_appointments.html')
def spacific_users_appointments():
    user=session.get('name', 'name is not register')
    return render_template("spacific_users_appointments.php", user_name=user)

@app.route('/add_medication.php')
def update_spacific_user_appoitment_php():
    user=session.get('name', 'name is not register')
    return render_template("add_medication.php", user_name=user)

@app.route('/add_medication', methods=['POST'])
def update_spacific_user_appoitment():
    keys = request.form['key']  # Getting ID from the form
    date = request.form['date']
    medication = request.form['medication']

    # Format the table name dynamically based on the date
    table_name = f"appointment_{date.replace('-', '_')}"

    # Get a cursor to interact with the database
    cur = mysql.connection.cursor()

    try:
        # Execute the update query dynamically using the table name
        cur.execute(f"UPDATE `{table_name}` SET date_of_appointment=%s, medication=%s WHERE id=%s", (date, medication, keys))
        mysql.connection.commit()

    except Exception as e:
        # Handle any potential errors
        mysql.connection.rollback()
        return jsonify({"error": str(e)}), 500

    finally:
        cur.close()

    user = session.get('name', 'name is not register')
    return render_template("add_medication.php", user_name=user)


@app.route('/to_add_medication_display_appointment_update')
def to_add_medication_display_appointment_update():

    email_specific = session.get('email', 'Email not set')
    password_spacific = session.get('password', 'Password not set')
    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM appointment_master WHERE email_apt = %s AND pass_apt = %s", (email_specific, password_spacific))
    users = cur.fetchall()
    cur.close()
    user=session.get('name', 'name is not register')
    return render_template('add_medication.php',user_name=user, users=users)


@app.route("/search", methods=["POST"])
def search():
    query = request.form.get("query")  # Retrieve the search query from the form
    if query:
        # Example: Search logic
        if query.lower() == "book appointment" or query.lower()=="book" or query.lower()=="appointment book" or query.lower()=="book appointments":
            user=session.get('name', 'name is not register')
            return render_template("book_appointment.php", user_name=user)
        
        elif query.lower() == "add medication" or query.lower()=="medication add" or query.lower()=="medication":
                user=session.get('name', 'name is not register')
                return render_template("add_medication.php",user_name=user)
        
        elif query.lower() == "team" or query.lower()=="doctors" or query.lower()=="assistants" or query.lower()=="doctor":
            user=session.get('name', 'name is not register')
            return render_template("our_team.php", user_name=user)
        
        elif query.lower() == "blogs" or query.lower()=="interesting blogs" or query.lower()=="blog" or query.lower()=="anything to read":
            user=session.get('name', 'name is not register')
            return render_template("blogs.php", user_name=user)
        
        elif query.lower() == "history" or query.lower()=="my appointments history" or query.lower()=="appointments history" or query.lower()=="appointments" or query.lower()=="appointment":
            user=session.get('name', 'name is not register')
            email_specific = session.get('email', 'Email not set')
            password_spacific = session.get('password', 'Password not set')
            cur = mysql.connection.cursor()
            cur.execute("SELECT * FROM appointment_master WHERE email_apt = %s AND pass_apt = %s", (email_specific, password_spacific))
            users = cur.fetchall()
                    
            return render_template("spacific_users_appointments.php",users=users ,user_name=user)
        
        elif query.lower() == "home" or query.lower()=="main page" or query.lower()=="home page":
            user=session.get('name', 'name is not register')
            return render_template("home.php", user_name=user)
        
        else:
            user=session.get('name', 'name is not register')
            not_searched="May you misspell"
            return render_template("home.php",user_name=user, not_searched=not_searched)
    else:
        user=session.get('name', 'name is not register')
        return render_template("home.php",user_name=user)

#all blog post endpoints
@app.route('/blog_1_php')
def blog_one():
    user=session.get('name', 'name is not register')
    return render_template('blog_1.php', user_name=user)

@app.route('/blog_2_php')
def blog_two():
    user=session.get('name', 'name is not register')
    return render_template('blog_2.php', user_name=user)

@app.route('/blog_3_php')
def blog_three():
    user=session.get('name', 'name is not register')
    return render_template('blog_3.php', user_name=user)

@app.route('/blog_4_php')
def blog_():
    user=session.get('name', 'name is not register')
    return render_template('blog_4.php', user_name=user)

@app.route('/blogs.php')
def blogs():
    user=session.get('name', 'name is not register')
    return render_template("blogs.php", user_name=user)

@app.route('/admin_history_appointment')
def admin_history_appointment():
    user=session.get('name', 'name is not register')
    return render_template("admin_history_appointment.php", user_name=user)

@app.route("/api_admin_history_appointment")
def api_admin_history_appointment():
    user=session.get('name', 'name is not register')
    return render_template('admin_history_appointment.php', user_name=user)


@app.route("/admin_fatch_appointment_as_given_date", methods=["POST"])
def api_admin_according_to_date_history_appointment():
    try:
        email_specific = session.get('email', 'Email not set')
        password_spacific = session.get('password', 'Password not set')
        
        # Get the date from the form
        date = request.form.get('date_to_see_appointment')  # Use .get() to avoid KeyError
        
        if not date:
            return jsonify({"error": "Date is required"}), 400
        
        # Validate and construct the dynamic table name
        table_name = f"appointment_{date.replace('-', '_')}"
        if not table_name.isidentifier():
            return jsonify({"error": "Invalid table name"}), 400
        
        # Get a cursor to interact with the database
        cur = mysql.connection.cursor()
        
        # Safely construct the SQL query for dynamic table name
        query = f"SELECT * FROM `{table_name}`"
        cur.execute(query)
        
        # Fetch all the records
        users = cur.fetchall()
        
        # Close the cursor after fetching data
        cur.close()
        
        user = session.get('name', 'name is not registered')
        
        # Render the template with the fetched data
        return render_template('admin_history_appointment.php', users=users, user_name=user)
    
    except Exception as e:
        # Handle any unexpected errors
        return jsonify({"error": str(e)}), 500




@app.route('/admin_add_medication.php')
def admin_add_medication():
    user=session.get('name', 'name is not register')
    return render_template("admin_add_medication.php",user_name=user)

@app.route('/api_admin_add_medication', methods=['POST'])
def api_admin_update_spacific_user_appoitment():
    keys = request.form['key']  # Getting ID from the form
    date = request.form['date']
    medication = request.form['medication']

    # Format the table name dynamically based on the date
    table_name = f"appointment_{date.replace('-', '_')}"

    # Get a cursor to interact with the database
    cur = mysql.connection.cursor()

    try:
        # Execute the update query dynamically using the table name
        cur.execute(f"UPDATE `{table_name}` SET date_of_appointment=%s, medication=%s WHERE id=%s", (date, medication, keys))
        mysql.connection.commit()

    except Exception as e:
        # Handle any potential errors
        mysql.connection.rollback()
        return jsonify({"error": str(e)}), 500

    finally:
        cur.close()

    user=session.get('name', 'name is not register')
    message = "Prescription added successfully!"
    return render_template("admin_add_medication.php",user_name=user, message=message)

@app.route('/admin_to_add_medication_display_appointment_update')
def admin_to_add_medication_display_appointment_update():

    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM appointment_master ")
    users = cur.fetchall()
    cur.close()
    user=session.get('name', 'name is not register')
    return render_template('admin_add_medication.php',user_name=user, users=users)







@app.route('/')
def index():
    return render_template('/login.php')  # Ensure you create a template for this

if __name__ == '__main__':
    app.run(debug=True)
