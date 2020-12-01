<?php





/*foreach ($results as $menulists) {


  @$menulistRow .= "<tr class='gradeA odd'>

								<td class='center'>" . $menulists->MENU_TEXT . "

								<td>" . $menulists->MENU_URL . "

								<td>" . $menulists->SORT_ORDER . "

								<td class=center>" . $menulists->PARENT_ID . "";


}*/
?>
<!-- page start-->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        CATEGORY
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
          <form class="cmxform form-horizontal " id="commentForm" method="post"
                action="<?= base_url(); ?>generals/create_menu">
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-3">Category Name (required)</label>

              <div class="col-lg-6">
                <input class=" form-control" id="cname" placeholder="" name="CAT_NAME" minlength="2"
                       type="text" required/>
              </div>
            </div>

            <div class="form-group last">
              <label class="control-label col-md-3">Image Upload</label>
              <div class="controls col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default">
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                          </div>
                                          </div>

            <div class="form-group ">
              <label for="cname" class="control-label col-lg-3">Category Status</label>

              <div class="col-lg-6">
                <input class=" form-control" id="cstatus" name="CAT_STATUS" minlength="2" type="text" required/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-3 col-lg-6">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-default" type="button">Cancel</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </section>
  </div>
</div>
<!-- page end-->