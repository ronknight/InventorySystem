<html>
<head>
    <title><?php echo $title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body
        {
            margin:0;
            padding:0;
            background-color:#f1f1f1;
        }
        .box
        {
            width:900px;
            padding:20px;
            background-color:#fff;
            border:1px solid #ccc;
            border-radius:5px;
            margin-top:10px;
        }
    </style>
</head>
<body>
<div class="container box">
    <h3 align="center"><?php echo $title; ?></h3><br />
    <div class="table-responsive">
        <br />
        <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
        <br /><br />
        <table id="user_data" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%">Image</th>
                <th width="35%">First Name</th>
                <th width="35%">Last Name</th>
                <th width="10%">Edit</th>
                <th width="10%">Delete</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                    <label>Enter First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" />
                    <br />
                    <label>Enter Email</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" />
                    <br />
                    <label>Select User Image</label>
                    <input type="file" name="user_image" id="user_image" />
                    <span id="user_uploaded_image"></span>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="action" id="action" class="btn btn-success" value="Add" />

                    <input type="submit" name="action1" id="" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" language="javascript" >
    $(document).ready(function(){
        $('#add_button').click(function(){
            $('#user_form')[0].reset();
            $('.modal-title').text("Add User");
            $('#action').val("Add");
            $('#user_uploaded_image').html('');
        });
        var dataTable = $('#user_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
                url:"<?php echo base_url() . 'index.php/crud/fetch_user'; ?>",
                type:"POST"
            },
            "columnDefs":[
                {
                    "targets":[0, 3, 4],
                    "orderable":false,
                },
            ],
        });
        $(document).on('submit', '#user_form', function(event){
            event.preventDefault();
            var firstName = $('#first_name').val();
            var lastName = $('#last_name').val();
            var extension = $('#user_image').val().split('.').pop().toLowerCase();
            if(extension != '')
            {
                if(jQuery.inArray(extension, ['gif','png','jpeg']) == -1)
                {
                    alert("Invalid Image File");
                    $('#user_image').val('');
                    return false;
                }
            }
            if(firstName != '' && lastName != '')
            {
                $.ajax({
                    url:"<?php echo base_url() . 'index.php/crud/user_action'?>",
                    method:'POST',
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    success:function(data)
                    {
                        alert(data);
                        $('#user_form')[0].reset();
                        $('#userModal').modal('hide');
                        dataTable.ajax.reload();
                    }
                });
            }
            else
            {
                alert("Bother Fields are Required");
            }
        });
        $(document).on('click', '.update', function(){
            var user_id = $(this).attr("id");
            $.ajax({
                url:"<?php echo base_url(); ?>index.php/crud/fetch_single_user",
                method:"POST",
                data:{user_id:user_id},
                dataType:"json",
                success:function(data)
                {
                    $('#userModal').modal('show');
                    $('#first_name').val(data.first_name);
                    $('#last_name').val(data.last_name);
                    $('.modal-title').text("Edit User");
                    $('#user_id').val(user_id);
                    $('#user_uploaded_image').html(data.user_image);
                    $('#action').val("Edit");
                }
            })
        });

    $(document).on('click', '.delete', function(){
        var user_id = $(this).attr("id");
        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                url:"<?php echo base_url(); ?>index.php/crud/delete_single_user",
                method:"POST",
                data:{user_id:user_id},
                success:function(data)
                {
                    alert(data);
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;
        }
    });
    });
</script>