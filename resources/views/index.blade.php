@extends('layouts.app')

@section('content')
<div class="home bg-fixed bg-cover">
    @include('partials.header')
    <div class="pt-20">
        @include('homePage.hero')
    </div>
</div>

@include('homePage.about')
@include('homePage.services')
@include('homePage.callback')
@include('homePage.faq')

@include('partials.footer')

@endsection
