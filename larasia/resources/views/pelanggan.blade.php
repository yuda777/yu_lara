<!DOCTYPE html>
<html>
<head>
	<title>Pelanggan</title>
</head>
<body>
	<h4>{{$pelanggan->nama}} </h4><br />
	Pernah transaksi  :
	<ul>		
		@foreach ($pelanggan->transaksi as $barang)
			<li>{{$barang->nama}}</li>		
		@endforeach
	</ul>
</body>
</html>