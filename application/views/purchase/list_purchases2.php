<?php

/*



foreach ($item as $results) {

    $id = $results->item_id;
    @$custlistRow .= "<tr class='odd'>


<td><img src='".base_url().'assets/qr/'.$results->item_id.'.png'."'  width='60' height='60'>
                <td>" . $results->item_name . "

                <td>" . $results->size . "

                <td class=center>" . $results->flag . "
                <td>" . $results->category_name . "
<td>
<a href='#myModal" . $results->item_id . "' data-toggle='modal' class='btn btn-warning'><i class='fa fa-pencil-square-o'></i>
                                  Edit
                              </a>
                  </td>
                ";


}
*/
?>
<form role="form" method="post" action="<?= base_url(); ?>index.php/purchase/insert_purchase">

<div class="row">
    <div class="col-lg-5">


        <div class="input-group">
            <span class="input-group-addon"> <span class="fa fa-search"> </span> </span>
            <!--<select class="form-control" name="item_id" style="width: 250px;"
                    onchange="return get_purchased_data(this.value)">
                <option value="">Add Product</option>
                <?php //foreach ($products as $rows) :
                    ?>
                    <option value="<?//= $rows->item_id; ?>"><?php //echo $rows->item_name; ?></option>
                <?php //endforeach; ?>
            </select>-->
            <input type="text" id="country" autocomplete="off" name="country" class="form-control" placeholder="Start typing and see the magic! :P">
            <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>

            <span class="input-group-addon"></span>
        </div>


        <div class="panel panel-primary">
            <div style="height:300px;overflow-y:scroll;" id="ContentPlaceHolder1_Panel2">


                <div>
                    <table cellspacing="0" border="1" style="font-size:11px;border-collapse:collapse;"
                           id="" class="table table-striped table-hover" rules="all">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <!--<th>Category</th>-->
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Purchase Rate</th>
                            <th>Total(P Amount)</th>
                            <th><i class="fa fa-trash"></i></th>
                        </tr>
                        </thead>
                        <tbody id="purchase_entry_holder">

                        </tbody>
                    </table>
                </div>


            </div>

            <div style="text-align:right" class="panel-footer">
                Total = <span style="font-weight:bold;" id="grand_totalnew"></span> <br>

                <span style="font-size:11px;" id="">Total Items</span>
                <span style="font-size:11px;" id="">1</span>

            </div>
        </div>

        <input type="submit" class="btn btn-danger" id="" value="Submit"
               name="submit">

    </div>
    <div class="col-lg-7">
        <div class="panel">
        <div class="panel-body">

            <div class="adv-table editable-table table-responsive">
                <div class="clearfix">

                    <div class="col-md-6" style="border-right: 1px solid #ccc;">

                        <label>Purchase Code</label>

                        <input type="text" name="purchase_code" class="form-control"
                               value="<?php echo $purchase_no; ?>"/>
                        <div class="sandbox">
                            <label for="select-beast">Supplier Name:</label>
                            <select class="form-control" name="vendor_id" id="vendor_id">
                                <option value="">SELECT VENDORS</option>
                                <?php foreach ($vendors as $vendor) : ?>
                                    <option
                                        value="<?php echo $vendor->vendor_id ?>"><?php echo $vendor->vendor_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="sandbox">
                            <label for="select-beast">Company Name:</label>
                            <select class="form-control" name="company_id" id="company_id">
                                <option value="">SELECT COMPANY</option>
                                <?php foreach ($companies as $company) : ?>
                                    <option
                                        value="<?php echo $company->company_id ?>"><?php echo $company->company_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <label>Purchase Date</label>
                        <input type="text" size="16" name="purchase_date"
                               class="form-control form-control-inline input-medium default-date-picker"/>


                    </div>


                </div>


                <div class="space15"></div>
                <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">


                </div>
            </div>
        </div>
        </div>
    </div>

</div>
    </form>
<!--<div class="row">
    <div class="col-sm-3">
        <div class="well">
            <h4>Grand Total: <span id="grand_total">0.00</span></h4>
            <h5>Payment Method</h5>
            <select class="form-control" name="payment_method">
                <option value="0">Select payment method</option>
                <option value="credit">Credit</option>
                <option value="cash">Cash</option>
            </select><br>

            <input type="submit" value="Save" name="save" class="btn btn-primary"> &nbsp;<input type="submit" value="Print" name="print" class="btn btn-primary">
        </div>
    </div>
</div>-->


<!--New Purchase section-->

