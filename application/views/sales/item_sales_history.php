<style>
/*
* Component: Box
* --------------
*/
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.box.box-primary {
    border-top-color: #92999E;
}
.box.box-info {
    border-top-color: #00c0ef;
}
.box.box-danger {
    border-top-color: #dd4b39;
}
.box.box-warning {
    border-top-color: #f39c12;
}
.box.box-success {
    border-top-color: #00a65a;
}
.box.box-default {
    border-top-color: #d2d6de;
}
.box.collapsed-box .box-body,
.box.collapsed-box .box-footer {
    display: none;
}
.box .nav-stacked > li {
    border-bottom: 1px solid #f4f4f4;
    margin: 0;
}
.box .nav-stacked > li:last-of-type {
    border-bottom: none;
}
.box.height-control .box-body {
    max-height: 300px;
    overflow: auto;
}
.box .border-right {
    border-right: 1px solid #f4f4f4;
}
.box .border-left {
    border-left: 1px solid #f4f4f4;
}
.box.box-solid {
    border-top: 0px;
}
.box.box-solid > .box-header .btn.btn-default {
    background: transparent;
}
.box.box-solid > .box-header .btn:hover,
.box.box-solid > .box-header a:hover {
    background: rgba(0, 0, 0, 0.1) !important;
}
.box.box-solid.box-default {
    border: 1px solid #d2d6de;
}
.box.box-solid.box-default > .box-header {
    color: #444444;
    background: #d2d6de;
    background-color: #d2d6de;
}
.box.box-solid.box-default > .box-header a,
.box.box-solid.box-default > .box-header .btn {
    color: #444444;
}
.box.box-solid.box-primary {
    border: 1px solid #3c8dbc;
}
.box.box-solid.box-primary > .box-header {
    color: #ffffff;
    background: #3c8dbc;
    background-color: #3c8dbc;
}
.box.box-solid.box-primary > .box-header a,
.box.box-solid.box-primary > .box-header .btn {
    color: #ffffff;
}
.box.box-solid.box-info {
    border: 1px solid #00c0ef;
}
.box.box-solid.box-info > .box-header {
    color: #ffffff;
    background: #00c0ef;
    background-color: #00c0ef;
}
.box.box-solid.box-info > .box-header a,
.box.box-solid.box-info > .box-header .btn {
    color: #ffffff;
}
.box.box-solid.box-danger {
    border: 1px solid #dd4b39;
}
.box.box-solid.box-danger > .box-header {
    color: #ffffff;
    background: #dd4b39;
    background-color: #dd4b39;
}
.box.box-solid.box-danger > .box-header a,
.box.box-solid.box-danger > .box-header .btn {
    color: #ffffff;
}
.box.box-solid.box-warning {
    border: 1px solid #f39c12;
}
.box.box-solid.box-warning > .box-header {
    color: #ffffff;
    background: #f39c12;
    background-color: #f39c12;
}
.box.box-solid.box-warning > .box-header a,
.box.box-solid.box-warning > .box-header .btn {
    color: #ffffff;
}
.box.box-solid.box-success {
    border: 1px solid #00a65a;
}
.box.box-solid.box-success > .box-header {
    color: #ffffff;
    background: #00a65a;
    background-color: #00a65a;
}
.box.box-solid.box-success > .box-header a,
.box.box-solid.box-success > .box-header .btn {
    color: #ffffff;
}
.box.box-solid > .box-header > .box-tools .btn {
    border: 0;
    box-shadow: none;
}
.box.box-solid[class*='bg'] > .box-header {
    color: #fff;
}
.box .box-group > .box {
    margin-bottom: 5px;
}
.box .knob-label {
    text-align: center;
    color: #333;
    font-weight: 100;
    font-size: 12px;
    margin-bottom: 0.3em;
}
.box > .overlay,
.box > .loading-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.box .overlay {
    z-index: 1010;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px;
}
.box .overlay > .fa {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -15px;
    margin-top: -15px;
    color: #000;
    font-size: 30px;
}
.box .overlay.dark {
    background: rgba(0, 0, 0, 0.5);
}
.box-header {
    color: #000;
    display: block;
    padding: 10px;
    position: relative;
    /*margin-bottom: 30px;*/
    /*background-color: #6C7A89;*/
}

