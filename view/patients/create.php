<form action="<?= URL ?>hospital/insertpatient" method="POST">
	<h1>Vul gegevens in</h1>
	<h2>Name <input required="true" autocomplete="off" type="text" name="patient_name"></h2>
	<h2>Species <input required="true" autocomplete="off" type="text" name="species_id"></h2>
	<h2>Status <input required="true" autocomplete="off" type="text" name="patient_status"></h2>
	<h2>Client <input required="true" autocomplete="off" type="text" name="client_id"></h2>
	<button type="submit">Versturen</button>
</form>