<!-- <?php
foreach ($sales as $results) {
    if($results->customer_id == $this->uri->segment(3)) { 
    $customerName = $results->customer_name;
    $id = $results->sales_no;
    @$custlistRow .= "<tr>


                
                <td style = text-transform:uppercase;>" . $results->payment . '-' . $results->payment_mode . "
                <td>" . $results->customer_name . "
                <td>" . date('M-d-Y',strtotime($results->sales_date)) . "
                <td>".number_format($results->sales_amount_total,2)."</td>
                <td>".number_format($results->paid)."</td>
<td>
<a href='history_detail/" . $results->sales_no . "' data-toggle='modal' class='btn btn-success'>
<i class='fa fa-pencil-square-o'></i>
                                  Sales History
                              </a> </td>
                ";

}}
?> -->

<!-- <?php echo $id?> -->
<!-- page start-->
<section class="panel">
    <header class="panel-heading">
        <!-- <?=$customerName ?> -->
    </header>
    <div class="panel-body">
        <div class="adv-table editable-table table-responsive">
        <div class="row">
            <div class="col-lg-4 col-xs-4">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>Php <?= number_format($total_purchase->active,2); ?></h3>

                <p>Total Purchase</p>
            </div>
            <div class="icon">
                <i class="">Purchase</i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>Php <?= number_format($total_payment->active,2); ?></h3>

                <p>Total Payment</p>
            </div>
            <div class="icon">
                <i class="">Payment</i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-4">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>Php <?= number_format($total_balance->active,2); ?></h3>

                <p>Total Balance</p>
            </div>
            <div class="icon">
                <i class="">Balance</i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
        </div></div>
    </div>
        

</section>


<section class="panel">
    <div class="panel-heading">
        <?=$results->customer_name;?>
    </div>
    <div class="panel-body">
        <div class="adv-table editable-table table-responsive">
                <table id="example1" class="table table-striped table-hover table-bordered dataTable"
                       aria-describedby="editable-sample_info">
                    <thead>
                    <tr role="row">
                        <!-- <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 184px;"
                            aria-label="Username">Sales Code
                        </th> -->
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            Type
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            Invoice #
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            PO #
                        </th>
                        <!-- <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            Customer
                        </th> -->
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 123px;" aria-label="Points: activate to sort column ascending">
                            Date
                        </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 123px;" aria-label="Points: activate to sort column ascending">
                            Status
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 123px;" aria-label="Points: activate to sort column ascending">
                            Total
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 127px;" aria-label="Delete: activate to sort column ascending">
                            Delete
                        </th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <!-- <?php if(!empty($custlistRow)){
                        echo $custlistRow;
                    } ?> -->

                    <?php
foreach ($sales as $results) {
    if($results->customer_id == $this->uri->segment(3)) { 
    $customerName = $results->customer_name;
    $id = $results->sales_no;?>
    <tr>


                
                <td><?=$results->receipt_name?></td>
                <td><?=$results->payment_mode?></td>
                <td><?=$results->po_number ?></td>
                <!-- <td><?=$results->customer_name?></td> -->
                <td><?=date('M-d-Y',strtotime($results->sales_date))?></td>
                <!-- <td><?=number_format($results->sales_amount_total,2)?></td> -->
                <td class='center'>
                                <?php if ($results->paid == 0) { ?>
                                    <span class="label label-warning">No Payment</span>

                                <?php } else { ?>
                                    <span class="label label-primary">Paid</span>
                                <?php } ?>
                            </td>
                <td><?= number_format($results->sales_amount_total,2); ?></td>
                
<td>
<a href='<?php echo base_url()?>customer/history_detail/<?= $results->sales_no ?>' data-toggle='modal'
                               class='btn btn-success' <?php echo $My_Controller->editPermission;?>><i class='fa fa-pencil-square-o'></i>
                                View Receipt
                            </a> </td>
                

<?php }}
?>
                    </tbody>
                </table>
            </div>
        </div>

</section>

<a href='<?php echo base_url() ?>customer/sales_report/<?=$this->uri->segment(3) ?>' data-toggle='modal' class='btn btn-primary'
 <?php echo $My_Controller->editPermission;?>>
 <i class='fa fa-pencil-square-o'></i>
    Statement of Account
</a>

<a href='<?php echo base_url() ?>customer/collection_receipt/<?=$this->uri->segment(3) ?>' data-toggle='modal' class='btn btn-success'
 <?php echo $My_Controller->editPermission;?>>
 <i class='fa fa-pencil-square-o'></i>
    Collection Receipt
</a>