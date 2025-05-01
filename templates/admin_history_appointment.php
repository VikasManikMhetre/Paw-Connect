<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <!-- Google fonts end -->

    <link rel="stylesheet" href="{{ url_for('static', filename='add_medication_css.css') }}">
    <link rel="stylesheet" href="{{ url_for('static', filename='signup_css.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet"  href="css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link rel="stylesheet" href="{{ url_for('static', filename='spacific_user_appointments_css.css') }}">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQ0HRfSuC5I+4/yekEVnmIQLA4WbVZY72qUk5zK3n9NT1BsWuP9W2J+0U" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Spacific_user_php</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="#" aria-disabled="true"><label style="color:rgb(160, 231, 245)">Paw Connect </label></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/admin_dashboard.php"><label style="color:gray">Home</label></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/book_appointment.php"><label style="color:gray">Book Appointment</label></a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><label style="color:rgb(160, 231, 245)"> Know More </label></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- <li><a class="dropdown-item" href="/blogs.php">Interesting Blogs </a></li> -->
                                <!-- <li><a class="dropdown-item" href="/our_team.php">Meet Our Team</a></li> -->
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li><a class="dropdown-item" href="/api_admin_history_appointment">See your appointments</a></li>
                                <li><a class="dropdown-item" href="/admin_add_medication.php">Add Medication</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><label style="color:rgb(160, 231, 245)">{{ user_name }}</label></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/" tabindex="-1" aria-disabled="true"><label style="color:gray">Log out</label></a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" action="/search" method="POST">
                        <input class="form-control me-2" type="search" name="query" style="background-color: rgb(160, 231, 245);" placeholder="{{not_searched}}" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit">Search</button>
                    </form> -->
    
                </div>
            </div>
        </nav>

    <!-- Bootstrap Bundle with Popper (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<div class=" box_2_medication_css d-flex flex-column h-100">
    <div class="mt-5"> 
        <p class="mb-1 h-1"> Enter date to see appoitments <label class="color_font"> ! <t></label></p>
        <p class="text-muted mb-2"><label class="color_font"> | <t></label>Enter date which appointment you want to display </p>
        <div class="d-flex flex-column ">
            <div class="d-flex align-items-center">
                <!-- <form action="/create" method="post">
                    <input type="text"  id="name"     name="name"      class="fadeIn second custom_placeholder" placeholder="Enter Name" required>
                    <input type="text" id="email"    name="email"     class="fadeIn second custom_placeholder" placeholder="Enter Email" required>
                    <input type="text"  id="tel"      name="tel"       class="fadeIn second custom_placeholder" placeholder="Mobile Number">
                    <input type="text"  id="password" name="password"  class="fadeIn third custom_placeholder"  placeholder="Password"></br>
                    <input type="submit" class="fadeIn fourth " value="Sign Up">
                    <div class="mt-3">
                        <p class="fadeIn fourth mb-0 text-muted">Already have an account?</p>
                        <a href="/"><div class="fadeIn fourth " id="log_in_button">Log in</div></a>
                    </div>
                </form> -->
                <form action="/admin_fatch_appointment_as_given_date" method="POST">
                    <label style="color:rgb(112, 78, 53); background-color: #e1ddddbb; margin-left: 2em;" class="fadeIn second ">Date (year/month/date):</label>
                    <input type="date" name="date_to_see_appointment" id="name" class="fadeIn second custom_placeholder " required><br><br>
                    <input type="submit" class="fadeIn fourth " style="margin-left: 2em;" value="Fatch appointment according to date">
                    <!-- <div class="mt-3">
                        <a href="/api_admin_history_appointment"><div class="fadeIn fourth " id="log_in_button"> Click here to know all appointment </div></a><br><br>
                    </div> -->
                    <!-- <button type="submit" class="fadeIn fourth"  id="log_in_button">Add Medication</button><br><br> -->
                </form>


            </div>
     </div>
         

    </div>
</div>
<br>
<br>

    <!-- <h1 class="fadeIn first">All Users</h1>

    <-- Table to display the users -->
    <table border="1" class="table table-info table-striped table-hover table-bordered">
        <thead>
            <tr class="fadeIn first">
                <th>Record ID</th>
                <th>Name</th>
                <th>Owner Ph.No</th>
                <th>Reason to book</th>
                <th>Pet Name </th>
                <th>Pet Gender</th>
                <th>pet Weight </th>
                <th>Date of Appointment</th>
                <th>Description</th>
                <th>Medication</th>

            </tr>
        </thead>
        <tbody class="fadeIn second">
                <!-- {% set seen = [] %}             -->
                {% for user in users %}
                     {% if user  in users %}
                     <!-- {% set _ = seen.append(user|tojson) %} -->
                 <tr>
                    <td>{{ user[0] }}</td> <!-- user[0] is the ID -->
                   <td>{{ user[1] }}</td> <!-- user[1] is the Name -->
                   <td>{{ user[2] }}</td> <!-- user[2] is the Email -->
                   <td>{{ user[3] }}</td> <!-- user[2] is the Email -->
                   <td>{{ user[4] }}</td> <!-- user[2] is the Email -->
                   <td>{{ user[5] }}</td> <!-- user[2] is the Email -->
                   <td>{{ user[6] }}</td> <!-- user[2] is the Email -->
                   <td>{{ user[7] }}</td> <!-- user[2] is the Email -->
                   <td>{{ user[8] }}</td> <!-- user[2] is the Email -->
                   <td>{{ user[11] }}</td> <!-- user[2] is the Email -->
                </tr>
                    {% endif %}
                {% endfor %}
        </tbody>
    </table> 

</body>
</html>
