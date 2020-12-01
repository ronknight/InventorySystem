<section class="content">


    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <?php if($empDetail['EMP_PIC'] != ''){?>
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().$empDetail['EMP_PIC']; ?>">
                    <?php }else{?>
                        <img class="profile-user-img img-responsive img-circle" src='<?= base_url() . '/' . "uploads/images/no_avatar.jpg" ?>'>
                    <?php }?>
                    <h3 class="profile-username text-center"><?php echo $empDetail['EMP_NAME']; ?></h3>

                    <p class="text-muted text-center"><?php echo $empDetail['EMP_EMAIL']; ?></p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Gender</b> <a class="pull-right"><?php echo $empDetail['EMP_GENDER']; ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Regiteration date</b> <a class="pull-right"><?php echo date('d M,Y',strtotime($empDetail['EMP_DATE'])); ?></a>
                        </li>

                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-9">
            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                    <div class="text-right">
                        <a href="<?=base_url('employees/employee_list')?>" class="btn btn-warning">Back</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

                    <p class="text-muted">
                        <?php if(empty($empDetail)){
                            echo "<span>NO record</span>";
                        }else{
                            echo $empDetail['EMP_PHONE'];} ?>
                    </p>

                    <hr>

                    <strong><i class="fa fa-mobile margin-r-5"></i> Cell No</strong>

                    <p class="text-muted"> <?php if(empty($empDetail)){
                            echo "<span>NO record</span>";
                        }else{
                            echo $empDetail['EMP_CELL'];} ?>a</p>

                    <hr>

                    <strong><i class="fa fa-location-arrow"></i> Address</strong>

                    <p> <?php if(empty($empDetail)){
                            echo "<span>NO record</span>";
                        }else{
                            echo $empDetail['EMP_ADDRESS'];} ?></p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

</section>
