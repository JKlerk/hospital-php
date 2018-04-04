<?php

// Global-------------------------------------------


//Clients--------------------------------------------------------------------------------------
function getAllClients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function insertUserClient() {
	$db = openDatabaseConnection();
	$name = $_POST['client_firstname'];
	$lastname = $_POST['client_lastname'];
	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES ('$name', '$lastname')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getClient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE client_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function deleteClientDB($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE client_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Patients------------------------------------------------------------------------------------
function getAllPatients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function insertUserPatient() {
	$db = openDatabaseConnection();
	$name = $_POST['patient_name'];
	$species = $_POST['species_id'];
	$status = $_POST['patient_status'];
	$client = $_POST['client_id'];
	$sql = "INSERT INTO patients (patient_name, species_id, patient_status, client_id) VALUES ('$name', '$species', '$status', '$client')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getPatient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE patient_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function editPatientDB($id) {
	$db = openDatabaseConnection();
	$name = $_POST['patient_name'];
	$species = $_POST['species_id'];
	$status = $_POST['patient_status'];
	$client = $_POST['client_id'];
	$sql = "UPDATE patients SET patient_name='$name', species_id='$species', patient_status='$status', client_id='$client' WHERE patient_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function deletePatientDB($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patients WHERE patient_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Species---------------------------------------------------------------------------------------------
function getAllSpecies() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}