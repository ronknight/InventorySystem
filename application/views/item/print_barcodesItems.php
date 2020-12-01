<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta http-equiv=content-type content="text/html; charset=UTF-8">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mian M Imran Shah">
    <meta name="keyword" content="Inventory, Inventory Management, Stock Management">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>IIMS - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>

    <link href="<?= base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet"
          type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <!--dynamic table-->
    <link href="<?= base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet"/>
    <!-- <link href="<?= base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/data-tables/DT_bootstrap.css"/>

    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-fileupload/bootstrap-fileupload.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-datepicker/css/datepicker.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-timepicker/compiled/timepicker.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-colorpicker/css/colorpicker.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-datetimepicker/css/datetimepicker.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/jquery-multi-select/css/multi-select.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?= base_url(); ?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
    <link href="<?= base_url(); ?>assets/select2/dist/css/select2.min.css" rel="stylesheet"/>

    <!--right slidebar-->
    <link href="<?= base_url(); ?>assets/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style-responsive.css" rel="stylesheet"/>
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts-3d.js"></script>

    <script src="<?= base_url('assets/jquery-ui.js') ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/jquery-ui.css') ?>">

</head>

<body>

<section id="container">
    <!--header start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-10">
                    <section class="panel panel-primary">
                        <header class="panel-heading">
                            BARCODE PRINTING
                        </header>
                        <div class="panel-body">
                            <div class="box">
                                <div class="box-header no-print">
                                    <h2 class="blue"><i class="fa-fw fa fa-plus"></i>Print Barcode/Label</h2>

                                    <div class="box-icon">
                                        <ul class="btn-tasks">
                                            <li class="dropdown">
                                                <a title="" class="tip" id="print-icon"
                                                   onclick="window.print();return false;" href="#"
                                                   data-original-title="Print">
                                                    <i class="icon fa fa-print"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="well well-sm no-print">
                                                <div class="form-group">
                                                    <label for="add_item">Add Product</label> <select class="form-control" name="item_id" style="width: 250px;"
                                                                                                      onchange="return get_purchased_data(this.value)">
                                                        <option value="">Add Product</option>
                                                        <?php foreach ($products as $rows) :
                                                            ?>
                                                            <option value="<?= $rows->item_id; ?>"><?= $rows->item_name; ?> / <?= $rows->color ?>
                                                                / <?= $rows->size ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <form accept-charset="utf-8" method="post" data-toggle="validator"
                                                      id="barcode-print-form"
                                                      action="<?=base_url();?>item/printBarcodes"
                                                      novalidate="novalidate" class="bv-form">
                                                    <button type="submit" class="bv-hidden-submit"
                                                            style="display: none; width: 0px; height: 0px;"></button>
                                                    <input type="hidden" style="display:none;"
                                                           value="976c9a80d26bc54d0c229b97be1ae658" name="token">
                                                    <div class="controls table-controls">
                                                        <table
                                                            class="table items table-striped table-bordered table-condensed table-hover"
                                                            id="bcTable">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Bar Code</th>
                                                                <!--<th>Category</th>-->
                                                                <th>Item Name</th>
                                                                <th>Quantity</th>
                                                                <th>Purchase Rate</th>
                                                                <th>Total(P Amount)</th>
                                                                <th><i class="fa fa-trash"></i></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="purchase_entry_holder">

                                                            </tbody>
                                                        </table>
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="hidden" name="Action" value="Search">
                                                        <button type="submit"   class="btn blue"><i class="icon-ok"></i> Search</button>

                                                        <button class="btn btn-danger" id="reset" type="button">Reset
                                                        </button>
                                                    </div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div id="barcode-con">
                                                <button title="" class="btn btn-primary btn-block tip no-print"
                                                        onclick="PrintDiv();return false;" type="button"
                                                        data-original-title="Print"><i class="icon fa fa-print"></i>
                                                    Print
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                &nbsp;
                                <?php if(isset($_REQUEST['Action'])=="Search"){ ?>
                                <div id="print_data">
                                <div class="row">
                                    <?php
                                    $quantity;
                            for($i = 0;$i< $quantity; $i++){
                                    // foreach (array_chunk($barcodes, 3) as $rows) { ?>
                                    <?php foreach (array_chunk($barcodes,3) as $value) { ?>

                                            <?php foreach ($value as $value) { ?>
                                            <div class="col-md-4">
                                                   <!-- <strong>Product: <?//= $value->item_name ?></strong>--><br>


                                                    <img
                                                        src='<?= base_url() ?>img/barcode.php?barcode=<?= htmlentities($value->item_id) ?>&width=240&text=<?= htmlentities($value->item_name); ?><?= htmlentities($value->item_id); ?>'/>

                                               </div>
                                            <?php } ?>

                                    <?php } } }?>
                                        <button title="" class="btn btn-primary btn-block tip no-print" onclick="PrintDiv(); return false;"
                                                type="button" data-original-title="Print"><i class="icon fa fa-print"></i> Print
                                        </button>