.box-header-background {
    color: #FFF;
    background-color: #6C7A89;
}

.box-header-background-light {
    color: #000;
    background-color: #f0f3f5;
}

.box-background{
    background-color: #ececec;
    padding: 20px 0px 0px 10px;
}
.box-header:before,
.box-header:after {
    content: " ";
    display: table;
}
.box-header:after {
    clear: both;
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}
.collapsed-box .box-header.with-border {
    border-bottom: none;
}
.box-header > .fa,
.box-header > .glyphicon,
.box-header > .ion,
.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
    padding-left: 10px;
}
.box-header > .fa,
.box-header > .glyphicon,
.box-header > .ion {
    margin-right: 5px;
}
.box-header > .box-tools {
    position: absolute;
    right: 10px;
    top: 5px;
}
.box-header > .box-tools [data-toggle="tooltip"] {
    position: relative;
}
.box-header > .box-tools.pull-right .dropdown-menu {
    right: 0;
    left: auto;
}
.btn-box-tool {
    padding: 5px;
    font-size: 12px;
    background: transparent;
    box-shadow: none!important;
    color: #97a0b3;
}
.open .btn-box-tool,
.btn-box-tool:hover {
    color: #606c84;
}
.btn-box-tool:active {
    outline: none!important;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.no-header .box-body {
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}
.box-body > .table {
    margin-bottom: 0;
}
.box-body > .chart {
    position: relative;
    overflow: hidden;
    width: 100%;
}
.box-body > .chart svg,
.box-body > .chart canvas {
    width: 100%!important;
}
.box-body .fc {
    margin-top: 5px;
}
.box-body .full-width-chart {
    margin: -19px;
}
.box-body.no-padding .full-width-chart {
    margin: -9px;
}
.box-body .box-pane {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 3px;
}
.box-body .box-pane-right {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 0;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #ffffff;
}



/*********** Invoice  ************/

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

a {
    color: #0087C3;
    text-decoration: none;
}


#logo {
    float: left;
    margin-top: 8px;
}

#logo img {
    height: auto;
    width: auto;
}

#company {
    float: right;
    text-align: right;
}


#details {
    margin-bottom: 50px;
}

#client {
    padding-left: 6px;
    border-left: 6px solid #0087C3;
    float: left;
}
#shipping {
    padding-left: 6px;
    /*border-left: 6px solid #0087C3;*/
    float: left;
}

#client .to {
    color: #777777;
}

h2.name {
    font-size: 1.4em;
    font-weight: normal;
    margin: 0;
}

#invoice {
    float: right;
    text-align: right;
    width: 40%;
}

#invoice h1 {
    color: #0087C3;
    font-size: 2.4em;
    line-height: 1em;
    font-weight: normal;
    margin: 0  0 10px 0;
}

#invoice .date {
    font-size: 1.1em;
    color: #777777;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
}

table th,
table td {
    padding: 5px;
    background: #EEEEEE;
    text-align: center;
    border-bottom: 1px solid #FFFFFF;
}

table th {
    white-space: nowrap;
    font-weight: normal;
}

table td {
    text-align: right;
}

table td h3{
    color: #57B223;
    font-size: 1.2em;
    font-weight: normal;
    margin: 0 0 0.2em 0;
}

table .no {
    color: #000;
    font-size: 1.6em;
    background: #C4CBC2;
}

table .desc {
    text-align: left;
}

table .unit {
    background: #DDDDDD;
}

table .qty {
}

table .total {
    background: #DDD;
    color: #000;
}

table td.unit,
table td.qty,
table td.total {
    font-size: 1.2em;
}

table tbody tr:last-child td {
    border: none;
}

table tfoot td {
    padding: 10px 20px;
    background: #FFFFFF;
    border-bottom: none;
    font-size: 1.2em;
    white-space: nowrap;
    border-top: 1px solid #AAAAAA;
}

table tfoot tr:first-child td {
    border-top: none;
}

table tfoot tr:last-child td {
    color: #57B223;
    font-size: 1.4em;
    border-top: 1px solid #57B223;

}

