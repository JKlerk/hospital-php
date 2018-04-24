<?php

function getAllPatients() {
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM patients 
	    	INNER JOIN species ON patients.species_id = species.species_id 
	    	INNER JOIN clients ON patients.client_id = clients.client_id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function insertPatient() {
    $patientName = $_POST["patient_name"];
    $patientSpieces = $_POST["species_id"];
    $patientClient = $_POST["client_id"];
    $patientStatus = $_POST["patient_status"];
    $db = openDatabaseConnection();
    $sql = "INSERT INTO patients (patient_name, species_id, client_id, patient_status)
    		VALUES (:patientName, :patientSpieces, :patientClient, :patientStatus)";
    $query = $db->prepare($sql);
    $query->execute(array(    
        ":patientName" => $patientName,
        ":patientSpieces" => $patientSpieces,
        ":patientClient" => $patientClient,  
        ":patientStatus" => $patientStatus      
    ));
    $db = null;
    return $query->fetchAll();
}

function getPatient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients
			JOIN species ON patients.species_id = species.species_id 
			JOIN clients ON patients.client_id = clients.client_id 
			WHERE patient_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}

function editPatientDB($id) {
	$db = openDatabaseConnection();
	$patientName = $_POST['patient_name'];
	$patientSpieces = $_POST['species_id'];
	$patientStatus = $_POST['patient_status'];
	$patientClient = $_POST['client_id'];
	$sql = "UPDATE patients 
			SET patient_name=:patientName, species_id=:patientSpieces, patient_status=:patientStatus, client_id=:patientClient WHERE patient_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":patientName" => $patientName,
		":patientSpieces" => $patientSpieces,
		":patientStatus" => $patientStatus,
		":patientClient" => $patientClient,
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}

function deletePatient($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patients WHERE patient_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}
