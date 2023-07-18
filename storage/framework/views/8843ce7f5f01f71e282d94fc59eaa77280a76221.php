<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<Style>
    * {
    box-sizing: border-box;
    outline: none;
    }
    body {
    margin: 0;
    font-family: Sans-serif;
    overflow: hidden;
    }
    .dashboard {
    height: 100vh;
    display: flex;
    }
    .left {
    height: 100%;
    display: flex;
    }
    .sidebar {
    width: 80px;
    height: 100%;
    background-image: linear-gradient(
        -225deg,
        #5271c4 0%,
        #b19fff 48%,
        #eca1fe 100%
    );
    display: flex;
    }
    .wrapper {
    padding: 0 25px;
    height: 100vh;
    display: flex;
    flex-direction: column;
    }

    .items {
    margin-top: 50px;
    }

    .items > img {
    margin-bottom: 25px;
    }

    .profile > img {
    border-radius: 50%;
    width: 305x;
    height: 35px;
    border: 1px solid white;
    }
    .profile {
    margin-top: auto;
    }
    .menu {
    margin-top: 20px;
    }
    .navigation {
    width: 270px;
    border-right: 1px solid #ddd;
    }
    .abilan > img {
    width: 120px;
    margin-bottom: 30px;
    margin-left: -8px;
    }

    .wrapper2 {
    padding: 0 25px;
    height: 100%;
    overflow: auto;
    }

    .compose {
    width: 150px;
    text-align: center;
    height: 50px;
    border-radius: 13px;
    border: 1px solid;
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
    color: white;
    font-size: 16px;
    padding-left: 20px;
    position: relative;
    }
    .folders {
    margin-top: 30px;
    color: #b8b8b8;
    font-size: 14px;
    }
    .folder-icons {
    margin-top: 20px;
    display: flex;
    align-items: center;
    }

    .icon-name1 {
    margin-left: 10px;
    color: #8b47a9;
    }

    .icon-name {
    margin-left: 10px;
    color: grey;
    }
    .names {
    margin-left: 10px;
    font-weight: bold;
    font-size: 15px;
    }

    .avatar > img {
    width: 35px;
    border-radius: 10px;
    }
    .section1 {
    margin-top: 25px;
    margin-bottom: 10px;
    }

    .btn {
    border-radius: 3px;
    border: 1px;
    padding: 2px 20px 2px 20px;
    height: 30px;
    font-weight: bold;
    position: relative;
    }

    .buton1 {
    background-color: #f8f1ff;
    color: #a84bfe;
    }
    .buton2 {
    background-color: #fff1f6;
    color: #fe4b85;
    }
    .buton3 {
    background-color: #eef0ff;
    color: #2632fe;
    }
    .buton4 {
    background-color: #ebfbf8;
    color: #01c991;
    }
    .tag {
    position: absolute;
    left: 8px;
    top: 10px;
    }
    .plus > img {
    width: 16px;
    height: 16px;
    }
    .plus {
    left: 10px;
    position: absolute;
    }
    .buton-span {
    border-radius: 15px;
    padding: 5px 10px;
    border: 1px;
    color: white;
    background-color: #fe365c;
    box-shadow: 0px 0px 10px 2px #f7bfc9;
    margin-left: 70px;
    }
    .online {
    position: absolute;
    top: -5px;
    right: -5px;
    border: 4px solid #fbfcf8;
    box-sizing: unset;
    background-color: #02c997;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    }
    .avatar {
    position: relative;
    }
    .red {
    background-color: #fe4663;
    }

    .big-inbox {
    font-size: 25px;
    font-weight: 500;
    }
    .right-side {
    background-color: #f2f3f7;
    width: 100%;
    padding: 8px 30px;
    display: flex;
    flex-direction: column;
    }
    .right-body {
    flex: 1;
    display: flex;
    overflow: hidden;
    }
    .top-bar {
    display: flex;
    align-items: center;
    text-align: center;
    }
    .top-bar-justify {
    display: flex;
    justify-content: space-between;
    width: 100%;
    }
    .top-bar-items {
    align-items: center;
    display: flex;
    justify-content: space-between;
    width: 180px;
    }
    .profile2 > img {
    border-radius: 50%;
    width: 28x;
    height: 28px;
    border: 2px solid white;
    margin-left: 25px;
    margin-right: 5px;
    }
    .profile2 {
    display: flex;
    align-items: center;

    width: 120px;
    }
    .icon-name5 {
    font-size: 13px;
    color: grey;
    }
    .new-hr {
    border: 0.6px solid #ddd;
    margin-bottom: 25px;
    }
    .notif {
    position: relative;
    }
    .pink {
    background-color: #fe96db;
    width: 7px;
    height: 7px;
    margin: -3px;
    }

    .checkbox > input {
    width: 20px;
    height: 20px;
    }

    .right-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    }

    .down-arrow > img {
    width: 12px;
    height: 14px;
    margin-bottom: -2px;
    margin-left: 5px;
    }
    .new:hover {
    background-color: white;
    }
    .new {
    border-radius: 4px;
    border: none;
    width: 40px;
    height: 30px;
    background-color: #edeef5;
    }
    .check {
    display: flex;
    align-items: center;
    }
    .has-search .text {
    padding-left: 30px;
    margin-left: 45px;
    }
    .form {
    display: flex;
    align-items: center;
    }
    .searchIcon {
    margin-left: 53px;
    position: absolute;
    margin-top: 2px;
    }
    .text {
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 280px;
    height: 30px;
    background-color: #edeef5;
    }
    .buttons {
    display: flex;
    }
    .middle-buttons {
    display: flex;
    }

    .scroll-cards {
    width: 370px;
    height: 100%;
    overflow: auto;

    padding: 20px 0px 5px 0px;
    }
    .card {
    background-color: white;
    border-radius: 4px;
    margin-top: 8px;
    margin-bottom: 5px;
    padding: 25px 25px 15px 25px;
    transition: 0.3s;
    }
    .card:hover {
    box-shadow: 5px 1px 20px 1px #ddd;
    transform: scale(0.96);
    }

    .mail-names {
    color: grey;
    font-weight: bold;
    font-size: 15px;
    margin-left: 10px;
    }

    .mails {
    display: flex;
    align-items: center;
    }
    .mails > img {
    width: 35px;
    border-radius: 10px;
    }
    .mail-info {
    margin: 10px 65px;
    margin-left: 0px;
    line-height: 1.7;
    font-weight: 600;
    }
    .check1 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100px;
    }
    .bottom-info {
    display: flex;
    justify-content: space-between;
    }
    .date {
    color: grey;
    }
    .person {
    width: 25px;
    height: 25px;
    border-radius: 10px;
    text-align: center;
    color: white;
    padding: 5px 3px 0px;
    }
    .border1 {
    background-color: #5f4bfd;
    }
    .border2 {
    background-color: #e32553;
    }
    .border3 {
    background-color: #01c828;
    }
    .message {
    margin: 20px 10px;
    flex: 1;
    background-color: white;
    padding: 25px;
    overflow: auto;
    }
    .mes-date {
    color: grey;
    font-size: 14px;
    }
    .who {
    font-weight: 600;
    }
    .title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 10px;
    }

    .message-from {
    margin-top: 20px;
    color: grey;
    font-size: 17px;
    }
    .attachment-last {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 350px;
    }
    .att-write {
    color: grey;
    }
    .buton0 {
    background-color: #ecefff;
    color: #7175c0;
    }
    .buton9 {
    background-color: #e0f8e3;
    color: #79b992;
    }

    .btn1 {
    border-radius: 3px;
    border: 1px;
    height: 25px;
    font-weight: bold;
    }
    .inside-img > img {
    width: 100px;
    border-radius: 10px;
    margin-top: 20px;
    }
    .inside-img > img:hover {
    transform: scale(0.95);
    }
    .son-buton {
    width: 100px;
    height: 68px;
    border-radius: 10px;
    border: 1px;
    margin-top: 17px;
    background-color: #f5e9f9;
    color: #b79ed8;
    font-weight: 500;
    font-size: 20px;
    }
    .son-images {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 520px;
    }
    .btn2 {
    margin-top: 40px;
    border-radius: 3px;
    border: 1px;
    height: 35px;
    padding: 5px 30px;
    color: white;
    position: relative;
    }
    .butona {
    background-color: #8e44ad;
    }
    .butonb {
    background-color: #fe4a85;
    }
    .butona:hover {
    background-color: #892bb4;
    }
    .butonb:hover {
    background-color: #ec195f;
    }
    ::-webkit-scrollbar {
    width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #555;
    }

