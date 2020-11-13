<?php require 'includes/header.php'; ?>


<main class="container">
    
    <div class="row">
        <div class="col-md-8">
            <?php echo $_SESSION['name']; ?>
            <?php echo $_SESSION['role_id']; ?>
        </div>

        <div class="col-md-4">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="ceykFV9m"></script>
            <div class="fb-page mt-4" data-href="https://www.facebook.com/cse.tlu.edu.vn" data-tabs="timeline" data-width="300" data-height="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
        </div>
    </div>
    
</main>

<?php require 'includes/footer.php' ?>