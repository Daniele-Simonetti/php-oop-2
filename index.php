
<?php 
require_once __DIR__ . '/classes/UserType.php';
require_once __DIR__ . '/classes/UserPrime.php';



  $firstUser = new UserType('Daniele', 'Tester');
  $firstUser->setSconto($status);
  var_dump($firstUser);

  echo $firstUser->getFullName();
?>