</style>


<div class="dashboard">
    <div class="left">
  
      <div class="navigation">
        <div class="wrapper2">
          <div class="abilan">
            <BR>
            <B>SENJANI PHOTOGRAPHY</B>
            <BR>
            <BR>
          </div>
          <a href="/dashboard"> <img src="../../../storage/foto-foto/BUTTON.png" style="width:120px;height:40px"/></a>
            
          <div class="folders">Users</div>
          <div class="folder-icons" onclick="location.href='<?php echo e(route('user.index')); ?>';">
        <div class="icon1">
              <img src="https://i.ibb.co/qdgf3TJ/envelope.png" />
            </div>
            <div class="icon-name1">Administrator
             
            </div>
          </div>

         

          <div class="folder-icons" onclick="location.href='<?php echo e(route('customer.index')); ?>';">
            <div class="icon1">
              <img src="https://i.ibb.co/qdgf3TJ/envelope.png" />
            </div>
            <div class="icon-name1">Customer
              
            </div>
          </div>
          <div class="folders">Folders</div>

          <div class="folder-icons"  onclick="location.href='<?php echo e(route('team.index')); ?>';">
            <div class="icon1">
              <img src="https://i.ibb.co/6ZH9kK3/star.png" />
            </div>
            <div class="icon-name">Team</div>
          </div>


          <div class="folder-icons"  onclick="location.href='<?php echo e(route('galery.index')); ?>';">
            <div class="icon1">
              <img src="https://i.ibb.co/6ZH9kK3/star.png" />
            </div>
            <div class="icon-name">Galery</div>
          </div>

          <div class="folder-icons"  onclick="location.href='<?php echo e(route('paket.index')); ?>';"> 
            <div class="icon1">
              <img src="https://i.ibb.co/2yLfX9W/sent-mail.png" />
            </div>
            <div class="icon-name">Package</div>
          </div>
          <div class="folder-icons"  onclick="location.href='<?php echo e(route('rekening.index')); ?>';">
            <div class="icon1">
              <img src="https://i.ibb.co/6ZH9kK3/star.png" />
            </div>
            <div class="icon-name">Rekening</div>
          </div>

          <div class="folders">Orders</div>
          <div class="folder-icons"  onclick="location.href='<?php echo e(route('booking.index')); ?>';">
            <div class="icon1">
              <img src="https://i.ibb.co/z4QhcbD/email.png" />
            </div>
            <div class="icon-name">Booking</div>
          </div>
         
          <div class="folders">
           Invoices
          </div>
          <div class="folder-icons"  onclick="location.href='<?php echo e(route('booking.laporan-booking')); ?>';">
            <div class="icon1">
              <img src="https://i.ibb.co/z4QhcbD/email.png" />
            </div>
            <div class="icon-name">Booking</div>
          </div>

          <br>
          <br>
          <br>
          <form action="/logout" method="POST">
            <?php echo csrf_field(); ?>
            <button class="btn btn-danger">Logout</button>
        </form>

          
        
        </div>
      </div>
    </div>
    <div class="right-side">
      <div class="right-header">
        <div class="top-bar">
          <div class="top-bar-justify">
            <!-- <div class="big-inbox">
              Administrator
            </div> -->
  
            <div class="top-bar-items">
              <div class="notif">
                <!-- <div class="online pink"> -->
                <!-- <img src="https://i.ibb.co/VJm73Hz/notifications-button.png" /> -->
              </div>
              
            </div>
          </div>
          <div class="profile2">
            <div class="icon-name5">Administrator</div>
          </div>
        </div>
        <hr class="new-hr">
      
      </div>
      <div class="right-body">
        <div class="message" >
  
        <?php echo $__env->yieldContent('container'); ?>
        </div>
      </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <?php /**PATH C:\Users\Zahlan Nugraha\Downloads\photography\photography\resources\views/dashboard/layouts/main.blade.php ENDPATH**/ ?>