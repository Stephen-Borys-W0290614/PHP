<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class Shape
{
    protected $name;
    protected $sizeEdit;
    protected $newRadius;

    // Abstract methods
    abstract public function calculateArea();

    public function getSizeEdit()
    {
        return $this->sizeEdit;
    }

    public function __construct($in_name, $in_size_edit, $in_new_radius)
    {
        $this->name = $in_name;
        $this->sizeEdit = $in_size_edit;
        $this->newRadius = $in_new_radius;
    }



    public function getName()
    {
        return ($this->name);
    }

}

?>
