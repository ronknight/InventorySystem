
    <?php echo form_open('sales/create_quotation',array('method'=>'post'));?>

<section class="panel">
    <header class="panel-heading"  style="background-color: black; color: white;">
       QUOTATION
    </header>
    <?php if($this->session->flashdata('success'))
        echo $this->session->flashdata('success');
    ?>
    <div class="panel-body">


            <div class="row">


                    <input type="hidden" name="sales_no" class="form-control"  value="" />

                <div class="col-md-4">
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
                <div class="col-md-4">

                    <label>Quotation Date</label>
                    <input type="text" value="" size="16" name="sales_date" class="form-control form-control-inline input-medium datepicker">


                </div>
                <div class="col-md-4">

                    <label>Ref.</label>
                    <input type="text" value="" size="16" name="reference_name" class="form-control form-control-inline input-medium">


                </div>


            </div>
                          &nbsp;
             <div class="row">
                 <div class="col-md-4">
                     <label for="select-beast">Subject:</label>
                     <input type="text" name="invoice_no" class="form-control">
                 </div>
                 <div class="col-md-4">
                     <label for="select-beast">Project:</label>
                     <input type="text" name="payment" class="form-control">
                 </div>
             </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <label for="select-beast">Subject Detail:</label>
                <textarea type="text" name="type" class="form-control" rows="5"></textarea>
            </div>
        </div>


            <div class="space15"></div>
            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">


            </div>
        </div>
</section>


<div class="row">
    <div class="col-md-12 ui-sortable">
        <!-- begin panel -->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">Select Products To Sale</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <div style="" id="">

                        <table id="" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Discount</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="rows-list">
                            <tr>
                                <td class="product-list">
                                    <input required class="form-control" name="product_id[]">
                                    <input required class="form-control carton" name="cartons[]" value="1" style="display: none;">


                                </td>
                                <input type="number" name="av_qtys[]" class="form-control stock" value="1" readonly style="display: none;">
                                <input type="number" name="cartonss[]" class="form-control carton" style="display: none;">
                                <input type="number" name="item_qtys[]" class="form-control items-carton" style="display: none;" readonly>
                                <input type="number" name="quantity[]" style="display: none;" class="form-control quantity" readonly>
                                <td>
                                    <input type="number" name="rates[]" class="form-control rate" value="">
                                    <input type="hidden" name="supplier_rate[]" class="form-control supplier_rate">
                                </td>
                                <td><input type="number" name="discounts[]" value="0" class="form-control discount" readonly></td>
                                <td><input type="number" name="totals[]" class="form-control total" readonly></td>
                                <td align="center">
                                    <button type="button" class="btn btn-danger delete-row">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td style="text-align:right;" colspan="3">
                                    <strong style="color: inherit;">Total Discount:</strong>
                                </td>
                                <td class="text-right">
                                    <input type="text" id="total_discount" class="form-control" name="total_discount" tabindex="" value="0.00" readonly="readonly">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;" colspan="3">
                                    <strong style="color: inherit;">VAT:</strong>
                                </td>
                                <td class="text-right">
                                    <input type="text" id="total_vat" class="form-control" name="total_vat" tabindex="" value="5.00" readonly="readonly">
                                </td>
                                <td></td>
                            </tr>
                            <tr>

                                <td colspan="3" style="text-align:right;">
                                    <strong style="color: inherit;">Grand Total:</strong>
                                </td>
                                <td class="text-right">
                                    <input type="text" id="grand_total" tabindex="" class="form-control" name="total_amount" value="0.00" readonly="readonly">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <button id="add-item" type="button" class="btn btn-primary">
                                        Add More Item
                                    </button>
                                </td>
                                <!--<td style="text-align:right;" colspan="4">
                                    <strong style="color: inherit;">Paid Amount:</strong>
                                </td>
                                <td class="text-right">
                                    <input type="text" value="0" id="paid_amount" name="paid_amount" class="form-control">
                                </td>
                                <td></td>  -->
                            </tr>

                            </tfoot>
                        </table>
                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Terms & Conditions
                                                <small>Simple and fast</small>
                                            </h3>
                                            <!-- tools box -->
                                            <div class="pull-right box-tools">
                                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                        title="Collapse">
                                                    <i class="fa fa-minus"></i></button>
                                                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                        title="Remove">
                                                    <i class="fa fa-times"></i></button>
                                            </div>
                                            <!-- /. tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body pad">

                <textarea class="textarea" name="terms_conditions" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                            <!-- ./row -->
                        </section>
                        <td align="center">
                            <input type="submit" id="add-invoice" class="btn btn-info" name="add-invoice" value="Submit">
                        </td>

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