<!--<form role="form" method="post" action="<?= base_url(); ?>index.php/purchase/insert_purchase">-->

    <section class="panel" style="display:none">
        <header class="panel-heading">
            BASIC INFORMATION
        </header>
        <?php echo validation_errors(); ?>
        <?php if ($this->session->flashdata('success'))
            echo $this->session->flashdata('success');
        ?>
        <div class="alert alert-warning" id="wrong" style="display: none;">
            <p>Please select One of them</p>
        </div>
        <div class="panel-body">

            <div class="adv-table editable-table table-responsive">
                <div class="clearfix">

                    <div class="col-md-6" style="border-right: 1px solid #ccc;">

                        <label>Purchase Code</label>


                        <div class="sandbox">
                            <label for="select-beast">Supplier Name:</label>
                            <select class="form-control" name="vendor_id" id="vendor_id">
                                <option value="">SELECT VENDORS</option>
                                <?php foreach ($vendors as $vendor) : ?>
                                    <option
                                        value="<?php echo $vendor->vendor_id ?>"><?php echo $vendor->vendor_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="sandbox">
                            <label for="select-beast">Company Name:</label>
                            <select class="form-control" name="company_id" id="company_id">
                                <option value="">SELECT COMPANY</option>
                                <?php foreach ($companies as $company) : ?>
                                    <option
                                        value="<?php echo $company->company_id ?>"><?php echo $company->company_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <label>Purchase Date</label>
                        <input type="text" size="16" name="purchase_date"
                               class="form-control form-control-inline input-medium default-date-picker"/>


                    </div>


                </div>


                <div class="space15"></div>
                <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">


                </div>
            </div>
        </div>
    </section>


    <!--New Purchase ends-->

    <!--Select Products-->

    <section class="panel" style="display: none">
        <header class="panel-heading" style="background-color: black; color: white;">
            CHOOSE PRODUCT
        </header>
        <?php if ($this->session->flashdata('msg'))
            echo $this->session->flashdata('msg');
        ?>
        <div class="panel-body">

            <div class="adv-table editable-table table-responsive">
                <div class="clearfix">
                    <div class="col-md-6">

                        <div class="sandbox">
                            <!--<label for="select-beast">Supplier Name:</label>-->
                            <div class="btn-group">
                                <select class="form-control" name="item_id" style="width: 250px;"
                                        onchange="return get_purchased_dataa(this.value)">
                                    <option value="">Add Product</option>
                                    <?php foreach ($products as $row) :
                                        ?>
                                        <option value="<?= $row->item_id; ?>"><?php echo $row->item_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>


                    </div>


                </div>


                <div class="space15"></div>
                <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">


                </div>
            </div>
        </div>
    </section>


    <!--Select products ends-->

    <section class="panel" style="display: none">
        <header class="panel-heading" style="background-color: black; color: white;">
            ADD PURCHASE
        </header>
        <div class="panel-body">

            <div class="adv-table editable-table table-responsive">
                <div class="clearfix">

                </div>
                <div class="space15"></div>
                <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Purchase Rate</th>
                                    <th>Total(P Amount)</th>
                                    <th><i class="fa fa-trash"></i></th>
                                </tr>
                                </thead>
                                <tbody id="purchase_entry_holder1">


                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>

    <!---Payment-->

    <div class="row" style="display: none">
        <div class="col-md-5">
            <!-- begin panel -->
            <div data-sortable-id="ui-widget-10" class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title">
                        Payment
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>Grand Total</td>
                                <td class="text-right">
                                    <input type="text" data-parsley-required="true" value="" id="grand_totall"
                                           name="amount" class="form-control" data-parsley-id="0232">


                                </td>
                            </tr>
                            <tr>
                                <td>Payment</td>
                                <td>
                                    <input type="text" data-parsley-required="true" placeholder="Enter Payment Amount"
                                           value="" id="payment" onblur="balance_total()" name="purchase_payment"
                                           class="form-control" data-parsley-id="0232">
                                    <ul class="parsley-errors-list" id=""></ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Balance</td>
                                <td class="text-right">
                                    <input type="text" data-parsley-required="true" value="" id="balance" name="balance"
                                           class="form-control" data-parsley-id="0232">


                                </td>
                            </tr>
                            <tr>
                                <td>Method</td>
                                <td>
                                    <select name="payment_method" class="form-control" data-parsley-id="8750">
                                        <option selected="" value="">Select Payment Method</option>
                                        <option value="1">Cash</option>
                                        <option value="2">Check</option>
                                        <option value="3">Card</option>
                                    </select>
                                    <ul class="parsley-errors-list" id="parsley-id-8750"></ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="form-group col-md-10">
                            <input class="btn btn-success" type="submit" style="margin-top: 15px;"
                                   value="Create New Purchase">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>

