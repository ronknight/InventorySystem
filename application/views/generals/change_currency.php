<div class="row">
    <div style="left: 50%; transform: translateX(-50%);" class="col-md-8">
        <div class="box">
            <div class="box-header">
                <strong><span class="icon icon-dollar"></span> CHANGE CURRENCY</strong>
            </div>
            <div class="box-body">
                <div id="msg"></div>
                <?php echo form_open('#', array('id' => 'update_currency', 'method' => 'post', 'class' => 'form-horizontal form')); ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label" style="width: 20%;" for="name">Default
                        Currency</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                                          <span class="input-group-addon">
                                                <span class="icon icon-th-large"></span>
                                          </span>
                            <input class="form-control" type="text" name="name" id="name"
                                   value="<?= $get_current_currency['name']; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label" style="width: 20%;"
                           for="form-control-17">Select Currency</label>
                    <div class="col-sm-9">
                        <select id="demo-select2-1" class="form-control" name="currency_id">
                            <option value="0">Select Currency</option>
                            <?php foreach ($currencies as $currency) { ?>
                                <option value="<?= $currency->currency_settings_id ?>"><?= $currency->name ?>
                                    &nbsp;<?= $currency->symbol ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <button class="btn btn-primary" style="margin-left: 250px;padding: 6px 25px;!important;"
                            type="submit">Update
                    </button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <strong>Manage Currencies</strong>
            </div>
            <div class="box-body">
                <table id="demo-datatables-fixedheader-2"
                       class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Currency Name</th>
                        <th>Currency Symbol</th>
                        <th>1 US $ =</th>
                        <th>Difference</th>
                    </tr>
                    </thead>
                    <tbody>
                    <form method="POST">
                        <?php $i = 0;
                        foreach ($currencies as $currencies) { ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= $currencies->name ?></td>
                                <td><?= $currencies->symbol ?></td>
                                <td><?= $currencies->exchange_rate ?></td>
                                <td><?= $currencies->exchange_rate_def ?></td>
                            </tr>
                            <?php $i++;
                        } ?>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#update_currency").on('submit', (function (e) {
            e.preventDefault();
            $("#msg").html('<div class="loading"></div>');
            var fd = new FormData(this);
            $.ajax({
                url: '<?php echo site_url("Generals/save_change_currency") ?>',
                data: fd,
                type: "POST",
                contentType: false,
                processData: false,
                cache: false,
                success: function (res) {
                    var res = $.parseJSON(res);
                    if (res.msg_type == "success") {
                        toastr.success(res.message);
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