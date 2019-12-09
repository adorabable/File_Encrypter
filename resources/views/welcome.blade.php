<html>
<head>
	<title>eNCRypt</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<link href="CSS.css" rel="stylesheet">
<link href="bootstrap.js" rel="stylesheet">

<body>
	<div class="container-fluid">
		<div class="container-fluid">
		<!-- Control the column width, and how they should appear on different devices -->
		<div class="row">
		<div class="col-md-6">
			<img class="logo" src="logo.png" alt="logo">
		</div>
		<div class="col-md-6">

		</div>
		</div>
		<br>

		<div class="row">
		<div class="col-md-4" >
		</div>
		<div class="col-md-4">
			<h2 class="title">Online Encrypt Converter </h2>
		</div>
		<div class="col-md-4">
		</div>
		</div>
		<br>

		<div class="row">
		<div class="col-md-4" >
		</div>
		<div class="col-md-4">
			<p class="text" >Easily encrypt your documents in seconds</p>
		</div>
		<div class="col-md-4">
		</div>
		</div>
		<br>

		<div class="box1"></div>
				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group box2 file"></div>
					<input style="display:none" onchange="form.submit()" name="file" id="file" type="file" class="upload-files">
					<label for="file" class="upload-files" >Choose a file</label></form>
	</div>
</body>
</html>