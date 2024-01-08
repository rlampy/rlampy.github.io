<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="description" content="A sample website for student development">
<meta name="author" content="Ruth Lamprecht, Ph.D.">

<title>CIS 265 - PHP Welcome</title>
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
  <a href="contact.html">CONTACT</a>
  <a href="about.html">ABOUT</a>
  <a href="examplePHP.php" class="navbar-active">PHP</a>
  </div>
  <div class="navbar-collapse"><div class="dropdown">
    <button class="dropbtn"><i class="fas fa-bars"></i></button>
    <div class="dropdown-content">
    <a href="index.html">HOME</a>
    <a href="milestones.html">MILESTONES</a>
    <a href="grading.html">GRADING</a>
    <a href="contact.html">CONTACT</a>
    <a href="about.html">ABOUT</a>
    <a href="examplePHP.php" class="navbar-active">PHP</a>
    </div>
  </div></div>
</div>
<!--END NAV SECTION -->

<!--TITLE SECTION-->
<div class="sub-head">
    <div class="sub-first"><i class="fas fa-code fa-2x"></i> Welcome to PHP!</div>
    <div><p>A small showcase for using PHP</p></div>
</div>
<!--TITLE HEAD SECTION-->

<!--PHP SECTION-->
<div class="main">

<div class="main-block">
<div class="blockBorder">
  <?php
  echo "<h3>It's ".date("l, F jS").".<br>\r\n";
  echo "The time is ".date("g:ia").".</h3>\r\n";
  echo "<h3>Or at least that's our time, though ".
  "it may not be yours.</h3>\r\n";
  ?>
</div>
<div class="blockBorder">
  <p>Pedagogical Note: This page is static, and therefore will not change once displayed.</p>
</div>
<div class="blockBorder">
  <p>Click <a href="examplePHP_refresh.php">here</a> to view a dynamic page using PHP.</p>
</div>
</div>

</div>
<!--END PHP SECTION-->

<!--FOOTER SECTION -->
<div id="footer">2019-2020 Academic Year | CIS 265</div>
<!-- END FOOTER SECTION -->

</body>
</html>
