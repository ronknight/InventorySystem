<?php echo form_open(base_url() . 'index.php/customer/insert_purchase', array('method' => 'post')); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box light bordered">
            <div class="box-body">
                <div class="clearfix">
                    


                    <!-- <div class="col-md-3">
                        <label>Supplier Name:</label>
                        <select class="form-control input-medium" name="vendor_id" id="vendor_id" required>
                            <option value="">SELECT VENDORS</option>
                            <?php foreach ($vendors as $vendor) : ?>
                                <option
                                    value="<?php echo $vendor->vendor_id ?>"><?php echo $vendor->vendor_name; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>  -->

                    <div class="col-md-3">

                        <label>Costumer Name</label>
                        <select class="form-control input-medium" name="customer_id" id="company_id">
                             <?php foreach ($customers as $customers) : ?>
                                <option
                                    value="<?php echo $customers->customer_id ?>"><?php echo $customers->customer_name; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                    <div class="col-md-3">


                        <label>Purchase Date</label>
                        <input type="text" name="purchase_date"
                               class="form-control input-medium datepicker"
                               />


                    </div>
                    <div class="col-md-3">
                        <label>Receipt Number</label>
                        <input type="text" name="purchase_code" class="form-control input-medium"
                           />
                    </div>
                    <div class="col-md-3">

                        <label>Type of Receipt</label>
                        <select class="form-control input-medium" name="payment" id="company_id">
                             <option selected value="5">Collection Receipt</option>
                        </select>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7">

        <div class="box box-warning">
            <div class="box-heading">
                <h5>Available Stock Products</h5>

            </div>
            <div class="box-body" id="rows-list">
                <div class="input-group">

                     <span class="input-group-addon"> <span class="fa fa-search"> </span> </span>

                   <select class="js-example-basic-single js-states form-control" name="sales_no"
                            onchange="return get_purchased_data(this.value);">
                        <option value="">Charge Invoice</option>
                        <?php foreach ($sales as $rows) :
                            if($rows->payment == 4) :
                                if($rows->paid == 0) :
                            ?>
                            <option id="<?=$rows->sales_no ?>" value="<?= $rows->sales_no; ?>"><?=$rows->payment_mode ?>
                            </option>
                        <?php endif;
                    endif;
                endforeach; ?>
                    </select>

                </div>
                         <hr>

                <div style="height:250px;overflow-y:scroll;" id="">


                    <div>
                        <table cellspacing="0" border="1" style="font-size:11px;border-collapse:collapse;"
                               id="" class="table table-striped table-hover" rules="all">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Invoice Number</th>
                                <th>PO Number</th>
                                <th>Purchase Rate</th>
                                <th>Total</th>
                                <th><i class="fa fa-trash"></i></th>
                            </tr>
                            </thead>
                            <tbody id="purchase_entry_holder">

                            </tbody>
                        </table>
                    </div>


                </div>

                <div class="box-footer">
                    <div style="text-align:left">
                    </div>
                    <div style="text-align:right">
                        Total = <span style="font-weight:bold;" id="grand_totalnew"> 0</span>

                        <span style="font-size:11px;" id="">Total Items = </span>
                        <span style="font-size:11px; font-weight:bold;" id="items">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5 ui-sortable">
        <!-- begin box -->
        <div data-sortable-id="ui-widget-10" class="box box-success">
            <div class="box-heading">
                <h4 class="box-title">
                    Payment </h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <!-- <td>Sub Total</td> -->
                            <!-- <td>
                                <input type="hidden_total" name="sub_total" value="" id="sub_total"
                                       class="form-control text-right" data-parsley-id="0979">
                                <ul class="parsley-errors-list" id="parsley-id-0979"></ul>
                            </td> -->
                        </tr>
                        <tr>
                            <td>Discount <span class="badge badge-primary"> % </span></td>
                            <td id="customer_discount_holder">
                                <input type="text" name="discount" value="" id="discount"
                                       onchange="calculate_discount(this.value);" class="form-control text-right">
                            </td>
                        </tr>
                        <tr>
                            <td>Payment</td>
                            <td>
                                <input type="text" required="required" data-parsley-required="true" placeholder="Enter Payment Amount"
                                       onkeyup="return calculate_change_amount()" value="" id="payment"
                                       name="paymentTotal"
                                       class="form-control text-right" data-parsley-id="4305">
                                <ul class="parsley-errors-list" id="parsley-id-4305"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Change</td>
                            <td>
                                <input type="text" id="change_amount" value="" class="form-control text-right"
                                       data-parsley-id="4889">
                                <ul class="parsley-errors-list" id="parsley-id-4889"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Grand Total</td>
                            <td>
                                <input type="text" name="amount" id="net_payment" value=""
                                       class="form-control text-right" data-parsley-id="6284">
                                <ul class="parsley-errors-list" id="parsley-id-6284"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Due</td>
                            <td>
                                <input type="text" name="due_amount" id="due_amount" value=""
                                       class="form-control text-right" data-parsley-id="3991">
                                <ul class="parsley-errors-list" id="parsley-id-3991"></ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group col-md-10">
                        <button class="btn btn-success" type="submit">Create New Purchase</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end box -->
    </div>

