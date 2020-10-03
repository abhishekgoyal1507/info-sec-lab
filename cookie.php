<!-- Create a PHP program to create cookies and read cookies. -->
<?php
  $str = "";
  if($_POST){
    $str = $_POST['Name'];
  }
  $cookie_name = "User";
  $cookie_value = "$str";
  setcookie($cookie_name , $cookie_value , time() + 120, "/");
?>

<html>
  <body>
    <h1> Cookie Set using PHP </h1>
    <form method="post">
      Enter the username:
      <input type="text" name="Name">
      <input type="submit" name="Submit">
    </form>
    <?php
      if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie named '" . $cookie_name . "' is not set.";
      } else {
        echo "Cookie '".$cookie_name."' is set!<br>";
        echo "Cookie value is '". $_COOKIE[$cookie_name]."'";
      }
    ?>
  </body>
</html>