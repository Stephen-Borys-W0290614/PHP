<?php

//require_once('../model/Address.php');

//this class defines a customer object
class Films
{
 //   private $m_filmName; //int
   // private $m_filmDescription; //string
    private $m_actorID;
    private $m_actorFName;
    private $m_actorLName;
    private $m_actorLastUpdate;

    
    //$in_id <-integer
    //$in_fname <-string
    //$in_lname <-string
    //$in_address <-address object
    public function __construct($in_id, $in_fName, $in_lName, $in_lastUpdate)
    {
        $this->m_actorID = $in_id;
        $this->m_actorFName = $in_fName;
        $this->m_actorLName = $in_lName;
        $this->m_actorLastUpdate = $in_lastUpdate;

    }


    public function getID()
    {
        return ($this->m_actorID);
    }
    
    public function getFName()
    {
        return ($this->m_actorFName);
    }

    public function getLName()
    {
        return ($this->m_actorLName);
    }

    public function getLastUpdate()
    {
        return ($this->m_actorLastUpdate);
    }
    
    public function setID($in_id)
    {
        $this->m_actorID = $in_id;
    }


    public function setFName($in_fName)
    {
        $this->m_actorFName = $in_fName;
    }

    public function setLName($in_lName)
    {
        $this->m_actorLName = $in_lName;
    }

    public function setLastUpdate($in_lastUpdate)
    {
        $this->m_actorLastUpdate = $in_lastUpdate;
    }

}

?>
