<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
	<Br>
		<h5>Laporan customer</h4>
		<h6>SMP Baiturrahim Kota Jambi</h6>

		<Br>
		<Br>
		
		<h4></h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th scope="col">No</th>
                <th scope="col">NIS | Nama</th> 
                <th scope="col">Jenis Kelamin</th> 
                <th scope="col">paket</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">Email</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Status Bayar</th>
                <th scope="col">Status customer</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($cetakpertanggalnya as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->nis}} | {{ $p->nama_customer}}</td>
                <td>{{ $p->jk}}</td>
                <td>{{ $p->paket->nama_paket}}</td>
                <td>{{ $p->alamat}}</td>
                <td>{{ $p->telepon}}</td>
                <td>{{ $p->email}}</td>
                <td>{{ $p->nama_ayah}}</td>
                <td>{{ $p->nama_ibu}}</td>
                <td>{{ $p->tahun_masuk}}</td>
                <td>{{ $p->status_byr}}</td>
                <td>{{ $p->status_customer}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>