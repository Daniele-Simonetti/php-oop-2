
<?php 
require_once __DIR__ . '/classes/Users.php';
require_once __DIR__ . '/classes/Products.php';

$firstUser = new UserType('Daniele', 'Amato');
var_dump($firstUser)

// try {
//   $firstUser = new User('Daniele', 'Lanillotto', 'danisimo99.ds@gmail.com');

//   $firstProduct = new Product('penna a sfera', 10);

//   // echo $firstUser->getFullName();

//   // echo $firstUser->getEmail();

//   var_dump($firstUser);
//   var_dump($firstProduct);

// } catch (Exception $error) {

//   echo $error->getMessage();

// }
?>