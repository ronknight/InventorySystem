<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                <div class="box">
                    <div class="box-header">
                        <h2 class="blue"><i class="fa-fw fa fa-bars"></i>Profit and/or Loss</h2>

                        <div class="box-icon">
                            <div class="form-group choose-date hidden-xs">
                                <div class="controls">
                                    <form action="<?=base_url();?>dashboard/profitLoss" method="post">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <div class="row">
                                                <div class="col-md-6"><input type="text" name="from" class="form-control default-date-picker"> </div>
                                                <div class="col-md-6"><input type="text" name="to" class="form-control default-date-picker"></div>
                                            </div>
                                        </div>
                                        <br>&nbsp;
                                        <div class="input-group">
                                            <input type="submit" name="submit" value="submit" class="btn btn-primary">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="introtext">Please view the Profit and/or Loss report and you can select the
                                    date range to customized the report.</p>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-4">
                                            <div class="small-box padding1010 borange">
                                                <h4 class="bold">Purchases</h4>
                                                <i class="fa fa-star"></i>

                                                <h3 class="bold"><?= $tot_pur->purchase?> </h3>

                                                <p class="bold"><?= $tot_pur->total?> Purchases </p>

                                                <p><?= $tot_pur->total;?> Purchases &amp; <?= $tot_pur->purchases;?> Paid &amp; <?php echo $tot_pur->p_discount?> % Discount</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="small-box padding1010 bdarkGreen">
                                                <h4 class="bold">Sales</h4>
                                                <i class="fa fa-heart"></i>

                                                <h3 class="bold"><?= $tot_sales->purchase?> </h3>

                                                <p class="bold"><?= $tot_sales->total?> Sales </p>

                                                <p><?= $tot_sales->total;?> Sales &amp; <?= $tot_sales->sales;?> Paid &amp; <?php echo $tot_sales->p_discount?> % Discount</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="small-box padding1010 bred">
                                                <h4 class="bold">Profit and/or Loss</h4>
                                                <i class="fa fa-money"></i>

                                                <h3 class="bold">
                                                    <?php echo $sales->sales - $sales->purchases; ?>

                                                </h3>
                                                <p>
                                                    <?php echo $sales->sales;?> Sales - <?php echo $sales->purchases?> Purchases
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!--<div class="col-sm-4">
                                            <div class="small-box padding1010 bpink">
                                                <h4 class="bold">Profit and/or Loss</h4>
                                                <i class="fa fa-money"></i>

                                                <h3 class="bold"><?php echo $sales->sales - ($sales->sales * $sales->discount)/100 - $sales->purchases?></h3>
                                                <p>
                                                    <?php echo $sales->sales;?> Sales - <?php echo $sales->discount ?> % Dis - <?php echo $sales->purchases?> Purchases
                                                </p>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


</section>
</section>
<!--main content end-->