<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Product</h1>
	<div>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Description</th>
			</tr>
			@foreach ($products as $product)
				<tr>
					<td>{{$product -> id}}</td>
					<td>{{$product -> name}}</td>
					<td>{{$product -> price}}</td>
					<td>{{$product -> qty}}</td>
					<td>{{$product -> description}}</td>
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>