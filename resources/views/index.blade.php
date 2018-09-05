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
    <section class=" " id="header-Slider">
        <div class="owl-carousel owl-theme ">
            <div>
                <img src="{{ asset('/uploads') }}/images/slider-home/1.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="{{ asset('/uploads') }}/images/slider-home/2.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- End Section Head Pages -->



    <!-- Start Section About Us -->
    <section class="mb-5 pb-5 section-content ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center my-4">
                    <div class="title-section text-uppercase pt-4 pb-0">
                        <!-- <h5>who are we</h5> -->
                        <h2>البواخر النيلية المتحركة نايل كروز القاهرة - سهرة عشاء نيلية</h2>
                    </div>
                </div>

                <div class="col-sm-12 text-right">
                    <p class="px-md-4 text-right">
                        <b>البواخر النيلية المتحركة </b>و
                        <b> سهرات العشاء</b>النيلية على ضفاف النيل بالقاهرة أستمتع معنا بتجربة فريدة لانسى حيث الأستمتاع بالإطلالة
                        الساحرة على ضفاف النيل أثناء الغروب على متن أحدى
                        <b>البواخر النيلية المتحركة </b> و مشاهدة غروب الشمس على النيل بجانب مشاهدة المناظر الطبيعية الخلابة
                        بجانب الاستماع الى أنغام الموسيقى الحية و سحر الطبيعة و التى تعد
                        <b>البواخر النيلية المتحركة </b> من أفضل الأماكن السياحية التى تقدم برامج فنية و برامج ترفيهية على ضفاف
                        النيل بالإضافة الى رحلات نيلية و
                        <b> سهرات العشاء</b> نيلية,دليلك لأفضل البواخر النيلية المتحركة و المطاعم العائمة بالقاهرة و حجز
                        <b>
                        سهرات العشاء</b> النيلية كما يمكنك الأختيار ما بيت تشكيلة متنوعة من أشهى الأطباق الرئيسية و أشهى
                        المأكولات التى تمتع بالمذاق الشهى الذى لايقاوم تمتع معنا بقضاء يوم كامل على ضفاف النيل بالقاهرة على
                        المراكب النيلية المتحركة حيث افضل أماكن السهر على نيل القاهرة من حيث
                        <b> سهرات العشاء</b> النيلية و التى تجذب الكثير من السائحين حيث تقدم برنامج فنى و عروض أستعراضية و فلكلورية
                        مثل الباند و الرقص الشرقى و الغربى و عرض التنورة التى تتميز بألوانها الساحرة كل ذلك بمصاحبة الموسيقى
                        الحية و مشاهدة الفرقة الموسيقية الغربية و الشرقية بجانب الأطلالة الساحرة على نيل القاهرة و النسيم
                        المنعش

                    </p>
                </div>
            </div>

            <div class="row">

                @foreach($articles as $article)
                
                <div class="col-md-6 col-lg-4">
                    <a href="{{ url('/')}}/item/{{ $article->id  }}">
                        <div class="item">
                            <div class="img-item">
                                <img src="{{ asset('/uploads') }}/{{ $article->photo }}" class="img-fluid" alt="">
                            </div>
                            <div class="info-item">
                                <h4>{{ $article->title }}</h4>
                                <p>
                                    {!! str_limit( strip_tags($article->description)   , 200 , $end = '  ..... ') !!}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- End Section About Us -->


    <!-- Start Section Booking Now -->
    <section id="contact-us">
        <form action="{{ url('/contact') }}" method="post" class="p-3">
        	{{ csrf_field() }}
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
                        <img width="50px" src="{{ asset('/uploads') }}/images/motwreen.png" alt="">
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
    <script src="{{ asset('/web') }}/plugins/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Start Main JS -->

    <script src="{{ asset('/web') }}/js/main.js"></script>



</body>

</html>