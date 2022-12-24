
<?php
session_start();
echo'<pre>';
var_dump($_SESSION);
echo'<pre>';
if(isset($_SESSION['page_count']) ){
    $_SESSION['page_count'] += 1;
    }else {
    $_SESSION['page_count'] =1;
    }
    var_dump($_SESSION);
    ?>

<!DOCTYPE html>
<?php
setcookie("name", "rowan", time()+60);
setcookie("course", "php", time()+60);
echo'<pre>';
var_dump($_COOKIE);
echo'<pre>';
?>
<html>
<body>
<h2> welcome</h2>
<?php
echo "Cookie set";
if(isset($_COOKIE["name"]) ){
echo "welcome" . $_COOKIE["name"] ."<br/   >";
}else 
echo "Not recognized"




?>
</body>
</html>