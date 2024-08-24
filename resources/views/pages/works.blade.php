@extends('layouts.main')

@section('title', 'Kacper Celak - Works Page')

@section('content')
    <div class="works">
        <h1 class="main-title thickness-400">
            My <span class="font-colot-main-blue ">Works</span>
        </h1>

        <div class="works__filters-container thickness-400">
            @foreach ($sections as $section)
                <button data-section="{{ $section }}" class="button button--filter-button">{{ $section }}</button>
            @endforeach
        
            <button data-section="all" class="button button--filter-button">All</button>
        </div>
        
        <div class="works__works-container">
            @foreach ($works as $work)
                <div class="works__work" data-section="{{ $work->section }}">
                    <img class="works__work-image" src="{{ asset('storage/photos/' . $work->work_screen_url) }}" alt="{{ $work->name }}_photo">
                    <div class="works__work-title thickness-600">{{ $work->name }}</div>
                    <a href="{{ $work->work_url }}" class="works__show-details button button--main-button thickness-400">Details</a>
                </div>
            @endforeach
        </div>
        
    </div>  
@endsection