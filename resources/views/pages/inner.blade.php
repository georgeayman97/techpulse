@extends('layouts.master')
@section('content')
    <div class="breadcumb-wrapper"
         data-bg-src="@foreach($project?->getMedia(\App\Enum\MediaCollection::PROJECT_IMAGES->value)?->take(1) as $media) {{ $media->getUrl() }} @endforeach">
        <div class="container">
            <div class="breadcumb-content">
                {{--                <h1 class="breadcumb-title">Project Details</h1>--}}
                {{--                <ul class="breadcumb-menu">--}}
                {{--                    <li><a href="{{ route('home') }}">Home</a></li>--}}
                {{--                    <li><a href="{{ route('projects') }}">Projects</a></li>--}}
                {{--                    <li>Project Details</li>--}}
                {{--                </ul>--}}
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single">
                        <div class="page-img"><img
                                src="@foreach($project?->getMedia(\App\Enum\MediaCollection::PROJECT_IMAGES->value)?->skip(1)?->take(1) as $media) {{ $media->getUrl() }} @endforeach"
                                alt="Project Image"></div>
                        <div class="page-content"><h2 class="h3 page-title">{{ getColumn($project,'title') }}</h2>
                            <p>{{ getColumn($project,'sub_title') }}</p>
                            <div class="project-inner-box mb-40"><h3 class="box-title">The result of project</h3>
                                <p>{!! getColumn($project,'description') !!}</p>
                                <div class="row gy-4 align-items-center">
                                    <div class="col-md-5">
                                        <img class="w-100 rounded-3"
                                             src="@foreach($project?->getMedia(\App\Enum\MediaCollection::PROJECT_IMAGES->value)?->skip(2)?->take(1) as $media) {{ $media->getUrl() }} @endforeach"
                                             alt="project"></div>
                                    <div class="col-md-7">
                                        <div class="checklist">
                                            <ul>
                                                @foreach($project->tags as $tag)
                                                    <li>
                                                        <i class="fal fa-badge-check"></i> {{ $tag->name }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info"><h3 class="widget_title">Project Information</h3>
                            <div class="project-info-list">
                                <div class="contact-feature">
                                    <div class="icon-btn"><i class="fa-solid fa-user"></i></div>
                                    <div class="media-body"><p class="contact-feature_label">Client:</p>
                                        <a class="contact-feature_link">
                                            {{ $project?->client?->first_name }}
                                        </a>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="icon-btn"><i class="fa-solid fa-folder-open"></i></div>
                                    <div class="media-body"><p class="contact-feature_label">Category:</p>
                                        <a class="contact-feature_link">{{ getColumn($project?->category,'name') }}</a>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="icon-btn"><i class="fa-solid fa-calendar-days"></i></div>
                                    <div class="media-body"><p class="contact-feature_label">Date</p><span
                                            class="contact-feature_link">{{ \Carbon\Carbon::parse($project?->delivery_date)->format('M, Y') }}</span>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="icon-btn"><i class="fa-solid fa-location-dot"></i></div>
                                    <div class="media-body"><p class="contact-feature_label">Country:</p>
                                        <a class="contact-feature_link">{{ $project?->client?->country?->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="widget widget_download"><h4 class="widget_title">Download Brochure</h4>--}}
                        {{--                            <div class="download-widget-wrap"><a href="service-details.html" class="th-btn"><i--}}
                        {{--                                        class="fa-light fa-file-pdf me-2"></i>DOWNLOAD PDF</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="widget widget_banner" data-bg-src="{{ asset('assets/media/widget_banner-1.jpg') }}">
                            <div class="widget-banner"><span class="text">CONTACT US NOW</span>
                                <h2 class="title">You Need Help?</h2><a href="{{ route('contact-us.create') }}"
                                                                        class="th-btn style3">GET A
                                    QUOTE<i class="fas fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
