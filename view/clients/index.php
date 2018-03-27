	<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php
				foreach ($clients as $client) {
					echo "<tr><th> ".$client['client_firstname']." </th>";
					echo "<th> ".$client['client_lastname']." </th>";
					echo "<th>Phone</th>";
					echo "<th>Email</th>";
					echo '<td class="center"><a href="editpatient/'. $client['client_id'] .'">edit</a></td>';
					echo '<td class="center"><a href="deletepatient/'. $client['client_id'] .'">delete</a></td></tr>';
				}
			?>
			<!-- <tr>
				<td>John</td>
				<td>Doe</td>
				<td>0612345678</td>
				<td>johndoe@hismail.com</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Jane</td>
				<td>Doe</td>
				<td>0687654321</td>
				<td>janedoe@hermail.com</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr> -->
		</tbody>
	</table>