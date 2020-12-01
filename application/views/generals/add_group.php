<?php


foreach ($group_list as $grouplists) {


    @$groupRow .= "<tr class=gradeA odd>

								<td>" . $grouplists->GROUP_NAME . "

								<td><a href='" . base_url() . "index.php/Generals/add_permission/$grouplists->GROUP_ID' class='btn btn-warning'>Permission</a>&nbsp;&nbsp;
								<a href='" . base_url() . "index.php/Generals/edit_group/$grouplists->GROUP_ID' class='btn btn-primary'>Edit</a>";


}
?>
<!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="box box-danger">
            <header class="panel-heading">
                Add Group
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
            </header>

            <?php if ($this->session->flashdata('msg')) {

                echo $this->session->flashdata('msg');
            }
            ?>
            <div class="panel-body">
                <div class=" form">
                        <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'id' => 'commentForm','method'=>'post');
                        echo form_open('generals/create_group', $attributes);?>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Group Name (required)</label>

                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="group_name" minlength="2" type="text"
                                       required placeholder autofocus/>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                   <?php form_close();?>
                </div>

            </div>
        </section>
    </div>
</div>
<!-- page end-->
<!--Table starts-->

<!-- page start-->
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Employee List
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
            </header>
            <div class="panel-body">
                <div class="adv-table table-responsive">
                    <table class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                        <tr>
                            <th>GROUP NAME</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php echo $groupRow; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- page end-->
<!--main content end-->