table tfoot tr td:first-child {
    border: none;
}

#thanks{
    font-size: 2em;
    margin-bottom: 30px;
}

#notices{
    padding-left: 6px;
    border-left: 6px solid #0087C3;
}

#notices .notice {
    font-size: 1.2em;
}






</style>

<!--<section class="panel">
    <header class="panel-heading" style="background-color: black; color: white;">
        ADD PURCHASE
    </header>
    <div class="panel-body">

        <div class="adv-table editable-table table-responsive">
            <div class="clearfix">

            </div>
            <div class="space15"></div>
            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Item Name</th>
                                <th>In Stock</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            <tbody id="purchase_entry_holder">
                            <?php foreach ($history as $rows) { ?>
                                <tr>

                                    <td>1</td>
                                    <td><?=$rows->item_id?></td>
                                    <td><?=$rows->item_name?></td>
                                    <td><?=$rows->purchase_rate;?></td>
                                    <td><?=$rows->purchase_qty;?></td>
                                    <td><?=$rows->purchase_amount;?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="invoice-price">
                    <div class="invoice-price-left">
                    </div>
                    <div class="invoice-price-right">
                        <small>Total Amount : </small>
                         <?php // echo $amount->purchase_amount_total; ?>                </div>
                </div>


            </div>


        </div>
    </div>
</section>-->


 <div class="box">
        <div class="box-header box-header-background with-border">
            <h3 class="box-title">SALES Invoice</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <div class="box-tools">
                    <div role="group" class="btn-group">
                        <!-- <a class="btn btn-default " onclick="print_invoice('printableArea')">Print</a>
                         <a class="btn btn-default " href="http://codeslab.net/demo/easy_inventory/admin/purchase/pdf_invoice/107">PDF</a>-->
                    </div>
                </div>

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">


            <div id="printableArea">
                <link type="text/css" rel="stylesheet" href="http://codeslab.net/demo/easy_inventory/asset/css/invoice.css">
                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                        <main>
                            <div class="clearfix" id="details">
                                <div id="client">
                                    <div class="to">CUSTOMER:</div>
                                    <h2 class="name"><?php echo $amount->customer_name; ?></h2>
                                    <div class="address"><p></p>
                                    </div>
                                    <div class="address"><?php  echo $amount->phone_no;?></div>
                                    <div class="email"><?php echo $amount->email; ?></div>
                                </div>
                                <div id="invoice">
                                    <h1>INV <?php echo $amount->sales_no ?></h1>
                                    <div class="date">Date of Invoice: <?php echo $amount->sales_date; ?></div>
                                    <!--<div class="date">SALE by:</div>-->

                                </div>
                            </div>
                            <table cellspacing="0" cellpadding="0" border="0" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>PRODUCT CODE</th>
                                    <th>PRODUCT NAME</th>
                                    <th>UNIT PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =1; foreach ($salesHist as $rows) { ?>
                                    <tr>

                                        <td><?php echo $i; ?></td>
                                        <td><?=$rows->item_id?></td>
                                        <td><?=$rows->item_name?></td>
                                        <td><?=$rows->sales_rate;?></td>
                                        <td><?=$rows->sales_qty;?></td>
                                        <td><?=$rows->sales_amount;?></td>
                                    </tr>
                                <?php } $i++;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">SUBTOTAL</td>
                                    <td><?php  echo $amount->grand_total; ?></td>
                                </tr>

                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Discount</td>
                                    <td> <?php  echo $amount->sales_discount; ?></td>
                                </tr>


                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">GRAND TOTAL</td>
                                    <td> Rs. <?php  echo $amount->sales_amount_total; ?></td>
                                </tr>
                                </tfoot>
                            </table>

                        </main>


                    </div>
                </div>
            </div>


        </div><!-- /.box-body -->
    </div><!-- /.box -->

<script>
    function print_invoice(printableArea) {

        var table = $('#dataTables-example').DataTable();
        //table.destroy();

        //$('#dataTables-example').attr('id','none');
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        //$('table').attr('id','dataTables-example');
        location.reload(document.body.innerHTML = originalContents);
        //document.body.innerHTML = originalContents;
    }
</script>