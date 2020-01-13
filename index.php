<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-13
 * Time: 08:40
 */


$name = "Django";
$Name = "Unchained";
$camelCase = "use camelCase";

//echo "PHP variables are case sensitive i.e. \$name is ".$name." and \$Name is ".$Name;
//echo $camelCase;
//var_dump($camelCase);

$ouput = '<div>';
$ouput.= $name;
$ouput.= '</div>';
//echo $ouput;

//echo "the best movie is \"the best movie\"";

$eilute = " labas rytas, Lietuva! ";
$ilgis = strlen($eilute);
//echo $ilgis;

$eilute = " labas rytas, Lietuva! ";
$eilute_be_tarpu = trim($eilute);
//echo $eilute_be_tarpu;

$didziosios_raides = strtoupper($eilute_be_tarpu);
//echo $didziosios_raides;

$mazosios_raides = strtolower($didziosios_raides);
//echo $mazosios_raides;

$lowerCaseName = "petras";
$upperCaseName = ucfirst($lowerCaseName);
//echo $upperCaseName;

$changedCountry = str_replace("Lietuva", "Olandija", $eilute_be_tarpu);
//echo $changedCountry;

$subString = substr($Name, 2, 7);
//echo "A subtstring of {$Name} is {$subString}";

//?>
<!--<div>-->
<!--    <div>-->
<!--        --><?php //if($name) : ?>
<!--            <p>Hi, --><?//=$name?><!--</p>-->
<!--        --><?php //endif;?>
<!--    </div>-->
<!--</div>-->


