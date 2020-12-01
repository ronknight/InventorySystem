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
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-title">
                <h3>Purchase Report</h3>
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
			foreach($daily_p as $dailyp){ ?>
            <tbody>
              <tr>
                <td><?php echo $i;?></td>
                <td><a href="daily_purchase_report/<?php echo $dailyp->purchase_date;?>" target="_blank"> <?php echo $dailyp->purchase_date;?></a></td>
                <td><?php echo $dailyp->purchase_amount_total;?></td>
              </tr>
              <?php 
			$i++;
			}
			  ?>
            </tbody>
            <tfoot>
              
            </tfoot>
          </table>
          </div>
                </div></
            </div>
    </div>