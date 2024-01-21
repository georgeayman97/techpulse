<!-- Navbar Start -->
<div class="container-fluid bg-primary">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="index.html" class="navbar-brand">
                <img class="d-block" src="{{ asset('assets/img/logo.png') }}" alt="" width="240px">
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link @if(request()->path() == '/') active text-secondary @endif">Home</a>
                    <a href="{{ route('about-us') }}" class="nav-item nav-link @if(request()->path() == 'about-us') active @endif ">About</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('projects') }}" class="nav-item nav-link">Projects</a>
{{--                    <div class="nav-item dropdown">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>--}}
{{--                        <div class="dropdown-menu rounded">--}}
{{--                            <a href="blog.html" class="dropdown-item">Our Blog</a>--}}
{{--                            <a href="team.html" class="dropdown-item">Our Team</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <a href="{{ route('contact-us.create') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-white-50">Have any questions?</span>
                    <span class="text-secondary">Call: + 0123 456 7890</span>
                </div>
                <div class="d-flex align-items-center justify-content-center ms-4 ">
                    <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
