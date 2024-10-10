<?php require_once('./config.php') ?>
 <?php require_once('inc/header.php') ?>
 <body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height: auto;">
    <div class="wrapper">

     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
     <?php require_once('inc/topBarNav.php') ?>
     <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<body class="hold-transition login-page">
  <script>
    start_loader()
  </script>
   <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
    <?php endif;?>
<br><br>
<div class="login-box" style="max-width: fit-content; margin-left: auto; margin-right: auto;">

  <!-- /.login-logo --> 
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./login.php" class="h1 text-decoration-none"><b>User Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="cclogin-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" autofocus placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row align-item-end">
          <div class="col-8">
            <a href="<?= base_url.'./vendor/login.php' ?>">NGO Login</a><br><br>
            <a href="<?= base_url.'./admin/login.php' ?>">Admin Login</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <br><br><br><br>
          <div class="col-12 text-center">
            Not a Member Yet!
          <a href="<?= base_url.'./register.php' ?>">Register</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<br><br>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(function(){
    end_loader();
    $('#cclogin-frm').submit(function(e){
        e.preventDefault();
        var _this = $(this)
            $('.err-msg').remove();
        var el = $('<div>')
            el.addClass("alert err-msg")
            el.hide()
        if(_this[0].checkValidity() == false){
            _this[0].reportValidity();
            return false;
            }
        start_loader();
        $.ajax({
            url:_base_url_+"classes/Login.php?f=login_client",
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            dataType: 'json',
            error:err=>{
                console.error(err)
                el.addClass('alert-danger').text("An error occured");
                _this.prepend(el)
                el.show('.modal')
                end_loader();
            },
            success:function(resp){
                if(typeof resp =='object' && resp.status == 'success'){
                    location.href= './';
                }else if(resp.status == 'failed' && !!resp.msg){
                    el.addClass('alert-danger').text(resp.msg);
                    _this.prepend(el)
                    el.show('.modal')
                }else{
                    el.text("An error occured");
                    console.error(resp)
                }
                $("html, body").scrollTop(0);
                end_loader()

            }
        })
    })
  })
</script>

</body>
</html>
<?php require_once('inc/footer.php') ?>
