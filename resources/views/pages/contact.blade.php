@extends('layouts.main')
@section('title','Contact Us')
@section('content')

    <div id="banner-area">
        <img src="{{ asset('assets2/images/banner/banner2.jpg') }}" alt=""/>
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>Contact Us</h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container">
        <div class="container">

            <div class="row">
                <!-- Map start here -->
                <div id="map-wrapper" class="no-padding">
                    <div class="map" id="map"></div>
                </div><!--/ Map end here -->

            </div><!-- Content row  end -->

            <div class="gap-40"></div>

            <div class="row">
                <div class="col-md-7">
                    <form id="contact-form" action="{{ route('contact-us.store') }}" method="POST" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" id="name" placeholder="Name" type="text"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" id="email"
                                           placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control" name="subject" id="subject"
                                           placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input class="form-control" name="company_name" id="company_name"
                                           placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company Field</label>
                                    <input class="form-control" name="company_field" id="company_field"
                                           placeholder="Company Field" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input class="form-control" name="country" id="country"
                                           placeholder="Country" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="message" id="message" placeholder="" rows="10"
                                      required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="contact-info">
                        <h3>Contact Details</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna.
                            Pellentesque justo ante</p>
                        <br>
                        <p><i class="fa fa-home info"></i> Cairo,Egypt & Dubai,UAE</p>
                        <p><i class="fa fa-phone info"></i> +(785) 238-4131 </p>
                        <p><i class="fa fa-envelope-o info"></i> info@bizcraft.com</p>
                        <p><i class="fa fa-globe info"></i> www.bizcraft.com</p>
                    </div>
                </div>
            </div>

        </div><!--/ container end -->

    </section><!--/ Main container end -->

@endsection
