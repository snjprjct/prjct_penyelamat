<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembayaran</title>
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
		<h5>Laporan Pembayaran</h4>
		<h6>SMP Baiturrahim Kota Jambi</h6>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">NIS | Nama siswa</th>
                <th scope="col">Total</th> 
                <th scope="col">Tanggal Pembayaran</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1 ?>
			<?php $__currentLoopData = $pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($i++); ?></td>
				<td><?php echo e($p->periode->bulan); ?>

                        <?php echo e($p->periode->tahun); ?></a></td>
                <td><?php echo e($p->siswa->nis); ?> | <?php echo e($p->siswa->nama_siswa); ?></td>
                <td>Rp. <?php echo 
            number_format($p->total,0,',','.');?></td>
                <td><?php echo e($p->created_at); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
 
</body>
</html><?php /**PATH D:\laravel\coba1\spp\resources\views//pembayaran/pembayaran_pdf.blade.php ENDPATH**/ ?>