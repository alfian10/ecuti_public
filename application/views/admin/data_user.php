
<div class="container-fluid">
	<table class="table table-bordered">
		<tr align="center">

			<th>NIP</th>
      		<th>NAMA</th>
			<th>USERNAME</th>
			<th>ROLE ID</th>
		</tr>

		<?php 
		$no=1;
			foreach($data_user as $dt_user) : ?>

				<tr>
					<td><?php echo $dt_user->nipm ?></td>
					<td><?php echo $dt_user->nama ?></td>
					<td><?php echo $dt_user->username ?></td>
					<td><?php echo $dt_user->role_id ?></td>
					
				</tr>

		<?php endforeach; ?>

	</table>
			<div>
				<h5>Catatan :</h5>
				<strong>1 = Admin</strong><br>
				<strong>2 = User</strong><br>
				<strong>3 = Akademik</strong><br>
				<strong>4 = SDN</strong>
			</div>
		</div>

