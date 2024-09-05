{{-- This is a file with all content, use in mobile (width<900px) devices --}}
@extends('layouts.main-mobile')

@section('title', 'Kacper Celak - Portfolio')

@section('content')
    <x-homeComponent/>
    <x-skillsComponent :sections="$sections" :skills="$skills"/>
    <x-worksComponent :sections="$sections" :works="$works"/>
    <x-contactComponent/>
@endsection
