@extends('layouts.app')

@section('content')
<div class="bg-fixed bg-cover bg-gray-900">
    @include('partials.header')
    @include('alerts.message')
    <div class="pt-20">
        <div class="mx-auto flex flex-wrap max-w-5xl mt-10 pb-20">
            <div class="w-full md:w-2/4 lg:my-auto mb-6">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-40 mx-auto rounded-full border-3" src="{{ Auth::user()->avater }}"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 pb-2 border-b border-orange-50">{{ Auth::user()->first_name}}
                            {{ Auth::user()->last_name}}</div>
                        <div class="font-bold text-xl mb-2 pb-2 border-b border-orange-50">
                            <p class="text-gray-500 text-base">Email Address:</p>
                            {{ Auth::user()->email}}
                        </div>

                    </div>

                </div>
            </div>
            <div class="w-full md:w-2/4 text-center lg:my-auto mb-4" id="bookings">
                <h1 class="m-0 text-4xl font-black leading-tight uppercase">The Best Logistics Service Providers!</h1>
                <p class="leading-normal text-xl my-4">
                    We are a flexible and dedicated logistics service provider. <br>
                    Designing custom solutions that add value.
                </p>
            </div>

        </div>
        @include('svg.wave_bottom')
    </div>
</div>

@include('servicePage.advert.destination')
@include('servicePage.advert.hotels-ad')

@include('homePage.callback')

@include('partials.footer')

@endsection
