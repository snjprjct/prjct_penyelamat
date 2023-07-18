




<?php $__env->startSection('judul'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<Style>
    @import  url("https://fonts.googleapis.com/css?family=Rubik:400,700");

    * {
      font-family: "Rubik", sans-serif;
    }

    #form {
      margin: 50px auto;
      width: 350px;
      padding: 45px 30px 15px;
      position: relative;
      box-shadow: 5px 5px 25px rgba(0, 0, 0, 0.2);
      border-radius: 1px;
      background-color: #2c3e50;
      height: 520px;
      overflow: hidden;
    }

    #form #toggle-forms {
      position: absolute;
      top: 15px;
      right: 30px;
      border: 1px solid #3a4a5d;
      border-radius: 20px;
      overflow: hidden;
      z-index: 99;
    }

    #form #toggle-forms > button {
      border: none;
      background: none;
      background-color: #34495e;
      border: 1px solid #22303e;
      color: #fff;
      float: left;
      border-bottom-right-radius: 20px;
      border-top-right-radius: 20px;
      padding: 2px 10px;
    }

    #form #toggle-forms > button:first-of-type {
      border-right: 0;
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }

    #form #toggle-forms > button.active {
      background-color: #3498db;
    }

    #form form h4 {
      text-transform: capitalize;
    }

    .input-field label.active {
      color: #fff !important;
      font-size: 1.1rem;
    }

    #form form input:focus {
      border-bottom-color: dodgerblue !important;
    }

    #form .row > button {
      background-color: dodgerblue;
    }
    label{
      color:white;
    }

    input {
      color: #fff;
      padding-left: 15px !important;
    }

    #form form {
      padding: 45px 30px 15px;
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: #2c3e50;
      transition: all 0.3s linear;
      z-index: 2;
    }

    #form form:last-of-type {
      left: 100%;
    }

    #form.active form:first-of-type {
      left: -100% !important;
    }

    #form.active form:last-of-type {
      left: 0 !important;
    }

    @media (max-width: 767px) {
      #form {
        width: 290px !important;
      }
    }
    .animate {
      height: 100%;
      display: block;
      margin: 0;
      padding: 0;
      width: 100%;
    }

    .animate > li {
      position: absolute;
      height: 50px;
      width: 50px;
      top: 100%;
      left: 10px;
      background-color: rgba(255, 255, 255, 0.1);
      z-index: -1;
      overflow: hidden;
      animation: move 10s linear infinite;
    }

    .animate > li:nth-last-of-type(2) {
      left: 70px;
      animation-delay: 3.5s;
      height: 15px;
      width: 15px;
    }

    .animate > li:nth-last-of-type(3) {
      left: 140px;
      animation-delay: 3s;
    }

    .animate > li:nth-last-of-type(4) {
      left: 210px;
      animation-delay: 5.5s;
    }

    .animate > li:nth-last-of-type(5) {
      left: 280px;
      animation-delay: 1.8s;
      height: 65px;
      width: 65px;
    }

    .animate > li:nth-last-of-type(6) {
      left: 140px;
      animation-delay: 6.8s;
      height: 25px;
      width: 25px;
    }

    .animate > li:nth-last-of-type(7) {
      left: 280px;
      animation-delay: 5s;
      height: 35px;
      width: 35px;
    }

    @keyframes  move {
      to {
        top: -50px;
        transform: rotate(360deg);
      }
    }

    .forgot {
      color: dodgerblue;
    }

    .forgot:hover {
      text-decoration: underline;
      cursor: pointer;
    }

</style>


<?php if(session()->has('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

      </div>
<?php elseif(session()->has('deleted')): ?>
 <div class="alert alert-danger" role="alert">
        <?php echo e(session('deleted')); ?>

      </div>
  <?php endif; ?>

 <section id="form">
	<div id="toggle-forms">
		<button class="waves-effect waves-light active" id="login">Login</button>
		<button class="waves-effect waves-light" id="register">Register</button>
	</div>
	<form class="col s12">
		<div class="center-align">
    <br>
			<h1 style="color:White"><center>login</center></h1>
		</div>
		<div class="">
			<div class="input-field">
				<label for="email">Username</label>
				<input id="username" type="text" width="100%" class="form-control" style="width:100%">
			</div>
		</div>
    <Br>
		<div class="">
			<div class="input-field">
				<label for="password">Password</label>
				<input id="password" type="password"  style="width:100%" class="form-control">
			</div>
		</div>
<Br>
      <Br>
		<div class="center-align">
			<button class="btn waves-effect waves-light">
				Login
			</button>
      
		</div>
	
		<ul class="animate">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</form>
	<form class="col s12" action="/register" method="post">
		 <?php echo csrf_field(); ?>
		<div class="">
			<div class="input-field">
      <label for="email">Nama</label>
				<input id="email" name="nama_customer" type="text" class="form-control" style="width:100%">
				
			</div>
		</div>

    	<div class="">
			<div class="input-field">
      <label for="email">Jenis Kelamin</label>
				<input id="email" name="jk" type="text" class="form-control" style="width:100%">
				
			</div>
		</div>

    	<div class="">
			<div class="input-field">
      <label for="email">Alamat</label>
				<input id="email" name="alamat" type="text" class="form-control" style="width:100%">
				
			</div>
		</div>
    	<div class="">
			<div class="input-field">
      <label for="email">Email</label>
				<input id="email" name="email" type="email" class="form-control" style="width:100%">
				
			</div>
		</div>
    	<div class="">
			<div class="input-field">
      <label for="email">Telepon</label>
				<input id="email" name="telepon" type="text" class="form-control" style="width:100%">
				
			</div>
		</div>

    	<div class="">
			<div class="input-field">
      <label for="email">Username</label>
				<input id="email" name="username" type="username" class="form-control" style="width:100%">
				
			</div>
		</div>

	 
		<div class="">
			<div class="input-field">
				<label for="password">Password</label>
				<input id="password" name="password" type="password" class="form-control" style="width:100%">
			</div>
		</div>
    <br>
		<div class="center-align">
			<button type="submit
      " class="btn waves-effect waves-light">
				Register
			</button>
		</div>
		<ul class="animate">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</form>
</section>

<Script>
 let $id = (id) => document.getElementById(id);
var [login, register, form] = ["login", "register", "form"].map((id) =>
	$id(id)
);

[login, register].map((element) => {
	element.onclick = function () {
		[login, register].map(($ele) => {
			$ele.classList.remove("active");
		});
		this.classList.add("active");
		this.getAttribute("id") === "register"
			? form.classList.add("active")
			: form.classList.remove("active");
	};
});


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/login/index.blade.php ENDPATH**/ ?>