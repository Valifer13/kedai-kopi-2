@extends('layouts.app')

@section('title', 'About')

@section('content')
<x-page-header title="Tentang Kami" />

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <!-- section begin -->
    <section>
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <h2>Bagaimana ini bermula</h2>
                    <div class="spacer-half"></div>
                    <p class="lead">Perjalanan kami dimulai di tahun 2012 dengan misi sederhana: menghadirkan pengalaman
                        kopi yang berbeda. Berawal dari rasa penasaran akan berbagai jenis kopi di dunia, kami mulai
                        mengumpulkan biji kopi dari berbagai daerah, baik dari Indonesia maupun mancanegara, untuk
                        memperkenalkan cita rasa yang beragam kepada para pecinta kopi.</p>

                    <p>Kami ingin menciptakan ruang di mana kopi bisa dinikmati bukan hanya sebagai minuman, tapi
                        sebagai pengalaman. Di Kedai Kopi, setiap sajian dibuat dengan cinta oleh barista kami yang
                        berdedikasi, dan setiap cangkir yang Anda nikmati adalah hasil dari proses pemilihan dan
                        penyeduhan yang teliti. Dari awal yang sederhana hingga menjadi tempat favorit untuk berbagi
                        cerita, kami bangga bisa terus menemani Anda menikmati kopi dari seluruh dunia dalam suasana
                        yang hangat dan akrab.</p>

                    <p>Terima kasih sudah menjadi bagian dari perjalanan ini. Kami menantikan kesempatan untuk terus
                        berbagi momen berharga dengan Anda—satu cangkir kopi pada satu waktu.</p>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <img src="03_images/misc/4.jpg" class="img-fluid mb-4 wow zoomIn" alt="">
                            <div class="de_count wow fadeInUp">
                                <h3><span class="timer" data-to="750" data-speed="3000"></span>+</h3>
                                <h4>Ulasan positif</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="de_count wow fadeInUp">
                                <h3><span class="timer" data-to="50" data-speed="3000"></span>%</h3>
                                <h4>Omset meningkat</h4>
                            </div>
                            <div class="spacer-10"></div>
                            <img src="03_images/misc/5.jpg" class="img-fluid mt-4 wow zoomIn" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section data-bgcolor="rgba(255, 255, 255, .05)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h5 class="uptitle wow fadeInUp">Temui</h5>
                        <h2 class="wow fadeInUp">Barista Kami</h2>
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

</div>
@endsection