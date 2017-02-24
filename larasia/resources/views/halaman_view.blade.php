<html>
	<head>
	<title>Halaman View</title>
	</head>
<body>
	<h4>View Blade : kasus IF</h4>
	<p> {{$var1}} </p>
	@if($var1=='Sepatu')
		Sepatu baru punya Adam
	@endif
	<p> {{$var2}} </p>
	<p> {{$var3}} </p>
	<ul>
	<?php foreach ($transaksi as $itembarang):  ?>
		<?php echo '<li>'.$itembarang->nama.'</li>'; ?>
	<?php endforeach	?>
	</ul>
</body>
</html>