@extends('layouts.main')

@section('title', 'Kacper Celak - Works Page')

@section('content')
    <x-worksComponent :sections="$sections" :works="$works"/>
@endsection