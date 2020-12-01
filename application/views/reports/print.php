<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JHT Print</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="icon" href="<?=base_url()?>uploads/images/jht_logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/main_theme.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!--Sweetalert & Toastr-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr.css">

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script  src="<?= base_url() ?>assets/toastr.js"> </script>

    <!-- Google Font -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/select2.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="skin-green">
<div class="wrapper" style="display: block;">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table id="example2" class="table">
          <thead>
          <tr>
            <!-- <th>Part Number</th> -->
            <!-- <th style="font-size: 25px; font-weight: bold;">Name</th> -->
            <th>Category</th>
            <th>Part Number</th>
            <th>Size</th>
            <th>Brand</th>
            <th>Type</th>
            <!-- <th>Material</th> -->
            <th>Price</th>
            <th>Sale Price</th>
            <!-- <th style="font-size: 25px; font-weight: bold;">OrigPrice</th> -->
            <!-- <th style="font-size: 25px; font-weight: bold;">Price</th> -->
          </tr>
          </thead>
          <tbody>
                  <?php
                    foreach ($item as $result) {
                    ?>  
                    <tr>
                        <!-- <td><?php echo $item->part_number;?></td> -->
                        <!-- <td style="font-size: 25px;"><?php echo $item->name;?></td> -->
                        <td style="text-align: left; vertical-align: left"><?php echo $result->category_name;?></td>
                        <td style="text-transform:uppercase; text-align: left; vertical-align: middle"><?php echo $result->article_no;?></td>
                        <td style="text-align: left; vertical-align: middle"><?php echo $result->item_name;?></td>
                        <td style="text-transform:uppercase; text-align: left; vertical-align: middle"><?php echo $result->size;?></td>
                        <td style="text-transform:uppercase; text-align: left; vertical-align: middle"><?php echo $result->color;?></td> 
                        <!-- <td><?php echo $item->material;?></td> -->
                        <!-- <td style="font-size: 25px;"><?php echo $result->brand;?></td> -->
                        <td style="text-align: left; vertical-align: middle"><?php echo number_format($result->purchase_rate,2);?></td> 
                        <td></td>
                        <!-- <td style="text-align: left; vertical-align: middle"><?php echo number_format($result->stock_rate,2);?></td> -->
                        <!-- <td style="color:red; font-size: 25px; font-weight: bold;"><?php echo $result->price;?>.00</td>  -->
                        
                        
                    </tr>
                    <?php }
                    ?> 
                  </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

<style>
  
thead, th, td {
  border-style: solid;
  border-width: 1px;
}

table {
  border-collapse: collapse;
  margin-left: 2%;
  margin-right: 2%;
  width: auto;     
  border: 0;     
  padding: 0;     
  float: none;     
  position: static;     
  overflow: visible; 
}

th {
  height: 50px;
}
</style>
<script src="<?= base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Morris.js charts
<script src="<?= base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>-->
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!--<script src="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!-- jQuery Knob Chart
<script src="<?= base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>-->
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script
    src="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll
<script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->
<!-- FastClick -->
<script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/main.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="<?=base_url()?>assets/bower_components/ckeditor/ckeditor.js"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': false,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        })
    })
</script>

<script>
    $(function () {
        $('#trollSelect').select2({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            autoclose: true
        })
        $.ajaxSetup({cache: false});
        $('#search').keyup(function () {
            $('#result').html('');
            $('#state').val('');
            var img = "<?=base_url()?>";
            var searchField = $('#search').val();
            var expression = new RegExp(searchField, "i");
            $.getJSON('<?=base_url()?>dashboard/getSearchData', function (data) {
                $.each(data, function (key, value) {
                    if (value.EMP_NAME.search(expression) != -1) {
                        $('#result').append('<li class="list-group-item link-class">' +
                            '<img src="' + img + '' + value.EMP_PIC + '" height="40" width="40" class="img-thumbnail" /><a href="' + img + 'employees/employee_detail/' + value.EMP_ID + '">' + value.EMP_NAME + '</a> | <span class="text-muted">' + value.EMP_CELL + '</span></li>');
                    }
                });
            });
        });

        $('#result').on('click', 'li', function () {
            var click_text = $(this).text().split('|');
            $('#search').val($.trim(click_text[0]));
            $("#result").html('');
        });
        
        
        
        
    });

    $(function(){
        <?php if($this->session->flashdata("success")): ?>
        toastr.success("<?= $this->session->flashdata("success") ?>");
        <?php elseif($this->session->flashdata("error")): ?>
        toastr.error("<?= $this->session->flashdata("error") ?>");
        <?php elseif($this->session->flashdata("info")): ?>
        toastr.info("<?= $this->session->flashdata("info") ?>");
        <?php elseif($this->session->flashdata("warning")): ?>
        toastr.warning("<?= $this->session->flashdata("warning") ?>");
        <?php endif;?>
    });

</script>

</body>
</html>