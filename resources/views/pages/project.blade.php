@php use App\Enum\MediaCollection; @endphp
@extends('layouts.main')
@section('title','projects')
@section('content')
    <div id="banner-area">
        <img src="{{ asset('assets2/images/banner/banner2.jpg') }}" alt=""/>
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>Portfolio Classic</h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Portfolio</li>
                </ul>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner area end -->


    <!-- Portfolio start -->
    <section id="main-container" class="portfolio portfolio-box">
        <div class="container">
            <!--Isotope filter start -->
            <div class="row text-center">
                <div class="isotope-nav" data-isotope-nav="isotope">
                    <ul>
                        <li><a href="#" class="active" data-filter="*">All</a></li>
                        @foreach($categories as $category)
                            <li><a href="#" data-filter=".{{ $category->slug }}">{{ $category->name_en }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- Isotope filter end -->

            <div class="row">
                <div id="isotope" class="isotope">
                    @foreach($categories as $category)
                        @foreach($category->deployedProjects as $project)
                            <div class="col-sm-3 {{ $category->slug }} isotope-item">
                                <div class="grid">
                                    <figure class="effect-oscar">
                                        <img
                                            src="{{ $project?->getFirstMediaUrl(MediaCollection::PROJECT_HOME_IMAGE->value) }}"
                                            alt="">
                                        <figcaption>
                                            <h3>{{ \Illuminate\Support\Str::limit($project->title_en, 20) }}</h3>
                                            <a class="link icon-pentagon"
                                               href="{{ route('projects.show',[$project->slug]) }}"><i
                                                    class="fa fa-link"></i></a>
                                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                               href="{{ $project?->getFirstMediaUrl(MediaCollection::PROJECT_HOME_IMAGE->value) }}">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- Isotope item end -->
                        @endforeach
                    @endforeach
                </div><!-- Isotope content end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Portfolio end -->

    <div class="gap-40"></div>
@endsection
