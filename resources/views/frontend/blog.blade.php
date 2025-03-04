@extends('layouts.layout')
@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Blog</h1>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="{{ asset('furni/images/couch.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<!-- Start Blog Section -->
<div class="blog-section">
<div class="container">
    
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{ Storage::url($blog->photo) }}" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="#">{{ $blog->title }}</a></h3>
                    <p>{{ $blog->description }}.</p>
                    <div class="meta">
                        <span>by <a href="#">{{ $blog->author }}</a></span> <span>on <a href="#"><script>document.write(new Date().getFullYear());</script></a></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
</div>
<!-- End Blog Section -->	

@endsection