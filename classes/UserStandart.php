<?php 
require_once __DIR__ . '/User.php';
  class UserStandart extends User
  {
    public $status = 'Standart';
    
    public function __construct($name, $lastName, $status)
    {
      parent::__construct($name, $lastName);
      $this->status = $status;
      $this->setSconto($status);
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
      if ($status === 'Standart') {
        $this->sales = 10;
      }
    }
  }
?>