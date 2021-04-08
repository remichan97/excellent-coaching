<?php include "../cpanel/controller/coursequery.php" ?>

<div class="course">
<?php include "../cpanel/model/successCourseAction.php"?>
	<h3>Course Listing</h3>
	<div class="add">
		<a href="?request=addCourse" class="btn btn-primary">Add a Course</a>
	</div>
	<table class="table table-bordered">
		<thead class="thead thead-light">
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Category</th>
			<th scope="col">Teacher name</th>
			<th scope="col">Course fee &#40;VND&#41;</th>
			<th scope="col">Course duration &#40;month&#41;</th>
			<th scope="col">Visibilty</th>
			<th scope="col">Action</th>
		</thead>
		<tbody>
			<?php foreach ($lineup as $item) : ?>
				<tr>
					<th scope="row"><?= $item['cID'] ?></th>
					<td><?= $item['cName'] ?></td>
					<td><?= $item['catName'] ?></td>
					<td><?= $item['name'] ?></td>
					<td><?= number_format($item['price'], '0', ',', '.') ?></td>
					<td><?= $item['duration'] ?></td>
					<?php if ($item['status'] == 1) : ?>
						<td>Show</td>
					<?php else : ?>
						<td>Hidden</td>
					<?php endif; ?>
					<td><a href="?request=editCourse&id=<?= $item['cID'] ?>" class="btn btn-primary">Edit</a>
						<?php if (mysqli_num_rows(mysqli_query($conn, "select*from register where cID = '$item[cID]'")) == 0) : ?>
							<a href="?request=deleteCourse&id=<?= $item['cID'] ?>" onclick="return confirm('Are you sure you want to delete this course?')" class="btn btn-danger">Delete</a>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>