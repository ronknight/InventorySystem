<!--<script type="text/javascript">

    function display_data(id) {

        //alert(id);


        $.post("<?= base_url();?>customer/edit_customer/" + id, function (page_response) {
            alert(page_response);

            $('#c_name').val(page_response.CUST_NAME);
            //$('#itemid').val(result.item1);
            // $('#size').val(result.size1);
            //$('#category').val(result.category1);
            //$('#category_id').val(result.category_id1);
            //$('#sqty').val(result.stock_qty1);
            //$("#qty").val('');
            //$("#pprice").val('0');
            //$("#sprice").val('0');
            //$("#amount").val('0');
            //$("#edate").focus();
            //},'json');
        });

    }


    //$("#c_name").html(page_response.c_name);
    // $("#modal-edit").html(page_response);
    //$("#add").slideDown("fast");

    /*$('#myModal-1').on('show.bs.modal',function(){



     var button = $(event.relatedTarget)

     var cname = button.data('cname');
     var ccell = button.data('ccell');
     var caddress = button.data('caddress');
     var coldno = button.data('coldno');
     var modal = $(this)
     modal.find('.modal-body #c_name').val(cname)
     modal.find('.modal-body #c_cell').val(ccell)
     modal.find('.modal-body #c_address').val(caddress)
     modal.find('.modal-body #c_oldNo').val(coldno)

     })*/


</script>
-->
<?php





foreach ($customers as $results) {

    $id = $results->CUST_ID;
    @$custlistRow .= "<tr class='gradeX'>

                <td class='center'>" . $results->CUST_ID . "

                <td>" . $results->CUST_NAME . "

                <td>" . $results->CUST_CELL . "

                <td class=center>" . $results->CUST_ADDRESSS . "
                <td>" . $results->CUST_OLD_NO . "
                <td>" . $results->CUST_PIC . "
                <td>" . $results->CUST_JOIN_DATE . "
<td>
<button type='button' class='btn btn-default btn-xs hint--top'
                                                    data-hint='Edit'
                                                    data-toggle='modal'
                                                    data-target='#customerModal'
                                                    data-cname='$results->CUST_NAME'
                                                    data-caddr='$results->CUST_ADDRESSS'
                                                    data-cno='$results->CUST_CELL'
                                                    data-cid='$results->CUST_ID'>
                                                    <i class='fa fa-edit fa-fw'></i>
                                                </button>
                  </td>
                ";


}
?>
<!-- page start-->
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Customer List
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
            </header>
            <div class="panel-body">
                <div class="adv-table table-responsive">
                    <table class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                        <tr>
                            <th>CUST ID</th>
                            <th>CUST NAME</th>
                            <th>CUST_CELL</th>
                            <th class="hidden-phone">CUST ADDRESS</th>
                            <th>CUST OLD NO</th>
                            <th>CUST PIC</th>
                            <th>CUST JOIN DATE</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php echo $custlistRow; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- page end-->

<div class="row">
    <div class="col-lg-6">

        <section class="panel">

           <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="customerModal"
                 class="modal fade" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h4 class="modal-title">Form Tittle</h4>
                        </div>
                        <div class="modal-body modal-edit">
                            <form class='form-horizontal' role='form'>
                                <div class='form-group'>
                                    <label for='inputEmail1' class='col-lg-3 col-sm-3 control-label'>CUST NAME</label>

                                    <div class='col-lg-9'>
                                        <input type='text' name="cname" class='form-control' id='c_name' value=''>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>CUST
                                        CELL</label>

                                    <div class='col-lg-9'>
                                        <input type='text' name="ccell" value='' class='form-control' id='c_cell'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>CUST
                                        ADDRESS</label>

                                    <div class='col-lg-9'>
                                        <input type='text' name="caddress" class='form-control' value='' id='c_address'
                                               placeholder=''>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>CUST OLD
                                        NO</label>

                                    <div class='col-lg-9'>
                                        <input type='text' name="coldno" class='form-control' value='' id='c_oldNo'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='inputPassword1' class='col-lg-3 col-sm-3 control-label'>CUST PIC</label>

                                    <div class='col-lg-9'>
                                        <input type='text' name="cpic" class='form-control' id='c_pic'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='col-lg-offset-2 col-lg-10'>
                                        <button type='submit' class='btn btn-default'>Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>-->

            <div class="modal" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body">

                            <form id="CustomerForm" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="CustomerNameInput" class="col-sm-4 control-label">
                                        Customer Name
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="CustomerNameInput" placeholder="Customer Name" name="cname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CustomerAddressInput" class="col-sm-4 control-label">
                                        Address
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="CustomerAddressInput" placeholder="Address" name="caddr" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CustomerContactNumberInput" class="col-sm-4 control-label">
                                        Contact Number
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="CustomerContactNumberInput" placeholder="Contact Number" maxlength="11" name="cno" required>

                                    </div>
                                </div>
                                <input type="hidden" id="CustomerIdInput" name="cid" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="buttonX" class="btn btn-danger"><i class="fa fa-save fa-fw"></i><span></span></button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>

    </div>
</div>
<?php $this->load->view('customer/fragments/scripts'); ?>
<script>
    $(document).ready(function() {
        var x = $('#customerTable').DataTable({
            "responsive": true,
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": [0,4] }],
            "order": [[ 1, 'asc' ]],
            "stateSave": true });
        x.on( 'order.dt search.dt', function () {
            x.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            });
        }).draw();
    });

    $('#customerModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var cname = button.data('cname')
        var caddr = button.data('caddr')
        var cno = button.data('cno')
        var cid = button.data('cid')

        var modal = $(this)
        modal.find('.modal-body #CustomerNameInput').val(cname)
        modal.find('.modal-body #CustomerAddressInput').val(caddr)
        modal.find('.modal-body #CustomerContactNumberInput').val(cno)
        modal.find('.modal-body #CustomerIdInput').val(cid)

        if (!cname){
            modal.find('.modal-title').text('Add Customer')
            $('#CustomerForm').attr("action", "customers/add_customer")
            $('#buttonX span').text(' Add')
        } else {
            modal.find('.modal-title').text('Edit Customer')
            $('#CustomerForm').attr("action", "customers/update_customer_info")
            $('#buttonX span').text(' Save')
        }
    });
</script>