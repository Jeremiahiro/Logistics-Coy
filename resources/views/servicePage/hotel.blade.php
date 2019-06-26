@extends('layouts.app')

@section('content')
<div class="bg-fixed bg-cover bg-gray-900">
    @include('partials.header')
    <div class="pt-20">
        @include('homePage.hero')
    </div>
</div>
<div class="shadow-lg rounded-lg max-w-6xl mx-auto -mt-24 bg-gray-400 rounded-t overflow-hidden container relative">
    <div class="">
        <ul class="flex font-extrabold text-xl text-gray-900 tracking-widest bg-gray-300">
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="flight">Flight</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline bg-gray-400" href="hotel">Hotel</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="visa">Visa</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="study">Study</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="delivery">Delivery</a>
            </li>
        </ul>

        <div class="w-full text-xl md:text-2xl leading-normal">
            @include('forms.hotel')
        </div>
    </div>
</div>
@include('servicePage.advert.hotels-ad')
@include('servicePage.advert.destination')

@include('homePage.callback')

@include('partials.footer')

@endsection
