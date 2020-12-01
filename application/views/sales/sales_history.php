<?php
foreach ($sales as $results) {

    $id = $results->sales_no;
    @$custlistRow .= "<tr>


                
                <td>" . $results->receipt_name . "
                <td style = text-transform:uppercase;>" . $results->payment_mode . "
                <td>" . $results->po_number . "
                <td>" . $results->customer_name . "
                <td>" . date('M-d-Y',strtotime($results->sales_date)) . "
                <td>".number_format($results->sales_amount_total,2)."</td>
               
<td>
<a href='show_sales_history/" . $results->sales_no . "' data-toggle='modal' class='btn btn-success'>
<i class='fa fa-pencil-square-o'></i>
                                  Sales History
                              </a> </td>
                ";

}
?>
<!-- page start-->

<section class="panel">
    <header class="panel-heading">
        SALES HISTORY
    </header>
    <div class="panel-body">
        <div class="adv-table editable-table table-responsive">
                <table id="example1" class="table table-striped table-hover table-bordered dataTable"
                       aria-describedby="editable-sample_info">
                    <thead>
                    <tr role="row">
                        <!-- <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 184px;"
                            aria-label="Username">Sales Code
                        </th> -->
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            Type
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            Invoice #
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            PO #
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 269px;" aria-label="Full Name: activate to sort column ascending">
                            Customer
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 123px;" aria-label="Points: activate to sort column ascending">
                            Date
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 123px;" aria-label="Points: activate to sort column ascending">
                            Status
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 123px;" aria-label="Points: activate to sort column ascending">
                            Total
                        </th>
                       <!--  <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 123px;" aria-label="Points: activate to sort column ascending">
                            Paid
                        </th> -->
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1"
                            colspan="1" style="width: 127px;" aria-label="Delete: activate to sort column ascending">
                            Delete
                        </th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <?php foreach ($sales as $results) {

                        $id = $results->sales_no; ?>
                        <tr class='odd'>

                            <!-- <td class='center'><?php echo $results->stock_no; ?></td> -->
                            <td><?php echo $results->receipt_name; ?></td>
                            <td style = "text-transform:uppercase;"><?php echo $results->payment_mode; ?></td>
                            <td><?php echo $results->po_number; ?></td>
                            <td><a style="color: black;" href="history/<?= $results->customer_id ?>"><?php echo $results->customer_name; ?></a></td>
                            <td><?php echo date('M-d-Y',strtotime($results->sales_date)) ?></td>

                            <td class='center'>
                                <?php if ($results->paid == 0) { ?>
                                    <span class="label label-warning">No Payment</span>

                                <?php } else { ?>
                                    <span class="label label-primary">Paid</span>
                                <?php } ?>
                            </td>
                            <td><?php echo number_format($results->sales_amount_total,2) ?></td>
                           <!--  <td class='center'><?php echo number_format($results->purchase_rate); ?></td>
                            <td class='center'><?php echo number_format($results->stock_rate,2); ?></td>
 -->

                            <td>
<a href='show_sales_history/<?=$results->sales_no?>' data-toggle='modal' class='btn btn-success'>
<i class='fa fa-pencil-square-o'></i>
                                  Sales History
                              </a> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

</section>