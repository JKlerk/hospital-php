<?php

require(ROOT . "model/ClientModel.php");
require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpeciesModel.php");

function index(){
	render("patients/index", array(
		'patients' => getAllPatients()
	));
}

function editPatient($id){
	editPatientDB($id);
	header("Location: /hospital-php/patient/index");
}

function edit($id){
	render("patients/edit", array(
		"resultP" => getPatient($id),
		"resultC" => selectClient($id),
		"resultS" => selectSpecies($id)
	));
}

function create(){
	render("patients/create", array(
		"resultC" => selectClientC(),
		"resultS" => selectSpeciesC()
	));
}

function insert(){
	insertPatient();
	header("Location: /hospital-php/patient/index");
}

function delete($id){
	deletePatient($id);
	header("Location: /hospital-php/patient/index");
}