@extends('layouts.app')

@section('title', 'Homogeneous & Heterogeneous Flooring in Nepal | Reliable Flooring')
@section('meta_description', 'Reliable Flooring specializes in homogeneous and heterogeneous vinyl flooring solutions in Nepal. Ideal for hospitals, schools, and commercial spaces.')
@section('og_title', 'Reliable Flooring and Fixing | Nepal Flooring Services | Kathmandu Flooring Services')
@section('og_description', 'We provide vinyl, wooden, and tile flooring solutions across Nepal. Contact us for expert consultation and installation.')
@section('og_image', asset('images/homebg.png'))

@section('content')

<header class="home-hero" id="home">
    <div class="home-hero-overlay"></div>



    <div id="home-hero-content">
        <h1>Nepal’s Trusted Provider of Durable Vinyl Flooring</h1>
        <p>
            From consultation to installation, we offer full-service 
            <strong>homogeneous</strong> and 
            <strong>heterogeneous vinyl flooring</strong> 
            for healthcare, education, and commercial spaces.
        </p>
        <a href="#contact" id="home-shop-button">Get Consultation</a>
    </div>

    <img src="{{ asset('images/homebg.png') }}" alt="Homogeneous flooring installed in a hospital room in Kathmandu" loading="lazy" class="home-bg-image">
</header>


<main>
  @include('partials.about')
  @include('partials.products', ['products' => $products])
  @include('partials.gallery')
</main>

@endsection
