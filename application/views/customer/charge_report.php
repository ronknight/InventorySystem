<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM box-->
        <div class="box">
            
                <!-- END FORM-->
                <?php if (isset($_REQUEST['Action']) == "Search"){ ?>
            <div class="row ">
                <div class="col-md-8 col-md-offset-2">
                    <form method="post" action="#">
                        <div class="btn-group pull-right">
                            <!-- <a onclick="window.print()" class="btn btn-primary">Print</a> -->
                            <input name="start_date" value="2017-04-05" type="hidden">
                            <input name="end_date" value="2017-04-05" type="hidden">
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <div id="printableArea">
                <link href="<?= base_url(); ?>assets/sales_report.css" rel="stylesheet" type="text/css">
                    <div class="row ">
                     <div class="col-md-6 col-md-offset-0">
                            <header class="clearfix">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div id="logo">
                                        <img style="width:100px;height:50px;" src="<?=base_url()?>uploads/images/<?=$company->logo;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <center>
                                            <h1 style = "text-transform:uppercase; font-weight: 900; max-width: 100%" ><?=$company->name;?></h1>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <center>
                                        <div>
                                            <div><?=$company->address; ?></div>
                                            <div>Tel. Fax: <?=$company->fax_no;?> Mobile No. <?=$company->contact;?></div>
                                            <div>E-mail Add.: <?=$company->email;?></div>
                                        </div>
                                    </center>
                                </div>
                            </header>
                            <hr>
                            <p style="color: red !important;">Duplicate Copy</p>

                            <main class="invoice_report">
                                <center>
                                    <h2 style="text-decoration: underline; font-weight: 900; max-width: 100%">STATEMENT OF ACCOUNT</h2>
                                </center>
                                <!-- <h4>Period of: <strong><?php echo date('M d Y',strtotime($start)) ?></strong></h4> -->
                                <h4>Period from: <strong><?php echo date('M d Y',strtotime($start)) ?></strong> to
                                    <strong><?php echo date('M d Y',strtotime($end)) ?></strong></h4>
                                <!-- <br/> -->
                                <h4>Customer: <strong style="text-indent: 2000px;">
                                    <?php foreach($customer as $cus){
                                        if($cus->customer_id == $uri){
                                            echo $cus->customer_name;
                                    ?></strong>
                                </h4>
                                <h4>Address: <strong><?php echo $cus->address; ?></strong></h4>
                                <h4>Terms: NET 30</h4>
                                    <?php }}?>
                                <br/>
                                <br/>

                                <?php
                                $key = 0;
                                $total_cost = 0;
                                $total_sell = 0;
                                $total_profit = 0;
                                ?>
                               
                                    <!-- <table>
                                        <thead>
                                        <tr>
                                            <th class="no text-right">INVOICE <?php echo $invoice_no ?></th>
                                            <th class="desc">Invoice
                                                Date: <?php echo date('Y-m-d', strtotime($order[$key]->sales_date)) ?></th>
                                        </tr>
                                        </thead>
                                    </table> -->
                                    <table border="0" cellspacing="0" cellpadding="0" class="table-bordered ">
                                        <thead>
                                        <tr style="background-color: #ECECEC">
                                            <th class="desc" style="text-align: center;">DATE</th>
                                            <th class="unit text-center">SALES INVOICE</th>
                                            <th class="unit text-center">PUR. ORDER NO.</th>
                                            <th class="total text-center ">TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total = 0; ?>
                                        <?php foreach ($invoice as $v_order) :
                                         ?>
                                            <tr>
                                                <td class="unit text-center"><?php echo date('M-d-Y',strtotime($v_order->sales_date)) ?>
                                                </td>
                                                <td class="unit text-center"><?php echo $v_order->payment_mode?></td>
                                               <!--  <?php
                                               // $sales_qty = $v_order->sales_qty;
                                               // $total_buying_price += $v_order->purchase_rate;
                                               $t = $sales_qty * $total_buying_price;
                                                ?> -->
                                                <td class="unit text-center"><?php echo $v_order->po_number ?></td>
                                                <td class="unit text-right"><?php echo number_format($v_order->sales_amount_total,2) ?></td>
                                                <!-- <td class="total"><?php echo number_format($v_order->sales_amount); ?></td> -->
                                            </tr>
                                            <!-- <?php $total_cost += $v_order->purchase_rate * $sales_qty; ?> -->

                                            <?php
                                            $total += $v_order->sales_amount_total;
                                        endforeach;
                                        ?>


                                        </tbody>
                                        <tfoot>

                                       <!--  <?php if ($order[$key]->sales_discount != 0): ?>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="2">Discount Amount</td>
                                                <td><?php echo number_format($order[$key]->sales_discount, 2) ?></td>
                                            </tr>
                                        <?php endif; ?> -->

                                        <tr>
                                            <td colspan="2"></td>
                                            <td style="text-align: right;" colspan="1">Total:</td>
                                            <td style="color: red !important; text-align: right;"><?php echo number_format($total,2); ?></td>
                                        </tr>
                                       <!--  <tr>
                                            <td colspan="3"></td>
                                            <td colspan="2">Profit</td>
                                            <td><?php echo number_format($order[$key]->grand_total - $t, 2) ?></td>
                                        </tr> -->
                                        </tfoot>
                                        <?php
                                        ?>

                                    </table>
                                    <?php $key++; ?>

                                    

                               <!--  <?php if (!empty($invoice_details)) : ?>
                                    <table>
                                        <thead>
                                        <tr style="background-color: #ccc">
                                            <th class="no text-left">Total Cost</th>
                                            <th class="no text-left">Total Sell</th>
                                            <th class="no text-left">Total Profit</th>
                                        </tr>
                                        </thead>
                                        <tbody style="background-color: #c5c5c5">
                                        <td class="total"><?php echo number_format($total_cost, 2) ?></td>
                                        <td class="total"><?php echo number_format($total_sell, 2) ?></td>
                                        <td class="total"><?php echo number_format($total_profit, 2) ?></td>
                                        </tbody>
                                    </table>

                                <?php else: ?>
                                    <strong>There is no record for display</strong>
                                <?php endif ?> -->


                            </main>
                            <hr>
                            <footer>
                                <strong>NOTE: Received the statement for verification and payment
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="column" >
                                            <p>Prepared By:</p>
                                            <br/>
                                            <br/>
                                            <p style="text-decoration: overline;">Mechille Bartolaba</p>
                                        </div>
                                        <div class="column" >
                                            <p>Received By:</p>
                                            <br/>
                                            <br/>
                                            <p style="text-decoration: overline;">Signature Over Printed Name</p>
                                        </div>
                                    </div>
                                
                            </footer>


                        </div>
                          <div class="col-md-6 col-md-offset-0">
                            <header class="clearfix">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div id="logo">
                                        <img style="width:100px;height:50px;" src="<?=base_url()?>uploads/images/<?=$company->logo;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <center>
                                            <h1 style = "text-transform:uppercase; font-weight: 900; max-width: 100%" ><?=$company->name;?></h1>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <center>
                                        <div>
                                            <div><?=$company->address; ?></div>
                                            <div>Tel. Fax: <?=$company->fax_no;?> Mobile No. <?=$company->contact;?></div>
                                            <div>E-mail Add.: <?=$company->email;?></div>
                                        </div>
                                    </center>
                                </div>
                            </header>
                            <hr>
                            <br/>
                            <main class="invoice_report">
                                <center>
                                    <h2 style="text-decoration: underline; font-weight: 900; max-width: 100%">STATEMENT OF ACCOUNT</h2>
                                </center>
                                <!-- <h4>Period of: <strong><?php echo date('M d Y',strtotime($start)) ?></strong></h4> -->
                                <h4>Period from: <strong><?php echo date('M d Y',strtotime($start)) ?></strong> to
                                    <strong><?php echo date('M d Y',strtotime($end)) ?></strong></h4>
                                <!-- <br/> -->
                                <h4>Customer: <strong style="text-indent: 2000px;">
                                    <?php foreach($customer as $cus){
                                        if($cus->customer_id == $uri){
                                            echo $cus->customer_name;
                                    ?></strong>
                                </h4>
                                <h4>Address: <strong><?php echo $cus->address; ?></strong></h4>
                                <h4>Terms: NET 30</h4>
                                    <?php }}?>
                                <br/>
                                <br/>

                                <?php
                                $key = 0;
                                $total_cost = 0;
                                $total_sell = 0;
                                $total_profit = 0;
                                ?>
                               
                                    <!-- <table>
                                        <thead>
                                        <tr>
                                            <th class="no text-right">INVOICE <?php echo $invoice_no ?></th>
                                            <th class="desc">Invoice
                                                Date: <?php echo date('Y-m-d', strtotime($order[$key]->sales_date)) ?></th>
                                        </tr>
                                        </thead>
                                    </table> -->
                                    <table border="0" cellspacing="0" cellpadding="0" class="table-bordered ">
                                        <thead>
                                        <tr style="background-color: #ECECEC">
                                            <th class="desc" style="text-align: center;">DATE</th>
                                            <th class="unit text-center">SALES INVOICE</th>
                                            <th class="unit text-center">PUR. ORDER NO.</th>
                                            <th class="total text-center ">TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total = 0; ?>
                                        <?php foreach ($invoice as $v_order) :
                                         ?>
                                            <tr>
                                                <td class="unit text-center"><?php echo date('M-d-Y',strtotime($v_order->sales_date)) ?>
                                                </td>
                                                <td class="unit text-center"><?php echo $v_order->payment_mode?></td>
                                               <!--  <?php
                                               // $sales_qty = $v_order->sales_qty;
                                               // $total_buying_price += $v_order->purchase_rate;
                                               $t = $sales_qty * $total_buying_price;
                                                ?> -->
                                                <td class="unit text-center"><?php echo $v_order->po_number ?></td>
                                                <td class="unit text-right"><?php echo number_format($v_order->sales_amount_total,2) ?></td>
                                                <!-- <td class="total"><?php echo number_format($v_order->sales_amount); ?></td> -->
                                            </tr>
                                            <!-- <?php $total_cost += $v_order->purchase_rate * $sales_qty; ?> -->

                                            <?php
                                            $total += $v_order->sales_amount_total;
                                        endforeach;
                                        ?>


                                        </tbody>
                                        <tfoot>

                                       <!--  <?php if ($order[$key]->sales_discount != 0): ?>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="2">Discount Amount</td>
                                                <td><?php echo number_format($order[$key]->sales_discount, 2) ?></td>
                                            </tr>
                                        <?php endif; ?> -->

                                        <tr>
                                            <td colspan="2"></td>
                                            <td style="text-align: right;" colspan="1">Total:</td>
                                            <td style="color: red !important; text-align: right;"><?php echo number_format($total,2); ?></td>
                                        </tr>
                                       <!--  <tr>
                                            <td colspan="3"></td>
                                            <td colspan="2">Profit</td>
                                            <td><?php echo number_format($order[$key]->grand_total - $t, 2) ?></td>
                                        </tr> -->
                                        </tfoot>
                                        <?php
                                        ?>

                                    </table>
                                    <?php $key++; ?>

                                    

                               <!--  <?php if (!empty($invoice_details)) : ?>
                                    <table>
                                        <thead>
                                        <tr style="background-color: #ccc">
                                            <th class="no text-left">Total Cost</th>
                                            <th class="no text-left">Total Sell</th>
                                            <th class="no text-left">Total Profit</th>
                                        </tr>
                                        </thead>
                                        <tbody style="background-color: #c5c5c5">
                                        <td class="total"><?php echo number_format($total_cost, 2) ?></td>
                                        <td class="total"><?php echo number_format($total_sell, 2) ?></td>
                                        <td class="total"><?php echo number_format($total_profit, 2) ?></td>
                                        </tbody>
                                    </table>

                                <?php else: ?>
                                    <strong>There is no record for display</strong>
                                <?php endif ?> -->


                            </main>
                            <hr>
                            <footer>
                                <strong>NOTE: Received the statement for verification and payment
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="column" >
                                            <p>Prepared By:</p>
                                            <br/>
                                            <br/>
                                            <p style="text-decoration: overline;">Mechille Bartolaba</p>
                                        </div>
                                        <div class="column" >
                                            <p>Received By:</p>
                                            <br/>
                                            <br/>
                                            <p style="text-decoration: overline;">Signature Over Printed Name</p>
                                        </div>
                                    </div>
                                
                            </footer>


                        </div>

                 
                    </div>

                </div>
<?php }?>

            </div>
        </div>
        <!-- END SAMPLE FORM box-->
    </div>
</div>

<script type="text/javascript">
    function print_invoice(printableArea) {

        var table = $('#dataTables-example').DataTable();
        table.destroy();

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
