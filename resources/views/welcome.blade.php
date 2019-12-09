<html>
<head>
	<title>eNCRypt</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<link href="CSS.css" rel="stylesheet">

<body>
	<img class="logo" src="logo.png" alt="logo">

	<div class="row">
		<div class="container">
			<h2 class="title">Online Encrypt Converter 
			</h2>
			<p class="text" >Easily encrypt your documents in seconds</p>
			
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
				<div class="box1"></div>
				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group box2 file"></div>
					<input style="display:none" name="file" id="file" type="file" class="upload-files">
					<label for="file" class="upload-files" >Choose a file</label></form>

				<!-- <form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					
					<div class="drop-files">drop files here</div> 

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
				<input type="submit" value="Upload" class="btn btn-primary"> 
				</form> -->
				<div class="copy-right">eNCRypt</div>
			</div>
		</div>
	</div>
</body>
</html>