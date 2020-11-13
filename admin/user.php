<?php
    require '../includes/admin/header_admin.php';
    require '../config/config.php';
    if(session_id() =='') 
        session_start();
    
    $id = 0;
?>

<main class="container-fluid pl-5 pt-2">
    <h1>User Managerment</h1>
    <button class="btn btn-success btnAddUser">Add User</button>
    <div class="row hidden" id="form-add" display="0">
        <div class="col-md-12">
            <form>
                <div class="p-3 form-group" style="border: 1px solid grey; border-radius: 20px;">
                    <div> 
                        Name:
                    </div>
                    <input type="text" name="" class="form-control" id="input-name">

                    <div> 
                        Username:
                    </div>
                    <input type="text" name="" class="form-control" id="">

                    <div> 
                        Email:
                    </div>
                    <input type="text" name="" class="form-control" id="">

                    <div> 
                        Password:
                    </div>
                    <input type="text" name="" class="form-control" id="">

                    <div> 
                        Role:
                    </div>
                    <select class="custom-select custom-select-sm form-control">
                        <option selected value="1">Student</option>
                        <option value="2">Admin</option>
                    </select>
                    <button class="btn btn-success">Lưu thông tin</button>
                </div>
            </form>   
            
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
                        <td><?php if($row['role_id'] == 1) echo 'admin'; else echo 'student';?></td>
                        <td>
                            <button class="btn btn-warning mr-3 btn-edit" name="<?php echo $row["name"]; ?>">Edit</button>
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
    })

    $(document).on('click', '.btn-delete', function() {
        var id = $(this).attr('id')
        $.ajax({
            type : 'POST',
            url : 'user_action.php',
            data : {
                'id_delete' : id
            },
            success : function() {

            }
        })
    })
</script>
<?php
    require '../includes/admin/footer_admin.php';
?>