<form role="form" method="post" action="<?=base_url(); ?>index.php/sales/insert_sales">
<section class="panel">
    <header class="panel-heading"  style="background-color: black; color: white;">
        BASIC INFORMATION
    </header>
    <?php if($this->session->flashdata('success'))
        echo $this->session->flashdata('success');
    ?>
    <div class="panel-body">

        <div class="adv-table editable-table table-responsive">
            <div class="clearfix">


                    <input type="hidden" name="sales_no" class="form-control"  value="<?php echo $sales_no; ?>" />
                <div class="col-md-3">
                    <div class="sandbox">
                        <label for="select-beast">Customer Name:</label>
                        <select class="form-control" name="customer_id" required="required">
                            <option value="">SELECT CUSTOMERS</option>
                            <?php foreach ($customers  as $customer) : ?>
                                <option value="<?php echo $customer->customer_id ?>"><?php echo $customer->customer_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>


                <div class="col-md-3">
                    <div class="sandbox">
                        <label for="select-beast">Company Name:</label>
                        <select class="form-control" name="company_id" required>
                            <option value="AL">SELECT COMPANY</option>
                            <?php foreach ($companies  as $company) : ?>
                                <option value="<?php echo $company->company_id ?>"><?php echo $company->company_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
</div>
                <div class="col-md-3">

                    <label>Sales Date</label>
                    <input type="text" value="" size="16" name="sales_date" class="form-control form-control-inline input-medium default-date-picker">


                </div>


            </div>




            <div class="space15"></div>
            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">


            </div>
        </div>
    </div>
</section>


<div class="row">
<div class="col-md-3">
    <!-- begin panel -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">Select Product By Barcode</h4>
        </div>
        <div class="panel-body">

            <div class="form-group">
                <div class="col-md-12 col-sm-12">
                    <input type="text" autocomplete="on" onkeypress="return barcode_input(event , this.value)" onchange="add_product(this.value)" id="barcode" autofocus="" name="" class="form-control" placeholder="Click Here To Scan Barcode" data-parsley-id="5740"><ul class="parsley-errors-list" id="parsley-id-5740"></ul>
                </div>
            </div>

        </div>
    </div>
    <!-- end panel -->

    <!-- begin panel -->
 <!--   <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">Select Products To Sale</h4>
        </div>
        <div class="panel-body">
            <div id="product_list_holder">

            </div>
        </div>
    </div> -->   <!-- end panel -->

</div>
<div class="col-md-3">
    <!-- begin panel -->
    <div class="panel panel-warning">
        <div class="panel-heading">
            <!--<div class="panel-heading-btn">
                <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-default" href="javascript:;"><i class="fa fa-expand"></i></a>
                <a data-click="panel-collapse" class="btn btn-xs btn-icon btn-circle btn-warning" href="javascript:;"><i class="fa fa-minus"></i></a>
            </div>-->
            <h4 class="panel-title">Select Products</h4>
        </div>
        <div class="panel-body">

            <div class="form-group">
                <div class="col-md-12 col-sm-12">
                    <select class="form-control" name="item_id" style="width: 200px;" onchange="add_product(this.value)">
                        <option selected="" value="">Select A Product</option>
                        <?php foreach ($products as $cats) : ?>
                            <option value="<?= $cats->item_id; ?>"><?= $cats->item_name ; ?> / <?= $cats->color?> / <?= $cats->size?></option>
                        <?php endforeach; ?>

                    </select>

                </div>
            </div>
            &nbsp;
        </div>
    </div>
    <!-- end panel -->
</div>


