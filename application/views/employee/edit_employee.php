<?php


/*foreach ($results as $menulists) {


  @$menulistRow .= "<tr class='gradeA odd'>

								<td class='center'>" . $menulists->MENU_TEXT . "

								<td>" . $menulists->MENU_URL . "

								<td>" . $menulists->SORT_ORDER . "

								<td class=center>" . $menulists->PARENT_ID . "";


}*/
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                EMPLOYEE FORM
            </header>
            <?php
            if ($this->session->flashdata('msg')) ;
            echo $this->session->flashdata('msg');

            ?>
            <div class="panel-body">
                <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'method' => 'post');
                echo form_open_multipart('employees/update_employee', $attributes); ?>

                <input type="hidden" name="emp_id" value="<?php echo $this->uri->segment(3); ?>">
                <div class="form-group">
                    <div class="col-sm-6"><label>EMP NAME</label><input class="form-control" name="emp_name"
                                                                        autofocus="" type="text"
                                                                        value="<?= $record->EMP_NAME; ?>"></div>
                    <div class="col-sm-6"><label>EMAIL</label><input class="form-control" name="emp_email" type="text"
                                                                     value="<?= $record->EMP_EMAIL; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6"><label>CURRENT ADDRESS</label><input class="form-control"
                                                                               name="caddress" type="text"
                                                                               value="<?= $record->EMP_ADDRESS; ?>">
                    </div>
                    <div class="col-sm-6"><label>GENDER</label>
                        <select name="emp_gender" class='form-control' id='emp_gender'>
                            <option
                                value="<?php echo $record->EMP_GENDER; ?>"><?php echo $record->EMP_GENDER; ?></option>
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FE-MALE</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6"><label>CONTACT NO</label><input class="form-control" name="emp_phone"
                                                                          type="text"
                                                                          value="<?= $record->EMP_PHONE; ?>"></div>
                    <div class="col-sm-6"><label>MOBILE NO</label><input class="form-control" name="emp_cell"
                                                                         type="text" value="<?= $record->EMP_CELL; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6"><label>PICTURE</label><input class="form-control" name="file_picture"
                                                                       type="file"></div>
                    <!--<div class="col-sm-6"><label>STATUS</label><input class="form-control" name="emp_status" type="text"></div>-->
                </div>
                <hr>
                <div class="form-group" style="padding-left: 42%">
                    <div class="col-md-6">
                        <?php echo $My_Controller->savePermission; ?>
                        <a href="<?= base_url(); ?>employees/employee_list" class="btn btn-danger">Cancel</a>
                    </div>

                </div>

                <?php form_close(); ?>

            </div>
        </section>

    </div>
</div>
<!-- page end-->
<!--Table starts-->


<!--Table ends-->


