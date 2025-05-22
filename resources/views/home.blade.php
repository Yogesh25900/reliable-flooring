@extends('layouts.app')

@section('title', 'Homogeneous & Heterogeneous Flooring in Kathmandu | Reliable Flooring')
@section('meta_description', 'Reliable Flooring specializes in homogeneous and heterogeneous vinyl flooring solutions in Kathmandu. Ideal for hospitals, schools, and commercial spaces.')
@section('og_title', 'Reliable Flooring and Fixing | Kathmandu Flooring Services')
@section('og_description', 'We provide vinyl, wooden, and tile flooring solutions across Kathmandu. Contact us for expert consultation and installation.')
@section('og_image', asset('images/homebg.png'))

@section('content')

<header class="image-wrapper" id="home">
    <img src="{{ asset('images/homebg.png') }}" alt="Homogeneous flooring installed in a hospital room in Kathmandu" loading="lazy">
    <div class="text-overlay">
        <h1 class="header-title">Nepal’s Trusted Provider of Durable Vinyl Flooring</h1>
        <p class="header-desc">
            From consultation to installation, we offer full-service 
            <strong>homogeneous</strong> and 
            <strong>heterogeneous vinyl flooring</strong> 
            for healthcare, education, and commercial spaces.
        </p>
    </div>
</header>

<main>
  @include('partials.about')
  @include('partials.products', ['products' => $products])
  @include('partials.gallery')
</main>

@endsection
