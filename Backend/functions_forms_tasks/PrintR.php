<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 11.03.2017
 * Time: 11:41
 */

function printR (array $arr) {
    foreach ( $arr as $item) {
        if (is_array($item)){
            printR($item);
        }
        else{
            echo $item, PHP_EOL;
        }
    }
}
?>