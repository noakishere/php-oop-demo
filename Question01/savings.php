<?php 

class Savings extends Asset{
    public $interest_rate;
    public $asset;

    public function __construct($descriptor, $date, $current_value,
                                $interest_rate, $asset) 
    {
        $this->descriptor = $descriptor;
        $this->date = $date;
        $this->current_value = $current_value;
        $this->interest_rate = $interest_rate;
        $this->$asset = $asset;                        
    }

    function get_interest_rate() {
        return $this->interest_rate;
    }

    function set_interest_rate($interest_rate){
        $this->interest_rate = $interest_rate;
    }

    function get_asset() {
        return $this->asset;
    }

    function set_asset($asset){
        $this->asset = $asset;
    }
}
?>