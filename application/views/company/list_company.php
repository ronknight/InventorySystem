<!-- page start-->
<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="box light bordered">
            <div class="box-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">List of Companies</span>
                    |
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <a href='#basic' data-toggle='modal' class='btn green btn-info'>
                            Add New <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="box-body">
                <table class="table table-striped table-hover table-bordered dataTable" id=""
                       aria-describedby="editable-sample_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Username">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Full Name: activate to sort column ascending">
                            COMPANY NAME
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Points: activate to sort column ascending">
                            PHONE NO
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Notes: activate to sort column ascending">
                            VAT Reg. TIN
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Edit: activate to sort column ascending">EMAIL
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" aria-label="Delete: activate to sort column ascending">
                            Delete
                        </th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                    <?php foreach ($company as $results) {

                    $id = $results->company_id;
                    ?>
                    <tr class='odd'>

                        <td class='center'><?= $results->company_id; ?>

                        <td><?= $results->company_name ?>

                        <td><?= $results->phone_no ?>

                        <td class=center><?= $results->fax_no ?>
                        <td><?= $results->email ?>
                        <td>
                            <a href='#myModal<?= $results->company_id ?>'
                               data-toggle='modal' <?php echo $My_Controller->editPermission; ?>
                               class='btn btn-warning'><i
                                    class='fa fa-pencil-square-o'></i>
                                Edit
                            </a>
                        </td>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END SAMPLE FORM box-->
    </div>


</div>


<!--Modal for Edit -->
<?php foreach ($company as $rows): ?>

    <div class="modal fade" id="myModal<?php echo $rows->company_id; ?>" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Update Company</h4>
                </div>
                <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'id' => 'myform', 'method' => 'post');
                echo form_open_multipart('company/update_company', $attributes); ?>
                <div class="modal-body">

                    <div class='form-group'>
                        <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>COMPANY
                            NAME</label>
                        <div class='col-lg-9'>
                            <input type='hidden' name="cid" class='form-control' id='c_'
                                   value='<?= $rows->company_id ?>'>
                            <input type='text' name="company_name" class='form-control' id='c_name'
                                   value='<?= $rows->company_name ?>'>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>PHONE NO</label>

                        <div class='col-lg-9'>
                            <input type='text' name="phone_no" class='form-control'
                                   value="<?= $rows->phone_no ?>" id='c_cell'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>VAT Reg. TIN</label>

                        <div class='col-lg-9'>
                            <input type='text' name="fax_no" class='form-control'
                                   value="<?= $rows->fax_no ?>" id='c_address'
                                   placeholder=''>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='inputPassword1'
                               class='col-lg-3 col-sm-3 control-label'>EMAIL</label>
                        <div class='col-lg-9'>
                            <input type='text' name="email" class='form-control'
                                   value="<?= $rows->email ?>" id='c_address'
                                   placeholder=''>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <?php echo $My_Controller->savePermission; ?>
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
<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Company</h4>
            </div>
            <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'id' => 'myform', 'method' => 'post');
            echo form_open_multipart('company/insert_company', $attributes); ?>
            <div class="modal-body">

                <div class='form-group'>
                    <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>COMPANY
                        NAME</label>
                    <div class='col-lg-9'>

                        <input type='text' name="company_name" class='form-control' id='c_name'
                               value='' required="required">
                    </div>
                </div>

                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>PHONE NO</label>

                    <div class='col-lg-9'>
                        <input type='text' name="phone_no" class='form-control'
                               value="" id='c_cell'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>VAT Reg. TIN</label>

                    <div class='col-lg-9'>
                        <input type='text' name="fax_no" class='form-control'
                               value="" id='c_address'
                               placeholder=''>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputPassword1'
                           class='col-lg-3 col-sm-3 control-label'>EMAIL</label>
                    <div class='col-lg-9'>
                        <input type='text' name="email" class='form-control'
                               value="" id='c_address'
                               placeholder=''>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <?php echo $My_Controller->savePermission; ?>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Modal for ADD ends-->


<!-- page end-->

