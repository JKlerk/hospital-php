	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
				<?php
				foreach ($patients as $patient) {
					echo "<tr><th> ".$patient['patient_name']." </th>";
					echo "<th> ".$patient['species_description']." </th>";
					echo "<th> ".$patient['patient_status']." </th>";
					echo "<th> ".$patient['client_firstname']." </th>";
					echo '<td class="center"><a href="edit/'. $patient['patient_id'] .'">edit</a></td>';
					echo '<td class="center"><a href="delete/'. $patient['patient_id'] .'">delete</a></td></tr>';
				}
				?>
				<!-- <td>Bobbie</td>
				<td>hond</td>
				<td>Koorts, eet slecht, blaft veel te veel</td>
				<td>John Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Minoes</td>
				<td>kat</td>
				<td>Drinkt niet, haaruitval, mager</td>
				<td>Jane Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Kees</td>
				<td>hond</td>
				<td>Eet te veel, vetzucht, jankt en kotst</td>
				<td>John Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td> -->
			</tr>
		</tbody>
	</table>
	<p><a href="<?= URL ?>patient/create">Create</a></p>
