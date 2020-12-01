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

<a href="#" onClick="print_specific_div_content()">
<div class="ibb-print"> </div>
<h4>Print</h4>
</a>
<div id= "coupon_deal_id">
  <table border="1" width="100%" style="border-collapse:collapse">
    <tr>
      <th> Serial# </th>
      <th> Sales#</th>
      <th>SalesDate</th>
      <th> ItemName </th>
      <th> size </th>
      <th> Rate </th>
      <th> Qty </th>
      <th> discount </th>
      <th> Amount </th>
      <th> Customer </th>
    </tr>
    <tr>
      <?php
	$total=0;
$i=1;
foreach ($sales_item_daily as $sales_item) { ?>
      <?php //echo $i; ?>
      <td><font color="#FF0000"> <?php echo $i; ?></font></td>
      <td><?php echo $sales_item->sales_no;?></td>
      <td><?php echo $sales_item->sales_date;?></td>
      <td><?php echo $sales_item->item_name;?></td>
      <td><?php echo $sales_item->size;?></td>
      <td><?php echo $sales_item->sales_rate;?></td>
      <td><?php echo $sales_item->sales_qty;?></td>
      <td><?php echo $sales_item->sales_discount;?></td>
      <td><?php echo $tot=$sales_item->sales_amount;?></td>
      <td><?php echo $sales_item->customer_name;?></td>
    </tr>
    <?php
	$total=$total+$tot;
	  $i++;
	  }
	  ?>
    <tr>
      <td>TOTAL</td>
      <td colspan="6" align="right"><b><?php echo $total?></b>&nbsp;</td>
    </tr>
  </table>
</div>
