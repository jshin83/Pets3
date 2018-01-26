<?php
/**
 * Created by PhpStorm.
 * User: RMartin
 * Date: 1/26/2018
 * Time: 11:00 AM
 */

$errors = array();


function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($string)
{
    return !empty($string) && ctype_alpha($string);
}

if(!validColor($color))
{
    $errors['color'] = "Please enter a valid color.";
}

if(!validString($type))
{
    $errors['type'] = "Please enter a valid string.";
}

if(!validString($name))
{
    $errors['name'] = "Please enter a valid string.";
}

$success = sizeof($errors) == 0;
