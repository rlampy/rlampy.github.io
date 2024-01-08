<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="description" content="A sample website for student development">
<meta name="author" content="Ruth Lamprecht, Ph.D.">

<title>CIS 265 - PHP Test of POST</title>
<link rel="icon" href="images/AmboxGlobe.png" />

<link href="style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>

<!-- NAV SECTION -->
<div class="navbar">
  <div class="navbar-sitename">CIS 265 <em>Web Design and E-Commerce</em></div>
  <div class="navbar-list">
  <a href="index.html">HOME</a>
  <a href="milestones.html">MILESTONES</a>
  <a href="grading.html">GRADING</a>
  <a href="contact.html" class="navbar-active">CONTACT</a>
  <a href="about.html">ABOUT</a>
  <a href="examplePHP.php">PHP</a>
  </div>
  <div class="navbar-collapse"><div class="dropdown">
    <button class="dropbtn"><i class="fas fa-bars"></i></button>
    <div class="dropdown-content">
    <a href="index.html">HOME</a>
    <a href="milestones.html">MILESTONES</a>
    <a href="grading.html">GRADING</a>
    <a href="contact.html" class="navbar-active">CONTACT</a>
    <a href="about.html">ABOUT</a>
    <a href="examplePHP.php">PHP</a>
    </div>
  </div></div>
</div>
<!--END NAV SECTION -->

<!--TITLE SECTION-->
<div class="sub-head">
    <div class="sub-first"><i class="fas fa-laptop-code fa-2x"></i> PHP POST Protocol Test</div>
    <div><p>A small showcase for using the POST protocol</p></div>
</div>
<!--END TITLE SECTION-->

<!--PHP SECTION-->
<div class="main">

<div class="main-block">
<div class="blockBorder">
  <?php
  echo "<h4>The following values were submitted:</h4>";
  echo "<p><em>Name:</em> $_POST[name]</p>";
  echo "<p><em>Subject:</em> $_POST[subject]</p>";
  echo "<p><em>Email:</em> $_POST[email]</p>";
  echo "<p><em>Message:</em> $_POST[message]</p>";
  ?>
</div>
<div class="blockBorder">
  <p>Note that the contact form is set up for practice and not for true 
    functionality. To contact the professor, the email listed on the 
    CONTACT page is valid.</p>
</div>
</div>

</div>

<!--FOOTER SECTION -->
<div id="footer">2019-2020 Academic Year | CIS 265</div>
<!-- END FOOTER SECTION -->

</body>
</html>
