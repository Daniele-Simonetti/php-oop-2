<?php 
class User
{
  protected $name;
  protected $lastName;
  protected $email;
  protected $phoneNumber;
  protected $sales = 0;

  public function __construct($name, $lastName, $email)
  {
    $this->name = $name;
    $this->lastName = $lastName;
    $this->email = $email;
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

  public function getFullName()
  {
    return $this->name . ' ' . $this->lastName;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of phoneNumber
   */ 
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  /**
   * Set the value of phoneNumber
   *
   * @return  self
   */ 
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;

    return $this;
  }
}
?>