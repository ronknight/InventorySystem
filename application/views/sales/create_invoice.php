<div class="layout-content">
    <div class="layout-content-body">
        <div class="row">
            <div style="left: 50%; transform: translateX(-50%);" class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong><span class="icon icon-plus-circle"></span> Create Invoice</strong>
                    </div>
                    <div class="card-body">
                        <div id="msg"></div>
                            <?php echo form_open('Invoice/create_invoice_action',array('íd'=>'create_invoice','method'=>'post','class'=>'form-horizontal form'));?>
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-2"><label>Customer :</label></div>
                                <div class="col-md-4">
                                    <select id="demo-select2-1" required class="form-control" name="customer_id">
                                        <option value="" selected disabled>Select Customer</option>
                                        <?php foreach ($customers as $customer): ?>
                                            <?php if($customer['status'] == "Active") { ?>
                                            <option value="<?= $customer['id'] ?>"><?= $customer['name'] ?></option>
                                        <?php } endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-2"><label>Date :</label></div>
                                <div class="col-md-4">
                                    <div class="input-with-icon">
                                        <input class="form-control" type="text" name="inv_date" data-provide="datepicker" data-date-format="yyyy-m-d" data-date-today-highlight="true">
                                      <span class="icon icon-calendar input-icon"></span>
                                    </div>
                              </div>
                            </div>
                            <div class="row gutter-xs">
                                <div class="col-xs-12">
                                    <table id="" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Select Item</th>
                                            <th>Stock/Qty</th>
                                            <th>Carton</th>
                                            <th>Item/Carton</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="rows-list">
                                            <tr>
                                                <td class="product-list">
                                                    <select required class="form-control demo-select2-2 product" name="product_id[]">
                                                        <option value="" selected disabled>Select product</option>
                                                        <?php foreach ($products as $product): ?>
                                                            <option value="<?= $product['id'] ?>">
                                                                <?= $product['name'] ?>(<?= $product['part_no'] ?>)
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <td><input type="number" name="av_qtys[]" class="form-control stock" readonly></td>
                                                <td><input type="number" name="cartons[]" class="form-control carton"></td>
                                                <td><input type="number" name="item_qtys[]" class="form-control items-carton" readonly></td>
                                                <td><input type="number" name="quantity[]" class="form-control quantity" readonly></td>
                                                <td>
                                                    <input type="number" name="rates[]" class="form-control rate">
                                                    <input type="hidden" name="supplier_rate[]" class="form-control supplier_rate">
                                                </td>
                                                <td><input type="number" name="discounts[]" class="form-control discount"></td>
                                                <td><input type="number" name="totals[]" class="form-control total" readonly></td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-danger delete-row">
                                                        <i class="icon icon-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td style="text-align:right;" colspan="7">
                                                    <strong style="color: inherit;">Total Discount:</strong>
                                                </td>
                                                <td class="text-right">
                                                    <input type="text" id="total_discount" class="form-control" name="total_discount" tabindex="" value="0.00" readonly="readonly">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7" style="text-align:right;">
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
                                                <td style="text-align:right;" colspan="6">
                                                    <strong style="color: inherit;">Paid Amount:</strong>
                                                </td>
                                                <td class="text-right">
                                                    <input type="text" value="0" id="paid_amount" name="paid_amount" class="form-control">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <input type="submit" id="add-invoice" class="btn btn-info" name="add-invoice" value="Submit">
                                                    <input type="button" class="btn btn-info" id="btn-full-paid" name="" value="Full Paid">
                                                </td>
                                                <td colspan="6">
                                                    <strong style="color: inherit;">Due:</strong>
                                                </td>
                                                <td>
                                                    <input type="text" id="due_amount" class="form-control" name="due_amount" readonly>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row gutter-xs">
                                <div class="col-xs-6">
                                    <button class="btn btn-primary pull-right" type="submit">
                                        Create Invoice
                                    </button>
                                </div>
                            </div>
                       <?php echo form_close(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

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
            var items = Number(row.find(".items-carton").val());
            var rate = Number(row.find(".rate").val());
            var discount = Number(row.find(".discount").val());
            row.find(".quantity").val((carton * items));
            var row_items = (carton * items);
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
                var quantity = Number($(this).find(".quantity").val());
                g_discount += Number(discount * quantity);
            });
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