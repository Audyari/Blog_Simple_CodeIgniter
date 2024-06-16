<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Artikel</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container my-5">
		<h1 class="mb-4 text-center">Tambah Artikel</h1>
		<form method="POST">
			<div class="mb-3">
				<label for="title" class="form-label">Judul</label>
				<input type="text" class="form-control" id="title" name="title" required>
			</div>
			<div class="mb-3">
				<label for="url" class="form-label">URL</label>
				<input type="text" class="form-control" id="url" name="url" required>
			</div>
			<div class="mb-3">
				<label for="cover" class="form-label">Cover</label>
				<input type="text" class="form-control" id="cover" name="cover" required>
			</div>
			<div class="mb-3">
				<label for="content" class="form-label">Konten</label>
				<textarea class="form-control" id="content" name="content" rows="10" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
