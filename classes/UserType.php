<?php 
require_once __DIR__ . '/UserPrime.php';
require_once __DIR__ . '/UserStandart.php';
class UserType
{
  protected $name;
  protected $lastName;
  protected $sales;

  public function __construct($name, $lastName)
  {
    $this->name = $name;
    $this->status = $lastName;
  }
  /**
   * Get the value of status
   */ 
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   *
   * @return  self
   */ 
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  public function setSconto($status)
  {
    if ($status === 'Prime') {
      $this->sales = 30;
    } else if ($status === 'Standart') {
      $this->sales = 0;
    } 
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of lastName
   */ 
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * Set the value of lastName
   *
   * @return  self
   */ 
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  // get full name
  public function getFullName()
  {
    return $this->name . ' ' . $this->lastName;
  }
}
?>