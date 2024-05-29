@php use App\Enum\MediaCollection; @endphp
@extends('layouts.main')
@section('content')
    <div id="banner-area">
        <img src="{{ asset('assets2/images/banner/banner2.jpg') }}" alt=""/>
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>Portfolio Single</h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('projects') }}">Portfolio</a></li>
                    <li>{{ $project->title_en }}</li>
                </ul>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner area end -->


    <!-- Portfolio item start -->
    <section id="portfolio-item">
        <div class="container">
            <!-- Portfolio item row start -->
            <div class="row">
                <!-- Portfolio item slider start -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="portfolio-slider">
                        <div class="flexportfolio flexslider">
                            <ul class="slides">
                                @foreach($project?->getMedia(MediaCollection::PROJECT_IMAGES->value) as $media)
                                    <li><img src="{{ asset($media->getUrl()) }}" alt=""></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item slider end -->

                <!-- sidebar start -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="portfolio-desc">
                            <h3 class="widget-title">About Project</h3>
                            <p>
                                {!! $project->description_en !!}
                            </p>
                            <br/>
                            <h3 class="widget-title">Used Skills</h3>
                            <p>
                                @foreach($project->tags as $key => $tag)
                                    {{$tag->name .(($key != 0) || ($key+1 != $project->tags->count()) ?
                                     ($key+1 !=$project->tags->count()-1? ',':'&'):'')}}
                                @endforeach
                            </p>
                            <br/>
                            <h3 class="widget-title">Clients</h3>
                            <p>{{ $project?->client?->name }}</p>
                            {{--                            <p><a href="#" class="project-btn btn btn-primary">Project Link</a></p>--}}
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->
            </div><!-- Portfolio item row end -->
        </div><!-- Container end -->
    </section><!-- Portfolio item end -->

    <div class="gap-40"></div>

@endsection
