<?php 
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    
    <title>Accessible Web Schools</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
	
	<link href="aws.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<a href="#skiptocontent" id="skipping">Skip to main content</a>
<?php include 'navbar.php'
?>
<section id="skiptocontent">
<h2 class="srchHeading">Search results:</h2>
<div>  
<?php

    $searchresults = searchMe();
    
    if($searchresults != 0)
    {
            foreach($searchresults as $search)
        {
            echo $search['keyword'];
            echo '<a href="' . $search['link'] . '">' . $search['link'] . '</a>';
        }
    }
    else
    {
        echo 'Sorry, no results found!';
    }
    ?>
    </div>
  </section>
    </body>