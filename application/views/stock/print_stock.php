<div class="row">
    <div class="col-md-12">

        <div class="box">
            <div class="box-body">

                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                        <form method="post" action="#">
                            <div class="btn-group pull-right">
                                <a onclick="print_invoice('printableArea')" class="btn btn-primary">Print</a>

                                <input name="start_date" value="2017-04-05" type="hidden">
                                <input name="end_date" value="2017-04-05" type="hidden">

                            </div>
                        </form>

                    </div>
                </div>

                <br>
                <br>

                <div id="printableArea">
                    <link href="<?= base_url(); ?>assets/sales_report.css" rel="stylesheet" type="text/css">


                    

                </div>


            </div>
        </div>
    </div>
</div>