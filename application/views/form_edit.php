<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Artikel</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 800px;
			margin: 40px auto;
			background-color: #fff;
			padding: 30px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}

		.form-group {
			margin-bottom: 20px;
		}

		label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		input[type="text"],
		textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 16px;
		}

		textarea {
			resize: vertical;
		}

		button {
			display: block;
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
		}

		button:hover {
			background-color: #45a049;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Edit Artikel</h1>
		<form method="POST">
			<div class="form-group">
				<label for="title">Judul</label>
				<input type="text" id="title" name="title" value="<?php echo $blog['title']; ?>" required>
			</div>
			<div class="form-group">
				<label for="url">URL</label>
				<input type="text" id="url" name="url" value="<?php echo $blog['url']; ?>" required>
			</div>
			<div class="form-group">
				<label for="cover">Cover</label>
				<input type="text" id="cover" name="cover" value="<?php echo $blog['cover']; ?>" required>
			</div>
			<div class="form-group">
				<label for="content">Konten</label>
				<textarea id="content" name="content" rows="10" required><?php echo $blog['content']; ?></textarea>
			</div>
			<button type="submit">Simpan</button>
		</form>
	</div>
</body>

</html>
