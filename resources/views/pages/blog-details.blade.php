@extends('layouts.app')

@section('title', 'Blog Details')

@section('content')
<x-page-header title="Blog Details" subtitle="Blog" image="blog.jpg" />

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <section id="section-book-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="de-post-read">
                        <div class="post-content">

                            <div class="post-text">
                                <div class="row g-4 zoom-gallery mb-4">
                                    <div class="col-lg-6">
                                        <figure class="hover-zoom position-relative overflow-hidden">
                                            <a href="{{ asset('images/gallery/1.jpg') }}">
                                                <span class="d-hover">
                                                    <span class="d-text">
                                                        <span class="d-cap">View</span>
                                                    </span>
                                                </span>
                                                <img src="{{ asset('03_images/gallery/1.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>

                                    <div class="col-lg-6">
                                        <figure class="hover-zoom position-relative overflow-hidden">
                                            <a href="{{ asset('images/gallery/3.jpg') }}">
                                                <span class="d-hover">
                                                    <span class="d-text">
                                                        <span class="d-cap">View</span>
                                                    </span>
                                                </span>
                                                <img src="{{ asset('03_images/gallery/3.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit
                                    amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

                                <div class="row g-4 zoom-gallery mb-4">
                                    <div class="col-lg-6">
                                        <figure class="hover-zoom position-relative overflow-hidden">
                                            <a href="images/misc/6.jpg">
                                                <span class="d-hover">
                                                    <span class="d-text">
                                                        <span class="d-cap">View</span>
                                                    </span>
                                                </span>
                                                <img src="{{ asset('03_images/misc/6.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>

                                    <div class="col-lg-6">
                                        <blockquote class="p-5 border-color-1 h-100">
                                            Sebagai seorang profesional yang sibuk, saya mengandalkan kopi pagi untuk
                                            mengawali hari saya. Rasa yang kaya, lembut, dan aroma surgawi tidak pernah
                                            gagal untuk menyegarkan saya dan membuat saya siap menghadapi apa pun yang
                                            terjadi hari ini. Rasanya seperti sepotong kecil surga dalam
                                            secangkir!<span>Jenna Smith</span>
                                        </blockquote>
                                    </div>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit
                                    amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </div>
                        </div>

                        <div class="post-meta"><span><i class="fa fa-user id-color"></i>Oleh: <a href="#">Lynda
                                    Wu</a></span> <span><i class="fa fa-tag id-color"></i><a href="#">Berita</a>, <a
                                    href="#">Events</a></span> <span><i class="fa fa-comment id-color"></i><a
                                    href="#">10 Komen</a></span></div>

                        <div class="spacer-single"></div>

                        <div id="blog-comment">
                            <h3>Komen (6)</h3>

                            <div class="spacer-half"></div>

                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="{{ asset('03_images/ui/avatar.png') }}" alt="" />
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Rina</span>
                                        <span class="c_date">8 Agustus 2024</span>
                                        <span class="c_reply"><a href="#">Balas</a></span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="comment">Wah, artikel ini menarik banget! Aku setuju kalau kopi bisa meningkatkan fokus. Aku sering banget minum kopi sebelum kerja biar lebih produktif.</div>
                                    <ol>
                                        <li>
                                            <div class="avatar">
                                                <img src="{{ asset('03_images/ui/avatar.png') }}" alt="" />
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">Dani</span>
                                                <span class="c_date">8 Agustus 2024</span>
                                                <span class="c_reply"><a href="#">Balas</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">Aku juga setuju, Rani! Tapi kalau aku malah jadi cemas kalau kebanyakan kopi. Kamu ada tips nggak biar tetap bisa nikmatin kopi tanpa efek samping?</div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="{{ asset('03_images/ui/avatar.png') }}" alt="" />
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">Rina</span>
                                                <span class="c_date">8 Agustus 2024</span>
                                                <span class="c_reply"><a href="#">Balas</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">Iya sih, Dani, itu juga kadang aku alami. Biasanya aku pilih kopi dengan kadar kafein rendah atau minum hanya 1-2 cangkir sehari. Dan jangan lupa makan dulu sebelum minum kopi!</div>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <div class="avatar">
                                        <img src="{{ asset('03_images/ui/avatar.png') }}" alt="" />
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Budi</span>
                                        <span class="c_date">8 Agustus 2018</span>
                                        <span class="c_reply"><a href="#">Balas</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Menurutku sih, manfaat kopi itu cuma sugesti aja. Kalau kebanyakan malah bikin begadang dan nggak sehat. Artikel ini kayaknya kurang bahas efek sampingnya, deh.</div>
                                    <ol>
                                        <li>
                                            <div class="avatar">
                                                <img src="03_images/ui/avatar.png" alt="" />
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">Tika</span>
                                                <span class="c_date">8 Agustus 2018</span>
                                                <span class="c_reply"><a href="#">Balas</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">Budi, mungkin tergantung orangnya kali, ya? Aku sih ngerasain banget manfaat kopi, terutama buat olahraga. Cuma aku setuju sih, konsumsi kopi juga harus terkontrol.</div>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <div class="avatar">
                                        <img src="03_images/ui/avatar.png" alt="" />
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Nisa</span>
                                        <span class="c_date">8 Agustus 2018</span>
                                        <span class="c_reply"><a href="#">Balas</a></span>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Yang paling aku suka dari kopi itu adalah momen santainya. Minum kopi sambil baca buku atau ngobrol sama teman rasanya nikmat banget!</div>
                                </li>
                            </ol>

                            <div class="spacer-single"></div>

                            <div id="comment-form-wrapper">
                                <h4>Tinggalkan Komentar</h4>
                                <div class="comment_form_holder">
                                    <form id="contact_form" name="form1" method="post" action="#">

                                        <label>Nama</label>
                                        <input type="text" name="name" id="name" class="form-control" />

                                        <label>Email <span class="req">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control" />
                                        <div id="error_email" class="error">Mohon cek email Anda.</div>

                                        <label>Pesan <span class="req">*</span></label>
                                        <textarea cols="10" rows="10" name="message" id="message"
                                            class="form-control"></textarea>
                                        <div id="error_message" class="error">Mohon cek pesan Anda.</div>
                                        <div id="mail_success" class="success">Terima kasih. Pesan Anda telah terkirim.
                                        </div>
                                        <div id="mail_failed" class="error">Eror, email tidak terkirim</div>

                                        <p id="btnsubmit">
                                            <input type="submit" id="send" value="Kirim" class="btn-custom" />
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection