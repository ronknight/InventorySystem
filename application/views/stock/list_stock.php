<?php


foreach ($stock as $results) {

    $id = $results->stock_no;
    @$custlistRow .= "<tr class='odd'>

                <td class='center'>" . $results->stock_no . "
                <td>" . $results->item_name . "
                <td>" . $results->category_name . "
                <td class='center'>" . $results->stock_qty . "
                <td class='center'>" . $results->purchase_rate . "
                <td class='center'>" . $results->stock_rate . "



                <td>
        <a href='#myModal" . $results->stock_no . "' data-toggle='modal' class='btn btn-warning'><i class='fa fa-pencil-square-o'></i>
                                  Edit
                              </a>
                  </td>
                ";


}
?>
<!-- page start-->
<section class="panel">
    <div class="box-header with-border">
        <h3 class="box-title"> <span class="caption-subject font-dark sbold uppercase">Stock List | <a class=" btn btn-warning" href="<?php echo base_url(); ?>index.php/stock/createXLS"><i class="fa fa-file-excel-o"></i> Export to Excel</a></span></h3>
    </div>
    <?php if ($this->session->flashdata('msg'))
        echo $this->session->flashdata('msg');
    ?>
    <div class="panel-body">

        <div class="adv-table editable-table table-responsive">
            <div class="space15"></div>
            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <table class="table table-striped table-hover table-bordered dataTable" id="example1"
                       aria-describedby="editable-sample_info">
                    <thead>
                    <tr role="row">
                        <!-- <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Username">
                            ID
                        </th> -->
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">CATEGORY
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            SIZE
                        </th>
                       
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            PART NUMBER
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            TYPE
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            BRAND
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            QUANTITY
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            PURCHASE RATE
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            STOCK RATE
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Delete: activate to sort column ascending">
                            ACTION
                        </th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <?php foreach ($stock as $results) {

                        $id = $results->stock_no; ?>
                        <tr class='odd'>

                            <!-- <td class='center'><?php echo $results->stock_no; ?></td> -->
                            <td><?php echo $results->category_name; ?></td>
                            <td><?php echo $results->item_name; ?></td>
                            <td style = "text-transform:uppercase;"><?php echo $results->article_no; ?></td>
                            <td style = "text-transform:uppercase;"><?php echo $results->color; ?></td>
                            <td style = "text-transform:uppercase;"><?php echo $results->size; ?></td>

                            <td class='center'>
                                <?php if ($results->stock_qty == 0) { ?>
                                    <span class="label label-warning">Not Available</span>

                                <?php } else { ?>
                                    <span class="label label-primary"><?php echo $results->stock_qty ?></span>
                                <?php } ?>
                            </td>
                            <td class='center'><?php echo number_format($results->purchase_rate); ?></td>
                            <td class='center'><?php echo number_format($results->stock_rate,2); ?></td>


                            <td>
                                <a href='#myModal<?php echo $results->stock_no; ?>' data-toggle='modal'
                                   class='btn btn-warning' <?php echo $My_Controller->editPermission; ?>><i
                                        class='fa fa-pencil-square-o'></i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

<!--Modal for Edit -->

<?php foreach ($stock as $rows): ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
         id="myModal<?php echo $rows->stock_no; ?>"
         class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">UPDATE RECORD</h4>
                </div>
                <div class="modal-body modal-edit">
                        <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'id' => 'myform', 'method' => 'post');
                        echo form_open(base_url().'index.php/stock/update_stock', $attributes); ?>
                        <div class='form-group'>
                            <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>SIZE</label>

                            <div class='col-lg-9'>
                                <input type='hidden' name="stock_no" class='form-control' id='c_id'
                                       value='<?php echo $rows->stock_no; ?>'>
                                <input readonly="readonly" type='text' name="item_name" class='form-control' id='c_name'
                                       value='<?php echo $rows->item_name; ?>'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>PART NUMBER</label>

                            <div class='col-lg-9'>
                                <input type='hidden' name="cid" class='form-control' id='c_id'
                                       value=''>
                                <input readonly="readonly" type='text' name="article_no" class='form-control' id='c_name'
                                       value='<?php echo $rows->article_no; ?>'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>BRAND</label>

                            <div class='col-lg-9'>
                                <input type='hidden' name="cid" class='form-control' id='c_id'
                                       value=''>
                                <input readonly="readonly" type='text' name="size" class='form-control' id='c_name'
                                       value='<?php echo $rows->size; ?>'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>TYPE</label>

                            <div class='col-lg-9'>
                                <input type='hidden' name="cid" class='form-control' id='c_id'
                                       value=''>
                                <input readonly="readonly" type='text' name="color" class='form-control' id='c_name'
                                       value='<?php echo $rows->color; ?>'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>QUANTITY</label>

                            <div class='col-lg-9'>
                                <input type='hidden' name="cid" class='form-control' id='c_id'
                                       value=''>
                                <input type='text' name="stock_qty" class='form-control' id='c_name'
                                       value='<?php echo $rows->stock_qty; ?>'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>PURCHASE RATE</label>

                            <div class='col-lg-9'>
                                <input type='hidden' name="cid" class='form-control' id='c_id'
                                       value=''>
                                <input readonly="readonly" type='text' name="purchase_rate" class='form-control' id='c_name'
                                       value='<?php echo $rows->purchase_rate; ?>'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>STOCK RATE</label>

                            <div class='col-lg-9'>
                                <input type='hidden' name="cid" class='form-control' id='c_id'
                                       value=''>
                                <input  type='text' name="stock_rate" class='form-control' id='c_name'
                                       value='<?php echo $rows->stock_rate; ?>'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <div class='col-lg-offset-2 col-lg-10'>
                                <button type='submit' class='btn btn-primary'>Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>

<!--Modal for Edit ends-->


<!--Modal for ADD -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
     id="myModal-1"
     class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">ADD STOCK ITEMS</h4>
            </div>
            <div class="modal-body modal-edit">
                <form class='form-horizontal' role='form' method="post"
                      action="<?= base_url(); ?>category/insert_category" enctype="multipart/form-data">
                    <div class='form-group'>
                        <label for='inputPassword1'
                               class='col-lg-3 col-sm-3 control-label'>CATEGORY NAME</label>
                        <div class='col-lg-9'>
                            <select name="category_id" class="form-control">
                                <option>Select Category</option>
                                <?php foreach ($category as $rows): ?>
                                    <option
                                        value="<?php echo $rows->category_id; ?>"><?php echo $rows->category_name ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                    </div>

                    <div class='form-group'>
                        <div class='col-lg-offset-2 col-lg-10'>
                            <button type='submit' class='btn btn-primary'>ADD RECORD</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!--Modal for ADD ends-->


<!-- page end-->
