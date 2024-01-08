<?php
session_start();
if (!isset($_SESSION['pageRefreshCount']))
    $_SESSION['pageRefreshCount']=0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="30">
<meta name="description" content="A sample website for student development">
<meta name="author" content="Ruth Lamprecht, Ph.D.">

<title>CIS 265 - PHP Welcome Refresh</title>
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
  </div>
  </div>
</div>
<!--END NAV SECTION -->

<!--TITLE SECTION-->
<div class="sub-head">
    <div class="sub-first"><i class="fas fa-code fa-2x"></i> Welcome to PHP with Auto-refresh!</div>
    <div><p>A small showcase for using PHP with a 30-Second refresh on the date and time.</p></div>
</div>
<!--END TITLE SECTION-->

<!--MAIN SECTION-->
<div class="main">

<div class="main-block">
  <div class="blockBorder" id="welcome">
    <?php
    $greetingColor = "black";
    if ($_SESSION['pageRefreshCount'] != 0)
    {
        $colorPicker = rand(1, 100);
        if ($colorPicker > 75)
            $greetingColor = "red";
        else if ($colorPicker > 50)
            $greetingColor = "green";
        else if ($colorPicker > 25)
            $greetingColor = "blue";
        else
            $greetingColor = "maroon";
    }
    $_SESSION['pageRefreshCount'] = $_SESSION['pageRefreshCount'] + 1;
    echo "<p hidden id='colorChoice'>$greetingColor</p>";
    echo "<h3>It's ".date("l, F jS").".<br>\r\n";
    echo "The time is ".date("g:ia").".</h3>\r\n";
    echo "<h3>Or at least that's our time, ".
         "though it may not be yours.</h3>\r\n";
    ?>
  </div>
  <div class="blockBorder">
  <p>Pedagogical Note: The left block starts off using the default text 
  color of black to display all text. The page refreshes every 30 seconds, 
  and that block is displayed in one of four randomly chosen alternate 
  colors (red, green, blue or maroon) and the date and time are updated.</p>
  </div>
  <div class="blockBorder">
  <p>Click <a href="PHPwelcome.php">here</a> to view a static page using PHP.</p>
  </div>
  
</div>

</div>
<!--END MAIN SECTION-->

<!--FOOTER SECTION -->
<div id="footer">2019-2020 Academic Year | CIS 265</div>
<!-- END FOOTER SECTION -->

<script>
  var hiddenParagraph = document.getElementById("colorChoice")
  document.getElementById("welcome").style.color=hiddenParagraph.innerHTML;
</script>

</body>
</html>
