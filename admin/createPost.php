<?php require '../includes/admin/header_admin.php'; ?>

<main class="container-fluid">
    <div class="row mt-5" id="post-title">
        <div class="col-lg-4 col-md-4">
            <h5>
                <span><a href="post.php" class="text-decoration-none ">Post-Magagerment</a> > Create Posts</span>
            </h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-9">
            <form action="post-action/add-post.php" method="post" class="container mt-4 mb-4" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="txtTitle" id="">
                </div>
                <div class="form-group">
                    <label for="">Summary</label>
                    <input type="text" class="form-control" name="txtSummary" id="" >
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea class="form-control" name="txtContent" id="" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Thumbnail:</label><br>
                    <input type="file" class="form-control-file" name="fileToUpload" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
                        <button class="btn btn-success" type="submit" aria-label="">Upload</button>
                        <a name="" id="" class="btn btn-secondary" href="http://localhost:8080/a_project/admin/post.php" role="button">Cancel</a>
            </form>
        </div>
    </div>
</main>

<?php require '../includes/admin/footer_admin.php'; ?>