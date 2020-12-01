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
                <h3>Stock Report</h3>
            </div>
            <div class="panel-body">
<a href="#" onClick="print_specific_div_content()">
<div class="ibb-print"> </div>
<h4>Print</h4>
</a>

<div id= "coupon_deal_id">
<table cellpadding="0" cellspacing="0" width="100%" class="sOrders">
          <thead>
            <tr>
              <th width="60">Qty Item</th>
              <th>Name</th>
              <th width="60">Price</th>
            </tr>
          </thead>
          <?php 
			
			foreach($daily_st as $daily_st){ ?>
          <tbody>
            <tr>
              <td><span class="date">
                <?php $aaa=$daily_st->stock_qty;
				if($aaa < 10){?>
                <font style="text-decoration:blink; color:#F00; font-size:18px">
                <?php	
				echo $daily_st->stock_qty;	
				
				?>
                </font>
                <?php
                
				}else{
				echo $daily_st->stock_qty;		
				}
				?>
                </span> <span class="time">
                <?php //echo $daily_st->category_name;?>
                </span></td>
              <td><a href="#"><?php echo $daily_st->item_name;?></a></td>
              <td><span class="price"><?php echo $daily_st->stock_rate;?></span></td>
            </tr>
           <?php
		
			}
			  ?>
          </tbody>
          <tfoot>
            
          </tfoot>
        </table>
        </div>
                </div>
            </div>
        </div></div>