<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>Accessible Web Schools</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<link href="aws.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <a href="#skiptocontent" id="skipping">Skip to main content</a>
    <?php include('navbar.php'); ?>
    
<section class="section" id="skiptocontent">
    <h1>
        Welcome to Accessible Web Schools! 
    </h1>
   
     <p>
        AWS is an e-learning website designed to provide best practise as well as providing resources that can help developers understand the WCAG guidelines better whilst raising awareness of the guidelines. 
    </p>
    <p>
        Content provided on the website will be based upon the VARK learning style theory, which means that the content on this website accommodates all learning styles or multi-modal learning styles.
    </p>
    <p>
        All work and resources provided are for educational purposes only.
    </p>
    
    <script>
// this function just checks if the browser size has changed
checkBrowserSize();
$(window).resize(function() {
  checkBrowserSize();
});
          
  function checkBrowserSize() //this one checks the size of the browser and switches to the mobile view when the display resolution hits 1225 (the size at which the desktop view gets changed by bootstrap)
  {
    var w = window.outerWidth;
    var h = window.outerHeight;

    document.getElementById("width").innerHTML = w;
              
  }
 
</script>
 
</section>
</body>
</html>
