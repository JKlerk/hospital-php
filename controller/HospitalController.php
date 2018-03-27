<?php

require(ROOT . "model/HospitalModel.php");


//Global--------------------------------------------------------------------------------------
function index(){
	render("hospital/index", array(
		'patients' => getAllPatients()
	));
}

//Clients---------------------------------------------------------------------------------------
function clients(){
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

// Patients------------------------------------------------------------------------------------
function patients(){
	render("patients/index", array(
		'patients' => getAllPatients()
	));
}

function postEditPatient($id){
	editPatientDB($id);
	// header("Location: /hospital-php/hospital/index");
}

function editPatient($id){
	render("patients/edit", array(
		"result" => getPatient($id)
	));
}

function createpatient(){
	render("patients/create");
}

function insertpatient(){
	insertUserPatient();
	header("Location: /hospital-php/hospital/index");
}

function deletepatient($id){
	deletePatientDB($id);
	header("Location: /hospital-php/hospital/index");
}

// Species------------------------------------------------------------------------------------------
function species(){
	render("species/index", array(
		'patients' => getAllPatients()
	));
}