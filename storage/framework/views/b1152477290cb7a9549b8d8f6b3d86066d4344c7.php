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
		<h5>KARTU SPP</h4>
		<h6>SMP Baiturrahim Kota Jambi</h6>
		<h6><?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($a->nama_siswa); ?> dd
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h6>

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
			<?php $i=1 ?>
			<?php $__currentLoopData = $periode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>

				<input hidden value="<?php echo e($idnya = $p->id); ?>" >
				<td><?php echo e($p->bulan); ?>

                        <?php echo e($p->tahun); ?></a></td> 


                <td>
				<?php $__currentLoopData = $kartu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($k->periode_id==$idnya): ?>
				 <input hidden value="<?php echo e($statusnya = $k->status); ?>" >
						<?php if($statusnya=="Lunas"): ?>
						 
								<img src="../../../storage/post-image/lunas.png" width="100px">
						 
						<?php elseif($statusnya=="Menunggu Konfirmasi"): ?>
						 		<img src="../../../storage/post-image/wait.png" width="100px">
						<?php endif; ?>
				<?php else: ?>
				 
				<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				 
				</td> 
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
 
</body>
</html><?php /**PATH D:\laravel\coba1\spp\resources\views/pembayaran/kartu_spp.blade.php ENDPATH**/ ?>