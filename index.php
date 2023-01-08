
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width-device-width, initial-scale=1.0">
     <title>Blog</title>
     <!--CUSTOM STYLESHEET-->
     <link rel="stylesheet" href="./style.css">
     <!--ICONSCOUT CDN-->
     <link rel ="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
      <!--Google Fonts-->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
      <nav>
          <div class="container nav_container">
               <a href="index.php" class="nav__logo">Blog</a>
               <ul class="nav__items">
                   <li><a href="blog.php">Blog</a></li>
                   <li><a href="about.php">About</li>
                   <li><a href="services.php">Services</li>
                   <li><a href="contact.php">Contact</li>
                   <li><a href="signin">SignIn</li>
                   <li class="nav__profile">
                       <div class="avatar">
                            <img src="./images/avatar.jpg" alt="image profil"/>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="signout.php">SingOut</a></li>
                            </ul>
                       </div>
                   </li>

            
               </ul>
               <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
               <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
          </div>
      </nav>

      <!--==================== END OF NAV ===============-->
</body>
</html>
