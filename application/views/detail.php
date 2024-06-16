<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Blog</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container my-5">
		<h1 class="mb-4">Detail Blog</h1>
		<div class="card">
			<div class="card-body">
				<h2 class="card-title"><?php echo $blogs['title']; ?></h2>
				<p class="card-text"><?php echo $blogs['content']; ?></p>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>