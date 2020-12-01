<div class="col-md-12 ui-sortable">
    <!-- begin panel -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">Select Products To Sale</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Sales Rate</th>
                        <th>Quantity</th>
                        <th>Return QTY</th>
                        <th>Discount</th>
                        <th>Sales Amount</th>
                        <th><i class="fa fa-trash"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($sales_item){ $n=1; foreach ($sales_item as $rows):
                    ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $rows->sales_date; ?></td>
                        <td><?php echo $rows->item_name; ?></td>
                        <td><?php echo $rows->size; ?></td>
                        <td><?php echo $rows->sales_rate; ?></td>
                        <td><input type="number" onclick="calculate_single_entry_total(1)" onkeyup="calculate_single_entry_total(1)" id="single_entry_quantity_1" min="1" value="<?php echo $rows->sales_qty ?>" name="total_number[]"></td>
                        <td><input type="number" min="1" value="" name="return_qty[]"></td>
                        <td><input type="number" min="1" value="<?php echo $rows->sales_discount;?>" name="sales_discount[]"></td>
                        <td><input type="number" min="1" value="<?php echo $rows->sales_amount;?>" name="sales_discount[]"></td>





                    </tr>
                    <?php $n++; endforeach; }else{ echo "<div class='alert alert-success'>no record FOunds</div>";} ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end panel -->
    <div class="col-md-5"></div>
    <div class="col-md-7 ui-sortable">
        <!-- begin panel -->
        <div data-sortable-id="ui-widget-10" class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Payment	                    </h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Total Amount</td>
                            <td>
                                <input type="text" name="sub_total" value="" id="sub_total" class="form-control text-right" data-parsley-id="0979"><ul class="parsley-errors-list" id="parsley-id-0979"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Paid</td>
                            <td id="customer_discount_holder">

                            </td>
                        </tr>
                        <tr>
                            <td>Remaining Amount</td>
                            <td>
                                <input type="text" data-parsley-required="true" placeholder="VAT Percentage" value="10" onkeyup="calculate_grand_total()" id="vat_percentage" name="vat_percentage" class="form-control text-right" data-parsley-id="3318"><ul class="parsley-errors-list" id="parsley-id-3318"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Grand Total</td>
                            <td>
                                <input type="text" name="amount" value="" id="grand_total" class="form-control text-right" data-parsley-id="9465"><ul class="parsley-errors-list" id="parsley-id-9465"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Payment</td>
                            <td>
                                <input type="text" data-parsley-required="true" placeholder="Enter Payment Amount" onkeyup="return calculate_change_amount()" value="" id="payment" name="" class="form-control text-right" data-parsley-id="4305"><ul class="parsley-errors-list" id="parsley-id-4305"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Change</td>
                            <td>
                                <input type="text" id="change_amount" value="" class="form-control text-right" data-parsley-id="4889"><ul class="parsley-errors-list" id="parsley-id-4889"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Net Payment</td>
                            <td>
                                <input type="text" name="amount" id="net_payment" value="" class="form-control text-right" data-parsley-id="6284"><ul class="parsley-errors-list" id="parsley-id-6284"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Due</td>
                            <td>
                                <input type="text" name="due" id="due_amount" value="" class="form-control text-right" data-parsley-id="3991"><ul class="parsley-errors-list" id="parsley-id-3991"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Method</td>
                            <td>
                                <select name="payment_method" class="form-control" data-parsley-id="4410">
                                    <option selected="" value="">Select Payment Method</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Check</option>
                                    <option value="3">Card</option>
                                </select><ul class="parsley-errors-list" id="parsley-id-4410"></ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group col-md-10">
                        <button class="btn btn-success" type="submit">Create New Sale</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
