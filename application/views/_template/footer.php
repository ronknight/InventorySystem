
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <!-- <div class="pull-right hidden-xs">
        <b>Version</b> 1.4.0
    </div>
    <strong>Ongoing Develop System @ <a href="#">Jeanica Hydraulic Trading</a>.</strong> -->
</footer>
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
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
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': false
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
