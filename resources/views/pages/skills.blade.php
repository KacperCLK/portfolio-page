@extends('layouts.main')

@section('title', 'Kacper Celak - Skills Page')

@section('content')
    <x-skillsComponent :sections="$sections" :skills="$skills"/>
@endsection