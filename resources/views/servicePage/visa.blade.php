@extends('layouts.app')

@section('content')
<div class="bg-fixed bg-cover bg-gray-900">
    @include('partials.header')
    <div class="pt-20">
        @include('homePage.hero')
    </div>
</div>
<div class="shadow-lg rounded-lg max-w-6xl mx-auto -mt-24 bg-gray-400 rounded-t overflow-hidden container relative">
        <ul class="flex font-extrabold text-xl text-gray-900 tracking-widest bg-gray-300">
            <li class="flex-1" id="flight_booking">
                <a class="text-center block p-4 hover:underline">Flight</a>
            </li>
            <li class="flex-1" id="hotel_reservation">
                <a class="text-center block p-4 hover:underline">Hotel</a>
            </li>
            <li class="flex-1 bg-gray-400" id="visa_application">
                <a class="text-center block p-4 hover:underline">Visa</a>
            </li>
            <li class="flex-1" id="study_abroad">
                <a class="text-center block p-4 hover:underline">Study</a>
            </li>
            <li class="flex-1" id="delivery_services">
                <a class="text-center block p-4 hover:underline">Delivery</a>
            </li>
        </ul>

        <div class="w-full text-xl md:text-2xl leading-normal hidden" id="flight">
            @include('forms.flight')
        </div>

        <div class="w-full text-xl md:text-2xl leading-normal hidden" id="hotel">
            @include('forms.hotel')
        </div>

        <div class="w-full text-xl md:text-2xl leading-normal" id="visa">
            @include('forms.visa')
        </div>

        <div class="w-full text-xl md:text-2xl leading-normal hidden" id="study">
            <img src="images/background/coming_soon.jpg" class="w-full h-full" alt="">
        </div>

        <div class="w-full text-xl md:text-2xl leading-normal hidden" id="delivery">
            @include('forms.delivery')
        </div>
</div>

@include('servicePage.advert.destination')
@include('servicePage.advert.hotels-ad')

@include('homePage.callback')

@include('partials.footer')

@endsection
