<?php
	foreach ($result as $patient) {
		echo '<form action="/hospital-php/hospital/postEditPatient/'. $patient['patient_id'] .'" method="POST"><h1>Vul gegevens in</h1>
		<h2>Naam <input required="true" type="text" name="patient_name" value="'. $patient['patient_name'] .'"></h2>
		<h2>Species ID <input required="true" type="text" name="species_id" value="'. $patient['species_id'] .'"></h2>
		<h2>Patient Status <input required="true" type="text" name="patient_status" value="'. $patient['patient_status'] .'"></h2>
		<h2>Client ID <input required="true" type="text" name="client_id" value="'. $patient['client_id'] .'"></h2>
		<button type="submit">Opslaan</button>';
	}
?>
</form>