<div class="row">
    <div class="col-lg-6">
        <div class="box box-info">
            <div class="box-header with-border">
            <div class="portlet-title"><h3>Users Online Status</h3></div>

        <div class="box-body">
            <table class="table table-striped" id="sample_1">
                <thead>
                <th>Online Status</th>
                <th>Name</th>
               
                <th>Designation</th>
                </thead>
                <?php foreach($users as $users):?>
                    <tr>
                        <td id="online_status_<?php echo $users->USER_ID;?>">Offline</td>
                        <td><?= $users->USER_NAME;?></td>

                        <td><?= $users->GROUP_NAME;?></td>
                    </tr>
                <?php endforeach; ?>
                <!-- <tr>
                     <td id="online_status_2">Offline</td>
                     <td>Homer Simpson</td>
                     <td>Free</td>
                 </tr>

                 <tr>
                     <td id="online_status_3">Offline</td>
                     <td>The Grim Reaper</td>
                     <td>I dont drink</td>
                 </tr>-->
            </table>
        </div>
        </div>
    </div>
</div>
    </div>
