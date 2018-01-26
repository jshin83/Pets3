<?php
/**
 * Created by PhpStorm.
 * User: RMartin
 * Date: 1/26/2018
 * Time: 11:00 AM
 */

function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));
}