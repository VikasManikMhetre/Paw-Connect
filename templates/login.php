<head>
  <?php 
    session_start();
    error_reporting(E_ERROR | E_PARSE);
?>
<!Doctype html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet"  href="css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


  <link rel="stylesheet" href="{{ url_for('static', filename='login_css.css') }}">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQ0HRfSuC5I+4/yekEVnmIQLA4WbVZY72qUk5zK3n9NT1BsWuP9W2J+0U" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" >
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon"  href="images/icon.png">
<title>Paw Connect | </title>

<!------ Include the above in your HEAD tag ---------->
</head>

<body>
                {% if login_message %}
                    <div class="alert">
                        {{ login_message }}
                    </div>
                {% endif %}
<!-- <div class="wrapper fadeInDown">
  <div id="formContent"> -->
    <!-- Tabs Titles -->
    <!-- <br/> -->
    <!-- Icon -->
    <!-- <div class="fadeIn first">
      <h3>PAW </h3>
    </div>
<br/> -->
    <!-- Login Form -->
    <!-- <form action="/api_login_check" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <br/><br/>
      <input type="submit" class="fadeIn fourth" value="Sign In"><br/><br/>
      <p>Don't have an account? <a href="/signup.php">Signup</a></p>
    </form> -->

   
    <div class="container">
        <div class="body d-md-flex align-items-center justify-content-between">
            <div class="box-1 mt-md-0 mt-5">
                <img src="https://images.pexels.com/photos/29590689/pexels-photo-29590689/free-photo-of-woman-playing-with-dog-in-forest-path.jpeg"
                    class="" alt="">
            </div>
            <div class=" box-2 d-flex flex-column h-100">
                <div class="mt-5">
                    <p class="mb-1 h-1">Glad You'r back !</p>
                    <p class="text-muted mb-2">Share your thouhts with the world form today.</p>
                    <div class="d-flex flex-column ">
                        <p class="text-muted mb-2">Continue with...</p>
                        <div class="d-flex align-items-center">
                            <form action="/api_login_check" method="POST">
                            <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
                            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                            <input type="submit" class="fadeIn fourth" value="Log In"><br/><br/>
								

                            <div class="mt-3">
               
									<p class="fadeIn fourth mb-0 text-muted">Don't have account? No problem click below to create:</p>
									<a href="/signup.php"><div class="fadeIn fourth " id="log_in_button">Sign Up !</div></a>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
            <span class="fas fa-times"></span>
        </div>
    </div>


    <p>
        <?php 
            echo $_SESSION["loginmessage"]? $_SESSION["loginmessage"]:"";
            $_SESSION["loginmessage"]=null;
        ?>
    </p>
    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#"></a>
    </div> -->

  <!-- </div>
</div> -->

</body> 
</html>