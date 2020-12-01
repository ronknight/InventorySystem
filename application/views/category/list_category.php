<!-- page start-->
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="box light bordered">
            <div class="box-title">
                <h4>CATEGORIES | <a href='#myModal-1' data-toggle='modal' class='btn btn-info'>
                        Add New <i class="fa fa-plus"></i>
                    </a></h4>
            </div>
            <?php if ($this->session->flashdata('msg'))
                echo $this->session->flashdata('msg');
            ?>
            <div class="box-body">

                <div class="adv-table editable-table table-responsive">

                    <div class="space15"></div>
                    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <table class="table table-striped table-hover table-bordered dataTable" id="example1"
                               aria-describedby="editable-sample_info">
                            <thead>
                            <tr role="row">
                                <th>
                                    S.No
                                </th>
                                <th>
                                    NAME
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php $i = 1;
                            foreach ($category as $results) { ?>
                            <tr class='odd'>

                                <td class='center'><?=$i;?>

                                <td><?=$results->category_name;?>
                                <td>
                                    <a href='#myModal<?=$results->category_id;?>' data-toggle='modal'
                                       class='btn btn-warning' <?php echo $My_Controller->editPermission;?>><i class='fa fa-pencil-square-o'></i>
                                        Edit
                                    </a>
                                </td>

                                <?php $i++; }?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--Modal for Edit -->

<?php foreach ($category as $rows): ?>

    <div class="modal fade" id="myModal<?php echo $rows->category_id; ?>" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Update Category</h4>
                </div>

                <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'id' => 'myform', 'method' => 'post');
                echo form_open('category/update_category', $attributes); ?>
                <div class="modal-body">
                    <div class='form-group'>
                        <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>Name</label>

                        <div class='col-lg-9'>
                            <input type='hidden' name="cid" class='form-control' id='c_id'
                                   value='<?php echo $rows->category_id; ?>'>
                            <input type='text' name="category_name" class='form-control' id='c_name'
                                   value='<?php echo $rows->category_name; ?>'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn green">Save changes</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>


<!--Modal for Edit ends-->


<!--Modal for ADD -->

<div class="modal fade" id="myModal-1" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Category</h4>
            </div>
            <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'id' => 'myform', 'method' => 'post');
            echo form_open('category/insert_category', $attributes); ?>
            <div class="modal-body">


                <div class='form-group'>
                    <label for='inputEmail1' class='col-lg-4 col-sm-3 control-label'>CATEGORY NAME</label>
                    <div class='col-lg-8'>
                        <input type='hidden' name="cid" class='form-control' id='c_' value=''>
                        <input type='text' name="category_name" required class='form-control' id='c_name'
                               value=''>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <?php echo $My_Controller->savePermission; ?>                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!--Modal for ADD ends-->


<!-- page end-->

