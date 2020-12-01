<?php


?>

<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Form validations
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
          </header>

          <?php if($this->session->flashdata('msg')) {

echo $this->session->flashdata('msg');
          }
          ?>
          <div class="panel-body">
            <div class=" form">
                  <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped','method'=>'post','id'=>'commentForm');
                  echo form_open('generals/update_group', $attributes);?>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-3">Group Name (required)</label>
                  <?php foreach($groups as $group){ ?>
                  <div class="col-lg-6">
                    <input class=" form-control" id="group_name" value="<?php echo $group->GROUP_NAME; ?>" name="group_name" minlength="2" type="text" required placeholder autofocus/>
                    <input class=" form-control" id="group_id" value="<?php echo $group->GROUP_ID; ?>" name="group_name" minlength="2" type="hidden" required placeholder autofocus/>

                  </div>
                  <?php } ?>
                </div>


                <div class="form-group">
                  <div class="col-lg-offset-3 col-lg-6">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="<?=base_url();?>generals/add_group" class="btn btn-default" type="button">Cancel</a>
                  </div>
                </div>
              <?php form_close();?>
            </div>

          </div>
        </section>
      </div>
    </div>
    <!-- page end-->

  </section>
</section>
<!--main content end-->