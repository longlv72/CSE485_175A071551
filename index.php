<?php require 'includes/header.php'; ?>


<main class="container">
    
    <div class="row">
        <div class="col-md-8">
            <div id="carouselId" class="carousel slide mt-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="assets/images/gv-khoa-cnttthumb.jpg" height="256px" width="100%" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/khai-truong.jpeg" height="256px" width="100%" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hoi-thao.jpeg" height="256px" width="100%" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="ceykFV9m"></script>
            <div class="fb-page mt-4" data-href="https://www.facebook.com/cse.tlu.edu.vn" data-tabs="timeline" data-width="300" data-height="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
        </div>
    </div>
    
</main>

<?php require 'includes/footer.php' ?>