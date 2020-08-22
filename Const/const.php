<!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
//we can access a constant from inside the class by using the self keyword 



class refat {
  const NAME = "Refat";
  public function hello() {
    echo self::NAME;
  }
}

$tanvir = new refat();
$tanvir->hello();
?>

</body>
</html>