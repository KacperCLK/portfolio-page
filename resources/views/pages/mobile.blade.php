{{-- This is a file with all content, use in mobile (width<900px) devices --}}
@extends('layouts.main-mobile')

@section('title', 'Kacper Celak - Portfolio')

@section('content')
    @include('layouts.header')
    <div class="mobile-layout__section mobile-layout__section--1">
        <x-homeComponent/>
    </div>
    <div class="mobile-layout__section mobile-layout__section--2">
        <x-skillsComponent :sections="$sections" :skills="$skills"/>
    </div>
    <div class="mobile-layout__section mobile-layout__section--1">
        <x-worksComponent :sections="$sections" :works="$works"/>
    </div>
    <div class="mobile-layout__section mobile-layout__section--last">
        <x-contactComponent/>
    </div>

@endsection
