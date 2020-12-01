
                <script type="text/javascript">
                    function Clickheretoprint()
                    {
                        var disp_setting="toolbar=no,location=no,directories=yes,menubar=no,";
                        disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
                        var content_vlue = document.getElementById("content-print").innerHTML;

                        var docprint=window.open("","",disp_setting);
                        docprint.document.open();
                        docprint.document.write('<html><head><title></title><center><h3></center></h3>');
                        docprint.document.write('</head><body onLoad="self.print()"><center>');
                        docprint.document.write(content_vlue);
                        docprint.document.write('</center></body></html>');
                        docprint.document.close();
                        docprint.focus();
                    }
                </script>

                <a href="javascript:Clickheretoprint()">
                    <?php /*?><img src="<?php echo base_url();?>img/printer.png" title="Click To Print" width="50px" height="50px" align="RIGHT" ><?php */?>Print</a>
            </div>

            <div id="content-print"  style="">

                <img src='<?=base_url();?>/img/barcode.php?barcode=<?php echo $items->item_id?>&text=<?php echo $items->item_name.'-'.$items->color.'-'.$items->size.'-'.$items->article_no.'-'.$items->purchase_rate?>&width=300'  />


            </div>
       