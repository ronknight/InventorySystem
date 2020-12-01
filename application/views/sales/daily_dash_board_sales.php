<script type="text/javascript"><!--
function print_specific_div_content()
{
 //alert("Hello world");
 var content = "<html>";
 content += document.getElementById("coupon_deal_id").innerHTML ;
 content += "</body>";
 content += "</html>";
 var printWin = window.open('','','left=0,top=0,width=auto,height=auto,toolbar=0,scrollbars=0,status =0');
 printWin.document.write(content);
 printWin.document.close();
 printWin.focus();
 printWin.print();
 printWin.close();
}
</script>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-title">
                <h3>Sales Report</h3>
            </div>
            <div class="panel-body">
                <a href="#" onClick="print_specific_div_content()">
                    <div class="ibb-print"> </div>
                    <h4>Print</h4>
                </a>

                <div id= "coupon_deal_id">
                    <?php date_default_timezone_set('Asia/karachi');
                    $TIME = date("h:i:s a", time());
                    echo $DATE=date("M Y");?>
                    </h3>

                    <table cellpadding="0" cellspacing="0" width="100%" class="sOrders">
                        <thead>
                        <tr>
                            <th width="60">serial#</th>
                            <th>Date</th>
                            <th width="60">Price</th>
                        </tr>
                        </thead>
                        <?php
                        $i=1;
                        foreach($daily as $daily){ ?>
                        <tbody>
                        <tr>
                            <td><span class="date"><?php echo $i;?></span> <span class="time"></span></td>
                            <td><a href="daily_sales_report/<?php echo $daily->sales_date;?>" target="_blank"><?php echo $daily->sales_date;?></a></td>
                            <td><span class="price"><?php echo $daily->sales_amount_total;?></span></td>
                        </tr>
                        <?php /*?>  <tr>
                <td><span class="date">Nov 8</span><span class="time">18:42</span></td>
                <td><a href="#">Olga</a></td>
                <td><span class="price">$146.00</span></td>
              </tr>
              <tr>
                <td><span class="date">Nov 15</span><span class="time">8:21</span></td>
                <td><a href="#">Alex</a></td>
                <td><span class="price">$879.24</span></td>
              </tr><?php */
                        $i++;
                        }
                        ?>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
