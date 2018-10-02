<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="website designer, website developer, user experience designer, user interface designer, web designer, web developer">
    <meta name="description" content="Welcome to my Portfolio. Here you will see all my projects and join in my journey learning to code.">
    <title>OJ | Design &amp; Development</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/device_styles.css">
  </head>

  <body>

  <!--/// Header ///-->
  <header>

  <!--/// Logo Panel ///-->
    <div id="logo">
      <div class="wrapper">
        <h1>OJ Design &amp; Development</h1>
        <img src="https://scontent-dft4-1.xx.fbcdn.net/v/t1.0-9/16265191_10212168708559487_7165586354540799626_n.jpg?oh=748bb9eea9e171dcd4ff6941bd073519&oe=5916540D" alt="OJ | UI/UX Design &amp; Development">
      </div>
    </div>
  <!--/// Ends Logo Panel ///-->

  <!--/// Navigation Bar ///-->
    <div id="nav_bar">
      <div class="wrapper">
        <section class="nav">
          <nav>
            <a href="#about">About</a> <a href="#portfolio">Portfolio</a> <a href="#contact">Contact</a>
          </nav>
        </section>
      </div>
    </div>
  <!--/// Ends Navigation Bar ///-->

  </header>
  <!--/// Ends Header ///-->

  <!--/// About ///-->
  <div class="wrapper">
    <a id="about">
      <section id="about">
        <h1>About</h1>
        <p>My name is Olivia. Problem-solving is my specialty. Slowly but surely I&#39;m learning web design and development.</p>
        <img src="https://pbs.twimg.com/profile_images/505812773058514944/oc9k7o8e.jpeg" alt="OJ">
      </section>
    </div>
   </a>
   <!--/// Ends About ///-->

   <!--/// Portfolio ///-->
    <div class="wrapper">
      <a id="portfolio">
        <section id="portfolio">
          <h1>Portfolio</h1>
          <div class="polaroid">
            <a class="zeke" href="http://codepen.io/ojmarmo/full/GNyGQp/" target="_blank" title="zekeelliott"><img 	src="http://www.elevenwarriors.com/sites/default/files/styles/904x490/public/c/2016/01/67037_h.jpg?itok=Y3GsVoFI" alt="Ezekiel Elliott Tribute Page"></a>
            <p>Ezekiel Elliott Tribute Page</p>
          </div>
        </section>
      </div>
    </a>
    <!--/// Ends Portfolio ///-->

    <!--/// Contact ///-->
    <div class="wrapper">
      <a id="contact">
        <section id="contact">
          <h1>Contact Me</h1>
          <form method="post" action="mailer.php">
            <fieldset class="col1_left">
              <label>Name : <br>
                <input type="text" name="name" /></label><br>
              <label>Email Address : <br>
                <input type="email" name="email" /></label><br>
              <label>Phone Number : <br>
                <input type="tel" name="phone" /></label><br>
              <label>Message : <br>
                <textarea rows="3" name="message"></textarea></label><br><br>
              <input type="text" name="verify" class="verif_box" placeholder="Verify You're Human" required>
                <img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="Verification Image">
                <input type="submit" value="Send">
              </fieldset>
            </form>
            <p class="col1_right">Want to get in touch with me? Be it to request more info about myself or my experience, to ask for my resume, tips on how to solve life&#39;s problems, random questions about the universe or the meaning of life, feel free to shoot me a note. I promise to reply as soon as I can!</p>
          </section>
        </div>
      </a>
      <!--/// Ends Contact ///-->

      <!--/// Social //-->
      <div class="wrapper">
        <section id="social">
          <p>You can also find me here:</p>
          <figure>
            <a class="facebook" href="https://www.facebook.com/ojmarmo" target="_blank" title="facebook"><img src="images/facebook.png" alt="Facebook"></a>
            <a class="linkedin" href="https://www.linkedin.com/in/oliviamarmo/" target="_blank" title="linkedin"><img src="images/linkedin.png" alt="LinkedIn"></a>
            <a class="instagram" href="https://www.instagram.com/olivemarmolade/" target="_blank" title="instagram"><img src="images/instagram.png" alt="Instagram"></a>
            <a class="twitter" href="https://twitter.com/OJMarmo" target="_blank" title="twitter"><img src="images/twitter.png" alt="Twitter"></a>
            <a class="pinterest" href="https://www.pinterest.com/ojmarmo/" target="_blank" title="pinterest"><img src="images/pinterest.png" alt="Pinterest"></a>
          </figure>
        </section>
      </div>
      <!-- /// Ends Social //-->

      <!--/// Footer ///-->
      <footer>&copy; 2017 Olivia Marmo. All Rights Reserved.</footer>
      <!--/// Ends Footer ///-->

    </body>
  </html>
