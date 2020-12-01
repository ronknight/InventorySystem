
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://demopos.innovativebd.net/" />
    <meta charset="utf-8">
    <title>Ledger From: 01/03/2017 To: 31/03/2017</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Tapan Kumer Das : InnovativeBD">
    <link rel="shortcut icon" href="assets/backend/img/favicon.ico" type="image/x-icon" />

    <!-- styles -->
    <link href="assets/backend/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/backend/css/stilearn.css" rel="stylesheet" />
    <style>
        @media print{
            p.muted{
                font-weight: bold;
            }
            small.small{
                font-weight: normal;
            }
        }
    </style>
</head>

<body>
<!-- section content -->
<section class="section">
    <div class="container">
        <!-- span content -->
        <div class="span12">
            <!-- content -->
            <div class="content" style="border: 1px solid #d7d7d7;">
                <!-- content-body -->
                <div class="content-body">
                    <!-- invoice -->
                    <div id="invoice-container" class="invoice-container">
                        <div class="page-header">
                            <div class="pull-right">
                                <img src="assets/backend/img/logo.png" width="115" class="img">
                            </div>
                            <h3 class="left">Your Company</h3>
                        </div>
                        <div class="row-fluid center">
                            <strong>Bank Book</strong>
                            <p>1st March 2017  To 31st March 2017 </p>
                        </div>
                        <div class="invoice-table">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th class="span2">Journal Date</th>
                                    <th class="center span2">Journal No.</th>
                                    <th class="center span2">Name of A/C</th>
                                    <th>Transaction By/To</th>
                                    <th class="center">Debit</th>
                                    <th class="center">Credit</th>
                                    <!--<th class="center">Balance</th>-->
                                </tr>
                                </thead>
                                <tbody>
                                <tr style="font-size: 16px; font-weight: bold;">
                                    <td colspan="4">Balance Forwarded</td>
                                    <td colspan="2" class="right">22,000.00</td>
                                </tr>
                                <tr>
                                    <td>1st Mar, 2017 </td>
                                    <td class="center"><b><a href="accounts/journal_preview/29" target="_blank">1029</a></b></td>
                                    <td>Bank Account</td>
                                    <td>Current Assets, Cash, </td>
                                    <td class="right">0.00</td>
                                    <td class="right">102,000.00</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="5">sdgsdfgsdfgsfdg</td>
                                </tr>
                                <tr>
                                    <td>2nd Mar, 2017 </td>
                                    <td class="center"><b><a href="accounts/journal_preview/33" target="_blank">1033</a></b></td>
                                    <td>Bank Account</td>
                                    <td>Sumon, </td>
                                    <td class="right">0.00</td>
                                    <td class="right">15,000.00</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="5">Direct Sales</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr style="font-size: 16px; font-weight: bold;">
                                    <td colspan="4"> Closing Balance</td>
                                    <td colspan="2" class="right">
                                        95,000.00 Cr                                            </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!--/invoice-->
                </div><!--/content-body -->
            </div><!-- /content -->
        </div><!-- /span content -->
    </div><!-- /container -->
</section>

</body>
</html>