<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("shape.php");
require_once("iResizeable.php");
class triangle extends shape implements iResizeable
{



    private $area;
    private $height;
    protected $base;
    protected $newArea;
    public $newHeight;

    public function __construct($in_name, $in_base, $in_height, $in_area, $in_size_edit)
    {
        parent::__construct( $in_name);
        $this->base = $in_base;
        $this->height = $in_height;
        $this->area = $in_area;

        if ($in_size_edit != ""){
            $this->sizeEdit = $in_size_edit;
        }
    }

    // Abstract class method
    public function calculateArea()
    {
        if(!$this->sizeEdit) {
            $this->area = ($this->height * $this->base / 2);
            return round($this->area,2);
        }
        else{
            if($this->sizeEdit == 100 || $this->sizeEdit == ""){
                $this->area = ($this->height * $this->base / 2);
                $newArea = $this->area;
                $newArea = round($newArea,2);
                return $newArea;
            }
            elseif($this->sizeEdit > 100){
                $this->area = ($this->height * $this->base / 2);
                $newArea = ($this->area * ($this->sizeEdit / 100));
                $this->newArea = $newArea;
                $newArea = round($newArea,2);
                return $newArea;
            }
            elseif($this->sizeEdit <100){
                $this->area =($this->height * $this->base) / 2;
                $newArea = ($this->area - ($this->area * ($this->sizeEdit / 100)));
                $this->area = $newArea;
                $newArea = round($newArea,2);
                return $newArea;
            }
        }

    }


    // Interface method
    public function reSize()
    {
        if ($this->sizeEdit == 100 || $this->sizeEdit == null)
        {
            return round($this->height, 3, PHP_ROUND_HALF_DOWN);
        }
        else
        {
            $this->newHeight = ($this->newArea * 2) / $this->base;
            return round($this->newHeight, 3, PHP_ROUND_HALF_DOWN);
        }
    }
}