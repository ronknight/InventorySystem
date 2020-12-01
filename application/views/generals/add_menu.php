<?php


foreach ($results as $menulists) {


    @$menulistRow .= "<tr class='gradeA odd'>

								<td class='center'>" . $menulists->MENU_ID . "
								<td>" . $menulists->MENU_TEXT . "

								<td>" . $menulists->MENU_URL . "

								<td>" . $menulists->SORT_ORDER . "

								<td class=center>" . $menulists->PARENT_ID . "";


}
?>
<!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Add Menu</h3>
            </div>

            <?php if ($this->session->flashdata('msg')) {

                echo $this->session->flashdata('msg');
            }
            ?>
            <div class="box-body">
                <div id="error" style="display:none;" class="alert alert-error alert-block fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Record Already Exists</strong>
                </div>
                <div id="success" style="display:none;" class="alert alert-success alert-block fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Record Added Successfully</strong>
                </div>

                <div class=" form">
                        <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'id' => 'commentForm', 'method' => 'post');
                        echo form_open('category/insert_category', $attributes); ?>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Menu Name (required)</label>

                            <div class="col-lg-6">
                                <input class=" form-control" id="MENU_TEXT" placeholder="" name="menu" minlength="2"
                                       type="text" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Menu URL (required)</label>

                            <div class="col-lg-6">
                                <input class=" form-control" id="MENU_URL" name="url"
                                       placeholder="controllerName/functionName" minlength="2" type="text"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Sort Order</label>

                            <div class="col-lg-6">
                                <input class=" form-control" id="SORT_ORDER" name="sort" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-3">Parent Menu </label>

                            <div class="col-lg-6">
                                <select class="form-control input-lg m-bot15" name="parent" id="PARENT_ID">
                                    <option value="0">Select Parent Menu</option>
                                    <?php foreach ($menus as $menu): ?>
                                        <option
                                            value="<?php echo $menu->MENU_ID; ?>"><?php echo $menu->MENU_TEXT; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="button" onClick="addMenu();">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
<!-- page end-->
<!--Table starts-->

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                MENUS LIST

            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <div class="row-fluid">

                        </div>
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable"
                               id="example1" aria-describedby="hidden-table-info_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="">
                                    MENU ID
                                </th>

                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label=""
                                >MENU NAME
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label=""
                                >MENU URL
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label=""
                                >SORT ORDER
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label=""
                                >PARENT MENU
                                </th>
                            </tr>
                            </thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php echo $menulistRow; ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </section>
    </div>
</div>

<!--Table ends-->


<!--main content end-->

<script>

    //////////////////////////////////////////////////////

    function addMenu() {
        //alert();
        var menutext = $("#MENU_TEXT").val();
        var menuurl = $('#MENU_URL').val();
        var sortorder = $('#SORT_ORDER').val();
        var parentid = $('#PARENT_ID').val();
        var csrf_test_name = $("input[name=csrf_test_name]").val();
        if (menutext == '' && sortorder == '' && parentid == '') {
            $('#MENU_TEXT').css('border-color', '#F00');
            $('#MENU_URL').css('border-color', '#F00');
            $('#SORT_ORDER').css('border-color', '#F00');
            $('#PARENT_ID').css('border-color', '#F00');
            return false;
        }
        if (menutext == '') {
            alert("Please Select Menu Text");
            return false;
        }
        if (menuurl == '') {
            $('#MENU_URL').css('border-color', '#F00');
            return false;
        }
        var posturl = "<?=base_url(); ?>index.php/generals/create_menu";
        var redirect = "<?=base_url(); ?>index.php/generals/addmenu";

        $.post(posturl, {
            MENU_TEXT: menutext,
            MENU_URL: menuurl,
            SORT_ORDER: sortorder,
            PARENT_ID: parentid,
            csrf_test_name: csrf_test_name
        }, function (result) {
            $('#error').hide('fast');
            $('#success').show('fast').delay(3000).hide('fast', function () {
                setTimeout(function () {
                    window.location.href = redirect;
                }, 300);
            });

        });
    }


    ///////////////////////////////////////////////////////


</script>
