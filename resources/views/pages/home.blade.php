@extends('layouts.main')

@section('title', 'Kacper Celak - Home Page')

@section('content')
    <x-homeComponent :links="$links"/>
@endsection