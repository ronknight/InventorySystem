<script>
    $(document).ready(function(){

        $( "#item" ).autocomplete({

            source: function(request, response) {
                $.ajax({
                    url: "<?php echo site_url('sales/autocomplete'); ?>",
                    data: { name: $("#item").val()},
                    dataType: "json",
                    type: "POST",
                    success: function(data){
                        //alert(data);
                        response(data);
                    }
                });
            }
        });
    });

    function getSales(cont)
    {
        //alert(cont);
        $.post("<?=base_url();?>sales/display_sales_return/",{salesno:cont},function(page_response)
//$.post("view/get_inst.php",{inst:cont},function(rep3)
        {
            //7alert(page_response);

            $("#display").html(page_response);
            $("#display").slideDown("slow");
        });
    }

</script>

<form role="form" method="post" action="<?=base_url(); ?>sales/insert_sales">


<div class="row">
<div class="col-md-3">
    <!-- begin panel -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">Search Product By Sale No</h4>
        </div>
        <div class="panel-body" style="height: 100px;">

            <div class="form-group">
                <div class="col-md-12 col-sm-12">

                    <input type="text" autofocus placeholder="Enter Item name here" onblur="getSales(this.value)" id="item" class="form-control ui-autocomplete-input" name="item" autocomplete="off">
                </div>
            </div>



        </div>
    </div>
    <!-- end panel -->

</div>



</div>

    <div class="row">
        <div id="display">

        </div>
    </div>

</form>
<script>

    function get_product(category_id ) {
//        alert(category_id);
        // get the product list
        $.ajax({
            url: '<?php echo base_url(); ?>sales/get_sale_product_list/'+ category_id,
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
            url: '<?php echo base_url(); ?>sales/get_selected_product/' +  product_id + '/' + total_number,
            success: function(response)
            {
                jQuery('#invoice_entry_holder').append(response);
                calculate_grand_total();
                calculate_change_amount();
            }
        });
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
        get_grand_total    =	Number( $("#grand_total").val() );
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


</script>

