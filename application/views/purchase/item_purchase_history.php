

<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-body">
                <div class="invoice">
                    <div class="row invoice-logo">
                        <div class="col-xs-6 invoice-logo-space">
                            <img src="<?= base_url(); ?>assets/pages/media/invoice/walmart.png" class="img-responsive"
                                 alt=""/></div>
                        <div class="col-xs-6">
                            <p> #<?php echo $amount->pur_no ?> / <?php echo $amount->purchase_date; ?>
                            </p>

                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-4"> 
                            <h3>SUPPLIER:</h3>
                            <ul class="list-unstyled">
                                <li>Company Name:       <?= $amount->company_name ?> </li>
                                <li>Email:              <?= $amount->email; ?> </li>
                                <li>Tel. No:            <?= $amount->phone_no ?> </li>
                                <li>VAT Reg.:           TIN <?= $amount->fax_no ?> </li>
                                <!--<li> Madrid </li>
                                <li> Spain </li>
                                <li> 1982 OOP </li>-->
                            </ul>
                        </div>
                        <div class="col-xs-4">

                        </div>
                        <div class="col-xs-4 invoice-payment">
                            <h3>Payment Details:</h3>
                            <div id="invoice">
                                <div class="date">Date of
                                    Invoice: <?php echo date('M d,Y',strtotime($amount->purchase_date)); ?></div>
                                <!-- <div class="date">Invoice Status <?php if ($amount->due_amount != 0.00) { ?>
                                        <span
                                            class="badge bg-important"><?= $amount->due_amount; ?></span><?php } ?> <?php if ($amount->due_amount == 0.00) {
                                        echo "<span class='label label-primary'>PAID</span>";
                                    } else {
                                        echo "<span class='label label-warning'>NOT PAID</span>";
                                    }
                                    ?></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th> #</th> 
                                    <th> Purchase No</th>
                                    <th> Category</th>
                                    <th> Item</th>
                                    <th class="hidden-xs"> Price</th>
                                    <th class="hidden-xs"> Quantity</th>
                                    <th class="hidden-xs"> Unit Cost</th>
                                    <th> Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n = 1;
                                foreach ($history as $rows) {
                                    ?>
                                    <tr>
                                        <td><?php echo $n; ?></td>
                                        <td><?php echo $rows->purchase_no; ?></td>
                                        <td><?php echo $rows->category_name;?></td>
                                        <td style = "text-transform:uppercase;"><?php echo $rows->item_name;?> <?php echo $rows->size;?> <?php echo $rows->color; ?></td>
                                        <td class=""> <?php echo $rows->purchase_rate; ?></td>
                                        <td class="hidden-xs"><?php echo $rows->purchase_qty; ?></td>
                                        <td class="hidden-xs"> <?php echo $rows->purchase_rate; ?></td>
                                        <td class="hidden-xs"> <?php echo $rows->purchase_amount; ?></td>
                                    </tr>
                                    <?php $n++;
                                } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="well">
                                <address>
                                    <strong><?=$company->name;?></strong>
                                    <br/> <?=$company->address;?>
                                    <br/>
                                    <abbr title="Phone">P:</abbr> <?=$company->contact;?>
                                </address>
                                <!-- <address> -->
                                    <!-- <strong><?=$company->name;?></strong> -->
                                    <!-- <br/> -->
                                    <!-- <a href="mailto:#"> <?=$company->email;?> </a> -->
                                <!-- </address> -->
                            </div>
                        </div>
                        <div class="col-xs-8 invoice-block">
                            <ul class="list-unstyled amounts">
                                <li>
                                    <strong>Sub - Total:</strong> Php <?= $amount->grand_total ?> </li>
                                <li>
                                    <strong>Discount:</strong> <?= $amount->purchase_discount ?>%
                                </li>
                                <li>
                                    <strong>VAT:</strong> 1.12
                                </li>
                                <li>
                                    <strong>Grand Total:</strong> Php <?php echo $amount->grand_total - ($amount->grand_total * ($amount->purchase_discount / 100))  ?>.00 </li>
                            </ul>
                            <br/>
                            <a class="btn btn-lg btn-primary hidden-print margin-bottom-5"
                               onclick="javascript:window.print();"> Print
                                <i class="fa fa-print"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


