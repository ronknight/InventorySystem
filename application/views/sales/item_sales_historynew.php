<script type="text/javascript">
    function PrintDivold() {
        var divToPrint = document.getElementById('printableArea');
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }

    function PrintDivold(printableArea) {


        //$('#dataTables-example').attr('id','none');
        var printContents = document.getElementById('printableArea').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        //$('table').attr('id','dataTables-example');
        location.reload(document.body.innerHTML = originalContents);
        //document.body.innerHTML = originalContents;
    }


    function PrintDiv() {
        var divToPrint = document.getElementById('printableArea');

        var popupWin = window.open('', '_blank', 'width=750,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><head>');
        popupWin.document.write('<html><style type="text/css" media="print">@page { size:4.5in 11in; margin: 2cm; width: 25mm;height: 97mm;  #invoice h1 {font-size: 6.0em; color: red;} }</style><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
        popupWin.document.close();
    }
</script>


    <section class="invoice">


                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> <?=$company_info['name'];?>
                            <small class="pull-right">Date: <?=$amount->sales_date ?></small>
                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    
                    <!-- /.col -->
                    <div class="col-sm-6 invoice-col">
                        <address>
                            Customer Name: <?=$amount->customer_name;?><br>
                            Address: <?=$amount->address;?><br>
                            Phone: <?=$amount->phone_no;?><br>
                            Email: <?=$amount->email;?>
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 invoice-col">
                        <address>
                            Type of Receipt: <?=$amount->receipt_name;?><br>
                            Invoice Number: <?=$amount->payment_mode;?><br>
                            PO Number: <?=$amount->po_number;?><br>
                        </address>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Serial #</th>
                                <th>Category</th>
                                <th>Item</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach ($salesHist as $item) : 
                            foreach($category as $rows_1) :
                                if($rows_1->category_id == $item->category_id) :?>
                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$rows_1->category_name; ?></td>
                                    <td><?=$item->item_name;?>  <?= $item->size; ?> <?= $item->color; ?> <?= $item->details?></td>
                                    <td><?=$item->sales_qty;?></td>
                                    <td><?=number_format($item->sales_rate)?></td>
                                    <td><?=$item->sales_discount;?></td>
                                    <td><?=number_format($item->sales_amount,2)?></td>
                                </tr>
                                <?php $i++; endif;
                    endforeach; endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-xs-6">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Total:</th>
                                    <td><?=number_format($amount->sales_amount_total,2)?></td>
                                </tr>
                                <tr>
                                    <th style="width:50%">Total Discount:</th>
                                    <td style="color: red"><?=number_format($amount->balance,2)?></td>
                                </tr>
                                <tr>
                                    <th><strong style = "text-transform:uppercase;font-size: 18px;">Total Paid:</strong></th>
                                    <td><strong style = "text-transform:uppercase;font-size: 18px;"><?=number_format($amount->paid,2)?></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-xs-9">
                        <a href="<?=base_url('sales/invoice_print')?>/<?=$this->uri->segment(3);?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>

                    </div>
<?php foreach($changeReceipt as $results) : ?>
                    <div class="col-xs-3">
                        <a href='#myModal<?php echo $results->sales_no?>' <?php echo $My_Controller->editPermission;?>
                            data-toggle='modal' class='btn btn-primary'><i class='fa fa-pencil-square-o'></i>
                            Change Receipt
                        </a>
                        <a href='#myModal1<?php echo $results->sales_no?>' <?php echo $My_Controller->editPermission;?>
                            data-toggle='modal' class='btn btn-success'><i class='fa fa-pencil-square-o'></i>
                            Pay Amount
                        </a>

                    </div>

                   
                    <?php endforeach; ?>

                </div>


    </section>

    <?php foreach ($changeReceipt as $rows): ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
         id="myModal<?php echo $rows->sales_no; ?>"
         class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">UPDATE RECORD</h4>
                </div>

                <?= form_open_multipart(base_url() . 'sales/update_sales', array('method' => 'POST', 'class' => 'form-horizontal')) ?>
                <div class="modal-body modal-edit">

                    <div class='form-group'>
                        <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>Receipt Number</label>

                       <div class='col-lg-9'>
                            <input type='hidden' name="sales_no" class='form-control'
                                   value='<?php echo $rows->sales_no; ?>'>
                            <input type='text' name="payment_mode" class='form-control' id='c_name'
                                   value='<?php echo $amount->payment_mode; ?>'>
                        </div>
                    </div>

                    
                    <div class='form-group'>
                        <label for='inputPassword1'
                               class='col-lg-3 col-sm-3 control-label'>CATEGORY</label>

                        <div class='col-lg-9'>
                            <select name="payment" class="form-control">
                                <option value="<?php echo $amount->receipt_id; ?>"><?php echo $amount->receipt_name; ?></option>
                            <?php foreach ($receipt as $receipt) : ?>
                                <option
                                value="<?php echo $receipt->receipt_id ?>"><?php echo $receipt->receipt_name; ?></option>
                            <?php endforeach; ?>
                            </select>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type='submit' class='btn btn-primary'>Update</button>
                   <!--  <form action="<?php echo base_url('item/delete_item/'.$rows->item_id);?>">
                        <button type="submit" class="btn btn-warning dark btn-outline">Delete</button>
                    </form> -->
                </div>
                <?= form_close(); ?>


            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php foreach ($changeReceipt as $rows): ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
         id="myModal1<?php echo $rows->sales_no; ?>"
         class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Cash Entry</h4>
                </div>

                <?= form_open_multipart(base_url() . 'sales/update_paid/'. $amount->sales_amount_total, array('method' => 'POST', 'class' => 'form-horizontal')) ?>
                <div class="modal-body modal-edit">

                    <div class='form-group'>
                        <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>Cash Amount</label>

                       <div class='col-lg-9'>
                            <input type='hidden' name="sales_no" class='form-control'
                                   value='<?php echo $rows->sales_no; ?>'>
                            <input type='text' name="paid" class='form-control' id='c_name'
                                   value='<?php echo $amount->paid; ?>'>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type='submit' class='btn btn-primary'>Send Amount</button>
                   <!--  <form action="<?php echo base_url('item/delete_item/'.$rows->item_id);?>">
                        <button type="submit" class="btn btn-warning dark btn-outline">Delete</button>
                    </form> -->
                </div>
                <?= form_close(); ?>


            </div>
        </div>
    </div>
<?php endforeach; ?>








