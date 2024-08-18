<?php 

session_start(); 

if (!isset($_SESSION['idno'])){
    header("Location: index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="home6.css" />
    <script src="../custom-scripts.js" defer></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  </head>
  <body>
    <main>

      <header>
        <nav class="nav container"> 
          <h3 class="nav_logo"><a href="#">SLSU Tayabas City Campus</a></h2> 
          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <li><a href="home.php" class="nav_link"><i class="uil uil-estate"></i>Home</i></a></li>
            <li><a href="enrollnow.php" class="nav_link"><i class="uil uil-calendar-alt"></i></i>Pre-Enroll Now</i></a></li>
            <li><a href="selectuser.php" class="nav_link"><i class="uil uil-signout"></i></i>Logout</i></a></li>
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
      <section class="hero">
        <div class="row container">
          <div class="column">
            <h2>Mission </h2>
            <p>The university is committed to develop a sustained culture of delivering quality services and undertaking continuous interdisciplinary innovations in instruction, research and extension in the fields of agriculture, science, engineering, technology, allied health and medicine, human security, business, and the arts anchored to the development needs of Quezon province and the CALABARZON Region and national and global development goals.</p><br>
            <h2>Vision</h2>
            <p>Southern Luzon State University as an academic hub of excellent curricular programs, transdisciplinary researches, and responsive extension services that contributes to knowledge production, social development, and economic advancement of Quezon province and the CALABARZON Region.</p>
            <div class="buttons">
              <button class="btn">Read More</button>
              <button class="btn">Contact Us</button>
            </div>
          </div>
          <div class="column">
             <div class = "slide">
                  <img src="images/course.png" alt="heroImg" class="hero_img" >
                </div>
              </div>
            </div>
            <img src="images/bg-bottom-hero.png" alt="" class="curveImg" />
          </div>
        </div>
              
      </section>
      
    </main>

    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");

      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
    <script type = "text/javascript"> 

    window.history.forward();
    </script>
  </body>
</html>