<!--Payment ends-->


<!-- page start-->
<!--<form role="form" method="post" action="<?= base_url(); ?>index.php/purchase/insert_purchase">
    <input type="hidden" name="purchase_code" class="form-control"
           value="<?php echo $purchase_no; ?>"/>
<div class="row" style="display:none;">
    <div class="col-lg-6">
        <div id="leftdiv">
        <div class="panel">
            <div class="panel-body">
                <form class="form-inline">


                <div class="form-group">
                    <label for="exampleInputCompany" class="sr-only">Company</label>
                    <select class="form-control" name="company_id" id="company_id">
                        <option value="">SELECT COMPANY</option>
                        <?php foreach ($companies as $company) : ?>
                            <option
                                value="<?php echo $company->company_id ?>"><?php echo $company->company_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="select-beast" class="sr-only">Supplier Name:</label>
                    <select class="form-control" name="vendor_id" id="vendor_id">
                        <option value="">SELECT VENDORS</option>
                        <?php foreach ($vendors as $vendor) : ?>
                            <option
                                value="<?php echo $vendor->vendor_id ?>"><?php echo $vendor->vendor_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <div class="form-group">
                        <select class="form-control" name="item_id" style="width: 250px;"
                                onchange="return get_purchased_dataa(this.value)">
                            <option value="">Add Product</option>
                            <?php foreach ($products as $row) :
                                ?>
                                <option value="<?= $row->item_id; ?>"><?php echo $row->item_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <INPUT TYPE="text" LIST="zip_codes" name="barcode" class="form-control" id="barcode" onblur="get_purchased_data(this.value)">
                        <DATALIST ID="zip_codes">
                            <?php
                            foreach($products as $items)
                            {
                            ?>
                            <OPTION VALUE="<?php echo $items->item_id;?>" LABEL="<?php echo $items->item_name;?>">
                                <?php
                                }

                                ?>
                        </DATALIST>
                    </div>
                <div id="print">
                    <div style="height:300px;overflow-y:scroll;" id="ContentPlaceHolder1_Panel2">


                        <div>
                            <table cellspacing="0" border="1" style="font-size:11px;border-collapse:collapse;"
                                   id="" class="table table-striped table-hover" rules="all">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <!--<th>Category</th>-->
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Purchase Rate</th>
                                    <th>Total(P Amount)</th>
                                    <th><i class="fa fa-trash"></i></th>
                                </tr>
                                </thead>
                                <tbody id="purchase_entry_holderm">

                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div style="clear:both;"></div>
                    <div id="">
                        <table style="width:100%; float:right; padding:5px; color:#000; background: #FFF;" id="">
                            <tbody>
                            <tr>
                                <td style="padding: 5px 10px;border-top: 1px solid #DDD;">Items</td>
                                <td style="padding: 5px 10px;font-size: 14px; font-weight:bold;border-top: 1px solid #DDD;"
                                    class="text-right">
                                    <span id="titems">1 (1)</span>
                                </td>
                                <td style="padding: 5px 10px;border-top: 1px solid #DDD;">Total</td>

                                    <span id=""></span>

                            </tr>
                            <tr>
                                <td style="padding: 5px 10px;">Order Tax <a id="pptax2" href="#" tabindex="-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td style="padding: 5px 10px;font-size: 14px; font-weight:bold;" class="text-right">
                                    <span id="ttax2">0.25</span>
                                </td>
                                <td style="padding: 5px 10px;">Discount <a id="ppdiscount" href="#" tabindex="-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td style="padding: 5px 10px;font-weight:bold;" class="text-right">
                                    <span id="tds">(0.00) 0.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"
                                    style="padding: 5px 10px; border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;">
                                    Total Payable
                                </td>
                                <td colspan="2"
                                    style="padding:5px 10px 5px 10px; font-size: 14px;border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;"
                                    class="text-right">
                                    <span id="grand_totalnew"></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="clearfix"></div>
                        <div class="col-xs-12 text-center" id="botbuttons">
                            <input type="hidden" value="3" id="biller" name="biller">

                            <div class="row">
                                <div style="padding: 0;" class="col-xs-4">
                                    <div class="btn-group-vertical btn-block">
                                        <button id="suspend" class="btn btn-warning btn-block btn-flat" type="button"
                                                tabindex="-1">
                                            Suspend
                                        </button>
                                        <button id="reset" class="btn btn-danger btn-block btn-flat" type="button"
                                                tabindex="-1">
                                            Cancel
                                        </button>
                                    </div>

                                </div>
                                <div style="padding: 0;" class="col-xs-4">
                                    <div class="btn-group-vertical btn-block">
                                        <button id="print_order" class="btn btn-info btn-block" type="button" tabindex="-1">
                                            Order
                                        </button>

                                        <button id="print_bill" class="btn btn-primary btn-block" type="button"
                                                tabindex="-1">
                                            Bill
                                        </button>
                                    </div>
                                </div>
                                <div style="padding: 0;" class="col-xs-4">
                                    <button style="height:67px;" id="payment" class="btn btn-success btn-block"
                                            type="button" tabindex="-1">
                                        <i style="margin-right: 5px;" class="fa fa-money"></i>Payment
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both; height:5px;"></div>
                        <div id="num">
                            <div id="icon"></div>
                        </div>
                        <span id="hidesuspend"></span>
                        <input type="hidden" id="pos_note" value="" name="pos_note">
                        <input type="hidden" id="staff_note" value="" name="staff_note">

                        <div id="payment-con">
                            <input type="hidden" value="" id="amount_val_1" name="amount[]">
                            <input type="hidden" value="" id="balance_amount_1" name="balance_amount[]">
                            <input type="hidden" value="cash" id="paid_by_val_1" name="paid_by[]">
                            <input type="hidden" value="" id="cc_no_val_1" name="cc_no[]">
                            <input type="hidden" value="" id="paying_gift_card_no_val_1" name="paying_gift_card_no[]">
                            <input type="hidden" value="" id="cc_holder_val_1" name="cc_holder[]">
                            <input type="hidden" value="" id="cheque_no_val_1" name="cheque_no[]">
                            <input type="hidden" value="" id="cc_month_val_1" name="cc_month[]">
                            <input type="hidden" value="" id="cc_year_val_1" name="cc_year[]">
                            <input type="hidden" value="" id="cc_type_val_1" name="cc_type[]">
                            <input type="hidden" value="" id="cc_cvv2_val_1" name="cc_cvv2[]">
                            <input type="hidden" value="" id="payment_note_val_1" name="payment_note[]">
                            <input type="hidden" value="" id="amount_val_2" name="amount[]">
                            <input type="hidden" value="" id="balance_amount_2" name="balance_amount[]">
                            <input type="hidden" value="cash" id="paid_by_val_2" name="paid_by[]">
                            <input type="hidden" value="" id="cc_no_val_2" name="cc_no[]">
                            <input type="hidden" value="" id="paying_gift_card_no_val_2" name="paying_gift_card_no[]">
                            <input type="hidden" value="" id="cc_holder_val_2" name="cc_holder[]">
                            <input type="hidden" value="" id="cheque_no_val_2" name="cheque_no[]">
                            <input type="hidden" value="" id="cc_month_val_2" name="cc_month[]">
                            <input type="hidden" value="" id="cc_year_val_2" name="cc_year[]">
                            <input type="hidden" value="" id="cc_type_val_2" name="cc_type[]">
                            <input type="hidden" value="" id="cc_cvv2_val_2" name="cc_cvv2[]">
                            <input type="hidden" value="" id="payment_note_val_2" name="payment_note[]">
                            <input type="hidden" value="" id="amount_val_3" name="amount[]">
                            <input type="hidden" value="" id="balance_amount_3" name="balance_amount[]">
                            <input type="hidden" value="cash" id="paid_by_val_3" name="paid_by[]">
                            <input type="hidden" value="" id="cc_no_val_3" name="cc_no[]">
                            <input type="hidden" value="" id="paying_gift_card_no_val_3" name="paying_gift_card_no[]">
                            <input type="hidden" value="" id="cc_holder_val_3" name="cc_holder[]">
                            <input type="hidden" value="" id="cheque_no_val_3" name="cheque_no[]">
                            <input type="hidden" value="" id="cc_month_val_3" name="cc_month[]">
                            <input type="hidden" value="" id="cc_year_val_3" name="cc_year[]">
                            <input type="hidden" value="" id="cc_type_val_3" name="cc_type[]">
                            <input type="hidden" value="" id="cc_cvv2_val_3" name="cc_cvv2[]">
                            <input type="hidden" value="" id="payment_note_val_3" name="payment_note[]">
                            <input type="hidden" value="" id="amount_val_4" name="amount[]">
                            <input type="hidden" value="" id="balance_amount_4" name="balance_amount[]">
                            <input type="hidden" value="cash" id="paid_by_val_4" name="paid_by[]">
                            <input type="hidden" value="" id="cc_no_val_4" name="cc_no[]">
                            <input type="hidden" value="" id="paying_gift_card_no_val_4" name="paying_gift_card_no[]">
                            <input type="hidden" value="" id="cc_holder_val_4" name="cc_holder[]">
                            <input type="hidden" value="" id="cheque_no_val_4" name="cheque_no[]">
                            <input type="hidden" value="" id="cc_month_val_4" name="cc_month[]">
                            <input type="hidden" value="" id="cc_year_val_4" name="cc_year[]">
                            <input type="hidden" value="" id="cc_type_val_4" name="cc_type[]">
                            <input type="hidden" value="" id="cc_cvv2_val_4" name="cc_cvv2[]">
                            <input type="hidden" value="" id="payment_note_val_4" name="payment_note[]">
                            <input type="hidden" value="" id="amount_val_5" name="amount[]">
                            <input type="hidden" value="" id="balance_amount_5" name="balance_amount[]">
                            <input type="hidden" value="cash" id="paid_by_val_5" name="paid_by[]">
                            <input type="hidden" value="" id="cc_no_val_5" name="cc_no[]">
                            <input type="hidden" value="" id="paying_gift_card_no_val_5" name="paying_gift_card_no[]">
                            <input type="hidden" value="" id="cc_holder_val_5" name="cc_holder[]">
                            <input type="hidden" value="" id="cheque_no_val_5" name="cheque_no[]">
                            <input type="hidden" value="" id="cc_month_val_5" name="cc_month[]">
                            <input type="hidden" value="" id="cc_year_val_5" name="cc_year[]">
                            <input type="hidden" value="" id="cc_type_val_5" name="cc_type[]">
                            <input type="hidden" value="" id="cc_cvv2_val_5" name="cc_cvv2[]">
                            <input type="hidden" value="" id="payment_note_val_5" name="payment_note[]">
                        </div>
                        <input type="hidden" id="postax2" value="2" name="order_tax">
                        <input type="hidden" id="posdiscount" value="" name="discount">
                        <input type="hidden" style="display: none;" value="cash" id="rpaidby" name="rpaidby">
                        <input type="hidden" style="display: none;" value="1" id="total_items" name="total_items">
                        <input type="submit" style="display: none;" value="Submit Sale" id="submit_sale">
                    </div>
                </div>
                </form>
            </div>
        </div>

        </div>
    </div>
