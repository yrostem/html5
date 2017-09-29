<?php
/**
 * Created by PhpStorm.
 * User: yad
 * Date: 29-9-2017
 * Time: 08:51
 */
if(mysqli_connect("localhost", "root", "", "")){
    $connected = true;
}else{
    die("Er kon geen verbinding gemaakt worden met de Database server!");
}
