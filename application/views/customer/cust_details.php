<?php if($this->session->userdata('lang') == 'UR'){ ?>
<div class="row">
	<div class="col-sm-6">
                      <section class="panel">
                          <header class="panel-heading">
                              گاہک کی تفصیلات
                          </header>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>کسٹمر کی شناخت</th>
                                  <th>گاہک کا نام</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>CU-001</td>
                                  <td>Imran</td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
    </div>
</div>
<?php }elseif($this->session->userdata('lang') == 'EN'){ ?>

<div class="row">
    <div class="col-sm-6">
        <section class="panel">
            <header class="panel-heading">
                CUSTOMER DETAILS
            </header>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>CU-001</td>
                    <td>Imran</td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>
<?php } ?>





<div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              کسٹمر NAAPS
                          </header>
                          <div class="panel-body">
                              <form role="form" class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-6"><label>INPUT 1</label><input class="form-control" type="text" autofocus=""></div>
                <div class="col-sm-6"><label>INPUT 2</label><input class="form-control" type="text"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-6"><label>INPUT 3</label><input class="form-control" type="text"></div>
                <div class="col-sm-6"><label>INPUT 4</label><input class="form-control" type="text"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-6"><label>INPUT 5</label><input class="form-control" type="text"></div>
                <div class="col-sm-6"><label>INPUT 6</label><input class="form-control" type="text"></div>

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
