<?php

require_once ('php/db.php');

require_once ('php/component.php');

Createdb();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Store Crud Operation for Bignner</title>

    <!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Boostrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-black text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>

			<div class="d-flex justify-content-center">
				<form action="" method="post" class="w-50">
					<div class="pt-2">
						<?php inputElement("<i class='fas fa-id-badge'></i>","ID", "book_id",""); 

						?>
					</div>

					<div class="pt-2">

						<?php inputElement("<i class='fas fa-swatchbook'></i>","Book Name", "book_name",""); 

						?>
						
					</div>

					<div class="row pt-2">

						<div class="col">

							<?php inputElement("<i class='fas fa-people-carry'></i>","Publisher", "book_publisher",""); 

						?>
							
						</div>

						<div class="col">

							<?php inputElement("<i class='fas fa-dollar'></i>","Price", "book_price",""); 

						?>
							
						</div>
						
					</div>

					<div class="d-flex justify-content-center">
						<?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create",  "data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>

						<?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read",  "data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>

						<?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update",  "data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>

						<?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete",  "data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
					</div>
				</form>
			</div>

			<!-- Boostrap Table -->
			<div class="d-flex table-data">

				<table class="table table-striped table-dark">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Book Name</th>
							<th>Publisher</th>
							<th>Book Price</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody id="tbody">
						<tr>
							<td>1</td>
							<td>Javascript 101</td>
							<td>Ptech Blog</td>
							<td>$50.89</td>
							<td><i class="fas fa-edit btnedit"></i></td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
	</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>