</div>
                                </div>
                                <br>
                                <!--<table>
                                    <?php foreach (array_chunk($items, 3) as $row) { ?>
                                        <tr>
                                            <?php foreach ($row as $value) { ?>
                                                <td>
                                                    <strong>Product: <?= $value->item_name ?></strong><br>
                                                    <h5>Category : <?= $value->category_name ?></h5>
                                                    <h5>Rate : <?= $value->stock_rate ?></h5><br>
                                                    <img
                                                        src='<?= base_url() ?>img/barcode.php?barcode=<?= htmlentities($value->item_id) ?>&width=240&text=<?= htmlentities($value->item_id); ?>'/>

                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                </table>-->
                                </form>
                            </div>
                    </section>
                </div>
            </div>


        </section>
    </section>
<script>
    function PrintDiv() {
        var divToPrint = document.getElementById('print_data');

        var popupWin = window.open('', '_blank', 'width=750,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><head>');
        popupWin.document.write('<html><link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet"><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
        popupWin.document.close();
    }

</script>

    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript"
            src="<?= base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url(); ?>assets/typeahead.min.js" type="text/javascript"></script>

    <script src="<?= base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?= base_url(); ?>assets/js/owl.carousel.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.customSelect.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/respond.min.js"></script>

    <!-- Advanced -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/assets/fuelux/js/spinner.min.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <!--  <script type="text/javascript" src="<?= base_url(); ?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>-->
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
    <script type="text/javascript"
            src="<?= base_url(); ?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script src="<?= base_url(); ?>assets/select2/dist/js/select2.min.js"></script>
    <!-- Advanced ends-->

    <script type="text/javascript" language="javascript"
            src="<?= base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/assets/data-tables/DT_bootstrap.js"></script>
    <!--right slidebar-->
    <script src="<?= base_url(); ?>assets/js/slidebars.min.js"></script>
    <!--dynamic table initialization -->
    <!--<script src="<?= base_url(); ?>assets/js/dynamic_table_init.js"></script>-->
    <script src="<?= base_url(); ?>assets/js/editable-table.js"></script>
    <script src="<?= base_url(); ?>assets/js/dynamic_table_init.js"></script>
    <!--common script for all pages-->
    <script src="<?= base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?= base_url(); ?>assets/js/sparkline-chart.js"></script>
    <script src="<?= base_url(); ?>assets/js/easy-pie-chart.js"></script>
    <script src="<?= base_url(); ?>assets/js/count.js"></script>
    <!--this page  script only-->
    <script src="<?= base_url(); ?>assets/js/advanced-form-components.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap-ajax-typeahead-master/demo/assets/js/jquery.mockjax.js"></script>
    <script src="<?= base_url(); ?>assets/typeahead.min.js"></script>
    <script src="<?= base_url(); ?>assets/custom.js"></script>

    <script type="text/javascript">

        var total_number = 0;
        function get_purchased_data(product_id) {
            total_number++;

            $.ajax({
                url: '<?=base_url();?>index.php/item/get_data_for_barcodes/' + product_id + '/' + total_number,
                type: 'POST',
                dataType: 'html',
                success: function (response) {
                    //console.log(response.category_id);

                    $('#purchase_entry_holder').append(response);
                    //$('#purchase_entry_holder').html(response);
                    $("#barcode").val('');
                    $("#barcode").focus();
                    calculate_grand_total_for_purchase();

                }
            });
        }


        function calculate_single_entry_sum(entry_number) {

            //alert(entry_number);
            var quantity = $("#quantity_" + entry_number).val();
            var purchase_price = $("#unit_price_" + entry_number).val();
            //alert(quantity);
            //alert(purchase_price);
            var single_entry_total = quantity * purchase_price;
            //return false;
            //alert(single_entry_total);
            $("#single_entry_total_" + entry_number).val(single_entry_total);
            calculate_grand_total_for_purchase();

        }

        function balance_total() {


            var gtotal = $('#grand_total').val();
            // alert(gtotal);
            var pay = $('#payment').val();

            if (gtotal && pay) {
                var bal = gtotal - pay;
                //alert(bal);
                $("#balance").val(bal);
            }
        }

        function delete_row(entry_number) {

            //alert(entry_number);
            // return false;
            $("#entry_row_" + entry_number).remove();

            for (var i = entry_number; i < total_number; i++) {

                $("#serial_" + (i + 1)).attr("id", "serial_" + i);
                $("#serial_" + (i)).html(i);

                $("#quantity_" + (i + 1)).attr("id", "quantity_" + i);
                $("#quantity_" + (i)).attr({
                    onkeyup: "calculate_single_entry_sum(" + i + ")",
                    onclick: "calculate_single_entry_sum(" + i + ")"
                });

                $("#unit_price_" + (i + 1)).attr("id", "unit_price_" + i);
                $("#unit_price_" + (i)).attr({
                    onkeyup: "calculate_single_entry_sum(" + i + ")",
                    onclick: "calculate_single_entry_sum(" + i + ")"
                });

                $("#delete_button_" + (i + 1)).attr("id", "delete_button_" + i);
                $("#delete_button_" + (i)).attr("onclick", "delete_row(" + i + ")");

                $("#entry_row_" + (i + 1)).attr("id", "entry_row_" + i);
            }

            total_number--;
            calculate_grand_total_for_purchase();
        }


        function calculate_grand_total_for_purchase() {

            grand_total = 0;
            for (var i = 1; i <= total_number; i++) {
                grand_total += Number($("#single_entry_total_" + i).val());

            }
//alert(grand_total);
            $("#grand_totalnew").html(grand_total);
            $("#hidden_total").val(grand_total);
            $("#sub_total").val(grand_total);
            $("#items").html(total_number);

        }
        function calculate_discount(id) {

            var amount = $("#sub_total").val();
            discount = (id / 100) * amount;
            var net_payment = amount - discount;
            $("#net_payment").val(net_payment);


        }
        function calculate_change_amount() {
            get_grand_total = Number($("#net_payment").val());
            get_payment_amount = Number($("#payment").val());

            if (get_payment_amount > get_grand_total) {

                change_amount = get_payment_amount - get_grand_total;
                change_amount = change_amount.toFixed(2);
                $("#change_amount").attr("value", change_amount);
                get_change_amount = Number($("#change_amount").val());
                net_payable = get_payment_amount - get_change_amount;
                net_payable = net_payable.toFixed(2);
                $("#net_payment").attr("value", net_payable);
                $("#due_amount").attr("value", 0);
            }

            if (get_payment_amount < get_grand_total) {

                $("#change_amount").attr("value", 0);
                $("#net_payment").attr("value", get_payment_amount);
                get_due_amount = get_grand_total - get_payment_amount;
                get_due_amount = get_due_amount.toFixed(2);
                $("#due_amount").attr("value", get_due_amount);
            }

            if (get_payment_amount == get_grand_total) {

                $("#change_amount").attr("value", 0);
                $("#net_payment").attr("value", get_payment_amount);
                $("#due_amount").attr("value", 0);
            }
        }

    </script>
</body>
</html>