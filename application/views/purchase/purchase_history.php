<?php
foreach ($purchase as $results) {

    $id = $results->purchase_no;
    @$custlistRow .= "<tr>


                <td>" . $results->purchase_no . "
                <td>" . $results->vendor_name . "
                <td>" . date('d-m-Y', strtotime($results->purchase_date)) . "
<td>
<a href='show_purchase_history/" . $results->purchase_no . "' data-toggle='modal' class='btn btn-success'>
<i class='fa fa-pencil-square-o'></i>
                                  View Purchase History
                              </a>
                  </td>
                ";

}
?>
<!-- page start-->
<style>
    .box-header.with-border {
        border-bottom: 1px solid #f4f4f4;
    }
    .box-header-background {
        background-color: #6c7a89;
        color: #fff;
    }
</style>

<section class="panel">
    <header class="panel-heading box-header-background">
        PURCHASE HISTORY
    </header>
    <div class="panel-body">
        <div class="adv-table editable-table table-responsive">
            <table id="example1" class="table table-bordered table-striped dataTable no-footer"
                   aria-describedby="dataTables-example_info">
                <thead><!-- Table head -->
                <tr role="row">
                    <th class="active sorting_asc" tabindex="0" aria-controls="dataTables-example"
                        rowspan="1" colspan="1" style="width: 32px;" aria-sort="ascending"
                        aria-label="Sl: activate to sort column ascending">Sl
                    </th>
                    <th class="active sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                        colspan="1" style="width: 154px;"
                        aria-label="Purchase No.: activate to sort column ascending">Purchase No.
                    </th>
                    <th class="active sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                        colspan="1" style="width: 211px;"
                        aria-label="Supplier Name: activate to sort column ascending">Supplier Name
                    </th>
                    <th class="active sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                        colspan="1" style="width: 150px;"
                        aria-label="Purchase Date: activate to sort column ascending">Purchase Date
                    </th>
                    <th class="active sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                        colspan="1" style="width: 124px;"
                        aria-label="Grand Total: activate to sort column ascending">Purchase Status
                    </th>
                    <th class="active sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                        colspan="1" style="width: 124px;"
                        aria-label="Grand Total: activate to sort column ascending">Grand Total
                    </th>
                    <th class="active sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                        colspan="1" style="width: 178px;"
                        aria-label="Purchase By: activate to sort column ascending">Purchase By
                    </th>
                    <th class="active sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                        colspan="1" style="width: 72px;"
                        aria-label="Action: activate to sort column ascending">Action
                    </th>
                </tr>
                </thead><!-- / Table head -->
                <tbody><!-- / Table body -->

                <?php $i = 1; foreach ($purchase as $results) {
                    $id = $results->purchase_no; ?>
                    <!--get all sub category if not this empty-->
                    <tr class="custom-tr odd">
                        <td class="vertical-td sorting_1">
                            <?php echo $i;?>
                        </td>
                        <td class="vertical-td "><?php echo $results->pur_no; ?></td>
                        <td class="vertical-td "><?php echo $results->company_name; ?></td>
                        <td class="vertical-td "><?php echo $results->purchase_date; ?></td>
                        <td class="vertical-td "><?php if($results->due_amount != 0.00){
                                echo "<span class='label label-warning'>Pending</span>";
                            }else{
                                echo "<span class='label label-primary'>Confirmed</span>";
                            } ?></td>
                        <td class="vertical-td "><?php echo $results->grand_total; ?></td>
                        <td class="vertical-td "><?= $results->USER_NAME;?></td>

                        <td>
                            <a href='show_purchase_history/<?= $results->purchase_no ?>' data-toggle='modal'
                               class='btn btn-success'>
                                <i class='fa fa-pencil-square-o'></i>
                                View Purchase History
                            </a>
                        </td>

                    </tr>
                <?php  $i++; } ?>
                </tbody><!-- / Table body -->
            </table>

            <!--<div class="row-fluid">
                <div class="span6">
                    <!--  <div class="dataTables_info" id="hidden-table-info_info">Showing 1 to 10 of 57 entries</div>-->
            <!--</div>
            <div class="span6">
                <div class="dataTables_paginate paging_bootstrap pagination">
                    <ul>
                        <!--<li class="prev disabled"><a href="#">← Previous</a></li>-->
            <!--<li class="active"><a href="#"><?php //echo $this->pagination->create_links(); ?>
                                </a></li>

                        </ul>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</section>