<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>نايل كروز </title>
    <!-- favicon-->
    <link rel="shortcut icon" href="{{ asset('/uploads') }}/images/favicon.ico" />

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/web') }}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/web') }}/plugins/owl-carousel/css/owl.carousel.min.css">

    <!-- Custom Style-->
    <link rel="stylesheet" href="{{ asset('/web') }}/css/custom.css">
</head>

<body>

    
    <!-- Start Section Head Pages -->
    <section id="head-pages" style="background-image: url({{ asset('/uploads') }}/{{ $article->photo }});">
        <div class="container">
           <div class="row">
               <div class="col-sm-12 text-center">
                   <h2 class="text-uppercase font-weight-bold"> {{ $article->title }}</h2>
               </div>
           </div>
        </div>
    </section>
     <!-- End Section Head Pages -->
     
     
     
     <!-- Start Section About Us -->
    <section class="mb-5 pb-5 section-content section-fix-header" id="item-details">
        <div class="container">
            <div class="owl-carousel owl-theme ">
                <div class="item-work  item">
                    <div class="img-work">
                        <img src="{{ asset('/uploads') }}/{{ $article->slid1 }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class=" item-work  item">
                    <div class="img-work">
                        <img src="{{ asset('/uploads') }}/{{ $article->slid2 }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class=" item-work  item">
                    <div class="img-work">
                        <img src="{{ asset('/uploads') }}/{{ $article->slid3 }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class=" item-work  item">
                    <div class="img-work">
                        <img src="{{ asset('/uploads') }}/{{ $article->slid4 }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right my-4">
                    <p class="mb-3 pre-line">

                        {{ $article->description }}
                    </p>
                </div>
            </div>
            <div class="row mb-5 info-contact">
                <div class="col-sm-6 col-md-4 my-2">
                    <div class="text-center">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h5>{{ $article->mail }}</h5>
                </div>
                <div class="col-sm-6 col-md-4 my-2">
                    <div class="text-center">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <h5>{{ $article->mobile }}</h5>
                </div>
                <div class="col-sm-6 col-md-4 my-2">
                    <div class="text-center">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h5>{{ $article->address }}</h5>
                </div>
            </div>
           <div class="row my-4">
                <div class="col-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $article->video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
           </div>
            
        </div>
    </section>
    <!-- End Section About Us -->

    
    <!-- Start Section Booking Now -->
    <section id="contact-us">
        <form action="" class="p-3">
            <h5 class="font-weight-bold mb-3 text-center">احجز الان</h5>
            <div class="row justify-content-center">
                <div class="col-12">
                    <input type="text" class="form-control" id="fullName" name="name" placeholder="الإسم">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="رقم الهاتف ">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" id="email" name="email" placeholder="البريد الإلكترونى">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" id="services" name="services" placeholder="انواع الخدمات">
                </div>
                <div class="col-12">
                    <textarea name="message" id="message" class="form-control" placeholder="اكتب رسالتك" rows="3"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn  mb-2 btn-primary-g">ارســــال</button>
                </div>
            </div>
        </form>
        <button type="button" class="btn-contactus-form btn">احجز الان</button>
    </section>



    <!-- Start Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 text-center mb-2">
                    <p>جميع الحقوق محفوظة لـ النيل كروز.</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-3">
                    <ul class="p-0">
                        <li class="d-inline-block">
                            <a href="http://www.instagram.com" target="_blank" class="animated pulse">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="http://www.google.com" target="_blank" class="animated pulse">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="tel:+1234555454" target="_blank" class="animated pulse">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="http://www.twitter.com" target="_blank" class="animated pulse">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="http://www.youtube.com" target="_blank" class="animated pulse">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="http://www.facebook.com" target="_blank" class="animated pulse">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="text-center mt-3">
                        تواصل معنا على example@email.com
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center copy-right mb-2">
                    <a href="http://motwreen.com/" target="_blank"> تصميم وتطوير مطوريين
                        <img width="50px" src="./images/motwreen.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->




    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('/web') }}/plugins/jquery/jquery.js"></script>
    <script src="{{ asset('/web') }}/plugins/bootstrap/js/tether.min.js"></script>
    <script src="{{ asset('/web') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Material Design -->
    <script src="{{ asset('/web') }}/plugins/fancybox/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('/web') }}/plugins/owl-carousel/js/owl.carousel.min.js"></script>
    
    <!-- Start Main JS -->

    <script src="{{ asset('/web') }}/js/main.js"></script>



</body>

</html>
