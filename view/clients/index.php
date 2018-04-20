	<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php
				foreach ($clients as $client) {
					echo "<tr><th> ".$client['client_firstname']." </th>";
					echo "<th> ".$client['client_lastname']." </th>";
					echo '<td class="center"><a href="edit/'.$client['client_id'].'">edit</a></td>';
					echo '<td class="center"><a href="delete/'.$client['client_id'].'">delete</a></td></tr>';
				}
			?>
			<!-- <tr>
				<td>John</td>
				<td>Doe</td>
				<td>0612345678</td>
				<td>johndoe@hismail.com</td> LOl mooie mail jaja
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
	<p><a href="<?= URL ?>client/create">Create</a></p>