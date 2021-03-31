<?php 

abstract class Ship extends Vehicle {
    public function change_heading($heading)
    {
        $this->heading = $heading;
    }

    public function get_heading()
    {
        return $this->heading;
    }
}

?>