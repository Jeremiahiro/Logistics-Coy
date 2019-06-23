@extends('layouts.app')

@section('content')
<div class="study bg-cover">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full my-24 pb-20 lg:pb-8">
            <div class="container max-w-4xl mx-auto text-center break-normal">
                <p class="text-white font-extrabold text-2xl lg:text-4xl">
                    DELIVERY SERVICES
                </p>
                <p class="text-xl text-gray-500 italic">Secure & Reliable</p>
                <div class="h-1 bg-yellow-600 w-24 opacity-75 my-0 py-0 rounded-t mx-auto"></div>
            </div>
        </div>
        @include('svg.wave_bottom')
    </div>
</div>

<div class="rounded max-w-6xl mx-auto -mt-40 mb-20 bg-gray-400 rounded-t overflow-hidden relative">

    <div class="">
        <ul class="flex font-extrabold text-xl text-yellow-600 tracking-widest bg-gray-300">
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="flight_booking">Flight</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="hotel_reservation">Hotel</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="visa_application">Visa</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline" href="study_abroad">Study</a>
            </li>
            <li class="flex-1">
                <a class="text-center block p-4 hover:underline bg-gray-400" href="delivery_service">Delivery</a>
            </li>
        </ul>

        <div class="w-full text-xl md:text-2xl leading-normal">
            <!--Lead Card-->
            <div class="h-full service_cont_sub overflow-hidden">
                <div class="w-full ">
                        <img src="images/background/coming_soon.jpg" class="w-full h-full" alt="">                   
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
