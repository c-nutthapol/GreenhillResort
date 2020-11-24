<!doctype html>
<html lang="en">

<head>
    <title>โรงแรมกรีนฮิลล์รีสอร์ท</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/f3910aff47.js" crossorigin="anonymous"></script>
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Swiper -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top" id="navbar">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="assets/img/logo.png" width="30%" alt="Greenhill Resort"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar=toggler=icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#slides" class="nav-link">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a href="#travel" class="nav-link">แนะนำสถานที่ท่องเที่ยว</a>
                    </li>
                    <li class="nav-item">
                        <a href="#rooms" class="nav-link">ห้องพักทั้งหมด</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">ติดต่อ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Image Slider -->
    <div class="carousel slide" id="slides" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/background2.jpg">
                <div class="carousel-caption">
                    <h1>กรีนฮิลล์รีสอร์ท</h1>
                    <button type="button" class="btn btn-outline-light btn-lg">ติดต่อพนักงาน</button>
                    <button type="button" class="btn btn-primary btn-lg">โทรสอบถาม</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/background.jpg">
                <div class="carousel-caption">
                    <h1>กรีนฮิลล์รีสอร์ท</h1>
                    <button type="button" class="btn btn-outline-light btn-lg">ติดต่อพนักงาน</button>
                    <button type="button" class="btn btn-primary btn-lg">โทรสอบถาม</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/background3.jpg">
                <div class="carousel-caption">
                    <h1>กรีนฮิลล์รีสอร์ท</h1>
                    <button type="button" class="btn btn-outline-light btn-lg">ติดต่อพนักงาน</button>
                    <button type="button" class="btn btn-primary btn-lg">โทรสอบถาม</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Travel Card Title -->
    <section id="travel">
        <div class="container padding">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-5">แนะนำสถานที่ท่องเที่ยว</h1>
                </div>
                <hr>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="Travel">
                        <!-- Swiper Slides dynamic -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-img-top" src="assets/img/1.png" alt="Card image cap">
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">วัดพระธาตุเขาน้อย</h4>
                                            <p class="card-text">น่าน, อำเภอเมืองน่าน ประเทศไทย</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-img-top" src="assets/img/2.png" alt="Card image cap">
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">Cafe’ Soodgongdee</h4>
                                            <p class="card-text">น่าน, อำเภอภูเพียง ประเทศไทย</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-img-top" src="assets/img/3.png" alt="Card image cap">
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">สกาดดี</h4>
                                            <p class="card-text">น่าน, อำเภอปัว ประเทศไทย</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-img-top" src="assets/img/4.png" alt="Card image cap">
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">หอศิลป์ริมน่าน</h4>
                                            <p class="card-text">น่าน, อำเภอเมืองน่าน ประเทศไทย</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Card Title -->
    <section id="rooms">
        <div class="container-fluid padding mt-5">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="">ห้องพักทั้งหมด</h1>
                </div>
            </div>
        </div>
        <!-- Rooms Card -->
        <div class="container padding">
            <div class="row padding text-center">
                <dic class="col-md-6">
                    <div class="card">
                        <img src="assets/img/room1.jpg" width="100%" height="500px" class="card-img-top card-image">
                        <div class="card-body">
                            <h5 class="card-title">ห้อง Superior</h5>
                            <p class="card-text">ราคาปกติ 800 บาท รวมอาหารเช้า</p>
                        </div>
                    </div>
                </dic>
                <dic class="col-md-6">
                    <div class="card">
                        <img src="assets/img/room2.jpg" width="100%" height="500px" class="card-img-top card-image">
                        <div class="card-body">
                            <h5 class="card-title">ห้อง Deluxe</h5>
                            <p class="card-text">ราคาปกติ 1,200 บาท รวมอาหารเช้า</p>
                        </div>
                    </div>
                </dic>
            </div>
        </div>
    </section>

    <!-- contact -->
    <div class="container-fluid padding" id="contact">
        <div class="row text-center padding">
            <div class="col-12">
                <h2 class="m-3">ติดต่อ</h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook-square"></i> </a>
                <a href="#"><i class="fas fa-phone-square-alt"></i> </a>
                <a href="#"><i class="fab fa-line"></i> </a>
                <a href="#"><i class="fas fa-envelope-square"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="assets/img/logo.png">
                    <hr class="light">
                    <p>0871838069</p>
                    <p>kosut158@gmail.com</p>
                    <p>โรงแรมกรีนฮิลล์รีสอร์ท อ.ปัว จ.น่าน</p>
                    <p>มีห้องพักจำนวน 53 ห้อง</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>ที่อยู่</h5>
                    <hr class="light">
                    <p>679 หมู่ 3</p>
                    <p>ต.ปัว อ.ปัว จ.น่าน 55120</p>
                    <p>เทศบาลเมืองน่าน จังหวัดน่าน</p>
                </div>
            </div>
            <div class="col-12 text-center">
                <hr class="light">
                <p>2020 &copy; <a style="text-decoration: none; color: #FFF;" href="StaraAmin_2.7.1/pages/signin-signup/signin.php">Greenhill Resort</a></p>
            </div>
        </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            slidesOffsetBefore: 340,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>