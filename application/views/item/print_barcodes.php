<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url();?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link href="<?=base_url();?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.css" type="text/css">
    <!--dynamic table-->
    <link href="<?=base_url();?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <!-- <link href="<?=base_url();?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="<?=base_url();?>assets/assets/data-tables/DT_bootstrap.css" />

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link href="<?=base_url();?>assets/select2/dist/css/select2.min.css" rel="stylesheet" />

    <!--right slidebar-->
    <link href="<?=base_url();?>assets/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/style-responsive.css" rel="stylesheet" />
    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts-3d.js"></script>

    <script src="<?=base_url('assets/jquery-ui.js')?>"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/jquery-ui.css')?>">

</head>

<body>

<section id="container" >
    <!--header start-->
    <section id="main-content">
        <section class="wrapper">
<div class="row">
    <div class="col-md-12">
        <section class="panel panel-primary">
            <header class="panel-heading">
                BARCODE PRINTING
            </header>
            <div class="panel-body">
               <form method="post" action="get_catItems">
                <label class="label label-info">Category</label>
                <select data-error="Category is required or need attention." required="required" data-placeholder="Select Category" id="category" class="tip chzn-select span4" name="category">
                    <option value="">Select Category</option>
                    <option value="1">Category 1</option>
                    <option selected="selected" value="2">wewewewe</option>
                    <option value="3">jewellery</option>
                    <option value="4">makanan</option>
                    <option value="5">minuman</option>
                    <option value="6">handy zubehör</option>
                </select>
               <input type="submit" name="submit" class="btn btn-primary">
                   <a href="<?=base_url();?>item/list_items" class="btn btn-danger">Back</a>
               </form>
                <!--<div class="row">
                    <?php //foreach($items as $results):?>
                    <div class="col-md-4">
                        <h4>IIMS</h4>
                        <strong><//=$results->item_name?></strong><br>
                        <img src='<?//=base_url()?>img/barcode.php?barcode=<?//=$results->item_id?>&width=240&text=<?//=$results->item_id;?>' />
                    </div>


                    <?php //endforeach;?>
                </div>-->
<br>
                &nbsp;
                <table id="get_print">
                    <?php foreach (array_chunk($items, 3) as $row) { ?>
                        <tr>
                            <?php foreach ($row as $value) { ?>
                                <td>
                                    <strong>Product: <?=$value->item_name?></strong><br>
                                    <h5>Category : <?=$value->category_name?></h5>
                                    <h5>Rate : <?=$value->stock_rate?></h5><br>
                                    <img src='<?=base_url()?>img/barcode.php?barcode=<?=htmlentities($value->item_id)?>&width=240&text=<?=htmlentities($value->item_id);?>' />

                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>


            </div>
        </section>
    </div>
</div>
<button title="" class="btn btn-primary btn-block tip no-print" onclick="window.print('get_print');return false;" type="button" data-original-title="Print"><i class="icon fa fa-print"></i> Print</button>

            </section>
        </section>


    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url(); ?>assets/typeahead.min.js" type="text/javascript"></script>

    <script src="<?=base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?=base_url();?>assets/js/owl.carousel.js" ></script>
    <script src="<?=base_url();?>assets/js/jquery.customSelect.min.js" ></script>
    <script src="<?=base_url();?>assets/js/respond.min.js" ></script>

    <!-- Advanced -->
    <script type="text/javascript" src="<?=base_url();?>assets/assets/fuelux/js/spinner.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <!--  <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>-->
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script src="<?=base_url();?>assets/select2/dist/js/select2.min.js"></script>
    <!-- Advanced ends-->

    <script type="text/javascript" language="javascript" src="<?=base_url();?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/assets/data-tables/DT_bootstrap.js"></script>
    <!--right slidebar-->
    <script src="<?=base_url();?>assets/js/slidebars.min.js"></script>
    <!--dynamic table initialization -->
    <!--<script src="<?=base_url();?>assets/js/dynamic_table_init.js"></script>-->
    <script src="<?=base_url();?>assets/js/editable-table.js"></script>
    <script src="<?=base_url();?>assets/js/dynamic_table_init.js"></script>
    <!--common script for all pages-->
    <script src="<?=base_url();?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?=base_url();?>assets/js/sparkline-chart.js"></script>
    <script src="<?=base_url();?>assets/js/easy-pie-chart.js"></script>
    <script src="<?=base_url();?>assets/js/count.js"></script>
    <!--this page  script only-->
    <script src="<?=base_url();?>assets/js/advanced-form-components.js"></script>
    <script src="<?=base_url();?>assets/bootstrap-ajax-typeahead-master/demo/assets/js/jquery.mockjax.js"></script>
    <script src="<?=base_url();?>assets/typeahead.min.js"></script>
    <script src="<?=base_url();?>assets/custom.js"></script>

    <script>





     </script>

</body>
</html>