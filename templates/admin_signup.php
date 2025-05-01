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
  <link rel="stylesheet" href="{{ url_for('static', filename='signup_css.css') }}">
  
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

</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<!-- <div class="wrapper fadeInDown">
  <div id="formContent"> -->
    <!-- Tabs Titles -->
    <br/>
    <!-- Icon -->
    <!-- <div class="fadeIn first">
      <h3>Vamazon.com</h3>
    </div> -->
<!-- <br/>
    <form action="/create" method="post">
        <input type="text"  id="name"     name="name"      class="fadeIn second" placeholder="Enter Name" required>
        <input type="text" id="email"    name="email"     class="fadeIn second" placeholder="Enter Email" required>
        <input type="text"  id="tel"      name="tel"       class="fadeIn second" placeholder="Mobile Number">
        <input type="text"  id="password" name="password"  class="fadeIn third"  placeholder="Password">
        <input type="submit" class="fadeIn fourth" value="Sign Up">
        <p>Already have an account? <a href="/">Sign In</a></p>
    </form> -->

    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#"></a>
    </div> -->

  <!-- </div>
</div> -->


<div class="container">
        <div class="body d-md-flex align-items-center justify-content-between">
            <div class="box-1 mt-md-0 mt-5">
                <img src="https://images.pexels.com/photos/29590815/pexels-photo-29590815/free-photo-of-woman-walking-dog-on-forest-path-in-fall.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="" alt="">
            </div>
            <div class=" box-2 d-flex flex-column h-100">
                <div class="mt-5">
                    <p class="mb-1 h-1">Create Account.</p>
                    <p class="text-muted mb-2">Share your thouhts with the world form today.</p>
                    <div class="d-flex flex-column ">
                        <p class="text-muted mb-2">Continue with...</p>
                        <div class="d-flex align-items-center">
                              <form action="/admin_create" method="post">
                                    <input type="text"  id="name"     name="name"      class="fadeIn second" placeholder="Enter Name" required>
                                    <input type="text" id="email"    name="email"     class="fadeIn second" placeholder="Enter Email" required>
                                    <input type="text"  id="tel"      name="tel"       class="fadeIn second" placeholder="Mobile Number">
                                    <input type="text"  id="password" name="password"  class="fadeIn third"  placeholder="Password"></br>
                                   <input type="submit" class="fadeIn fourth " value="Sign Up">
                                  <div class="mt-3">
                                      <p class="fadeIn fourth mb-0 text-muted">Already have an account?</p>
                                      <a href="/"><div class="fadeIn fourth " id="log_in_button">Log in</div></a>
                                  </div>
                              </form>
                        </div>
                    </div>
         

                </div>
            </div>
        </div>
    </div>




</body> 
</html>