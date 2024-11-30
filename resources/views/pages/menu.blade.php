@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<x-page-header title="Menu Kami" image="menu.jpg" />

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <section class="position-relative">
        <div class="container">
            <div class="row align-items-center wow fadeInUp">
                <div class="col-lg-5">
                    <h5 class="uptitle">Drinks</h5>
                    <h2>Coffee</h2>

                    <div class="spacer-half"></div>

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
                </div>
            </div>
        </div>

        <div class="image-container col-lg-6 offset-lg-6 h-100 top-0 jarallax" data-speed="-.2">
            <img src="03_images/background/bg-side-1.jpg" class="jarallax-img" alt="">
        </div>
    </section>

    <section class="position-relative">
        <div class="container">
            <div class="row align-items-center wow fadeInUp">
                <div class="col-lg-5 offset-lg-7">
                    <h5 class="uptitle">Drinks</h5>
                    <h2>Non Coffee</h2>

                    <div class="spacer-half"></div>

                    <div class="menu-item thead">
                        <div class="c1"></div>
                        <div class="c2">Medium<span>16 oz</span></div>
                        <div class="c3">Large<span>20 oz</span></div>
                    </div>

                    @foreach ($data['non_coffee'] as $item)
                    <div class="menu-item">
                        <div class="c1">{{ $item['name'] }}<span>{{ $item['description'] }}</span></div>
                        <div class="c2">{{ $item['price'] / 2 }}K</div>
                        <div class="c3">{{ $item['price'] }}K</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="image-container col-lg-6 h-100 top-0 jarallax" data-speed="-.2">
            <img src="03_images/background/bg-side-5.jpg" class="jarallax-img" alt="">
        </div>
    </section>

    <section class="position-relative">
        <div class="container">
            <div class="row align-items-center wow fadeInUp">
                <div class="col-lg-5">
                    <h5 class="uptitle">Foods</h5>
                    <h2>Light Dishes</h2>

                    <div class="spacer-half"></div>

                    @foreach ($data['light_dish'] as $item)
                    <div class="menu-item">
                        <div class="c1">{{ $item['name'] }}<span>{{ $item['description'] }}</span></div>
                        <div class="c2"></div>
                        <div class="c3">{{ $item['price'] }}K</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="image-container col-lg-6 offset-lg-6 h-100 top-0 jarallax" data-speed="-.2">
            <img src="03_images/background/bg-side-6.webp" class="jarallax-img" alt="">
        </div>
    </section>

    <section class="position-relative">
        <div class="container">
            <div class="row align-items-center wow fadeInUp">
                <div class="col-lg-5 offset-lg-7">
                    <h5 class="uptitle">Foods & drinks</h5>
                    <h2>Desserts</h2>

                    <div class="spacer-half"></div>

                    @foreach ($data['dessert'] as $item)
                    <div class="menu-item">
                        <div class="c1">{{ $item['name'] }}<span>{{ $item['description'] }}</span></div>
                        <div class="c2"></div>
                        <div class="c3">{{ $item['price'] }}K</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="image-container col-lg-6 h-100 top-0 jarallax" data-speed="-.2">
            <img src="03_images/background/bg-side-7.webp" class="jarallax-img" alt="">
        </div>
    </section>
</div>
@endsection