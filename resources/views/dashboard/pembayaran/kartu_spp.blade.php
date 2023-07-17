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
		},
		@page { size: 6cm 20cm landscape; },
	</style>
	<center>
	<Br>
		<h5>KARTU SPP</h4>
		<h6>SMP Baiturrahim Kota Jambi</h6>
		<h6>@foreach($customer as $a)
		{{ $a->nama_customer }} dd
		@endforeach</h6>

		<Br>
		<Br>
		
		<h4></h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th scope="col">Periode</th> 
                <th scope="col">Status Pembayaran</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($periode as $p)
			<tr>

				<input hidden value="{{ $idnya = $p->id }}" >
				<td>{{ $p->bulan }}
                        {{ $p->tahun }}</a></td> 


                <td>
				@foreach($kartu as $k)
				@if($k->periode_id==$idnya)
				 <input hidden value="{{ $statusnya = $k->status }}" >
						@if($statusnya=="Lunas")
						 
								<img src="../../../storage/post-image/lunas.png" width="100px">
						 
						@elseif($statusnya=="Menunggu Konfirmasi")
						 		<img src="../../../storage/post-image/wait.png" width="100px">
						@endif
				@else
				 
				@endif
				@endforeach
				 
				</td> 
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>