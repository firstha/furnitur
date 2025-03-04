@extends('layouts.layout')
@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section product-section before-footer-section">
<div class="container">
      <div class="row">

          <!-- Start Column 1 -->
        @foreach ($products as $product)
        <div class="col-12 col-md-4 col-lg-3 mb-5">
            <a class="product-item" href="#">
                <img src="{{ Storage::url($product->photo) }}" class="img-fluid product-thumbnail">
                <h3 class="product-title">{{ $product->product_name }}</h3>
                <strong class="product-price">Rp. {{ number_format($product->price) }}</strong>
                <p class="text-muted">{{ $product->category->name ?? 'Tidak ada kategori' }}</p>
                <span class="icon-cross">
                    <img src="{{ asset('furni/images/cross.svg') }}" class="img-fluid">
                </span>
            </a>
        </div> 
        @endforeach
        <!-- End Column 1 -->

      </div>
</div>
</div>
@endsection