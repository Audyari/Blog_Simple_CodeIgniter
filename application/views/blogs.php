<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Artikel Terbaru</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="#">Artikel Terbaru</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">

					<li class="nav-item">
						<a href="<?php echo site_url('blog/add'); ?>" class="nav-link">Tambah Artikel </a>
					</li>
					<li class="nav-item">
						<form class="d-flex" role="search">
							<input class="form-control me-2" type="search" placeholder="Cari artikel" name="find"
								aria-label="Cari">
							<button class="btn btn-outline-light" type="submit">Cari</button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container my-5">
		<h1 class="mb-4">Artikel Terbaru</h1>
		<div class="row">
			<?php foreach ($blogs as $key => $blog): ?>
				<div class="col-md-6 mb-4">
					<div class="card">
						<img src="thumbnail.jpg" class="card-img-top" alt="Thumbnail Artikel">
						<div class="card-body">
							<h2 class="card-title">
								<a href="<?php echo site_url('blog/detail/' . $blog['url']); ?>"
									class="text-decoration-none">
									<?php echo $blog['title']; ?>
								</a>
							</h2>
							<p class="card-text"><?php echo $blog['content']; ?></p>
							<p class="card-text"><small class="text-muted">Dipublikasikan pada 16 Juni 2024</small></p>
							<div class="d-flex justify-content-end">
								<a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>"
									class="btn btn-primary me-2">Edit</a>
								<a href="<?php echo site_url('blog/delete/' . $blog['id']); ?>"
									class="btn btn-danger">Hapus</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
