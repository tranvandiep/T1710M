<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Management Student List
			</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered">
					@php
						$count = 1
					@endphp
					@foreach($students as $item)
						<tr>
							<td>{{ $count++ }}</td>
							<td>{{ $item->roll_no }}</td>
							<td>{{ $item->fullname }}</td>
							<td>{{ $item->old }}</td>
							<td>{{ $item->address }}</td>
							<td>{{ $item->email }}</td>
							<td>{{ $item->gender }}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Input Detail Information of Student
			</div>
			<div class="panel-body">
				<form method="POST" action="{{ route('addStudent') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Roll No</label>
						<input type="text" name="roll_no" class="form-control" placeholder="Enter roll no">
					</div>
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" placeholder="Enter fullname">
					</div>
					<div class="form-group">
						<label>old</label>
						<input type="number" name="old" class="form-control" placeholder="Enter old">
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email" class="form-control" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Enter address">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<select name="gender" class="form-control">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<button class="btn btn-success" type="submit">Add Student</button>
					<button class="btn btn-warning" type="reset">Reset Data</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>