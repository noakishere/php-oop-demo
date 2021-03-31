<?php

class Submarine extends Ship {

    public function change_depth()
    {
        echo "Submarine change_depth function";
    }

    public function deploy_weapon($weapon)
    {
        echo "Submarine object deploys weapon {$weapon}";
    }
}

?>