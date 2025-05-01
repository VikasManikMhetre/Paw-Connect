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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <!-- Google fonts end -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet"  href="css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link rel="stylesheet" href="{{ url_for('static', filename='home_page.css') }}">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQ0HRfSuC5I+4/yekEVnmIQLA4WbVZY72qUk5zK3n9NT1BsWuP9W2J+0U" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Paw Connect Home page</title>


    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background: #56baed;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            font-size: 1.5rem;
            color: #56baed;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #56baed;
            color: white;
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2rem;
            }
        }
    </style>



</head>
<body>
    
    <!-- Bootstrap CSS -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#" aria-disabled="true"><label style="color:rgb(160, 231, 245)">Paw Connect </label></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home.php"><label style="color:gray">Home</label></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/book_appointment.php"><label style="color:gray">Book Appointment</label></a>
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
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><label style="color:rgb(160, 231, 245)">{{ user_name }}</label></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" tabindex="-1" aria-disabled="true"><label style="color:gray">Log out</label></a>
                    </li>
                </ul>
                <form class="d-flex" action="/search" method="POST">
                    <input class="form-control me-2" type="search" name="query" style="background-color: rgb(160, 231, 245);" placeholder="{{not_searched}}" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>
    <div id="back_screen"> 

    <!-- Bootstrap Bundle with Popper (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <div class="hero-text">
            Welcome to Paw Connect <br>
            your trusted platform for seamless pet care! 
            Book veterinary appointments, grooming sessions, and wellness checkups effortlessly. 
            Tailored for pet lovers, Paw Connect ensures your furry friend's health and happiness are just a click away.
            Join us in creating a better life for your pets today!
        </div>

    </div>


<div class="container">
    <div class="grid">
        <div class="card">
            <h2>About Us</h2>
            <p>
Your trusted companion in ensuring the health and happiness of your furry friends. We are a comprehensive, web-based platform designed to revolutionize pet dog clinic operations while providing an unmatched experience for pet owners and clinics alike.

At Paw Connect, we understand that your dog is more than a pet – they’re family. That’s why we’ve built a seamless and user-friendly platform that bridges the gap between pet parents and top-tier veterinary care.
<br><br>
Our Mission
We aim to simplify and enhance the journey of pet healthcare, ensuring every wagging tail receives the care and attention it deserves. From booking appointments to keeping track of medical history, we ensure peace of mind for pet owners, while enabling clinics to operate efficiently.


One-Stop Information Hub: Find everything you need, from clinic contact details and location to statistics showcasing the impact we’ve made.


</p>
        </div>
        <div class="card">
            <h2>Services</h2>
            <p>What We Offer
Effortless Appointment Scheduling: Say goodbye to the hassle of long calls and manual scheduling. With Paw Connect, booking an appointment for your dog is just a few clicks away.
Comprehensive Medical Records: Keep track of your pet’s health journey with detailed appointment history, prescriptions, and insights from doctors.<br><br> All your pet’s medical records in one place!
Expert Advice at Your Fingertips: Dive into a world of knowledge with our curated blogs From skilled veterinarians to dedicated caretakers, our team is here to ensure the best care for your furry family members.</p>
        </div>
        <div class="card">
            <h2>Contact Us</h2>
            <p>Address: 123 Pet Lane, Animal Town<br>Phone: (123) 456-7890<br>Email: info@pawclinic.com</p>
        </div>
    </div>
</div>

<footer>
    <p> Paw Clinic. All rights reserved.</p>
</footer>


</body>
</html>