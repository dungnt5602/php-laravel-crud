<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">All Categories</h3>
			</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Modify</th>
						</tr>
						
					</thead>

					<tbody>

						@foreach($users as $cat)
							<tr>
								<td>{{$cat->name}}</td>
								<td>{{$cat->email}}</td>
								<td>
									<button class="btn btn-info" data-mytitle="{{$cat->name}}" data-mydescription="{{$cat->email}}" data-catid={{$cat->id}} data-toggle="modal" data-target="#edit">Edit</button>
									/
									<button class="btn btn-danger" data-catid={{$cat->id}} data-toggle="modal" data-target="#delete">Delete</button>
								</td>
							</tr>

						@endforeach
					</tbody>


				</table>				
			</div>
		</div>
	</div>
</body>
</html>