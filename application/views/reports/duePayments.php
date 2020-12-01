<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header box-header-background with-border">
                <div class="col-md-offset-3">
                    <h3 class="box-title ">Due Payment Report</h3>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-background">
                <!-- form start -->
                <form role="form" enctype="multipart/form-data" action="http://multi-inventory.codeslab.net/admin/report/due_payment_report" method="post">

                    <div class="row">

                        <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-3">

                            <div class="box-body">


                                <div class="form-group">
                                    <label class="control-label">Start Date<span class="required"> *</span></label>

                                    <div class="input-group">
                                        <input type="text" value="" class="form-control datepicker" name="start_date" data-format="yyyy/mm/dd" required="">

                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">End Date<span class="required"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" value="" class="form-control datepicker" name="end_date" data-format="yyyy/mm/dd" required="">

                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Stock location</label>
                                    <select class="form-control" name="store_id" required="">
                                        <option value="all">All Stores</option>
                                        <option value="1">
                                            New York                                                </option>
                                        <option value="2">
                                            Florida                                                </option>
                                        <option value="3">
                                            California                                                </option>
                                        <option value="5">
                                            Fargo                                                </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn bg-navy">Generate Report
                                </button><br><br>
                            </div>
                            <!-- /.box-body -->

                        </div>
                    </div>

                </form>
            </div>

            <div class="box-body">

                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                        <form method="post" action="http://multi-inventory.codeslab.net/admin/report/pdf_due_payment_report">
                            <div class="btn-group pull-right">
                                <a onclick="print_invoice('printableArea')" class="btn btn-primary">Print</a>

                                <button type="submit" class="btn bg-navy">
                                    PDF
                                </button>
                                <input type="hidden" name="start_date" value="2016-10-07">
                                <input type="hidden" name="end_date" value="2016-10-12">
                                <input type="hidden" name="store_id" value="all">


                            </div>
                        </form>

                    </div>
                </div>

                <br>
                <br>

                <div id="printableArea">
                    <link href="http://multi-inventory.codeslab.net/asset/css/sales_report.css" rel="stylesheet" type="text/css">



                    <div class="row ">
                        <div class="col-md-8 col-md-offset-2">

                            <header class="clearfix">
                                <div id="logo">
                                    <img src="http://multi-inventory.codeslab.net/img/uploads/codes_lab.gif">
                                </div>
                                <div id="company">
                                    <h2 class="name">Codes Lab</h2>
                                    <div>015566585</div>
                                    <div>info@codeslab.net</div>
                                </div>

                            </header>
                            <hr>

                            <main class="invoice_report">

                                <h4>Due Payment Report from: <strong>2016-10-07</strong> to <strong>2016-10-12</strong></h4>
                                <br>

                                <table class="table table-bordered table-striped">
                                    <thead><!-- Table head -->
                                    <tr>
                                        <th class="active text-left">Invoice No.</th>
                                        <th class="active text-left">Store</th>
                                        <th class="active text-left">Customer</th>
                                        <th class="active text-left">Invoice Date</th>
                                        <th class="active text-right">Grand Total</th>
                                        <th class="active text-right">Paid</th>
                                        <th class="active text-right">Balance</th>


                                    </tr>
                                    </thead><!-- / Table head -->
                                    <tbody><!-- / Table body -->
                                    <tr class="custom-tr">

                                        <td class="vertical-td text-left">
                                            INV-1003</td>


                                        <td class="vertical-td text-left">
                                            Fargo</td>


                                        <td class="vertical-td text-left">
                                            Julio Herrera                                                    </td>
                                        <td class="vertical-td text-left">2016-10-10</td>
                                        <td class="vertical-td text-right">$ 1010.56</td>
                                        <td class="vertical-td text-right">$ 100.56</td>
                                        <td class="vertical-td text-right">$ 910.00</td>


                                    </tr>
                                    <!--get all sub category if not this empty-->
                                    </tbody><!-- / Table body -->
                                </table> <!-- / Table -->




                            </main>
                            <hr>
                            <footer class="text-center">
                                <strong>Codes Lab</strong>&nbsp;&nbsp;&nbsp;Fargo, USA                                </footer>


                        </div>
                    </div>

                </div>


            </div>
            <!-- /.box -->
        </div>
        <!--/.col end -->
    </div>
    <!-- /.row -->
</div>