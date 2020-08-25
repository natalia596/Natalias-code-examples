<?php include 'db.php'?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>Edit your profile</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
	
		<link href="aws.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <a href="#skiptocontent" id="skipping">Skip to main content</a>
 <?php include('navbar.php'); ?>
 
 <div class="acctfrm" id="desk-form">
     <form action="" method="post" id="skiptocontent">
    <div class="editprofile"> 
        <H1 class="Hedit">Edit your profile:</H1>

        <?php
        
        $userdata = edituserdata();
        foreach($userdata as $data):?>
        <label class="editName" for="name">First name:</label>
        <input class="editacctlbl" type="text" name="Name" value="<?php echo $data['name']; ?>">
    

        <label class="editEmail" for="email">Email:</label>
        <input class="editacctlbl" type="text" name="Email" value="<?php echo $data['email']; ?>">
        
      
        <label class="euser" for="username">Username:</label>
        <input class="editacctlbl" type="text" name="Username" value="<?php echo $data['username']; ?>">

        
        <label class="epass" for="password">Password:</label>
        <input class="editacctlbl" type="password" name="Password" value="<?php echo $data['password']; ?>">
      
        <?php endforeach;?>
        <button class="editbttn" value="confirmEdit" name="update">Update info</button>
        
        <input type="button"class="editbttn" value="Logout" onclick="window.location.href = 'logout.php';">
        <button class="editbttn" value="delacct" name="delete">Delete account</button>
    
        </form>
       
        </div>

</body>
</html>
