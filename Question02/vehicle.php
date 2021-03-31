<?php 

abstract class Vehicle {
    public $name;
    public $latitude;
    public $longitude;
    public $heading;

    public function __construct($name, $latitude, $longitude, $heading)
    {
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->heading = $heading;
    }

    public function rename_reset()
    {
        echo "Rename_Reset function";
    }

    public function report_position()
    {
        echo "Report_Position function";
    }

    abstract public function change_heading($heading);

    abstract public function deploy_weapon($weapon);
}

?>