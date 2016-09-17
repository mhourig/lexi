<!DOCTYPE html>
<html>
<head>
<title>lexi-lang</title>

<meta charset="UTF-8">
<meta http-equiv="Refresh" content="4">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
    
<!-- 
ABOUT: lexi-lang is a word scrambling script. It is part of larger project called LEXI that scrambles words & images in an attempt to 'bisociate' ideas through language.
-->

<?php include_once 'php/parse10000.php'; ?>

</head>

<body>
    
<div id = "sentence"> 
  
<div class ="word">
<h3><?php echo $tenWordArray[0] ?></h3>
</div>
<div class ="word">
<h3><?php echo $tenWordArray[1] ?></h3>  
</div>
<div class ="word">
<h3><?php echo $tenWordArray[2] ?></h3> 
</div>
<div class ="word">
<h3><?php echo $tenWordArray[3] ?></h3> 
</div>
<div class ="word">
<h3><?php echo $tenWordArray[4] ?></h3> 
</div>
<div class ="word">
<h3><?php echo $tenWordArray[5] ?></h3>  
</div>
<div class ="word">
<h3><?php echo $tenWordArray[6] ?></h3> 
</div>
<div class ="word">
<h3><?php echo $tenWordArray[7] ?></h3> 
</div>
    
</div>
 
</body>
    
</html>