</div>
<div class="row">
    <div class="col-md-7 ui-sortable">
        <!-- begin panel -->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">Select Products To Sale</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <div style="height:250px;overflow-y:scroll;" id="">

                        <table cellspacing="0" border="1" style="font-size:11px;border-collapse:collapse;"
                               class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Barcode</th>
                            <th width="25%">Name</th>
                           <!-- <th>Category</th>-->
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                            <th><i class="fa fa-trash"></i></th>
                        </tr>
                        </thead>
                        <tbody id="invoice_entry_holder">

                        </tbody>
                    </table>
                        </div>
                </div>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <div class="col-md-5 ui-sortable">
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
                            <td>Sub Total</td>
                            <td>
                                <input type="text" name="sub_total" value="" id="sub_total" class="form-control text-right" data-parsley-id="0979"><ul class="parsley-errors-list" id="parsley-id-0979"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Discount</td>
                            <td id="customer_discount_holder">
                                <input type="text" name="discount" value="" id="discount" onchange="calculate_discount(this.value);" class="form-control text-right">
                            </td>
                        </tr>
                        <!--<tr>
                            <td>Grand Total</td>
                            <td>
                                <input type="text" name="amount" value="" id="grand_total" class="form-control text-right" data-parsley-id="9465"><ul class="parsley-errors-list" id="parsley-id-9465"></ul>
                            </td>
                        </tr>-->
                        <tr>
                            <td>Payment</td>
                            <td>
                                <input type="text" data-parsley-required="true" placeholder="Enter Payment Amount" onkeyup="return calculate_change_amount()" value="" id="payment" name="" class="form-control text-right" data-parsley-id="4305"><ul class="parsley-errors-list" id="parsley-id-4305"></ul>
                            </td>
                        </tr>
                        <!--<tr>
                            <td>Change</td>
                            <td>
                                <input type="text" id="change_amount" value="" class="form-control text-right" data-parsley-id="4889"><ul class="parsley-errors-list" id="parsley-id-4889"></ul>
                            </td>
                        </tr>-->
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
</form>
<script>

    function get_product(category_id ) {
//        alert(category_id);
        // get the product list
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/sales/get_sale_product_list/'+ category_id,
            success: function(response)
            {
                $('#product_list_holder').html(response);
            }
        });

    }

    total_number = 0;
    function add_product(product_id) {
        //if (total_number != 0)
        //  total_number = 0;

        total_number++;

        // get the product detail
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/sales/get_selected_product/' +  product_id + '/' + total_number,
            success: function(response)
            {
                jQuery('#invoice_entry_holder').append(response);
                calculate_grand_total();
                calculate_change_amount();
            }
        });
    }

    function delete_row(entry_number) {

        //alert(entry_number);
        // return false;
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

    function calculate_grand_total() {

        // calculating subtotal
        sub_total = 0;
        for (var i = 1 ; i <= total_number ; i++)
        {
            sub_total   +=   Number( $("#single_entry_total_"+ i).val() );

        }
        $("#sub_total").attr("value" , sub_total);

        // calculating grand total
        discount_percentage    =   Number( $("#discount_percentage").val() );
        vat_percentage         =   Number( $("#vat_percentage").val() );

        sub_total              =   sub_total - (sub_total * (discount_percentage / 100));
        grand_total            =   sub_total + (sub_total * (vat_percentage / 100));

        grand_total            =    grand_total.toFixed(2);
        $("#grand_total").attr("value" , grand_total);
        calculate_change_amount();
    }


    function calculate_change_amount() {
        get_grand_total    =	Number( $("#net_payment").val() );
        get_payment_amount =	Number( $("#payment").val() );

        if (get_payment_amount > get_grand_total) {

            change_amount      =	get_payment_amount - get_grand_total;
            change_amount      =	change_amount.toFixed(2);
            $("#change_amount").attr("value" , change_amount);
            get_change_amount  =	Number( $("#change_amount").val() );
            net_payable		   =	get_payment_amount - get_change_amount;
            net_payable		   =	net_payable.toFixed(2);
            $("#net_payment").attr("value" , net_payable);
            $("#due_amount").attr("value" , 0);
        }

        if (get_payment_amount < get_grand_total) {

            $("#change_amount").attr("value" , 0);
            $("#net_payment").attr("value" , get_payment_amount);
            get_due_amount	=	get_grand_total - get_payment_amount;
            get_due_amount	=	get_due_amount.toFixed(2);
            $("#due_amount").attr("value" , get_due_amount);
        }

        if (get_payment_amount == get_grand_total) {

            $("#change_amount").attr("value" , 0);
            $("#net_payment").attr("value" , get_payment_amount);
            $("#due_amount").attr("value" , 0);
        }
    }

    function calculate_single_entry_total(entry_number) {

        quantity        = $("#single_entry_quantity_"+entry_number).val();
        selling_price   = $("#single_entry_selling_price_"+entry_number).val();

        single_entry_total = quantity * selling_price;
        $("#single_entry_total_"+entry_number).val( single_entry_total );

        // on change each single entry, update the grand total area also
        calculate_grand_total();
        calculate_change_amount();
    }

    function calculate_grand_total_for_purchase() {

        grand_total = 0;
        for (var i = 1; i <= total_number; i++) {
            grand_total += Number($("#single_entry_total_" + i).val());

        }
//alert(grand_total);
        $("#sub_total").val(grand_total);
    }

    function calculate_discount(id){

        var amount = $("#sub_total").val();
        discount= (id/100)*amount;
        var net_payment =amount - discount;
        $("#net_payment").val(net_payment);



    }


</script>

