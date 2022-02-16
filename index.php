
<?php 
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserPrime.php';
require_once __DIR__ . '/classes/UserStandart.php';



  $firstUser = new User('Daniele', 'Prime');
  $firstUser->setSconto($firstUser->status);
  var_dump($firstUser);
  echo $firstUser->getFullName();

  $secondUser = new User('heyhey', 'Standart');
  $secondUser->setSconto($secondUser->status);
  var_dump($secondUser);
  echo $secondUser->getFullName();
?>