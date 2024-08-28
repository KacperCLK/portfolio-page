@extends('layouts.main')

@section('title', 'Kacper Celak - Home Page')

@section('content')
    <div class="home-page thickness-500">
        <div class="home-page__introduction">
            <span>Hi,</span>
            <span>I'am <span class="font-colot-main-blue thickness-600">Kacper</span></span>
            <span>Constructor Estimator and</span>
            <span>Web Developer</span>

            <div class="home-page__link">
                <a href="{{route('contact')}}" class="link link--button thickness-500">Contact</a>
            </div>
        </div>

        <div class="home-page__photo">
            <img src="{{ asset('storage/photos/portfolio_photo.jpg') }}" alt="portfolio_photo">
        </div>
    </div>
@endsection