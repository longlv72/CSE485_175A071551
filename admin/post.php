<?php 
    require '../includes/admin/header_admin.php'; 
    require '../config/config.php';
?>

<main class="container-fluid">
    <div class="row mt-3" id="post-title">
        <div class="col-lg-4 col-md-4">
            <h5>
                <span>Post-Magagerment</span>
            </h5>
        </div>
    </div>
    <div class="row mt-3" id="post-main">
        <div class="col-lg-12 col-md-9">
            <a name="" id="" class="btn btn-success" href="http://localhost:8080/a_project/admin/createPost.php" role="button">(+) Add Post</a>
        </div>
    </div>
    <div class="row mt-3" id="list-posts">
        <div class="col-lg-12 col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Create at</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <?php 
                    $query = "select * from posts";
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
                        <td scope="row"><?=$index; ?></td>
                        <td><?php echo $row["post_name"] ?></td>
                        <td><?php echo $row["post_summary"] ?></td>
                        <td><?php echo $row["post_content"] ?></td>
                        <td><img src="<?php echo $row['image'] ?>" class="img-post" width="100px" height="100px" alt=""></td>
                        <td><?php echo $row["post_time"]; ?></td>
                        <td><button class="btn btn-warning mr-3 btn-edit">Edit</button></td>
                        <td><button class="btn btn-danger btn-delete" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row["id"]; ?>" id="<?php echo $row["id"]; ?>">Delete</button></td>
                        <?php $index++; ?>
                    </tr>
                </tbody>
                        <?php } } ?>
            </table>
        </div>
    </div>
</main>

<?php require '../includes/admin/footer_admin.php'; ?>