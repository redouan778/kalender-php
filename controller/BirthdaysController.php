<?php

require(ROOT . "model/BirthdaysModel.php");

function index()
{
	render("birthdays/index", array(
		'birthdays' => getAllBirthdays()
	));
}
function create(){
	render("birthdays/create", array(
	));
}
// function newBirthday(){
// 	$_post;
// }
