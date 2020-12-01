<!-- <?=$ip_address; ?> -->
<div class="row"> 
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= number_format($total_users); ?></h3>

                <p>Total Items</p>
            </div>
            <div class="icon">
                <i class="fa fa-bar-chart"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= number_format($total_employees->active,2); ?></h3>

                <p><?php echo date('Y')?> Order Slip</p>
            </div>
            <div class="icon">
                <i class="">OR</i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= number_format($inactive_users->active,2); ?></h3>

                <p><?php echo date('Y')?> Cash Invoice</p>
            </div>
            <div class="icon">
                <i class="">Cash</i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= number_format($active_users->active,2); ?></h3>

                <p><?php echo date('Y')?> Charge Invoice</p>
            </div>
            <div class="icon">
                <i class="">Invoice</i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
 
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-tag"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"><?php echo date('F')?> Purchase</span>
                <span class="info-box-number"><?= number_format($today_invoices->count,2); ?>
                    <small></small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col --> 
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-tag"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"><?php echo date('F')?> Order Slip</span>
                <span class="info-box-number"><?= number_format($thisMonth_invoices->count,2); ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow "><i class="fa fa-tag"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"><?php echo date('F')?> Cash Invoice</span>
                <span class="info-box-number"><?= number_format($today_sales->count,2); ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-tag"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"><?php echo date('F')?> Charge Invoice</span>
                <span class="info-box-number"><?= number_format($month_sales->count,2); ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Users List</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>UserName</th>
                            <th>Group</th>
                            <th>Status</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($users_list)) {
                            foreach ($users_list as $users) : ?>
                                <tr>
                                    <td><?= $users->USER_NAME; ?></td>
                                    <td><?= $users->GROUP_NAME; ?></td>
                                    <td><?php if ($users->IS_ACTIVE == 1) { ?>
                                            <span class="label label-success">ACTIVE</span>
                                        <?php } else { ?>
                                            <span class="label label-default">INACTIVE</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?= date("d M,Y", strtotime($users->CREATED_DATE)); ?>
                                    </td>
                                </tr>
                            <?php endforeach;
                        } else {
                            echo "<tr><td>No Records Found</td></tr>";
                        } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-lg-6">
        <div class="box box-danger">
            <div class="col-lg-6">
                <div class="box-header">
                    <h4 class="box-title">Today's Sale</h4>
                </div>
                <div class="info-box">
                    <span class="info-box-icon bg-gray "><i class="fa fa-tag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Today Cash Invoice</span>
                        <span class="info-box-number"><?= number_format($this_cash_invoices->count,2); ?></span>
                    </div>
                <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box-header">
                    <h4 class="box-title">Today's Direct Order</h4>
                </div>
                <div class="info-box">
                    <span class="info-box-icon bg-gray "><i class="fa fa-tag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Today OR Invoice</span>
                        <span class="info-box-number"><?= number_format($this_or_invoices->count,2); ?></span>
                    </div>
                <!-- /.info-box-content -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-5">
        <!--work progress start-->
        <div class="box box-success">
            <div class="box-header with-border box-green">
                <h3 class="box-title">Stock Report | <a href="<?php echo base_url('stock/print_stock')?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover table-bordered dataTable" id="example1"
                           aria-describedby="editable-sample_info">
                    <thead>
                        <tr>
                        <!-- <td>Item Qty</td> -->
                        <td>Category</td>
                        <td>Name</td>
                        <td>Brand</td>
                        <td>Type</td>
                        <td>Price</td>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php $i = 1;
                    foreach ($daily_st as $daily_st) { ?>
                        <tr>
                            <!-- <td><span class="date">
                <?php $aaa = $daily_st->stock_qty;
                if ($aaa < 10) {
                    ?>
                    <font style="text-decoration:blink; color:#F00; font-size:18px">
                        <?php
                        echo "<span class='label label-danger'>$daily_st->stock_qty</span>";


                        ?>
                    </font>
                    <?php

                } else {
                    echo " <span class='label label-success'>$daily_st->stock_qty</span>";
                }
                ?>
                </span> <span class="time">
                <?php //echo $daily_st->category_name;?>
                </span></td> -->
                            <td><a href="#"><?php echo $daily_st->category_name; ?></a></td>
                            <td><a href="#"><?php echo $daily_st->item_name; ?></a></td>
                            <td><a href="#"><?php echo $daily_st->size; ?></a></td>
                            <td><a href="#"><?php echo $daily_st->color; ?></a></td>
                            <td><span class="price"><?php echo $daily_st->stock_rate; ?></span></td>
                        </tr>
                    <?php } ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
        <!--work progress end-->
    </div>

    <div class="col-md-7">
        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-warning">
            <div class="box-header with-border box-green">
                <h3 class="box-title">Latest Purchases</h3>

            </div>
            <div class="box-body">
                <table class="table no-margin">
                    <thead>
                    <tr>
                        <th>Purchase ID</th>
                        <th>Vendor</th>
                        <th>Date</th>
                        <!-- <th>Status</th> -->
                        <th>Purchase Total</th>
                        <th>View</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($due_amounts as $due_amount) : ?>
                        <tr>
                            <td>
                                <?= $due_amount->purchase_no; ?>
                            </td>
                            <td><?= $due_amount->company_name; ?></td>
                            <td><?= date("M-d-Y", strtotime($due_amount->purchase_date)); ?></td>
                           <!--  <td>
                                <span class="label label-primary">PENDING</span>

                            </td> -->
                            <td><?= number_format($due_amount->grand_total,2); ?></td>
                            <td>
                                <a href="<?= base_url(); ?>purchase/show_purchase_history/<?= $due_amount->purchase_no ?>"
                                   class="btn btn-info">View Purchase</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <!-- /.box-footer -->
        </div><!-- /.box -->
    </div><!-- /.col -->

</div>

<div class="row">
    <div class="col-md-3">
        <div id="printableArea" class="box box-success"><!-- /primary heading -->
            <div class="box-heading">
                <h4 class="box-title text-dark text-uppercase">
                    Oil Seal <?= date('Y')?></h4>
            </div>
            <div id="box2" class="panel-collapse collapse in">
                <div id="" class="box-body" style="height: 600px">

                    <table class="table no-margin" id="">

                        <thead>
                        <tr>
                            <th>Sl</th>
                            <!-- <th>Category</th> -->
                            <th>Product Name</th>
                            <th>Sale</th>
                            <th>Stock Qty</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($oilseal)) {
                            $i = 1;
                            foreach ($oilseal as $topsale) : ?>

                                <tr>
                                    <td><?= $i; ?></td>
                                    <!-- <td><?= $topsale->category_name; ?></td> -->
                                    <td style = "text-transform:uppercase;"><?= $topsale->item_name;?> <?= $topsale->color;?> <?= $topsale->size;?> 
                                </td>
                                    <td><?= $topsale->count; ?></td>
                                    <td style="color: red;"><?= $topsale->stock_qty; ?></td>
                                </tr>

                                <?php $i++; endforeach;
                        } else { ?>
                            <tr style="column-span: 4">
                                <td><strong>No Records Found</strong></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        
                    </table>

                </div>
            </div>
            <!-- <div class="box-footer">
                <a onclick="print_invoice('printableArea')" class="btn fa fa-print btn-success"> Print</a>
            </div> -->
            
        </div>
        
    </div>
    <div class="col-md-3">
        <div id="printableArea" class="box box-warning"><!-- /primary heading -->
            <div class="box-heading">
                <h4 class="box-title text-dark text-uppercase">
                    Mono Seal <?= date('Y')?></h4>
            </div>
            <div id="box2" class="panel-collapse collapse in">
                <div id="" class="box-body" style="height: 600px">

                    <table class="table no-margin" id="">

                        <thead>
                        <tr>
                            <th>Sl</th>
                            <!-- <th>Category</th> -->
                            <th>Product Name</th>
                            <th>Sale</th>
                            <th>Stock Qty</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($monoseal)) {
                            $i = 1;
                            foreach ($monoseal as $topsale) : ?>

                                <tr>
                                    <td><?= $i; ?></td>
                                    <!-- <td><?= $topsale->category_name; ?></td> -->
                                    <td style = "text-transform:uppercase;"><?= $topsale->item_name;?> <?= $topsale->color;?> <?= $topsale->size;?> 
                                </td>
                                    <td><?= $topsale->count; ?></td>
                                    <td style="color: red;"><?= $topsale->stock_qty; ?></td>
                                </tr>

                                <?php $i++; endforeach;
                        } else { ?>
                            <tr style="column-span: 4">
                                <td><strong>No Records Found</strong></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        
                    </table>

                </div>
            </div>
            <!-- <div class="box-footer">
                <a onclick="print_invoice('printableArea')" class="btn fa fa-print btn-success"> Print</a>
            </div> -->
            
        </div>
        
    </div>
    <div class="col-md-3">
        <div id="printableArea" class="box box-info"><!-- /primary heading -->
            <div class="box-heading">
                <h4 class="box-title text-dark text-uppercase">
                    Wiper Seal <?= date('Y')?></h4>
            </div>
            <div id="box2" class="panel-collapse collapse in">
                <div id="" class="box-body" style="height: 600px">

                    <table class="table no-margin" id="">

                        <thead>
                        <tr>
                            <th>Sl</th>
                            <!-- <th>Category</th> -->
                            <th>Product Name</th>
                            <th>Sale</th>
                            <th>Stock Qty</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($wiperseal)) {
                            $i = 1;
                            foreach ($wiperseal as $topsale) : ?>

                                <tr>
                                    <td><?= $i; ?></td>
                                    <!-- <td><?= $topsale->category_name; ?></td> -->
                                    <td style = "text-transform:uppercase;"><?= $topsale->item_name;?> <?= $topsale->color;?> <?= $topsale->size;?> 
                                </td>
                                    <td><?= $topsale->count; ?></td>
                                    <td style="color: red;"><?= $topsale->stock_qty; ?></td>
                                </tr>

                                <?php $i++; endforeach;
                        } else { ?>
                            <tr style="column-span: 4">
                                <td><strong>No Records Found</strong></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        
                    </table>

                </div>
            </div>
            <!-- <div class="box-footer">
                <a onclick="print_invoice('printableArea')" class="btn fa fa-print btn-success"> Print</a>
            </div> -->
            
        </div>
        
    </div>
    <div class="col-md-3">
        <div id="printableArea" class="box box-tools"><!-- /primary heading -->
            <div class="box-heading">
                <h4 class="box-title text-dark text-uppercase">
                    Wiper Metal <?= date('Y')?></h4>
            </div>
            <div id="box2" class="panel-collapse collapse in">
                <div id="" class="box-body" style="height: 600px">

                    <table class="table no-margin" id="">

                        <thead>
                        <tr>
                            <th>Sl</th>
                            <!-- <th>Category</th> -->
                            <th>Product Name</th>
                            <th>Sale</th>
                            <th>Stock Qty</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($dkb)) {
                            $i = 1;
                            foreach ($dkb as $topsale) : ?>

                                <tr>
                                    <td><?= $i; ?></td>
                                    <!-- <td><?= $topsale->category_name; ?></td> -->
                                    <td style = "text-transform:uppercase;"><?= $topsale->item_name;?> <?= $topsale->color;?> <?= $topsale->size;?> 
                                </td>
                                    <td><?= $topsale->count; ?></td>
                                    <td style="color: red;"><?= $topsale->stock_qty; ?></td>
                                </tr>

                                <?php $i++; endforeach;
                        } else { ?>
                            <tr style="column-span: 4">
                                <td><strong>No Records Found</strong></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        
                    </table>

                </div>
            </div>
            <!-- <div class="box-footer">
                <a onclick="print_invoice('printableArea')" class="btn fa fa-print btn-success"> Print</a>
            </div> -->
            
        </div>
        
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