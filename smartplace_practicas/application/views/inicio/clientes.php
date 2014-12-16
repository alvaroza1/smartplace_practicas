<div class="container">
	<table class="catalogo">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>RFC</td>
			<td>Teléfono</td>
			<td>Contacto</td>
			<td>Fecha Fin</td>
		</tr>
	</thead>
	<tbody>
	<? foreach($clientes as $row): ?>
		<tr>
			<td data-title="Nombre"><?=$row->nombre?></td>
			<td data-title="RFC"><?=$row->rfc?></td>
			<td data-title="Teléfono"><?=$row->telefono?></td>
			<td data-title="Contacto"><?=$row->contacto?></td>
			<td data-title="Fecha Fin"><?=date("d-M-Y",strtotime($row->fecha_fin))?></td>
		</tr>
	<? endforeach; ?>
	</tbody>
</table>
</div>