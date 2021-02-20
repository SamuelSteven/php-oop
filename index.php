<?php
    require ('animal.php');
    require ('Frog.php');
    require ('Ape.php');
    
    $sheep = new Animal("shaun");
    echo $sheep->get_name(); // "shaun"
    echo $sheep->get_legs(); // 2
    echo $sheep->get_cold_blooded(); // false

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump(); // "hop hop"
    echo $kodok->get_legs();

    // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>