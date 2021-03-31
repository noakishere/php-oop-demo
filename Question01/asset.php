<?php 

    class Asset {
        public $descriptor;
        public $date;
        public $current_value;

        function __construct($descriptor, $date, $current_value){
            $this->descriptor = $descriptor;
            $this->date = $date;
            $this->current_value = $current_value;
        }

        function set_descriptor($descriptor){
            $this->descriptor = $descriptor;
        }

        function get_descriptor() {
            return $this->descriptor;
        }

        function set_date($date){
            $this->date = $date;
        }

        function get_date(){
            return $this->date;
        }

        function set_current_value($current_value){
            $this->current_value = $current_value;
        }

        function current_value(){
            return $this->current_value;
        }

        //Executes when the script is done
        // function __destruct() {
        //     echo "The fruit is {$this->descriptor}.";
        // }
    }

// $asset = new Asset("descriptorrr", "25/25/2020", 1900);
// echo "<h1> {$asset->get_descriptor()} </h1>";
?>