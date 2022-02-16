
<?php 
require_once __DIR__ . '/classes/UserType.php';
require_once __DIR__ . '/classes/Products.php';


try {
  // $firstUser = new User('Daniele', 'Lanillotto', 'danisimo99.ds@gmail.com');
  $firstUser = new UserType('Daniele', 'Amato', 'Prime');
  var_dump($firstUser);

  echo $firstUser->getFullName();


} catch (Exception $error) {

  echo $error->getMessage();

}
?>