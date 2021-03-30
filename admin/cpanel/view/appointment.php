<?php include "../cpanel/controller/apquery.php"?>

<?php if(isset($_SESSION['invited']) && $_SESSION['invited'] == true):?>
	<div class="alert alert-success">Apointment Sent!</div>
	<?php unset($_SESSION['invited'])?>
	<?php elseif(isset($_SESSION['changed']) && $_SESSION['changed'] == true):?>
	<div class="alert alert-success">Appointment changed!</div>
	<?php unset($_SESSION['changed'])?>
<?php endif;?>
<div class="appointment">
	<h3>Registration Scheduling</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">Register ID</th>
				<th scope="col">Student Name</th>
				<th scope="col">Email</th>
				<th scope="col">Phone #</th>
				<th scope="col">Registered Course</th>
				<th scope="col">Student Address</th>
				<th scope="col">Centre Enrolled</th>
				<th scope="col">Referral</th>
				<th scope="col">Register Date</th>
				<th scope="col">Scheduled on</th>
				<th scope="col">Action</th>
			</tr>
			<tbody>
				<?php foreach($ap as $item):?>
					<tr>
						<th scope="row"><?=$item['id']?></th>
						<td><?=$item['name']?></td>
						<td><?=$item['email']?></td>
						<td><?=$item['phone']?></td>
						<td><?=$item['cName']?></td>
						<td><?=$item['stdAddress']?></td>
						<td><?=$item['address']?></td>
						<td><?=$item['ref']?></td>
						<td><?=date_format(date_create($item['regDate']),"d/m/Y")?></td>
						<?php if($item['date'] == "0000-00-00"):?>
							<td>No schedule set</td>
							<?php else:?>
							<td><?=date_format(date_create($item['date']),"d/m/Y")?></td>
						<?php endif;?>
						<?php if($item['date'] == "0000-00-00"):?>
							<td><a href="?request=setAppoint&id=<?=$item['id']?>" class="btn btn-primary">Set Schedule</a></td>
							<?php elseif(strtotime($item['date']) === strtotime(date("Y-m-d"))):?>
								<td>&nbsp;</td>
							<?php else:?>
							<td><a href="?request=changeAppoint&id=<?=$item['id']?>" class="btn btn-primary">Update Schedule</a></td>
						<?php endif;?>
					</tr>
				<?php endforeach;?>
			</tbody>
		</thead>
	</table>
</div>