</div>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/select2.min.js"></script>
<!-- <script>
$("#trollSelect").select2( {
    placeholder: "Add Product",
    allowClear: true
    } );
</script> -->

<script type="text/javascript">
     $(document).ready(function() {
    var opt = $("#trollSelect option").sort(function (a,b) { return a.id.toUpperCase().localeCompare(b.id.toUpperCase()) });
    $("#trollSelect").append(opt);
});
</script>

<script type="text/javascript">

 

    var total_number = 0;
    function get_purchased_data(sales_no) {
        total_number++;
        var csrf_test_name = $("input[name=csrf_test_name]").val();
        $.ajax({
            url: '<?=base_url();?>index.php/customer/get_data_for_purchased/',
            type: 'POST',
            data: {'id': sales_no, 'total': total_number, 'csrf_test_name': csrf_test_name},
            dataType: 'html',
            success: function (response) {

                $('#purchase_entry_holder').append(response);
                $("#bar_code").val('');
                $("#bar_code").focus();
                calculate_grand_total_for_purchase();


            }
        });
    }


    function calculate_single_entry_sum(entry_number) {

        var quantity = $("#quantity_" + entry_number).val();
        var purchase_price = $("#unit_price_" + entry_number).val();
        var single_entry_total = quantity * purchase_price;
        $("#single_entry_total_" + entry_number).val(single_entry_total);
        calculate_grand_total_for_purchase();

    }

    function balance_total() {


        var gtotal = $('#grand_total').val();
        var pay = $('#payment').val();

        if (gtotal && pay) {
            var bal = gtotal - pay;
            $("#balance").val(bal);
        }
    }

    function delete_row(entry_number) {
       
        $("#entry_row_" + entry_number).remove();

        for (var i = entry_number; i < total_number; i++) {

            $("#serial_" + (i + 1)).attr("id", "serial_" + i);
            $("#serial_" + (i)).html(i);

            $("#quantity_" + (i + 1)).attr("id", "quantity_" + i);
            $("#quantity_" + (i)).attr({
                onkeyup: "calculate_single_entry_sum(" + i + ")",
                onclick: "calculate_single_entry_sum(" + i + ")"
            });

            $("#unit_price_" + (i + 1)).attr("id", "unit_price_" + i);
            $("#unit_price_" + (i)).attr({
                onkeyup: "calculate_single_entry_sum(" + i + ")",
                onclick: "calculate_single_entry_sum(" + i + ")"
            });

            $("#delete_button_" + (i + 1)).attr("id", "delete_button_" + i);
            $("#delete_button_" + (i)).attr("onclick", "delete_row(" + i + ")");

            $("#entry_row_" + (i + 1)).attr("id", "entry_row_" + i);
        }

        total_number--;
        calculate_grand_total_for_purchase();
    }


    function calculate_grand_total_for_purchase() {

        grand_total = 0;
        for (var i = 1; i <= total_number; i++) {
            grand_total += Number($("#single_entry_total_" + i).val());

        }
        $("#grand_totalnew").html(grand_total);
        $("#hidden_total").val(grand_total);
        // $("#sub_total").val(grand_total);
        $("#net_payment").val(grand_total);
        $("#items").html(total_number);

    }
  
    function calculate_discount(id) {

        var amount = $("#net_payment").val();
        discount = id - amount;
        var net_payment = amount - discount;
        $("#net_payment").val(net_payment);


    }
  
    function calculate_change_amount() {
        get_grand_total = Number($("#net_payment").val());
        get_payment_amount = Number($("#payment").val());

        if (get_payment_amount > get_grand_total) {

            change_amount = get_payment_amount - get_grand_total;
            change_amount = change_amount.toFixed(2);
            $("#change_amount").attr("value", change_amount);
            get_change_amount = Number($("#change_amount").val());
            net_payable = get_payment_amount - get_change_amount;
            net_payable = net_payable.toFixed(2);
            $("#net_payment").attr("value", net_payable);
            $("#due_amount").attr("value", 0);
        }

        if (get_payment_amount < get_grand_total) {

            $("#change_amount").attr("value", 0);
            $("#net_payment").attr("value", get_payment_amount);
            get_due_amount = get_grand_total - get_payment_amount;
            get_due_amount = get_due_amount.toFixed(2);
            $("#due_amount").attr("value", get_due_amount);
        }

        if (get_payment_amount == get_grand_total) {

            $("#change_amount").attr("value", 0);
            $("#net_payment").attr("value", get_payment_amount);
            $("#due_amount").attr("value", 0);
        }
    }
</script>

<script type="text/javascript">
     $(document).ready(function() {
$(".js-example-basic-single").select2();
});
</script>