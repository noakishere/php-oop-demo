<?php 

abstract class Aircraft extends Vehicle {
    public $altitude;

    public function change_altitude($altitude){
        $this->altitude = $altitude;
    }

    public function change_heading($heading)
    {
        $this->heading = $heading;
    }
}
?>