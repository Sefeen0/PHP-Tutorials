<?php
function active($n){
    global $page;
if(isset($n) && $n==$page){
echo 'class="active"';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($page))echo $page ?></title>
    <style>
        .active{
            color:red;
            font_weight:bold;
        }
    </style>
</head>
<body>
   <ul>
    <li ><a href="home.php" <?= active("home")?> >home</a></li>
    <li ><a href="about.php" <?= active("about")?>>about</a></li>
    <li ><a href="services.php" <?= active("services")?>>services</a></li>
   </ul> 
</body>
</html>