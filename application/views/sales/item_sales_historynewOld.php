<section>
    <div class="panel panel-primary">
        <!--<div class="panel-heading navyblue"> INVOICE</div>-->
        <div class="panel-body">
            <div class="row invoice-list">
                <div class="text-center corporate-id">
                    <img alt="" src="img/vector-lab.jpg">
                </div>
                <div class="col-lg-4 col-sm-4">
                    <h4>CUSTOMER</h4>
                    <p>
                        <?php echo $amount->customer_name; ?> <br>
                        <?php echo $amount->email; ?><br>
                        Tel: <?php echo $amount->phone_no; ?>
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <h4>INVOICE INFO</h4>
                    <ul class="unstyled">
                        <li>Invoice Number		: <strong> <?php echo $amount->sales_no ?></strong></li>
                        <li>Invoice Date		: <?php echo $amount->sales_date; ?></li>
                        <!--<li>Due Date			: 2013-03-20</li>
                        <li>Invoice Status		: Paid</li>-->
                    </ul>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th class="hidden-phone">Description</th>
                        <th class="">Unit Cost</th>
                        <th class="">Quantity</th>
                        <th>Total</th>
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
                </table>
                &lt;</div>
            <div class="row">
                <div class="col-lg-4 invoice-block pull-right">
                    <ul class="unstyled amounts">
                        <li><strong>Sub - Total amount :</strong> Rs. <?php  echo $amount->grand_total; ?></li>
                        <li><strong>Discount :</strong>  <?php  echo $amount->sales_discount; ?>%</li>
                        <li><strong>Grand Total :</strong> Rs. <?php  echo $amount->sales_amount_total; ?></li>
                    </ul>
                </div>
            </div>
            <div class="text-center invoice-btn">
                <a onclick="javascript:window.print();" class="btn btn-info btn-lg btn-xs"><i class="fa fa-print"></i> Print </a>
            </div>
        </div>
    </div>
</section>