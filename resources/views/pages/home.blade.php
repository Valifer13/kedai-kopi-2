@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- content begin -->
<div id="content" class="no-bottom no-top">

    <!-- parallax section -->
    <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
        <div id="revolution-slider">
            <ul>
                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="03_images/slider/slide-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="10">

                    <div class="tp-caption tp-teaser-1" data-x="center" data-y="160" data-width="none"
                        data-height="none" data-whitespace="nowrap"
                        data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <span class="id-color-2">Coffee Lover</span>
                    </div>

                    <div class="tp-caption" data-x="center" data-y="200" data-width="" data-height="none"
                        data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <img src="03_images/misc/separator.svg" class="img-fluid" alt="">
                    </div>

                    <div class="tp-caption tp-title-1 text-center" data-x="center" data-y="225" data-width="700"
                        data-height="none" data-whitespace="wrap"
                        data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        Nikmati Kopi yang Beraroma
                    </div>

                    <div class="tp-caption text-center tp-text-1" data-x="center" data-y="400" data-width="600"
                        data-height="none" data-whitespace="wrap"
                        data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                        Tempat bertemunya seni dengan keahlian untuk menciptakan simfoni rasa.
                    </div>

                    <div class="tp-caption" data-x="center" data-y="470" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                        <a href="#" class="btn-line">Lihat Menu</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="03_images/slider/slide-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="10">

                    <div class="tp-caption tp-teaser-1" data-x="center" data-y="160" data-width="none"
                        data-height="none" data-whitespace="nowrap"
                        data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <span class="id-color-2">Coffee to Enjoy</span>
                    </div>

                    <div class="tp-caption" data-x="center" data-y="200" data-width="" data-height="none"
                        data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <img src="03_images/misc/separator.svg" class="img-fluid" alt="">
                    </div>

                    <div class="tp-caption tp-title-1 text-center" data-x="center" data-y="225" data-width="700"
                        data-height="none" data-whitespace="wrap"
                        data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        Saat Cita Rasa Bertemu Keanggunan
                    </div>

                    <div class="tp-caption text-center tp-text-1" data-x="center" data-y="400" data-width="600"
                        data-height="none" data-whitespace="wrap"
                        data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                        Siapkan cangkir mu untuk pengalaman bersantai yang tak terlupakan.
                    </div>

                    <div class="tp-caption" data-x="center" data-y="470" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                        <a href="#" class="btn-line">Lihat Menu</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- parallax section close -->

    <!-- section begin -->
    <section>
        <div class="container">
            <div class="row aligns-item-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-center">
                        <h5 class="uptitle wow fadeInUp">Beriaplah Untuk</h5>
                        <h2 class="wow fadeInUp">Momen-Momen Berharga</h2>
                        <p class="lead wow fadeInUp">Dari hidangan kopi lezat hingga suasana yang menyenangkan,
                            pembukaan besar kami menjanjikan pengalaman bersantai yang tak terlupakan.</p>
                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center">
                <div class="col-lg-4 wow fadeInRight">
                    <div class="p-4 jarallax" data-jarallax data-speed="0.1">
                        <img src="03_images/misc/1.jpg" class="jarallax-img" alt="">
                        <img src="03_images/misc/icon-1.png" alt="">
                        <div class="spacer-single"></div>
                        <h3>Rasa Aromatik</h3>
                        <p>Kaya, mengundang, dan sangat menggoda, rasa aromatik kopi adalah perjalanan sensorik yang
                            dimulai dengan menciumnya pertama kali. </p>
                        <a href="#" class="btn-line">Baca Lebih</a>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                    <div class="p-4 jarallax" data-jarallax data-speed="0.1">
                        <img src="03_images/misc/2.jpg" class="jarallax-img" alt="">
                        <img src="03_images/misc/icon-2.png" alt="">
                        <div class="spacer-single"></div>
                        <h3>Makanan Ringan Lezat</h3>
                        <p>Kami juga menyediakan beberapa makanan ringan yang cocok dinikmati dengan secangkir kopi
                            anda. Sekaligus menemani masa bersantai anda.</p>
                        <a href="#" class="btn-line">Baca Lebih</a>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <div class="p-4 jarallax" data-jarallax data-speed="0.1">
                        <img src="03_images/misc/3.jpg" class="jarallax-img" alt="">
                        <img src="03_images/misc/icon-3.png" alt="">
                        <div class="spacer-single"></div>
                        <h3>Buat Pesta Anda</h3>
                        <p>Mengubah kafe kami yang nyaman menjadi tujuan pesta utama, tempat teman-teman berkumpul, tawa
                            mengalir, dan kenangan tercipta.</p>
                        <a href="#" class="btn-line">Baca Lebih</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section data-bgcolor="rgba(255, 255, 255, .05)">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="uptitle wow fadeInUp">Temukan</h5>
                    <h2 class="wow fadeInUp">Cerita Kami</h2>
                    <p class="lead wow fadeInUp">Perjalanan kami dimulai di tahun 2008 dengan misi sederhana:
                        menghadirkan pengalaman kopi yang berbeda. Berawal dari rasa penasaran akan berbagai jenis kopi
                        di dunia, kami mulai mengumpulkan biji kopi dari berbagai daerah, baik dari Indonesia maupun
                        mancanegara, untuk memperkenalkan cita rasa yang beragam kepada para pecinta kopi.</p>

                    <p class="wow fadeInUp">Kami ingin menciptakan ruang di mana kopi bisa dinikmati bukan hanya sebagai
                        minuman, tapi sebagai pengalaman. Di Kedai Kopi, setiap sajian dibuat dengan cinta oleh barista
                        kami yang berdedikasi, dan setiap cangkir yang Anda nikmati adalah hasil dari proses pemilihan
                        dan penyeduhan yang teliti. Dari awal yang sederhana hingga menjadi tempat favorit untuk berbagi
                        cerita, kami bangga bisa terus menemani Anda menikmati kopi dari seluruh dunia dalam suasana
                        yang hangat dan akrab.</p>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <img src="03_images/misc/4.jpg" class="img-fluid wow zoomIn" alt="">
                        </div>
                        <div class="col-6">
                            <img src="03_images/misc/7.jpg" class="img-fluid wow zoomIn" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h5 class="uptitle wow fadeInUp">22,000+</h5>
                    <h2 class="wow fadeInUp">Kustomer Senang</h2>
                    <p class="lead wow fadeInUp">Pelanggan senang, hati pun senang! Bergabunglah dengan jajaran
                        pelanggan kami yang puas dan nikmati secangkir kopi nikmat yang belum pernah ada sebelumnya.</p>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="0s">
                    <div class="de-review-app h-100">
                        <div class="d-logo">
                            <img src="03_images/reviews/google.png" class="" alt="">
                        </div>
                        <div class="d-testi">
                            Tempat ini sungguh nyaman untuk menikmati kopi sambil bekerja atau sekadar bersantai.
                            Kopinya enak dan aromanya menggugah selera, benar-benar tempat favorit saya di kota ini!
                        </div>
                        <div class="d-testi-by">Karyn Deely<span>Jan 20, 2024</span></div>
                        <div class="d-stars">
                            <img src="03_images/reviews/google-stars.png" class="" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                    <div class="de-review-app h-100">
                        <div class="d-logo">
                            <img src="03_images/reviews/trustpilot.png" class="" alt="">
                        </div>
                        <div class="d-testi">
                            Barista di sini ramah dan tahu benar cara menyajikan kopi berkualitas. Setiap kunjungan
                            selalu memberikan pengalaman yang berbeda, terutama dengan menu musiman yang kreatif.
                        </div>
                        <div class="d-testi-by">Josefa Devany<span>Jan 20, 2024</span></div>
                        <div class="d-stars">
                            <img src="03_images/reviews/trustpilot-stars.svg" class="" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <div class="de-review-app h-100">
                        <div class="d-logo">
                            <img src="03_images/reviews/google.png" class="" alt="">
                        </div>
                        <div class="d-testi">
                            Saya bukan hanya datang untuk kopinya, tetapi juga untuk suasana dan pelayanannya. Setiap
                            kunjungan ke Cafe ini serasa pulang ke rumah, tempat yang penuh kehangatan dan rasa
                            autentik.
                        </div>
                        <div class="d-testi-by">Samual Stein<span>Jan 20, 2024</span></div>
                        <div class="d-stars">
                            <img src="03_images/reviews/google-stars.png" class="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative" data-bgcolor="rgba(255, 255, 255, .05)">
        <div class="container">
            <div class="row align-items-center wow fadeInUp">
                <div class="col-lg-5 offset-lg-7">
                    <h5 class="uptitle">Favorite</h5>
                    <h2>Coffee</h2>

                    <div class="menu-item thead">
                        <div class="c1"></div>
                        <div class="c2">Medium<span>16 oz</span></div>
                        <div class="c3">Large<span>20 oz</span></div>
                    </div>

                    @foreach ($data['coffee'] as $item)
                    <div class="menu-item">
                        <div class="c1">{{ $item['name'] }}<span>{{ $item['description'] }}</span></div>
                        <div class="c2">{{ $item['price'] / 2 }}K</div>
                        <div class="c3">{{ $item['price'] }}K</div>
                    </div>
                    @endforeach

                    <div class="spacer-single"></div>

                    <a href="03_luxury-menu.html" class="btn-line">Perlihatkan Semua Menu</a>
                </div>
            </div>
        </div>

        <div class="image-container col-lg-6 h-100 top-0 jarallax" data-speed="-.2">
            <img src="03_images/background/bg-side-1.jpg" class="jarallax-img" alt="">
        </div>
    </section>

    <section class="position-relative" data-bgcolor="rgba(255, 255, 255, .05)">
        <div class="container">
            <div class="row align-items-center wow fadeInUp">
                <div class="col-lg-5">
                    <h5 class="uptitle">Favorite</h5>
                    <h2>Foods</h2>

                    @foreach ($data['light_dish'] as $item)
                    <div class="menu-item">
                        <div class="c1">{{ $item['name'] }}<span>{{ $item['description'] }}</span></div>
                        <div class="c2"></div>
                        <div class="c3">{{ $item['price'] }}K</div>
                    </div>
                    @endforeach

                    <div class="spacer-single"></div>

                    <a href="03_luxury-menu.html" class="btn-line">Perlihatkan Semua Menu</a>
                </div>
            </div>
        </div>

        <div class="image-container col-lg-6 offset-lg-6 h-100 top-0 jarallax" data-speed="-.2">
            <img src="03_images/background/bg-side-6.webp" class="jarallax-img" alt="">
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h5 class="uptitle wow fadeInUp">Temui</h5>
                        <h2 class="wow fadeInUp">Baristas</h2>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                @foreach ($data['team'] as $item)
                <div class="col-lg-3 col-md-6 text-center mb-sm-20 wow fadeInRight" data-wow-delay="0s">
                    <div class="position-relative overflow-hidden mb20">
                        <img src="03_images/team/{{ $item['image'] }}" class="img-fluid position-relative z-index-1000"
                            alt="">
                    </div>
                    <h4 class="mb-0">{{ $item['name'] }}</h4>
                    <div>{{ $item['job'] }}</div>
                    <div class="social-icons s2 mt-2">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-discord"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="side-bg no-top no-bottom text-light" aria-label="section" data-bgcolor="rgba(255, 255, 255, .05)">
        <div class="col-lg-6 pull-right image-container jarallax">
            <img src="03_images/background/bg-side-3.jpg" class="jarallax-img" alt="">
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-lg-6 offset-lg-6">
                    <div class="padding80">
                        <div class="text-center">
                            <h5 class="uptitle wow fadeInUp">Kustomer</h5>
                            <h2 class="wow fadeInUp">Ulasan</h2>
                            <div class="spacer-single"></div>
                        </div>
                        <blockquote>
                            Sebagai seorang profesional yang sibuk, saya mengandalkan kopi pagi untuk mengawali hari.
                            Rasa yang kaya, lembut, dan aroma surgawi tidak pernah gagal untuk menyegarkan saya dan
                            membuat saya siap menghadapi apa pun yang terjadi hari ini. Seperti sepotong kecil surga
                            dalam secangkir!
                            <span>Jenna Smith</span>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section begin -->
    <section id="cta" aria-label="cta" class="call-to-action">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-9 text-lg-start text-sm-center wow fadeIn">
                    <h3><i class="id-color fa fa-phone mr10"></i>Panggil kami sekarang dan dapatkan tawaran spesial!
                    </h3>
                </div>

                <div class="col-lg-3 text-lg-end text-sm-center wow fadeIn" data-wow-delay=".2s">
                    <a href="/booking" class="btn-line">Panggil Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-title-1" class="text-light jarallax">
        <img src="03_images/background/bg-6.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h5 class="uptitle wow fadeInUp">We are</h5>
                        <h2 class="wow fadeInUp">Open</h2>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="0s">
                    <div class="text-center">
                        <span class="id-color-2 bold">Mon - Thu</span>
                        <div class="fs20">10:30AM - 9:30PM</div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                    <div class="text-center">
                        <span class="id-color-2 bold">Friday</span>
                        <div class="fs20">10:00AM - 10:30PM</div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <div class="text-center">
                        <span class="id-color-2 bold">Sat - Sun</span>
                        <div class="fs20">09:30AM - 11:00PM</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection