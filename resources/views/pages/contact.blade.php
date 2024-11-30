@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<x-page-header title="Contact Us" subtitle="Get In" image="contact.jpg" />

<div id="content" class="no-bottom no-top">
    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 sm-text-center">
                    <h3>Lokasi Kami</h3>
                    Jl. Ratna No 68 G, Tonja, Denpasar Utara, Denpasar - Bali . 80239<br>
                    T. (+62) 831 1958 7745<br>
                    E. info@redsystem.id<br>
                </div>

                <div class="col-lg-8">
                    <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
                        <div class="row gx-4">
                            <div class="col-lg-6 col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="Name" id="name" class="form-control"
                                        placeholder="Nama Anda" required>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="Email" id="email" class="form-control"
                                        placeholder="Email Anda" required>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Nomor Anda" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="field-set mb20">
                                    <textarea name="message" id="message" class="form-control"
                                        placeholder="Pesan Anda" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                        <div id='submit' class="mt20">
                            <input type='submit' id='send_message' value='Kirim Pesan' class="btn-custom">
                        </div>

                        <div id="success_message" class='success'>
                            Pesan anda telah dikirim dengan sukses. Refresh halaman ini jika Anda ingin mengirim lebih banyak pesan.
                        </div>
                        <div id="error_message" class='error'>
                            Maaf, disini terdapat eror saat sedang ingin mengirim pesan Anda.
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection