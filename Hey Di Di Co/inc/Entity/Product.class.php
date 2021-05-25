<?php

class Product {
    private $name;
    private $weight;
    private $weightMeasure;
    private $length;
    private $lengthMeasure;
    private $width;
    private $widthMeasure;
    private $height;
    private $heightMeasure;

    function __construct(string $name, float $weight, string $weightMeasure) {
        $this->name = $name;
        $this->weight = $weight;
        $this->weightMeasure = $weightMeasure;
    }

    function getName() : string {
        return $this->name;
    }

    function getWeight() : float {
        return $this->weight;
    }

    function getWeightMeasure() : string {
        return $this->weightMeasure;
    }

    function getLength() : float {
        return $this->length;
    }

    function getLengthMeasure() : string {
        return $this->lengthMeasure;
    }

    function getWidth() : float {
        return $this->width;
    }

    function getWidthMeasure() : string {
        return $this->widthMeasure;
    }

    function getHeight() : float {
        return $this->height;
    }

    function getHeightMeasure() : string {
        return $this->heightMeasure;
    }

    function setName(string $newName) {
        $this->name = $newName;
    }

    function setWeight(float $newWeight) {
        $this->weight = $newWeight;
    }

    function setWeightMeasure(string $newWeightMeasure) {
        $this->weightMeasure = $newWeightMeasure;
    }

    function setLength(float $newLength) {
        $this->length = $newLength;
    }

    function setLengthMeasure(string $newLengthMeasure) {
        $this->lengthMeasure = $newLengthMeasure;
    }

    function setWidth(float $newWidth) {
        $this->width = $newWidth;
    }

    function setWidthMeasure(string $newWidthMeasure) {
        $this->widthMeasure = $newWidthMeasure;
    }

    function setHeight(float $newHeight) {
        $this->height = $newHeight;
    }

    function setHeightMeasure(string $newHeightMeasure) {
        $this->heightMeasure = $newHeightMeasure;
    }

    function jsonSerialize() {
        $obj = new StdClass;
        $obj->name = $this->getName();
        $obj->weight = $this->getWeight();
        $obj->weightMeasure = $this->getWeightMeasure();
        $obj->length = $this->getLength();
        $obj->lengthMeasure = $this->getLengthMeasure();
        $obj->width = $this->getWidth();
        $obj->widthMeasure = $this->getWidthMeasure();
        $obj->height = $this->getHeight();
        $obj->heightMeasure = $this->getHeightMeasure();
    }


}


?>