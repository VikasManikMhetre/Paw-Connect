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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet"  href="css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link rel="stylesheet" href="{{ url_for('static', filename='blogs_css.css') }}">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQ0HRfSuC5I+4/yekEVnmIQLA4WbVZY72qUk5zK3n9NT1BsWuP9W2J+0U" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Spacific_user_php</title>
</head>
<body style="background-image: https://www.canva.com/design/DAGYbZtVfu4/rmFiXYOMx1Qp4VIbnOFaVw/view?utm_content=DAGYbZtVfu4&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=hec52a0c390">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#" aria-disabled="true"><label style="color:rgb(160, 231, 245)">Paw Connect</label></a>
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
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><label style="color:rgb(160, 231, 245)">{{ user_name }}</label></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" tabindex="-1" aria-disabled="true"><label style="color:gray">Log out</label></a>
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



<div class="container fadeIn first">
    <!-- Blog Post 1 -->
    <div class="post">
        <h2 class="color_font fadeIn first">Top 10 Dog Breeds for Families </h2>
        <div class="fadeIn fourth">
         

Choosing the right dog breed for your family is essential for creating a happy and harmonious household. The ideal family dog is friendly, gentle, and adaptable to your lifestyle. Whether you have young children, an active family, or a quieter home, these breeds are known for their compatibility with family life.  
<br><br>
<h4> 1. Labrador Retriever  </h4>
Labradors are one of the most popular family dogs worldwide. They are friendly, patient, and playful, making them perfect for families with children. Labradors are intelligent and easy to train, thriving in active households where they can get plenty of exercise.  
<br><br>
<h4> 2. Golden Retriever  </h4> 
Golden Retrievers are gentle, loyal, and affectionate. Their patience and love for people, especially kids, make them ideal companions. Golden Retrievers are also highly trainable and enjoy outdoor activities, making them great for active families.  
<br><br>
<h4> 3. Beagle   </h4>
Beagles are small, cheerful, and curious dogs that love being part of a family. They are good with children and have a friendly demeanor. Their energy levels make them ideal for families who enjoy playtime and outdoor adventures.  
<br><br>
<h4> 4. Bulldog   </h4>
Bulldogs are calm, easygoing, and great with kids. Their sturdy build makes them tolerant of playful children, and their laid-back personality suits families who prefer a more relaxed pet. They require less exercise compared to some other breeds but love attention and affection.  
<br><br>
<h4> 5. Poodle   </h4>
Poodles come in three sizes—standard, miniature, and toy—making them suitable for various family needs. They are intelligent, friendly, and hypoallergenic, which is ideal for families with allergies. Poodles enjoy playtime and are easy to train, making them versatile family companions.  
<br><br>
<h4> 6. Boxer   </h4>
Boxers are energetic, playful, and protective. They are excellent with children and have a natural ability to form strong bonds with their families. Their protective instincts and loyal nature make them wonderful watchdogs as well as affectionate companions.  
<br><br>
<h4> 7. Cavalier King Charles Spaniel  </h4> 
This small breed is gentle, loving, and easy to care for. Cavalier King Charles Spaniels are great for families with young children or those who live in apartments. They enjoy cuddling and playing, making them excellent companions for quieter households.  
<br><br>
<h4> 8. Bernese Mountain Dog   </h4>
Bernese Mountain Dogs are large, gentle giants with a calm and affectionate nature. They are incredibly patient with children and love being part of family activities. Their thick fur makes them better suited for cooler climates.  
<br><br>
<h4> 9. Collie   </h4>
Collies are intelligent, loyal, and protective. Known for their gentleness with children, Collies thrive in families where they receive plenty of attention and mental stimulation. Their herding instincts make them natural caregivers, ensuring they keep an eye on family members.  
<br><br>
<h4> 10. Shih Tzu   </h4>
Shih Tzus are small, affectionate, and adaptable. They enjoy being around people and are well-suited for families living in smaller spaces. These dogs are gentle with kids and thrive in a loving, indoor environment.  
<br><br>
<u> Conclusion</u>: 

When choosing a family dog, consider factors like the breed’s temperament, energy level, and compatibility with your lifestyle. Each breed listed above offers unique qualities that make them wonderful additions to a family. With the right care and love, your furry friend will bring endless joy and loyalty to your home.  
     <br><br>
<a href="/blog_1_php"><button class="btn btn-secondary">Why Dogs Are Man's Best Friend</button></a>
<a href="/blog_3_php"><button class="btn btn-secondary">How to Train Your Puppy: A Step-by-Step Guide</button></a>
<a href="/blog_4_php"><button class="btn btn-secondary">3 Things Your Dog Will Love</button></a>

        </div>
    </div>
</div>



    </div>
</body>
</html>