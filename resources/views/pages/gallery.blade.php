@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<x-page-header title="Galeri Kami" image="gallery.jpg" />

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <section aria-label="section">
        <div class="container">
            <div id="gallery" class="row g-4 zoom-gallery">
                @for ($i = 1; $i <= 6; $i++)
                <div class="col-lg-4 item">
                    <figure class="hover-zoom position-relative overflow-hidden">
                        <a href="{{ asset("03_images/gallery/$i.jpg") }}">
                            <span class="d-hover">
                                <span class="d-text">
                                    <span class="d-cap">View</span>
                                </span>
                            </span>
                            <img src="{{ asset("03_images/gallery/$i.jpg") }}" alt="">
                        </a>
                    </figure>
                </div>
                @endfor
            </div>
        </div>
    </section>
</div>
@endsection