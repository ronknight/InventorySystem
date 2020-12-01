<style>
    @media print {
        p.muted {
            font-weight: bold;
        }

        small.small {
            font-weight: normal;
        }
    }
</style>

<link href="<?= base_url(); ?>assets/treetable/jquery.treetable.css" rel="stylesheet" type="text/css">
<!-- section content -->
<div class="row">
    <!-- span content -->
    <div class="col-md-12">
        <!-- content -->
        <div class="portlet light bordered" style="border: 1px solid #d7d7d7;">
            <!-- content-body -->
            <div class="portlet-body">
                <!-- invoice -->
                <div id="invoice-container" class="invoice-container">
                    <div class="page-header">
                        <div class="pull-right">
                            <img src="assets/backend/img/logo.png" width="115" class="img">
                        </div>
                        <h3 class="left">Your Company</h3>
                    </div>
                    <div class="row" style="text-align:center">
                        <strong>Balance Sheet</strong>
                        <p>Closing at 31st March 2017 </p>
                    </div>

                    <div class="invoice-table">
                        <table id="treetable1"
                               class="table table-striped table-bordered bootstrap-datatable datatable treetable">
                            <thead>
                            <tr>
                                <th colspan="4" class="left">Assets</th>
                            </tr>
                            <tr>
                                <th>Name of A/C</th>
                                <th class="center span2">Debit</th>
                                <th class="center span2">Credit</th>
                                <th class="center span2">Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-tt-id="7" class="branch collapsed">
                                <td>Current Assets
                                </td>
                                <td class="right">225,680.00</td>
                                <td class="right">197,493.57</td>
                                <td class="right">28,186.43 Dr</td>
                            </tr>
                            <tr data-tt-id="18" data-tt-parent-id="7" class="branch" style="display: none;">
                                <td><span class="indenter"></span>Cash and Cash Equivalent</td>
                                <td class="right">163,222.00</td>
                                <td class="right">132,662.00</td>
                                <td class="right">30,560.00 Dr</td>
                            </tr>
                            <tr data-tt-id="26" data-tt-parent-id="18" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Bank Account</td>
                                <td class="right">22,000.00</td>
                                <td class="right">117,000.00</td>
                                <td class="right">95,000.00 Cr</td>
                            </tr>
                            <tr data-tt-id="27" data-tt-parent-id="18" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Cash</td>
                                <td class="right">141,222.00</td>
                                <td class="right">24,662.00</td>
                                <td class="right">116,560.00 Dr</td>
                            </tr>
                            <tr data-tt-id="28" data-tt-parent-id="18" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Petty Cash</td>
                                <td class="right">0.00</td>
                                <td class="right">-10,000.00</td>
                                <td class="right">10,000.00 Dr</td>
                            </tr>
                            <tr data-tt-id="19" data-tt-parent-id="7" class="branch" style="display: none;">
                                <td><span class="indenter"></span>Receivables</td>
                                <td class="right">45,835.00</td>
                                <td class="right">26,000.00</td>
                                <td class="right">19,835.00 Dr</td>
                            </tr>
                            <tr data-tt-id="42" data-tt-parent-id="19" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Sumon</td>
                                <td class="right">45,775.00</td>
                                <td class="right">25,000.00</td>
                                <td class="right">20,775.00 Dr</td>
                            </tr>
                            <tr data-tt-id="43" data-tt-parent-id="19" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>shekh</td>
                                <td class="right">60.00</td>
                                <td class="right">1,000.00</td>
                                <td class="right">940.00 Cr</td>
                            </tr>
                            <tr data-tt-id="20" data-tt-parent-id="7" class="branch" style="display: none;">
                                <td><span class="indenter"></span>Inventories</td>
                                <td class="right">13,523.00</td>
                                <td class="right">38,831.57</td>
                                <td class="right">25,308.57 Cr</td>
                            </tr>
                            <tr data-tt-id="29" data-tt-parent-id="20" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Finished Goods</td>
                                <td class="right">13,523.00</td>
                                <td class="right">38,831.57</td>
                                <td class="right">25,308.57 Cr</td>
                            </tr>
                            <tr data-tt-id="21" data-tt-parent-id="7" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Prepaid Expenses and Deposits</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="46" data-tt-parent-id="7" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Hossam</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="8" class="branch collapsed">
                                <td>None Current Assets
                                </td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="22" data-tt-parent-id="8" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Long-Term Investments</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="23" data-tt-parent-id="8" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Properties , Plant and Equipment</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="24" data-tt-parent-id="8" class="branch" style="display: none;">
                                <td><span class="indenter"></span>Intangible Assets</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="30" data-tt-parent-id="24" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Goodwill of Acquired Businesses</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="31" data-tt-parent-id="24" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Patents</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="32" data-tt-parent-id="24" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Trademarks</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="25" data-tt-parent-id="8" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Other Assets</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3"><b>Net Balance</b></td>
                                <td class="right">28,186.43 Dr</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="invoice-table">
                        <table id="treetable2"
                               class="table table-striped table-bordered bootstrap-datatable datatable treetable">
                            <thead>
                            <tr>
                                <th colspan="4" class="left">Liability</th>
                            </tr>
                            <tr>
                                <th>Name of A/C</th>
                                <th class="center span2">Debit</th>
                                <th class="center span2">Credit</th>
                                <th class="center span2">Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-tt-id="9" class="branch collapsed">
                                <td>
                                    Current Liabilities
                                </td>
                                <td class="right">24,462.00</td>
                                <td class="right">13,323.00</td>
                                <td class="right">11,139.00 Dr</td>
                            </tr>
                            <tr data-tt-id="33" data-tt-parent-id="9" class="branch" style="display: none;">
                                <td><span class="indenter"></span>Accounts Payable</td>
                                <td class="right">24,462.00</td>
                                <td class="right">13,323.00</td>
                                <td class="right">11,139.00 Dr</td>
                            </tr>
                            <tr data-tt-id="44" data-tt-parent-id="33" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>SUP</td>
                                <td class="right">24,462.00</td>
                                <td class="right">13,323.00</td>
                                <td class="right">11,139.00 Dr</td>
                            </tr>
                            <tr data-tt-id="34" data-tt-parent-id="9" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Notes Payble</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="10" class="branch collapsed">
                                <td>None Current Liabilities
                                </td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="35" data-tt-parent-id="10" class="leaf" style="display: none;">
                                <td><span class="indenter"></span>Long-term Loans , Notes and Bonds Payable</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3"><b>Net Balance</b></td>
                                <td class="right">11,139.00 Dr</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="invoice-table">
                        <table id="treetable3"
                               class="table table-striped table-bordered bootstrap-datatable datatable treetable">
                            <thead>
                            <tr>
                                <th colspan="4" class="left">Capital</th>
                            </tr>
                            <tr>
                                <th>Name of A/C</th>
                                <th class="center span2">Debit</th>
                                <th class="center span2">Credit</th>
                                <th class="center span2">Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-tt-id="11" class="leaf collapsed">
                                <td><span class="indenter" style="padding-left: 0px;"></span>Partners' or Owners'
                                    Capital
                                </td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="12" class="leaf collapsed">
                                <td><span class="indenter" style="padding-left: 0px;"></span>Stockholders' Capital</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr data-tt-id="13" class="leaf collapsed">
                                <td><span class="indenter" style="padding-left: 0px;"></span>Retained Earnings &amp;
                                    Other Income
                                </td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                                <td class="right">0.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3"><b>Net Balance</b></td>
                                <td class="right">0.00</td>
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
<script src="<?= base_url(); ?>assets/treetable/jquery.treetable.js"></script>
<script>
    $("#treetable1").treetable({expandable: true});
    $("#treetable2").treetable({expandable: true});
    $("#treetable3").treetable({expandable: true});
</script>
