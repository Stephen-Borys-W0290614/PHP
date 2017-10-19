<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("shape.php");
require_once("iResizeable.php");


class circle extends shape implements iResizeable
{
    public $circle_Area;
    public $radius;
    public $newRadius;
    protected $sizeEdit;
    protected $newArea;

    public function __construct($in_name,$in_radius, $in_circle_Area, $in_size_edit)
    {
        parent::__construct( $in_name);
        $this->radius = $in_radius;
        $this->circle_Area  = $in_circle_Area;

        if($in_size_edit != ""){

            $this->sizeEdit = $in_size_edit;
        }
    }

    // Abstract class method
    public function calculateArea()
    {
        if(!$this->sizeEdit) {
            $this->circle_Area = (round(3.14159 * ($this->radius * $this->radius), 2));
            return "$this->circle_Area";
        }
        else{
            if($this->sizeEdit == 100 || $this->sizeEdit == ""){
                $this->circle_Area = (round(3.14159 * ($this->radius * $this->radius), 2));
                $newArea = $this->area;
                $newArea = round($newArea, 2);
                return ($newArea);
            }
            else if ($this->sizeEdit > 100)
            {
                $this->circle_Area = (round(3.14159 * ($this->radius * $this->radius), 2));
                $newArea = ($this->circle_Area * ($this->sizeEdit / 100));
                $this->newArea = $newArea;
                $newArea = round($newArea,2);
                return $newArea;
            }
            else if ($this->sizeEdit < 100)
            {
                $this->circle_Area = (round(3.14159 * ($this->radius * $this->radius), 2));
                $newArea = ($this->circle_Area - ($this->circle_Area * ($this->sizeEdit / 100)));
                $this->newArea = $newArea;
                $newArea = round($newArea,2);
                return $newArea;
            }

        }

    }


    public function reSize(){

            if ($this->sizeEdit == 100 || $this->sizeEdit == null)
            {
//                $this->newR = sqrt($this->area / M_PI);
                return round($this->radius, 3, PHP_ROUND_HALF_DOWN);
            }
            else
            {
                $this->newRadius = sqrt($this->newArea / M_PI);
                return round($this->newRadius, 3, PHP_ROUND_HALF_DOWN);
            }
        }


    // Interface method
    //public function runIntoTree()
    //{
    //    return "Hit a tree. This is the end of $this->owner's $this->name!";
    //}
}