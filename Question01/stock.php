<?php 
// include 'asset.php';

class Stock extends Asset{
    public $num_shares;
    public $share_price;
    public $asset;

    public function __construct($descriptor, $date, $current_value,
                                $num_shares, $share_price, $asset) 
    {
        $this->descriptor = $descriptor;
        $this->date = $date;
        $this->current_value = $current_value;
        $this->num_shares = $num_shares;
        $this->share_price = $share_price;
        $this->$asset = $asset;                        
    }

    function get_num_shares() {
        return $this->num_shares;
    }

    function set_num_shares($num_shares){
        $this->num_shares = $num_shares;
    }


    function get_share_price() {
        return $this->share_price;
    }

    function set_share_price($share_price){
        $this->share_price = $share_price;
    }


    function get_asset() {
        return $this->asset;
    }

    function set_asset($asset){
        $this->asset = $asset;
    }
}

// $newStock = new Stock("descriptorrr2", "25/25/202022", 1900, "helo", "helo", "helo");
// echo $newStock->get_date();
?>