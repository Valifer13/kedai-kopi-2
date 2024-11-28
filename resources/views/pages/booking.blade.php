@extends('layouts.app')

@section('title', 'Booking')

@section('content')
<x-page-header title="Booking Table" />

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <section id="section-book-form">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4">
                    <h3>Booking Sekarang!</h3>
                    <p>Cukup pilih tanggal, waktu, dan jumlah tamu yang Anda inginkan, dan serahkan sisanya kepada kami. Bersiaplah untuk menikmati cita rasa yang lezat, layanan yang sempurna, dan momen yang tak terlupakan saat Anda memulai perjalanan kuliner yang tiada duanya.</p>
                </div>
                <div class="col-lg-8">
                    <form class="row" name="contactForm" id='contact_form' method="post" action="#">
                        <div class="col-lg-4 mb10">
                            <h4>Pilih Tanggal</h4>
                            <div id="date" class="input-group date" data-date-format="mm-dd-yyyy">
                                <input class="form-control" type="text" readonly />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>

                        <div class="col-lg-4 mb10">
                            <h4>Pilih Waktu</h4>
                            <select name="time" id="time" value="" class="form-control">
                                <option selected disabled>Pilih Waktu</option>
                                @for ($i = 10; $i < 22; $i++)
                                <option value="{{ $i }}:00">{{ $i }}:00</option>
                                @endfor
                            </select>
                        </div>

                        <div class="col-lg-4 mb10">
                            <h4>Berapa Banyak Tamu?</h4>
                            <select name="guests" id="guests" value="" class="form-control">
                                <option value="1-4">1 - 4</option>
                                <option value="5-8">5 - 10</option>
                                <option value="5-8">11 - 20</option>
                                <option value="20+">Lebih dari 20</option>
                            </select>
                        </div>

                        <div class="spacer-half"></div>

                        <h4>Masukan detail anda</h4>
                        <div class="col-md-6">
                            <div id='name_error' class='error'>Mohon isi nama anda.</div>
                            <div>
                                <input type='text' name='Name' id='name' class="form-control" placeholder="Nama Anda"
                                    required>
                            </div>

                            <div id='email_error' class='error'>Mohon masukan id email anda yang valid.</div>
                            <div>
                                <input type='email' name='Email' id='email' class="form-control"
                                    placeholder="Email Anda" required>
                            </div>

                            <div id='phone_error' class='error'>Mohon masukan nomor handphone anda.</div>
                            <div>
                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Nomor Anda"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id='message_error' class='error'>Mohon masukan pesan anda.</div>
                            <div>
                                <textarea name='message' id='message' class="form-control"
                                    placeholder="Pesan Anda"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                            <div id='submit' class="mt20">
                                <input type='submit' id='send_message' value='Kirim Formulir' class="btn-line">
                            </div>
                        </div>

                    </form>

                    <div id="success_message" class='success'>
                        Pesan Anda telah berhasil dikirim. Refresh halaman ini jika anda ingin mengirim lebih banyak pesan.
                    </div>
                    <div id="error_message" class='error'>
                        Maad terjadi kesalahan saat mengirim formulir Anda.
                    </div>
                </div>

                <div class="spacer-single"></div>
            </div>
        </div>
    </section>

</div>
@endsection