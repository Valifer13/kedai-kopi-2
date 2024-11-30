@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<x-page-header title="Blog Kami" image="blog.jpg" />

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <section id="section-book-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 blog-list">

                    @foreach ($data['articles'] as $item)
                    <div class="blog-item row align-items-center g-3 gx-5">
                        <div class="col-md-7">
                            <img src="03_images/blog/{{ $item['image'] }}" class="img-fluid" alt="">
                        </div>

                        <div class="col-md-5">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="day">{{ $item['date'] }}</div>
                                    <div class="month">{{ $item['month'] }}</div>
                                </div>

                                <div class="post-text">
                                    <h3><a href="/blog/details">{{ $item['title'] }}</a>
                                    </h3>
                                    <p>{{ $item['description'] }}</p>
                                    <a href="/blog/details" class="btn-line">Baca Lebih</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection