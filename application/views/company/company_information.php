
        <div class="row">
            <div style="left: 160px; transform: translateX(-60px);" class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <strong><span class="icon icon-edit"></span> COMPANY INFORMATION</strong>
                    </div>
                    <div class="box-body">
                        <div id="msg"></div>
                        <?php echo form_open('', array('id' => 'edit_company', 'method' => 'post', 'class' => 'form-horizontal form')); ?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="width: 20%;" for="name">Name</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                          <span class="input-group-addon">
                                                <span class="icon icon-user"></span>
                                          </span>
                                        <input class="form-control" type="text" value="<?=$company_info['name'];?>"  name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="width: 20%;" for="email">Email</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                          <span class="input-group-addon">
                                                <span class="icon icon-envelope-o"></span>
                                          </span>
                                        <input class="form-control" type="email" value="<?=$company_info['email'];?>"  name="email" id="email" placeholder="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="width: 20%;" for="email">Contact No.</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                          <span class="input-group-addon">
                                                <span class="icon icon-phone"></span>
                                          </span>
                                        <input class="form-control" type="text"  name="contact" value="<?=$company_info['contact'];?>" id="contact" placeholder="Contact No.">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="width: 20%;" for="address">Address.</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                          <span class="input-group-addon">
                                                <span class="icon icon-globe"></span>
                                          </span>
                                        <input class="form-control" type="text" value="<?=$company_info['address'];?>"  name="address" id="address" placeholder="Company Full Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="width: 20%;" for="address">Website Url</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                          <span class="input-group-addon">
                                                <span class="icon icon-globe"></span>
                                          </span>
                                        <input class="form-control" type="text"  name="website" value="<?=$company_info['website'];?>" id="website" placeholder="https://www.yourcompany.com">
                                    </div>
                                </div>
                            </div>
                        <input type="hidden" name="id2" value="<?= $company_info['id'] ?>">

                        <div class="col-xs-6 col-md-3">
                                <button class="btn btn-primary" style="margin-left: 350px;padding: 6px 25px;!important;"
                                        type="submit">UPDATE
                                </button>
                            </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
<script>
    $(document).ready(function () {
        $("#edit_company").on('submit', (function (e) {
            e.preventDefault();
            $("#msg").html('<div class="loading"></div>');
            var fd = new FormData(this);
            $.ajax({
                url: '<?php echo site_url("generals/save_edit_info") ?>',
                data: fd,
                type: "POST",
                contentType: false,
                processData: false,
                cache: false,
                success: function (res) {
                    var res = $.parseJSON(res);
                    if (res.msg_type == 'success') {
                       //alert(res.message);
                        toastr.info(res.message);
                        $(".loading").hide();
                    } else {
                        $("#msg").html(res);
                        toastr.error(res.message);
                    }
                },
                error: function (xhr) {
                    $("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
                }
            });
        }));
    });

</script>