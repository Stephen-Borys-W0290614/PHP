<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("shape.php");
class rectangle extends shape //implements iCrashable
{
    private $length;
    private $width;
    private $area;

    public function __construct($in_name,$in_length, $in_width, $in_area)
    {
        parent::__construct( $in_name);
        $this->length = $in_length;
        $this->width = $in_width;
        $this->area  = $in_area;
    }

    // Abstract class method
    public function calculateArea()
    {
        $this->area = ($this->length * $this->width );
        return "$this->area";

    }

    // Interface method
    //public function runIntoTree()
    //{
    //    return "Hit a tree. This is the end of $this->owner's $this->name!";
    //}
}