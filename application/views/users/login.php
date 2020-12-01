 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JHT | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/main.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/iCheck/square/blue.css">


</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b><?php $logo = $this->db->get_where('company_information', array('id' => 1))->row(); ?>
                <img style="border-radius:100%;width:300px;height:200px;" src="<?= base_url() ?>uploads/images/<?= $logo->logo; ?>"></b></a>
    </div>

    <?php if ($this->session->flashdata('register')) {
        echo "<div class='alert alert-success'>" . $this->session->userdata('register') . "</div>";
        $this->session->sess_destroy();
    } else {

    } ?>
    <!-- /.login-logo -->
    <?php if ($this->session->flashdata('msg')) {
        echo "<div class='alert alert-danger'>" . $this->session->flashdata('msg') . "</div>";

    } else {

    } ?>
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $attributes = array('class' => 'email', 'id' => 'myform', 'method' => 'post');
        echo form_open('users/loginauthen', $attributes); ?>
        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="u_email" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="u_password" autocomplete="off" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
        <?php form_close(); ?>


        <!-- <a href="<?= base_url('users/register') ?>" class="text-center">Register a new membership</a> -->
        <hr>
        <!-- <p><strong>Username:</strong> superadmin | <strong>Password:</strong> admin</p> -->
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
