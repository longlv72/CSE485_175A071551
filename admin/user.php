<?php
    require '../includes/admin/header_admin.php';
    require '../config/config.php';
    if(session_id() =='') 
        session_start();
    
    $id = 0;
?>

<main class="container-fluid pl-5 pt-2">
    <h1 class="mt-4 mb-3">User Managerment</h1>
    <button class="btn btn-success btnAddUser mb-5">Add User</button>
    <div class="row hidden" id="form-add" display="0">
        <div class="col-md-12">
            <div>
                <div class="p-3 form-group" style="border: 1px solid grey; border-radius: 20px;">
                    <input type="hidden" name="userID" value="" id="input-id">
                    <div class="pt-2 pb-2"> Name: </div>
                    <input type="text" name="" class="form-control" id="input-name">

                    <div class="pt-2 pb-2"> Username: </div>
                    <input type="text" name="" class="form-control" id="input-username">

                    <div class="pt-2 pb-2"> Email: </div>
                    <input type="text" name="" class="form-control" id="input-email">

                    <!-- <div class="pt-2 pb-2"> Password: </div>
                    <input type="text" name="" class="form-control" id=""> -->

                    <div class="pt-2 pb-2"> Role: </div>
                    <select  class="custom-select custom-select-sm form-control mb-4" id="role-select">
                        <?php  ?>
                        <option value="2" id="input-role">Student</option>
                        <option value="1" id="input-role">Admin</option>
                    </select>

                    <button class="btn btn-success" id="save-info">Lưu thông tin</button>
                </div>
            </div>   
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <!-- <th scope="col">Password</th> -->
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php 
                    $query = "select * from users";
                    $result = mysqli_query($conn, $query);
                    // var_dump($result);
                    // $row = mysqli_fetch_assoc($result);
                    // var_dump($row);
                    $index = 1;
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tbody>
                    <tr>
                        <th scope="row"><?=$index; ?></th>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php if($row['role_id'] == 1) echo 'ADMIN'; else echo 'STUDENT';?></td>
                        <td>
                            <button class="btn btn-warning mr-3 btn-edit" user-id="<?php echo $row["id"]; ?>" username="<?php echo $row["username"]; ?>" email="<?php echo $row["email"]; ?>" role="<?php echo $row["role_id"]; ?>"  name="<?php echo $row["name"]; ?>">Edit</button>
                        <?php if( $row['role_id'] == 1) { ?>  
                            <button class="btn btn-danger" disabled>Delete</button>
                            <?php } else { ?>
                                <button class="btn btn-danger btn-delete" id="<?php echo $row["id"]; ?>">Delete</button>
                            <?php } ?>
                        </td>
                        
                        <?php $index++; ?>
                    </tr>
                    </tbody>
                    <?php } } ?>
            </table>
        </div>
    </div>
</main>
<script>
    $('.btnAddUser').click(function(){
        $('input#input-id').val("");
        $('input#input-name').val("");
        $('input#input-username').val("");
        $('input#input-email').val("");
        if($('#form-add').attr('display') == 0) {
            $('#form-add').removeClass('hidden');
            $('#form-add').attr('display', 1)
        } else {
            $('#form-add').addClass('hidden');
            $('#form-add').attr('display', 0)
        }
        
    });

    $(document).on('click', '.btn-edit', function() {
        $('input#input-name').val($(this).attr('name'));
        $('input#input-username').val($(this).attr('username'));
        $('input#input-email').val($(this).attr('email'));
        $('input#input-id').val($(this).attr('user-id'));
        var role = $(this).attr('role');
        $('#role-select').val(role);
        // $('.custom-select').val();

        if($('#form-add').attr('display') == 0) {
            $('#form-add').removeClass('hidden');
            $('#form-add').attr('display', 1)
        }
    })

    $(document).on('click', '.btn-delete', function() {
        var id = $(this).attr('id')
        $.ajax({
            type : 'POST',
            url : 'user-action/delete-user.php',
            data : {
                'id_delete' : id
            },
            success : function(data1) {
                if(data1 == "true") {
                    alert("xoa thanh cong");
                    location.reload();
                } else {
                    alert("Xoa that bai");
                }
                console.log(data1);
            }
        })
    })

    $('#save-info').click(function() {
        var check = $('input#input-id').val();
        if(check == "") {
            alert ("add user")
            // create add url
            //call ajax to add user
        } else {
            // create edit url
            // call ajax to edit user
            var id = $('input#input-id').val();
            var name = $('input#input-name').val();
            var username = $('input#input-username').val();
            var email = $('input#input-email').val();
            var role = $('#role-select').val();
            // console.log(id);
            // console.log(name);
            // console.log(username);
            // console.log(email);
            // console.log(role);
            $.ajax({
                type : 'POST',
                url : 'user-action/update-user.php',
                data : {
                    'id-update' : id,
                    'name' : name,
                    'username' : username,
                    'email' : email,
                    'role' : role
                },
                success : function(data) {
                    // console.log(data);
                    location.reload();
                    
                }
            });
        }
    })
</script>
<?php
    require '../includes/admin/footer_admin.php';
?>