</div>
</form>-->
    <!-- page end-->
<!--
iqbal jan
khalid khan chemistry
midrar physics
mazhar computer science
zain ul abideen urdu
munawar maths
-->


<script type="text/javascript">

    var total_number = 0;
    function get_purchased_data(product_id) {
        total_number++;

        $.ajax({
            url: '<?=base_url();?>index.php/purchase/get_data_for_purchased/' + product_id + '/' + total_number,
            type: 'POST',
            dataType: 'html',
            success: function (response) {
                //console.log(response.category_id);

                    $('#purchase_entry_holder').append(response);
                    //$('#purchase_entry_holder').html(response);
                    $("#barcode").val('');
                    $("#barcode").focus();
                    calculate_grand_total_for_purchase();

                }
        });
    }


    /*var itemids="";
     $('#purchase_entry_holder tr').each(function(){
     if(itemids!="")
     itemids+=",";
     itemids+=$(this).find('td:first').text();
     })
     */


    function calculate_single_entry_sum(entry_number) {

        //alert(entry_number);
        var quantity = $("#quantity_" + entry_number).val();
        var purchase_price = $("#unit_price_" + entry_number).val();
        //alert(quantity);
        //alert(purchase_price);
        var single_entry_total = quantity * purchase_price;
        //return false;
        //alert(single_entry_total);
        $("#single_entry_total_" + entry_number).val(single_entry_total);
        calculate_grand_total_for_purchase();

    }

    function balance_total() {


        var gtotal = $('#grand_total').val();
        // alert(gtotal);
        var pay = $('#payment').val();

        if (gtotal && pay) {
            var bal = gtotal - pay;
            //alert(bal);
            $("#balance").val(bal);
        }
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


    function calculate_grand_total_for_purchase() {

        grand_total = 0;
        for (var i = 1; i <= total_number; i++) {
            grand_total += Number($("#single_entry_total_" + i).val());

        }
//alert(grand_total);
        $("#grand_totalnew").html(grand_total);
    }

</script>