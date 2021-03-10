

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?=lang('Main.manage')?>
      <small><?=lang('Main.products')?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?=lang('Main.products')?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($session->getFlashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $session->getFlashdata('success'); ?>
          </div>
        <?php elseif($session->getFlashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $session->getFlashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?=lang('Main.editProduct')?></h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('users/update') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">

				<?php if(isset($validation)) echo $validation->listErrors(); ?> 

                <div class="form-group">
                  <label>Image Preview: </label>
                  <img src="<?php echo base_url() . $product_data->image ?>" width="150" height="150" class="img-circle">
                </div>

                <div class="form-group">
                  <label for="product_image">Update Image</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="product_image" name="product_image" type="file">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="product_name"><?=lang('Main.productName')?></label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" value="<?php echo $product_data->name; ?>"  autocomplete="off"/>
                </div>

                <div class="form-group">
                  <label for="sku">SKU</label>
                  <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter sku" value="<?php echo $product_data->sku; ?>" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="price"><?=lang('Main.price')?></label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" value="<?php echo $product_data->price; ?>" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="qty"><?=lang('Main.qty')?></label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty" value="<?php echo $product_data->qty; ?>" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="description"><?=lang('Main.description')?></label>
                  <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter 
                  description" autocomplete="off">
                    <?php echo $product_data->description; ?>
                  </textarea>
                </div>

                <?php $attribute_id = json_decode($product_data->attribute_value_id); ?>
                <?php if($attributes): ?>
                  <?php foreach ($attributes as $k => $v): ?>
                    <div class="form-group">
                      <label for="groups"><?php echo $v['attribute_data']->name ?></label>
                      <select class="form-control select_group" id="attributes_value_id" name="attributes_value_id[]" multiple="multiple">
                        <?php foreach ($v['attribute_value'] as $k2 => $v2): ?>
                          <option value="<?php echo $v2->id ?>" <?php if(isset($attribute_id) && in_array($v2->id, $attribute_id)) { echo "selected"; } ?>><?php echo $v2->value ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>    
                  <?php endforeach ?>
                <?php endif; ?>

                <div class="form-group">
                  <label for="brands"><?=lang('Main.brands')?></label>
                  <?php $brand_data = json_decode($product_data->brand_id); ?>
                  <select class="form-control select_group" id="brands" name="brands[]" multiple="multiple">
                    <?php foreach ($brands as $k => $v): ?>
                      <option value="<?php echo $v->id ?>" <?php if(isset($brand_data) && in_array($v->id, $brand_data)) { echo 'selected="selected"'; } ?>><?php echo $v->name ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="category"><?=lang('Main.category')?></label>
                  <?php $category_data = json_decode($product_data->category_id); ?>
                  <select class="form-control select_group" id="category" name="category[]" multiple="multiple">
					<?php foreach ($category as $k => $v): ?>
					  <option value="<?php echo $v->id ?>" <?php if(isset($category_data) && in_array($v->id, $category_data)) { echo 'selected="selected"'; } ?>><?php echo $v->name ?></option>
					<?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store"><?=lang('Main.store')?></label>
                  <select class="form-control select_group" id="store" name="store">
                    <?php foreach ($stores as $k => $v): ?>
                      <option value="<?php echo $v->id ?>" <?php if($product_data->store_id == $v->id) { echo "selected='selected'"; } ?> ><?php echo $v->name ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store"><?=lang('Main.availability')?></label>
                  <select class="form-control" id="availability" name="availability">
                    <option value="1" <?php if($product_data->availability == 1) { echo "selected='selected'"; } ?>><?=lang('Main.yes')?></option>
                    <option value="2" <?php if($product_data->availability != 1) { echo "selected='selected'"; } ?>><?=lang('Main.no')?></option>
                  </select>
                </div>



              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?=lang('Main.save')?></button>
                <a href="<?php echo base_url('products/') ?>" class="btn btn-warning"><?=lang('Main.back')?></a>
              </div>
            </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  
  $(document).ready(function() {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#mainProductNav").addClass('active');
    $("#manageProductNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
    $("#product_image").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });
</script>