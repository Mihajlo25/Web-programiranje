<?php


$stranica = $_GET['stranica'] ?? '';

switch ($stranica) {
	case '' :
		$stranica = 'fastMeal';
    break;
  case 'fastMeal' :
	case 'isplanirajObrok' :
	// case 'kontakt' :
		break;
	case 'greska404' :
	default :
		$stranica = 'greska404';
		break;
}

include('../fastMeal/template/meni.php');

?>