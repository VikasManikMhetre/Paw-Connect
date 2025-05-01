<!-- <?php
	// session_start();
	// if(!$_SESSION['userid']){
	// 	echo "<script>window.location.href='login.php';</script>";
	// 	exit;
	// }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url_for('static', filename='signup_css.css') }}">
    <link rel="stylesheet" href="{{ url_for('static', filename='book_appoitment_css.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="icon"  href="images/icon.png">
    <title>Paw Appointment Booking</title>




    

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#" aria-disabled="true" ><label style="color:rgb(160, 231, 245)">Paw Connect </label></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home.php"><label style="color:gray">Home</label></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/book_appointment.php"><label style="color:gray">Book Appointment </label></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><label style="color:rgb(160, 231, 245)"> Know More </label></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/blogs.php">Interesting Blogs </a></li>
                            <li><a class="dropdown-item" href="/our_team.php">Meet Our Team</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/history_appointment_user">See your appointments</a></li>
                            <li><a class="dropdown-item" href="/add_medication.php">Add Medication</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" tabindex="-1" aria-disabled="true"><label style="color:gray">Log out</label></a>
                    </li>
                    
                        <li class="nav-item float-right">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><label style="color:rgb(160, 231, 245)">{{ user_name }}</label></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/book_appointment.php"><label style="color:gray">__________________</label></a>
                        </li>
                    </ul>
                    <form class="d-flex" action="/search" method="POST">
                        <input class="form-control me-2" type="search" name="query" style="background-color: rgb(160, 231, 245);" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit">Search</button>
                    </form>

            </div>
        </div>
    </nav>

    <!-- Bootstrap Bundle with Popper (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- Popup Container -->
    <div class="popup-container" id="popup">
        <div class="popup-content">
            <button class="close-btn" onclick="closePopup()">×</button>
            <p id="popup-message"></p>
        </div>
    </div>

    <!-- JavaScript for Popup -->
    <script>
        // Show the popup if a message is passed
        const message = "{{ message|safe }}";
        if (message) {
            const popup = document.getElementById('popup');
            const popupMessage = document.getElementById('popup-message');
            popupMessage.textContent = message; // Set the message text
            popup.style.display = 'flex'; // Show the popup
        }

        // Close the popup
        function closePopup() {
            const popup = document.getElementById('popup');
            popup.style.display = 'none'; // Hide the popup
        }
    </script>
<section class="my-2 container con" >
    <div  class="py-5">
		<h2 class=" pl-2 display-5"><label style="color:rgb(160, 231, 245)"> | </label><label style="color:black">  Book Appointment </label> </h2>
    </div>
    <div class=" w-50 m-auto">
    <form action="/add_appointment" method="post">
            <div class="form-group ">
            <input type="text"  id="name"     name="owner_name"      class="fadeIn second custom_placeholder" placeholder="Enter Owner Name" required>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group ">
                <input type="text"  id="tel"      name="owner_tel"    class="fadeIn second custom_placeholder" placeholder="Mobile Number" required>
            </div>
            <div class="form-group " >
            <select class="form-select  fadeIn second" name="reason_to_book" required>
                <option selected value="Routine Checkup" style="color:rgb(112, 78, 53); font-weight: 500;" ><b>Routine Checkup</b></option>
                <option value="Vaccination " style="color:rgb(112, 78, 53); font-weight: 500;"><b>Vaccination</b></option>
                <option value="Operation " style="color:rgb(112, 78, 53); font-weight: 500;"><b>Operation</b></option>
                <option value="Emergency" style="color:red;font-weight: 600;">Emergency (we take pre-precaution before came to clinic)</option>
            </select>


            </div>
            
            <div class="form-group ">
            <input type="text" id="email"    name="dog_name"     class="fadeIn second custom_placeholder" placeholder="Enter Pet Name" required>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group fadeIn second " style="color:rgb(112, 78, 53)">
                <label style="background-color: #e1ddddbb;">Dog Gender :</label>
                <input type="radio" id="html" name="dog_gender" value="Male">
                <label for="html">Male</label>
                <input type="radio" id="css" name="dog_gender" value="Female">
                <label for="css">Female</label>
            </div>
            <div class="form-group ">
                <input type="text"  class="fadeIn second custom_placeholder" id="password" name="dog_weight"  placeholder="Enter weight"></br>
            </div>
            <div class="form-group fadeIn second " style="color:rgb(112, 78, 53)">
                <label style="background-color: #e1ddddbb;">Enter date of Appoitmnet : </label>
                <input type="date"  placeholder="Enter Date of Appointment " class="custom_placeholder" name="date_of_appointment"></br>
            </div>

            <div class="form-group fadeIn second " style="color:rgb(112, 78, 53)">
				<label style="background-color: #e1ddddbb;"> Comment </label>
				<textarea name="explain_reason" class="form-control" style="color:rgb(112, 78, 53)" placeholder="Give more tips for your pet precaution (If emergency must fill this section!) "></textarea>
		   </div>

            <div class="form-group "><br>
                <input type="submit" class="fadeIn fourth " value="Book Appoitment Now">
            </div>
        <div class="mt-3">
            <p class="fadeIn fourth mb-0 text-muted color_font">Don't have an account?</p>
            <a href="/signup.php"><div class="fadeIn fourth " id="log_in_button">Sign up</div></a>
        </div>
    </form>

<!-- 
	<script >

	var choice = prompt("Do you accept our cookies ?\n Yes or No .");
		
		
	
		var firstChar = name.slice(0,1); 
		 firstChar = firstChar.toUpperCase();
		var remainingChar = name.slice(1,name.length);  // this piace of code for converting
		 var name_edited= firstChar + remainingChar;	// user name first latter to upperCase 
	    	                      //	and remaining char into lower 
	
	
	
        var choiceEdit = choice.slice(0,1); 
        choiceEdit= choiceEdit.toUpperCase();

        if( choiceEdit == "Y"  )
		{
			alert("Thank you for Trusting us .");
		}
		else if( choiceEdit =="N"  )
		{
			alert("You cannot access our website without accepting Cookies .");
		}
		else
		{
			alert("Wrong input . Please Enter correct option ");
		}
		
	
		




 /*Love calculator 

  var name_1=prompt("Write your name ");
  var name_2=prompt("Write your partnars name");

  var n =Math.random();
  n=n*100000;
  n=Math.floor(n);
  alert( name_1 + " have Infinite Love C><3 % for " + name_2);
  */

 </script> -->

   
   
    
</section>
 
</body> 
</html>






























</body>
</html>