<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("Car.php");
require_once("iCrashable.php");
class Lada extends Car implements iCrashable
{
    private $ugly;

    public function __construct($in_name,$in_owner,$in_mileage,$in_ugly)
    {
        parent::__construct( $in_name,$in_owner,$in_mileage);
        $this->ugly  = $in_ugly;
    }

    // Abstract class method
    public function driveFiftyMiles()
    {
        return"Tried to drive 50 miles. Opps! It broke down, cant go 50 miles. Sorry $this->owner";
    }

    // Interface method
    public function runIntoTree()
    {
        return "Hit a tree. You are safe for another few miles, lucky man $this->owner";
    }
}