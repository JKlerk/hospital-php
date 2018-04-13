	<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php
				foreach ($species as $specie) {
					echo "<tr><th> ".$specie['species_id']." </th>";
					echo "<th> ".$specie['species_description']." </th>";
					echo '<td class="center"><a href="edit/'. $specie['species_id'] .'">edit</a></td>';
					echo '<td class="center"><a href="delete/'. $specie['species_id'] .'">delete</a></td></tr>';
				}
			?>
			<!-- <tr>
				<td>1</td>
				<td>hond</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>2</td>
				<td>kat</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr> -->
		</tbody>
	</table>
	<p><a href="<?= URL ?>species/create">Create</a></p>
