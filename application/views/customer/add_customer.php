<?php





/*foreach ($results as $menulists) {


  @$menulistRow .= "<tr class='gradeA odd'>

								<td class='center'>" . $menulists->MENU_TEXT . "

								<td>" . $menulists->MENU_URL . "

								<td>" . $menulists->SORT_ORDER . "

								<td class=center>" . $menulists->PARENT_ID . "";


}*/
?>

    <!-- page end-->

<div class="row">
    <div class="col-lg-12">
    <section class="panel">
    <header class="panel-heading">

<?php if ($this->session->userdata('lang') == "UR") {

    echo "کسٹمر فارم";
    ?>
    </header>
    <div class="panel-body">
        <?php if ($this->session->flashdata('msg')) ;
        echo $this->session->flashdata('msg');

        ?>
        <form role="form" method="post" class="form-horizontal" action="<?= base_url(); ?>customer/insert_customer"
              enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-sm-6">
                    <label>کسٹمر کا نام</label>
                    <input class="form-control" placeholder="Imran Shah" type="text" autofocus="" name="CUST_NAME">
                </div>
                <div class="col-sm-6">
                    <label>کسٹمر موبائل #</label>
                    <input class="form-control" placeholder="0333 1234567" type="text" name="CUST_CELL"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-6"><label>کسٹمر پرانا نمبر</label><input class="form-control" placeholder="T-786"
                                                                            type="text" name="CUST_OLD_NO"></div>
                <div class="col-sm-6"><label>گاہک پتہ</label><input class="form-control" placeholder="Charsadda"
                                                                    type="text" name="CUST_ADDRESSS"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label>تصویر</label>
                    <input class="form-control" type="file" name="file_picture">
                </div>
                <div class="col-sm-6">
                    <label>تاریخ شمولیت</label>
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16"
                           type="text" name="CUST_JOIN_DATE"></div>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="btn btn-primary" type="submit" style="margin-left:44%;">
                    <a href="#" class="btn btn-warning">Cancel</a>
                </div>
            </div>

        </form>

    </div>
    </section>
    </div>
    </div>

<?php

} elseif ($this->session->userdata('lang') == "EN") {

    ?>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">

                    CUSTOMER FORM
                </header>
                <div class="panel-body">
                    <?php if ($this->session->flashdata('msg')) ;
                    echo $this->session->flashdata('msg');

                    ?>
                    <form role="form" method="post" class="form-horizontal"
                          action="<?= base_url(); ?>customer/insert_customer" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>CUSTOMER NAME</label>
                                <input class="form-control" placeholder="Imran Shah" type="text" autofocus=""
                                       name="CUST_NAME"></div>
                            <div class="col-sm-6">
                                <label>CUSTOMER CELL #</label>
                                <input class="form-control" placeholder="0333 1234567" type="text" name="CUST_CELL">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6"><label>CUSTOMER OLD NO</label><input class="form-control"
                                                                                       placeholder="T-786" type="text"
                                                                                       name="CUST_OLD_NO"></div>
                            <div class="col-sm-6"><label>CUSTOMER ADDRESS</label><input class="form-control"
                                                                                        placeholder="Charsadda"
                                                                                        type="text"
                                                                                        name="CUST_ADDRESSS"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>PICTURE</label>
                                <input class="form-control" type="file" name="file_picture">
                            </div>
                            <div class="col-sm-6"><label>JOIN DATE</label>
                                <input class="form-control form-control-inline input-medium default-date-picker"
                                       size="16" type="text" name="CUST_JOIN_DATE"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input class="btn btn-primary" type="submit" style="margin-left:44%;">
                                <a href="#" class="btn btn-warning">Cancel</a>
                            </div>
                        </div>

                    </form>

                </div>
            </section>
        </div>
    </div>

<?php } ?>