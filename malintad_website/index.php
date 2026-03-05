<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <title>My Portfolio</title>
 
 <link rel="stylesheet" href="style.css"/>
 <link rel="icon" type="image/png" href="logo.png">


</head>


<body>
 
 <div class="hero">
  <div class="hero-container">

    <h1 class="hero-text">
      <span class="hello">Hello</span>, I'm<br>
      <span class="pangalan">Aedrian Malintad</span>
    </h1>

    <img src="profile.jpg" class="profile-img" alt="Aedrian Malintad">

  </div>
</div>

<?php include('includes/nav.php');?>


 <section class="about" id="about">

    <h3 class="title">About Me</h3><br>
    <a>I'am passionate about technology and eager to learn how digital tools shaped the world. I enjoy exploring new system, improving my skills and applying what I learned through hands-on projects and creativity</a>

 </section>


<section class="hobby" id="hobbies">

    <h3 class="title">Hobbies or Interest</h3><br>
    <ul>
        <li>Sketching</li>
        <li>Fishing</li>
        <li>Latte Art</li>
        <li>Watching Movies</li>
        <li>Mobile Gaming</li>
        <li>Upskilling</li>
    </ul>
 
</section>


<section class="skill" id="skill">

    <h3 class="title">Skills</h3><br>
    <ul>
        <li>Html</li>
        <li>CSS</li>
        <li>PHP</li>
    </ul>
    
</section>

<?php include('includes/activity.php'); ?>

<section class="contact" id="contact">

    <h3 class="title">Contact Information</h3>
    
    <a>For inquiries, you can contact me:</a><br>
    <a>Email: aedrian.malintad@domain.com</a><br>
    <a>FB: <a href='https://web.facebook.com/aedrian.malintad.03' target="_blank" class="fb-link"> Aedrian Malintad</a></a><br>
    <a>Phone: (000) 999-666</a></p>

 </section>

<?php include('includes/footer.php'); ?>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
