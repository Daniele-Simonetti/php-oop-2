
<?php 
require_once __DIR__ . '/classes/UserType.php';
require_once __DIR__ . '/classes/UserPrime.php';
require_once __DIR__ . '/classes/UserStandart.php';



  $firstUser = new UserType('Daniele', 'tester');
  $firstUser->setSconto($firstUser->status);
  var_dump($firstUser);

  echo $firstUser->getFullName();
  echo $firstUser->sales;
?>