<script type="text/javascript">
    $(document).ready(function () {
                    $('.datepicker').datepicker({
                        autoclose: true
                    })
        var base_url = "<?=base_url()?>";
        // $(".demo-select2-2").select2({
        //     dir:"ltr"
        // });

        var list = $("#rows-list");
        var row = list.children('tr:first');
        $("#add-item").on('click', function(e){
            e.preventDefault();
            var newRow = row.clone();
            list.append(newRow);
            // $(".demo-select2-2").select2('refresh');
            do_grand_total();
        });

        $(list).on('click', ".delete-row", function(){
            if(list.children("tr").length > 1){
                $(this).closest('tr').remove();
                do_grand_total();
            } else {
                alert("This row cannot be deleted");
            }
        });

        $(list).on('change', ".product", function(){
            var id = $(this).val();
            var row = $(this).closest('tr');
            var csrf_test_name = $("input[name=csrf_test_name]").val();
            $.ajax({
                type: 'post',
                url: base_url + 'Invoice/get_product_details_v2',
                data: {'id': id,'csrf_test_name':csrf_test_name}
            }).then(function(res){
                var res = $.parseJSON(res);
                if(res.av_qty > 0) {
                    row.find(".stock").val(res.av_qty);
                    row.find(".items-carton").val(res.cart_qty);
                    row.find(".rate").val(res.selling_price);
                    row.find(".discount").val(0);
                    row.find(".supplier_rate").val(res.supplier_price);
                    row.find(".carton").removeAttr('readonly','readonly');
                    do_total(row);
                    do_grand_total();
                }
                else{
                    toastr.warning('quantity is less');
                    row.find(".stock").val('');
                    row.find(".items-carton").val('');
                    row.find(".carton").attr('readonly','readonly');
                    row.find(".rate").val('');
                    row.find(".supplier_rate").val('');

                }
            }, function(){
                alert("Sorry cannot get the product details!");
            });
        });

        $(list).on('input propertychange paste', ".carton, .rate, .discount", function(){
            if($(this).hasClass("carton")){
                var stock = Number($(this).closest("tr").find(".stock").val());
                if(Number($(this).val()) > stock){
                    $(this).css({"border": "1px solid red"});
                    console.log("Available stock is "+ stock);
                } else{
                    $(this).css({"border": "1px solid #ddd"});
                }
            }
            do_total(this);
            do_grand_total();
        });

        $("#paid_amount").on('input propertychange paste', function(){
            do_paid_total(this);
        });

        function do_total(elem){
            var row = $(elem).closest('tr');
            var carton = Number(row.find(".carton").val());
           // var items = Number(row.find(".items-carton").val());
            var rate = Number(row.find(".rate").val());
            var discount = Number(row.find(".discount").val());
            //row.find(".quantity").val((carton * items));
            var row_items = (carton);
            var row_discount = row_items * discount;
            var total = (row_items * rate) - row_discount;
            row.find(".total").val(total);
        }

        function do_grand_total(){
            var total = 0;
            var g_discount = 0;
            $(list).find(".total").each(function(e){
                total += Number($(this).val());
            });
            $(list).find("tr").each(function(e){
                var discount = Number($(this).find(".discount").val());
                var quantity = Number($(this).find(".carton").val());
                g_discount += Number(discount * quantity);
            });
            var vat_percentage = Number($("#total_vat").val());

            total = total + (total * (vat_percentage / 100));
            $("#total_discount").val(g_discount);
            $("#grand_total").val(total);
            $("#due_amount").val(total - Number($("#paid_amount").val()));
        }

        function do_paid_total(row){
            var paid_amount = Number($(row).val());
            var grand_total = Number($("#grand_total").val());
            $("#due_amount").val(grand_total - paid_amount);
        }

        $("#btn-full-paid").on("click", function(e){
            e.preventDefault();
            var amount = $("#grand_total").val();
            $("#paid_amount").val(amount);
            $("#due_amount").val(0);

        });

    });
</script>
