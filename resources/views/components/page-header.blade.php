<!-- subheader -->
<section id="subheader" class="jarallax text-light">
    <img src="{{ asset("03_images/background/$image") }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center wow fadeInUp">
                    <h5 class="uptitle">Discover</h5>
                    <h2>{{ $title }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="/">Home</a></li>
                        @php
                            $segments = Request::segments();
                            $currentPath = '/';
                        @endphp
                        @foreach ($segments as $segment)
                            @php
                                $currentPath .= $segment . '/';
                            @endphp
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url($currentPath) }}">{{ ucfirst(str_replace('-', '', $segment)) }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->