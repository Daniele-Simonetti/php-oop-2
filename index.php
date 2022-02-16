<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito... -->

<?php 
require_once __DIR__ . '/classes/Users.php';
require_once __DIR__ . '/classes/Products.php';

try {
  $firstUser = new User('Daniele', 'Lanillotto', 'danisimo99.ds@gmail.com');
  echo $firstUser->getFullName();
  echo $firstUser->getEmail();
  var_dump($firstUser);
} catch (Exception $error) {
  echo $error->getMessage();
}
?>