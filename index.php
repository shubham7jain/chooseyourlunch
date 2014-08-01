<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>

<!-- SIFR -->
<link rel="stylesheet" href="css/sifr.css" type="text/css" />
<script src="js/sifr.js" type="text/javascript"></script>
<script src="js/sifr-debug.js" type="text/javascript"></script>
<script src="js/sifr-config.js" type="text/javascript"></script>
<!-- Ends -->

</head>
<?php
	include("dbconnect.php");
	$link = mysql_connect($hostname, $username, $password);
	mysql_select_db("chooseyourlunch");
	$message = "";
	if($_POST["email"] !="" && $_POST["phone"] !="") {
		$message="Your Account is created. Thank you for being part of Choose Your Lunch !!";
		$query = "INSERT INTO CYL_USERS(FIRST_NAME, LAST_NAME, EMAIL, PHONE) values('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[phone]')";
		$result = mysql_query($query);
 	}
	mysql_close($link);
	?>
<body>
<!-- wrapper starts here -->
<div id="wrapper">
  <!-- header starts here -->
  <div id="header">
    <div class="logo">
      <h1>Choose Your Lunch</h1>
    </div>
    <div class="nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Register with us</a></li>
        <li><a href="howdoesitwork.php">How does it work?</a></li>
      </ul>
    </div>
  </div>
  <!-- header starts here -->
  <!-- container top bg starts here -->
  <div id="continertopbg">
    <!-- container bottom bg starts here -->
    <div id="continerbottombg">
      <!-- container holder starts here -->
      <div id="continer">
		<center>
			  <span style="color:red"> 
				<?php if($message!=""){ echo $message;} ?>
			</span>
			</center>
        <!-- blcok one starts here -->
        <div class="block1">
          <h1 class="head">Home</h1>
          <p>Welcome to Choose Your Lunch. We aim to make your daily lunch more exciting by offering host of cuisines to office goers. Choose Your Lunch will revolutionise the way you look forward to your lunch.</p>
        </div>
        <!-- blcok one ends here -->
        <!-- blcok two starts here -->
        <div class="block2">
          <div class="block2heder"> <span>Mauris erat ligula</span>
            <h1>Placerat sed eleifend</h1>
          </div>
          <p>Sodales sit amet elit. Aliquam ac libero quis lectus dictum lobortis eu auctor velit. Praesent ante lectus, sagittis sed lacinia venenatis, semper ut eros. Curabitur egestas urna bibendum nunc cursus euismod. Mauris eleifend nulla nec erat lacinia cursus.</p>
          <div class="blue">Proin viverra<br />
            odio et orci enim</div>
          <div class="green">
            <div class="greenheader">Morbi semper mi <br />
              sit amet</div>
            <p>Sed augue nulla, fermentum ac ullamcorper a, hendrerit volutpat nibh. Integer imperdiet purus in augue scelerisque vitae pellentesque lectus hendrerit.</p>
          </div>
        </div>
        <!-- blcok two ends here -->
      </div>
      <!-- container holder ends here -->
    </div>
    <!-- container bottom bg ends here -->
  </div>
  <!-- container top bg ends here -->
  <!-- summry block starts here -->
  <div class="summryblock">
    <!-- inner wrapper starts here -->
    <div class="innerwrapper">
      <div class="curlyopen"></div>
      <div class="summryblock1">
        <h2>What We Do</h2>
        <p>We offer fresh foods from the best food joints in the vicinity of your office in each of cuisine including Punjabi, Chinese, South Indian, Continental, Italian etc. You can choose the type of food you want according to your preferences.</p>
      </div>
      <div class="summryblock2">
        <h2>Register with us!</h2>
        <p>We are starting from 1st September in One Indiabulls Centre, Lower Parel, Mumbai. Click here for registration. We will be taking only fifty applications for first month.</p>
      </div>
      <div class="curlyclose"></div>
    </div>
    <!-- inner wrapper ends here -->
  </div>
  <!-- summry block ends here -->
  <!--  blue bg starts here -->
  <div class="blueContaner">
    <!-- inner wrapper starts here -->
    <div class="innerwrapper">
      <!-- blue left block starts here -->
      <div class="blueleftblock">
        <!-- text box starts here -->
        <div class="text">
          <h1>Vivamus dapibus lorem</h1>
          <p>Ac lacus lobortis eget suscipit ante imperdiet. Vivamus ac dui enim. Phasellus non ultrices velit. Nullam ultricies velit nec lacus porta a gravida erat lobortis. Mauris nunc sem, porta sit amet sagittis sed, consequat sed augue.</p>
        </div>
        <!-- text box starts here -->
        <!-- text box starts here -->
        <div class="text">
          <h1>Vivamus dapibus lorem</h1>
          <p>Ac lacus lobortis eget suscipit ante imperdiet. Vivamus ac dui enim. Phasellus non ultrices velit. Nullam ultricies velit nec lacus porta a gravida erat lobortis. Mauris nunc sem, porta sit amet sagittis sed, consequat sed augue.</p>
        </div>
        <!-- text box starts here -->
        <!-- text box starts here -->
        <div class="text">
          <h1>Vivamus dapibus lorem</h1>
          <p>Ac lacus lobortis eget suscipit ante imperdiet. Vivamus ac dui enim. Phasellus non ultrices velit. Nullam ultricies velit nec lacus porta a gravida erat lobortis. Mauris nunc sem, porta sit amet sagittis sed, consequat sed augue.</p>
        </div>
        <!-- text box starts here -->
      </div>
      <!-- blue left block ends here -->
      <!-- blue left block starts here -->
      <div class="bluerightblock">
        <div class="slid">
          <div class="tabslidholder">
            <div class="tagHolder">
              <div class="tagtext">congue</div>
              <div class="arrow"></div>
            </div>
            
            
             <div class="tagHolder">
              <div class="tagtext">luctus</div>
              <div class="arrow"></div>
            </div>
            
            
            
             <div class="tagHolder">
              <div class="tagtext">Praesent</div>
              <div class="arrow"></div>
            </div>
            
            
            
             <div class="tagHolder">
              <div class="tagtext">Mauris</div>
              <div class="arrow"></div>
            </div>
            
            
            
             <div class="tagHolder">
              <div class="tagtext">Curabitur</div>
              <div class="arrow"></div>
            </div>
          </div>
          <div class="slidheaer">Nam risus tortor, mattis ac sodales at, iaculis eget lorem.</div>
          <p>Mauris erat ligula, placerat sed eleifend quis, sodales sit amet elit. Aliquam ac libero quis lectus dictum lobortis eu auctor velit. Praesent ante lectus, sagittis sed lacinia venenatis, semper ut eros. Curabitur egestas urna bibendum nunc cursus euismod.</p>
          <div class="siderstrip">
            <div class="btnleft"><a href="#"><img src="images/leftarrow.jpg" width="33" height="35" alt="" /></a></div>
            <div class="btnright"><a href="#"><img src="images/rightarrow.jpg" width="33" height="35" alt="" /></a></div>
          </div>
        </div>
        <div class="card">
          <h1>Cras dignissim </h1>
          <div class="cardlist">
            <ul>
              <li>Vivamus ac dui enim<br />
                <p>Suspendisse aliquam dui ut urna </p>
              </li>
              <li> Cras dolor arcu<br />
                <p>Pellentesque venenatis, orci quis </p>
              </li>
              <li>Ut neque orci
                <p>Vivamus sed sapien libero tibendum, </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- blue left block ends here -->
    </div>
  </div>
  <!-- blue bg ends here -->
</div>
<!-- wrapper ends here -->
</body>
</html>
