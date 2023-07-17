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
		<h5>Laporan Booking</h4>
		<h6>Delapan Photography</h6>

		<Br>
		<Br>
		
		<h4></h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
		<tr>
				<th scope="col">No</th> 
                <th scope="col">Tanggal Booking</th> 
                <th scope="col">Nama Paket</th>
                <th scope="col">Lama Paket</th>
                <th scope="col">Mulai Foto</th>
                <th scope="col">Selesai Foto</th>
                <th scope="col">Catatan Foto</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($cetakpertanggalnya as $p)
			<tr>

				<td>{{ $loop->iteration }}</td>
				<td>{{ $p->tgl_booking }}</td>
				<td>{{ $p->paket->nama_paket }}</td>
				<td>{{ $p->paket->jumlah_jam }}</td>
				<td>{{ $p->jam_booking }}</td>
				<td>{{ $p->jam_selesai}}</td>
				<td>{{ $p->catatan}}</td>
				<td>@currency($p->total)</td>
				<td>{{ $p->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>