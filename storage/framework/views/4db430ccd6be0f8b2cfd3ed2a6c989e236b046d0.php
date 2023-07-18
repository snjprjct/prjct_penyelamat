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
		<h5>Laporan Siswa</h4>
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
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">Email</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Status Bayar</th>
                <th scope="col">Status Siswa</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1 ?>
			<?php $__currentLoopData = $cetakpertanggalnya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($i++); ?></td>
				<td><?php echo e($p->nis); ?> | <?php echo e($p->nama_siswa); ?></td>
                <td><?php echo e($p->jk); ?></td>
                <td><?php echo e($p->kelas->nama_kelas); ?></td>
                <td><?php echo e($p->alamat); ?></td>
                <td><?php echo e($p->telepon); ?></td>
                <td><?php echo e($p->email); ?></td>
                <td><?php echo e($p->nama_ayah); ?></td>
                <td><?php echo e($p->nama_ibu); ?></td>
                <td><?php echo e($p->tahun_masuk); ?></td>
                <td><?php echo e($p->status_byr); ?></td>
                <td><?php echo e($p->status_siswa); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
 
</body>
</html><?php /**PATH D:\laravel\coba1\spp\resources\views/siswa/siswa_pdf.blade.php ENDPATH**/ ?>