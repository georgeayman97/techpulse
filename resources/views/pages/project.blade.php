@extends('layouts.master')
@section('title','Projects')
@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/media/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Projects</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </div>
    @if($categories->count() > 0)
        <section class="space">
            <div class="container">
                <div class="row gy-4">
                    @foreach($categories as $category)
                        @foreach($category->deployedProjects as $project)
                            <div class="col-lg-4 col-md-6">
                                <div class="project-card">
                                    <div class="project-img"><img
                                            src="{{ $project?->getFirstMediaUrl(\App\Enum\MediaCollection::PROJECT_HOME_IMAGE->value) }}"
                                            alt="project image"></div>
                                    <div class="project-content-wrap">
                                        <div class="project-content">
                                            <div class="box-particle" id="project-p1"></div>
                                            <h3 class="box-title"><a
                                                    href="{{ route('projects.show',$project->slug) }}">{{ getColumn($project,'title') }}</a>
                                            </h3>
                                            <p class="project-subtitle">{{ getColumn($category,'name') }}</p><a
                                                href="{{ $project->getFirstMediaUrl(\App\Enum\MediaCollection::PROJECT_HOME_IMAGE->value) }}"
                                                class="icon-btn popup-image"><i class="fal fa-plus"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="shape-mockup" data-top="0%" data-right="0%"><img
                    src="{{ asset('assets/media/tech_shape_1.png') }}" alt="shape"></div>
            <div class="shape-mockup" data-bottom="0%" data-left="0%"><img
                    src="{{ asset('assets/media/tech_shape_2.png') }}" alt="shape"></div>
        </section>
    @endif
@endsection
