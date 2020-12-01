<body style="color: #7d7d8e; font-family: sans-serif; font-size: 12px;  line-height: 1.7">

<div class="layout-content-body" style="border:1px solid #f3f3f3 ; margin: 5px; padding: 20px;">
    <div class="panel" style="margin-bottom: 20px;
    background-color: #fff; border: 1px solid transparent;  border-radius: 4px; -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05); box-shadow: 0 1px 1px rgba(0, 0, 0, .05)">
        <div class="panel-body p-a-lg">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-right" style="text-align: right; font-family:  'Roboto', sans-serif;
    font-weight: 500; font-size: 18px;">
                        Invoice#1
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 style="text-align: center;">Deluxe General Transport</h1>
                    <p style="text-align: center;">Gas and Oil Field Services</p>
                    <hr>
                    <h3 style="text-align: center; font-style: underline;">Quotation</h3>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="col-sm-6 invoice-col"
                     style=" width :40%; position:absolute; min-height: 1px; padding-left: 15px; padding-right: 15px; float:left">
                    From
                    <address>
                        <strong>Delux General Transport</strong><br>
                        Musaffah, Abu Dhabi, UAE<br>
                        Phone: (804) 123-5432<br>
                        Email: info@almasaeedstudio.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col"
                     style=" position: absolute;, min-height: 1px; padding-left: 10px; padding-right: 15px; ">
                    To
                    <address>
                        <strong><?= $company_info['company_name']; ?></strong><br>
                        Email: <?= $company_info['email']; ?>
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col"
                     style=" position: absolute;, min-height: 1px; padding-left: 10px; padding-right: 15px; ">
                    <b>Invoice #007612</b><br>
                    <br>
                    <b>Ref:</b> Asif Abbas<br>
                    <b>Date:</b> <?= date('d/m/Y', strtotime($company_info['qoutation_date'])); ?><br>

                </div>
                <!-- /.col -->
            </div>
            <div style="clear: both;"></div>
            <style>
                .row {
                    margin-left: -15px;
                    margin-right: -15px;
                }
            </style>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: 13px;
   border: 1px solid #b2b2b2;
    border-collapse: collapse;
    width: 100%;
    height: 200px;">
                            <thead>
                            <tr>
                                <th style=" font-weight: bold; text-align: left;  border: 1px solid #b2b2b2; padding: 10px 5px 5px 5px;">
                                    #
                                </th>
                                <th style=" font-weight: bold; text-align: left;  border: 1px solid #b2b2b2; padding: 10px 5px 5px 5px;">
                                    Description #
                                </th>

                                <th style=" font-weight: bold; text-align: left;  border: 1px solid #b2b2b2; padding: 10px 5px 5px 5px;">
                                    Total
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;
                            foreach ($rows as $row): ?>
                                <tr>
                                    <th scope="row"
                                        style=" font-weight: bold; text-align: left;  border: 1px solid #b2b2b2; padding: 10px 5px 5px 5px;">
                                        <?= ++$i; ?>
                                    </th>
                                    <td style=" border: 1px solid #b2b2b2; padding: 10px 5px 5px 5px; height: 25px;
    vertical-align: bottom;">       <?= $row->description ?>
                                    </td>
                                    <td style=" border: 1px solid #b2b2b2; padding: 10px 5px 5px 5px; height: 25px;
    vertical-align: bottom;">       <?= $row->amount;?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <th scope="row" colspan="3"
                                    style=" font-weight: bold; text-align: left;  border: 1px solid #b2b2b2; padding: 5px 5px 5px 5px;">
                                    <div class="text-right"
                                         style="float: right; line-height: 10px; font-size:13px ; font-weight: bold;">
                                        350 aed waiting charges applied after 24 hrs
                                    </div>
                                </th>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-12">
                    <p class="lead">Terms & Conditions:</p>
                    <p style="margin-top: 10px;">
                    <ul class="text-muted well well-sm no-shadow">
                        <?php $terms = $this->db->get_where('settings',array('type'=>'terms'))->row_array();
                        echo $terms['value'];
                        ?>


                    </ul>
                    </p>
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    Sincerely yours,<br/>
                    Deluxe General Transport<br/>
                    055-2393081
                </div>
            </div>
        </div>
    </div>
</div>
</body>