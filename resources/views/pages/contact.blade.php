@extends('layouts.main')

@section('title', 'Kacper Celak - Contact')

@section('content')
<div class="contact-page">
    <div class="contact-page__info">
        <span class="contact-page__title">Contact </span>
        <div class="contact-page__description">
            <span>Need to get in touch? </span>
            <span>Either fill out the form with your inquiry:</span>
            <span>
                Or contact me via email at
                <span class="thickness-600">example@gmail.com,</span>
                on
                <a href="" class="link link--1 link--underline thickness-600">LinkedIn,</a>
                or on
                <a href="" class="link link--1 link--underline thickness-600">GitHub.</a>
            </span>
        </div>
    </div>
    @livewire('contact-form') 
</div>
@endsection