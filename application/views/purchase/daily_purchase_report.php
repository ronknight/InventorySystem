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
                    <table border="1" width="100%" style="border-collapse:collapse">
                        <tr>
                            <th> Serial# </th>
                            <th> Category </th>
                            <th> ItemName </th>
                            <th> size </th>
                            <th> Rate </th>
                            <th> Qty </th>
                            <th> Amount </th>
                        </tr>
                        <tr>
                            <?php
                            $total=0;
                            $i=1;
                            foreach ($purchase_item_daily as $purchase_item) { ?>
                            <?php //echo $i; ?>
                            <td><font color="#FF0000"> <?php echo $i; ?></font></td>
                            <td><?php echo $purchase_item->category_name;?></td>
                            <td><?php echo $purchase_item->item_name;?></td>
                            <td><?php echo $purchase_item->size;?></td>
                            <td><?php echo $purchase_item->purchase_rate;?></td>
                            <td><?php echo $purchase_item->purchase_qty;?></td>
                            <td><?php echo $tot=$purchase_item->purchase_amount;


                                ?></td>
                            </td>
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
            </div>
        </div>
    </div>
</div>

