<div class="row form_wrap">
    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header box-header-background with-border">
                <div class="col-md-offset-3">
                    <h3 class="box-title ">Top Selling Product</h3>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-background">
                <!-- form start -->
                <form role="form" id="reportForm" enctype="multipart/form-data" action="http://multi-inventory.codeslab.net/admin/report/top_selling_product" method="post" novalidate="novalidate">

                    <div class="row">

                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">

                            <div class="box-body">


                                <div class="form-group">
                                    <label class="control-label">Start Date<span class="required" aria-required="true"> *</span></label>

                                    <div class="input-group">
                                        <input type="text" value="" class="form-control datepicker" id="start_date" name="start_date" data-format="yyyy/mm/dd" required="" aria-required="true">

                                        <div class="input-group-addon">
                                            <i class="entypo-calendar"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">End Date<span class="required" aria-required="true"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" value="" class="form-control datepicker" id="end_date" name="end_date" data-format="yyyy/mm/dd" required="" aria-required="true">

                                        <div class="input-group-addon">
                                            <i class="entypo-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="flag" value="1">
                                <button type="submit" class="btn bg-navy">Generate Report                                    </button><br><br>
                            </div>
                            <!-- /.box-body -->

                        </div>
                    </div>

                </form>
            </div>

            <div class="box-body">

                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                        <form method="post" action="http://multi-inventory.codeslab.net/admin/report/pdf_top_selling_product">
                            <div class="btn-group pull-right">
                                <a onclick="print_invoice('printableArea')" class="btn btn-primary">Print</a>

                                <button type="submit" class="btn bg-navy">
                                    PDF                                </button>
                                <input type="hidden" name="start_date" value="2016-10-01">
                                <input type="hidden" name="end_date" value="2016-10-12">

                            </div>
                        </form>

                    </div>
                </div>

                <br>
                <br>

                <div id="printableArea">


                    <div class="row ">
                        <div class="col-md-8 col-md-offset-2">

                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
                                <tbody><tr>
                                    <td width="75%" style="padding-left: 45px">
                                        <img src="http://multi-inventory.codeslab.net/img/uploads/codes_lab.gif">
                                    </td>
                                    <td width="25%">
                                        <h2 class="name">Codes Lab</h2>
                                        <div>015566585</div>
                                        <div>info@codeslab.net</div>
                                    </td>
                                </tr>
                                </tbody></table>


                            <span><strong>Start Date:</strong> 01 Oct 2016 <strong>End Date:</strong> 12 Oct 2016</span>

                            <br> <br>

                            <main class="invoice_report">
                                <div class="table-responsive">
                                    <table width="100%" class="table table-bordered" border="0" cellspacing="0" cellpadding="5">
                                        <tbody><tr>
                                            <td class="active" width="3%"><strong>Sl.</strong></td>
                                            <td class="active" width="12%"><strong>Product Code</strong></td>
                                            <td class="active" width="24%"><strong>Product Name</strong></td>
                                            <td class="active" width="12%" align="right"><strong>Selling Qty</strong></td>
                                            <td class="active" width="12%" align="right"><strong>Buying Value</strong></td>
                                            <td class="active" width="12%" align="right"><strong>Selling Value</strong></td>
                                            <!--                                            <td class="active" width="12%" align="right"><strong>Tax Value</strong></td>-->
                                            <!--                                            <td class="active" width="13%" align="right"><strong>Subtotal</strong></td>-->
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Hugo_Boss-Mens-3-Pack</td>
                                            <td>Hugo Boss Men's  T-Shirt</td>
                                            <td class="text-right">2</td>
                                            <td class="text-right">$ 200.00</td>
                                            <td class="text-right">$ 300.00</td>
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Nikon-D7200</td>
                                            <td>Nikon D7200 - 24.4 MP</td>
                                            <td class="text-right">2</td>
                                            <td class="text-right">$ 1600.00</td>
                                            <td class="text-right">$ 1850.00</td>
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Apple-iMac-MF883</td>
                                            <td>Apple iMac MF883</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$ 4500.00</td>
                                            <td class="text-right">$ 5000.00</td>
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP01578256</td>
                                            <td>Sony Playstation 4 Console PAL 500 GB - Black</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$ 250.00</td>
                                            <td class="text-right">$ 290.00</td>
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Apple-iPhone-6</td>
                                            <td>Apple iPhone 6 Without FaceTime- 64GB, 4G LTE, Gold</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$ 2399.00</td>
                                            <td class="text-right">$ 3500.00</td>
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                            <!--                                            <td class="text-right">--><!--</td>-->
                                        </tr>
                                        </tbody></table>
                                </div>
                            </main>



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