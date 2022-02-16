<?php 
require_once __DIR__ . '/UserType.php';
  class UserPrime extends UserType 
  {
    public $status = 'Prime';
    public function __construct($name, $lastName, $status)
    {
      parent::__construct($name, $lastName);
      $this->status = $status;
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
  }
?>