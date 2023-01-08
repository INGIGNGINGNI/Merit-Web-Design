<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Merit Law - Index</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/merit-style.css">
        <link rel="stylesheet" href="assets/css/service-card.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    </head>
    <body>

        <?php include "components/navbar2.php"; ?>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                <div class="banner-box">
                    <h2 class="banner-title">ที่ปรึกษากฎหมายเมริท</h2>
                    <div class="banner-sub">ด้วยประสบการณ์ที่ยาวนาน ทำให้ได้รับความเชื่อถือและไว้วางใจในงานบริการต่าง ๆ
                        เป็นอย่างดี</div>
                    <button type="button" class="btn btn-primary banner-btn">
                        ความเป็นมา<i style="padding-left: 10px; padding-right: 0;"
                            class="fi fi-rr-arrow-small-right"></i></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/banner2.jpg" alt="First banner">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/img2.jpg" alt="Second banner">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/img3.jpg" alt="Third banner">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="service">รูปแบบงานบริการ</div>
        <div class="square"></div>

        <?php include "components/service-card.php"; ?>

        <div class="service">ความเป็นมาของบริษัท</div>
        <div class="square"></div>

        <div class="row profile">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                <img src="assets/images/about-company.png" alt="" class="img-company">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                <div class="about-company">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ได้จัดตั้งและจดทะเบียนเป็นบริษัทจำกัดตั้งแต่ปี พ.ศ.2534 จนถึงปัจจุบัน ได้ดำเนินงานมาแล้วกว่า 30 ปี โดยมีวัตถุประสงค์เพื่อรับดำเนินการเกี่ยวกับงานทางด้านกฎหมายและงานด้านบริการที่เกี่ยวข้องต่าง ๆ ด้วยประสบการณ์ที่มีมาอย่างยาวนานและการให้บริการที่มีประสิทธิภาพทำให้เราได้รับความเชื่อถือและไว้วางใจจากผู้รับบริการเป็นอย่างดีเรื่อยมาจนถึงปัจจุบัน</div>
                <div class="name-company">บริษัท ที่ปรึกษากฎหมายเมริท จำกัด</div>
            </div>
        </div>

        <?php include "components/footer.php"; ?>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/service-card.js"></script>

    </body>

</html>