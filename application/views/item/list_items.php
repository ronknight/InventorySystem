    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"> <span class="caption-subject font-dark sbold uppercase">Items List | <a
                                href='#myModal-1' data-toggle='modal' class='btn green btn-info'>
                                Add New <i class="fa fa-plus"></i>
                            </a></span></h3>
                </div>
                <div class="box-body">

                    <table class="table table-striped table-hover table-bordered dataTable" id="example1"
                           aria-describedby="editable-sample_info">
                        <thead>
                        <tr role="row">
                            <!-- <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                BAR CODE
                            </th> -->
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                CATEGORY
                            </th>
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                SIZE
                            </th>
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                PART NUMBER
                            </th>
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                BRAND
                            </th>
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                TYPE
                            </th>

                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                PURCHASE RATE
                            </th>
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                aria-label="QR Code">
                                IN STOCK
                            </th>
                            <th class="sorting_disabled" role="columnheader" tabindex="0"
                                aria-controls="editable-sample"
                                rowspan="1"
                                colspan="1" aria-label="Delete: activate to sort column ascending">
                                Action
                            </th>
                            <!-- <th class="sorting_disabled" role="columnheader" tabindex="0"
                                aria-controls="editable-sample"
                                rowspan="1"
                                colspan="1" aria-label="Delete: activate to sort column ascending">
                                Print
                            </th> -->
                        </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach ($item as $results) { ?>
                        <tr class='odd'>


                           <!--  <td>
                                <img src='<?php echo base_url(). "img/barcode.php?barcode=.$results->item_id.&width=240&text=$results->item_name($results->color/$results->size/$results->article_no/$results->purchase_rate)"?>' /></td> -->

                            
                            <td><?php echo $results->category_name?>
                            <td><?php echo $results->item_name?>
                            <td style = "text-transform:uppercase;"><?php echo $results->article_no?></td>
                            <td style = "text-transform:uppercase;"><?php echo $results->size?>

                            <td style = "text-transform:uppercase;" class=center><?php echo $results->color?>
                            <td><?php echo number_format($results->purchase_rate,2)?>
                            <td><?php if($results->stock_qty > 0){ echo '<span class="label label-success">'.$results->stock_qty.'</span>';}
                                else{
                                    echo '<span class="label label-danger">'.$results->stock_qty.'</span>';
                                }?>



                            <td>
                                <!-- <form action="<?php echo base_url('item/delete_item/'.$results->item_id);?>"> -->
                                    <center>
                                        <a href='#myModal<?php echo $results->item_id?>' <?php echo $My_Controller->editPermission;?>
                                            data-toggle='modal' class='btn btn-warning'><i class='fa fa-pencil-square-o'></i>
                                            Edit
                                        </a>
                                        <!-- <button class="btn btn-danger">Delete</button> -->
                                    </center>
                                <!-- </form> -->
                                
                            </td>
                            <!-- <td>

                                <a href='#myModal1' onclick='get_items(<?php echo $results->item_id?>);' data-toggle='modal' class='btn btn-default'><i class='fa fa-pencil-square-o'></i>
                                    Print
                                </a>
                            </td> -->
                        <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

</section>


<script>
    function get_items(id) {
        var csrf_test_name = $("input[name=csrf_test_name]").val();
        $.ajax({
            url: '<?=base_url();?>index.php/item/get_items/',
            type: 'POST',
            data: {'id': id, 'csrf_test_name': csrf_test_name},
            dataType: 'html',
            success: function (response) {
                //console.log(response.category_id);

                $('#itemBar').html(response);
                //$('#purchase_entry_holder').html(response);
                $("#barcode").val('');
                $("#barcode").focus();


            }
        });
    }
</script>
<!-- page start-->

<!--Modal for Edit -->
<?php foreach ($item as $rows): ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
         id="myModal<?php echo $rows->item_id; ?>"
         class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">UPDATE RECORD</h4>
                </div>

                <?= form_open_multipart(base_url() . 'item/update_item', array('method' => 'POST', 'class' => 'form-horizontal')) ?>
                <div class="modal-body modal-edit">

                    <div class='form-group'>
                        <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>SIZE</label>

                        <div class='col-lg-9'>
                            <input type='hidden' name="cid" class='form-control'
                                   value='<?php echo $rows->item_id; ?>'>
                            <input type='text' name="item_name" class='form-control' id='c_name'
                                   value='<?php echo $rows->item_name; ?>'>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>PART NUMBER</label>

                        <div class='col-lg-9'>
                            <input type='text' name="article_no" class='form-control'
                                   value="<?php echo $rows->article_no; ?>" id='c_cell'>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>BRAND</label>

                        <div class='col-lg-9'>
                            <input type='text' name="size" class='form-control'
                                   value="<?php echo $rows->size; ?>" id='c_cell'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>TYPE</label>

                        <div class='col-lg-9'>
                            <input type='text' name="color" class='form-control'
                                   value="<?php echo $rows->color; ?>" id='c_cell'>
                        </div>
                    </div>
                    <!-- <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>FLAG</label>

                        <div class='col-lg-9'>
                            <input type='text' name="fax_no" class='form-control'
                                   value="<?php echo $rows->flag; ?>" id='c_address'
                                   placeholder=''>
                        </div>
                    </div> -->

                    <!-- <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>QR
                            CODE</label>

                        <div class='col-lg-9'>
                            <input type='text' name="fax_no" class='form-control'
                                   value="<?php echo $rows->item_id; ?>" id='c_address'
                                   placeholder=''>
                        </div>
                    </div> -->


                    <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>PURCHASE
                            RATE</label>

                        <div class='col-lg-9'>
                            <input  type='text' name="purchase_rate" class='form-control'
                                   value="<?php echo $rows->purchase_rate; ?>" id='c_address'
                                   placeholder=''>
                        </div>
                    </div>


                    <div class='form-group'>
                        <label for='inputPassword1'
                               class='col-lg-3 col-sm-3 control-label'>CATEGORY</label>

                        <div class='col-lg-9'>
                            <select name="category_id" class="form-control">
                                <option value="<?= $rows->category_id; ?>"><?= $rows->category_name; ?></option>
                                <?php foreach ($category as $item) { ?>
                                    <option value="<?= $item->category_id; ?>"><?= $item->category_name; ?></option>
                                <?php } ?>
                            </select>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type='submit' class='btn btn-primary'>Update</button>
                    <form action="<?php echo base_url('item/delete_item/'.$rows->item_id);?>">
                        <button type="submit" class="btn btn-warning dark btn-outline">Delete</button>
                    </form>
                </div>
                <?= form_close(); ?>


            </div>
        </div>
    </div>
<?php endforeach; ?>

<!--------------------------------------barcode---------------------------------->


<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
     id="myModal1"
     class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">PRINT BARCODE</h4>
            </div>
            <div class="modal-body modal-edit" id="itemBar">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>


<!------------------------------------------------------------------------------->

<!--Modal for ADD -->


<div class="modal fade" id="myModal-1" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Item</h4>
            </div>
            <?= form_open_multipart(base_url() . 'index.php/item/insert_item', array('method' => 'POST', 'class' => 'form-horizontal')) ?>

            <div class="modal-body">

                <div class='form-group'>
                    <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>SIZE</label>
                    <div class='col-lg-9'>
                        <input type='hidden' name="cid" class='form-control' id='c_' value=''>
                        <input type='text' name="item_name" class='form-control' id='c_name'
                               value=''>
                    </div>
                </div>

                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>PART NUMBER</label>

                    <div class='col-lg-9'>
                        <input type='text' name="article_no" class='form-control'
                               value="" id=''>
                    </div>
                </div>

                
                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>TYPE</label>

                    <div class='col-lg-9'>
                        <input type='text' name="color" class='form-control'
                               value="" id=''
                               placeholder=''>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>BRAND</label>

                    <div class='col-lg-9'>
                        <input type='text' name="size" class='form-control'
                               value="" id='c_cell'>
                    </div>
                </div>

                <!-- <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>QR CODE</label>

                    <div class='col-lg-9'>
                        <input type='text' name="qrCode" class='form-control'
                               value="" id=''
                               placeholder=''>
                    </div>
                </div> -->

                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>PURCHASE RATE</label>

                    <div class='col-lg-9'>
                        <input type='text' name="purchase_rate" class='form-control'
                               value="" id=''
                               placeholder=''>
                    </div>
                </div>

                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>STOCK RATE</label>

                    <div class='col-lg-9'>
                        <input type='text' name="stock_rate" class='form-control'
                               value="" id=''
                               placeholder=''>
                    </div>
                </div>

                <div class="form-group">
                    <label for="cname" class="control-label col-lg-3 col-sm-3">CATEGORY NAME </label>

                    <div class="col-lg-9">
                        <select class="form-control input-lg m-bot15" name="category_id" id="">
                            <option value="0">Select Category</option>
                            <?php foreach ($category as $rows): ?>
                                <option
                                    value="<?php echo $rows->category_id; ?>"><?php echo $rows->category_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>QUANTITY</label>

                    <div class='col-lg-9'>
                        <input type='text' name="stock_qty" class='form-control'
                               value="" id=''
                               placeholder=''>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
<?php echo $My_Controller->savePermission;?>
            </div>
            <?php echo form_close();?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
