<?php
if($_SERVER['REQUEST_METHOD'] =="POST"){
   echo $_POST['username']."<br/>";
  $allBrowsers=implode(" ", $_POST['browser']);
  echo $allBrowsers."<br/>";
  $arrbrowsers=explode(" ", $allBrowsers);
  foreach($arrbrowsers as $b){
    echo '<a href="">'.$b.'<a/>'."<br>";
  }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="username" ><br/>
<input type="checkbox" name="browser[]" value="Chrome">Chrome<br/>
<input type="checkbox" name="browser[]" value="FireFox">FireFox<br/>
<input type="checkbox" name="browser[]" value="Edge">Edge<br/>
<input type="submit" value="Add"><br/>
</form>