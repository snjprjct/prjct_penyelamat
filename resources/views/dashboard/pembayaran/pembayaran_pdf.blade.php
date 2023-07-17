<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembayaran</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		body {
			padding: 5%;
		},
		table tr td,
		table tr th{

			font-size: 9pt;
		}
	</style>
	<center>
	<Br>
		<h5>Laporan Pembayaran</h4>
		<h6>SMP Baiturrahim Kota Jambi</h6>

		<Br>
		<Br>
		
		<h4></h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">NIS | Nama customer</th>
                <th scope="col">Total</th> 
                <th scope="col">Tanggal Pembayaran</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($cetakpertanggalnya as $p)
			<tr>

				<td>{{ $i++ }}</td>
				<td>{{ $p->periode->bulan }}
                        {{ $p->periode->tahun }}</a></td>
                <td>{{ $p->customer->nis}} | {{ $p->customer->nama_customer}}</td>
                <td>@currency($p->total)</td>
                <td>{{ $p->created_at }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>