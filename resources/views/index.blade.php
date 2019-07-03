@extends('layouts.app')

@section('content')
<div class="bg-fixed bg-cover bg-gray-900">
    @include('partials.header')
    @include('alerts.message')
    <div class="pt-20">
        @include('homePage.hero')
    </div>
</div>

@include('servicePage.services')
@include('servicePage.advert.destination')
@include('servicePage.advert.hotels-ad')

@include('homePage.callback')

@include('partials.footer')

@endsection
