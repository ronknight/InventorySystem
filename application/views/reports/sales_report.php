<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM box-->
        <div class="box">
            <div class="box-title">
                <h4><i class="icon-reorder"></i> Sales Report </h4>
						<span class="tools">
							<a href="javascript:;" class="icon-chevron-down"></a>
						</span>
            </div>
            <div class="box-body">
                <!-- BEGIN FORM-->

                    <?php echo form_open('reports/salesReport',array('class'=>"form-horizontal form-bordered form-validate",'method'=>'post'))?>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="control-label">START DATE</label>
                            <input type="text" data-ad-format="" class="form-control datepicker" name="start_date">
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label">END DATE</label>
                            <input type="text" class="form-control datepicker" name="end_date">
                        </div>
                    </div>
                    <br>
                    <div class="form-actions">
                        <input type="hidden" name="Action" value="Search">
                        <button type="submit" class="btn btn-success" >Show Report</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </form>
                <!-- END FORM-->
                <?php if (isset($_REQUEST['Action']) == "Search"){ ?>

                    <div class="row ">
                        <div class="col-md-8 col-md-offset-2">
                            <form method="post" action="#">
                                <div class="btn-group pull-right">
                                    <a onclick="print_invoice('printableArea')" class="btn btn-primary">Print</a>
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
                        <div class="col-md-8 col-md-offset-2">

                            <header class="clearfix">
                                <div id="logo">
                                    <img style="border-radius:100%;width:200px;height:100px;" src="<?=base_url()?>uploads/images/<?=$company->logo;?>">
                                </div>
                                <div id="company">
                                    <h2 class="name"><?=$company->name;?></h2>
                                    <div><?=$company->contact;?></div>
                                    <div><?=$company->email;?></div>
                                </div>

                            </header>
                            <hr>

                            <main class="invoice_report">

                                <h4>Sales Report from: <strong><?php echo $start ?></strong> to
                                    <strong><?php echo $end ?></strong></h4>
                                <br/>
                                <br/>

                                <?php
                                $key = 0;
                                $total_cost = 0;
                                $total_sell = 0;
                                $total_profit = 0;
                                ?>
                                <?php if (!empty($invoice_details)): foreach ($invoice_details as $invoice_no => $order_details) : ?>
                                    <?php $total_buying_price = 0; $sales_qty =0; ?>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="no text-right">Customer: <?php echo $order[$key]->customer_name ?></th>
                                            <th class="no text-center">INVOICE <?php echo $invoice_no ?></th>
                                            <th class="desc text-left">Invoice
                                                Date: <?php echo date('M-d-Y', strtotime($order[$key]->sales_date)) ?></th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <thead>
                                        <tr style="background-color: #ECECEC">
                                            <th class="no text-left">#</th>
                                            <th class="desc">Description</th>
                                            <!-- <th class="unit text-left">Buying Price</th> -->
                                            <th class="unit text-left">Selling Price</th>
                                            <th class="qty text-left">Qty</th>
                                            <th class="total text-left ">TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $k = 1 ?>
                                        <?php if (!empty($order_details)): foreach ($order_details as $v_order) : ?>
                                            <tr>
                                                <td class="no"><?php echo $k ?></td>
                                                <td class="desc"><h3><?php echo $v_order->category_name;?> <?= $v_order->item_name; ?> <?= $v_order->color; ?> <?= $v_order->size; ?> <?= $v_order->details; ?></h3>
                                                </td>
                                                <!-- <td class="unit"><?php echo number_format($v_order->purchase_rate, 2) ?></td> -->
                                                <?php
                                               $sales_qty = $v_order->sales_qty;
                                               $total_buying_price += $v_order->purchase_rate;
                                               $t = $sales_qty * $total_buying_price;
                                                ?>
                                                <td class="unit"><?php echo number_format($v_order->stock_rate, 2) ?></td>
                                                <td class="qty"><?php echo $v_order->sales_qty ?></td>
                                                <td class="total"><?php echo number_format($v_order->sales_amount); ?></td>
                                            </tr>
                                            <?php $k++ ?>
                                            <?php $total_cost += $v_order->purchase_rate * $sales_qty; ?>

                                            <?php
                                        endforeach;
                                        endif;
                                        ?>


                                        </tbody>
                                        <tfoot>

                                        <?php if ($order[$key]->sales_discount != 0): ?>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="2">Discount Amount</td>
                                                <td><?php echo number_format($order[$key]->sales_discount, 2) ?></td>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">Grand Total</td>
                                            <td style="color: red !important"><?php echo  number_format($order[$key]->grand_total, 2) ?></td>
                                        </tr>
                                        <!-- <tr>
                                            <td colspan="3"></td>
                                            <td colspan="2">Profit</td>
                                            <td><?php echo number_format($order[$key]->grand_total - $t, 2) ?></td>
                                        </tr> -->
                                        </tfoot>
                                        <?php
                                        $total_sell += $order[$key]->grand_total;
                                        $total_profit += $order[$key]->grand_total - $t;
                                        ?>

                                    </table>
                                    <?php $key++; ?>
                                <?php endforeach; endif; ?>

                                <?php if (!empty($invoice_details)) : ?>
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
                                <?php endif ?>


                            </main>
                            <hr>
                            <footer class="text-center">
                                <strong><?=$company->name;?></strong>&nbsp;&nbsp;&nbsp;<?=$company->address;?>
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