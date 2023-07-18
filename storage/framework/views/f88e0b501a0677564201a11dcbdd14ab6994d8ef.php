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
		@page  { size: 6cm 20cm landscape; },
	</style>
	<center>
	<Br>
		<h5>Laporan Pemesanan</h4>
		<h6>Atas Nama : <?php echo e($customer->nama_customer); ?></h6>
	 

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
			<?php $i=1 ?>
			<?php $__currentLoopData = $kartu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($loop->iteration); ?></td>
				<td><?php echo e($p->tgl_booking); ?></td>
				<td><?php echo e($p->paket->nama_paket); ?></td>
				<td><?php echo e($p->paket->jumlah_jam); ?></td>
				<td><?php echo e($p->jam_booking); ?></td>
				<td><?php echo e($p->jam_selesai); ?></td>
				<td><?php echo e($p->catatan); ?></td>
				<td>Rp. <?php echo 
            number_format($p->total,0,',','.');?></td>
				<td><?php echo e($p->status); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
 
</body>
</html><?php /**PATH C:\Users\Zahlan Nugraha\Downloads\photography\photography\resources\views/dashboard/booking/kartu_spp.blade.php ENDPATH**/ ?>