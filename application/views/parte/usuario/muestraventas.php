<?php if (!$ventas_cabecera) { ?>
<div class="body">
	<div class="container margen-sup">
		<div class="well">
			<h1>No hay Ventas Realizadas</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-danger" href="<?php echo base_url(''); ?>">Salir</a>
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>

	<div class="container margen-sup">
		<div class="well">
			<h1>Todos las Ventas</h1>
		</div>	
		<a type="button" class="btn btn-danger" href="<?php echo base_url(''); ?>">Salir</a>
		<br> <br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID de Venta</th>
					<th>Fecha</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Total de Factura</th>
			</thead>
			<tbody>
				<?php foreach($ventas_cabecera->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->fecha;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->total_venta;  ?></td>
				<?php } ?>
			</tbody>
		</table>	            
	</div>
</div>
<?php } ?>