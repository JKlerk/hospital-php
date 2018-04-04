<?php

require(ROOT . "model/HospitalModel.php");


//Global--------------------------------------------------------------------------------------
function index(){
	render("hospital/index");
}

//Clients---------------------------------------------------------------------------------------
function clients(){
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

function createclient(){
	render("clients/create");
}

function insertclient(){
	insertUserClient();
	header("Location: /hospital-php/hospital/clients");
}

function deleteclient($id){
	deleteClientDB($id);
	header("Location: /hospital-php/hospital/clients");
}

// Patients------------------------------------------------------------------------------------
function patients(){
	render("patients/index", array(
		'patients' => getAllPatients()
	));
}

function postEditPatient($id){
	editPatientDB($id);
	header("Location: /hospital-php/hospital/patients");
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
	header("Location: /hospital-php/hospital/patients");
}

function deletepatient($id){
	deletePatientDB($id);
	header("Location: /hospital-php/hospital/patients");
}

// Species------------------------------------------------------------------------------------------
function species(){
	render("species/index", array(
		'species' => getAllSpecies()
	));
}