@extends('layouts.app')

@section('content')
<div class="bg-fixed bg-cover bg-gray-900">
    @include('partials.header')
    @include('alerts.message')
    <div class="pt-20">
        <div class="mx-auto flex flex-wrap max-w-6xl mt-10 pb-20">
            <div class="w-full md:w-2/5 lg:my-auto mb-6">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-40 mx-auto rounded-full border-3" src="{{ Auth::user()->avater }}"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 pb-2 border-b border-orange-50">

                            <span class="px-4">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</span>
                        </div>
                        <div class="font-bold text-xl mb-2 pb-2 border-b border-orange-50">
                            <p class="text-gray-500 text-base">Email Address:</p>
                            <span class="px-4">{{ Auth::user()->email}}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-3/5 mb-6 bg-gray-500 px-5">
                <div class="rounded overflow-hiddenp-5">
                    <div class="text-2xl">Dashboard</div>
                    <p class="my-4">You are logged in!</p>
                </div>
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
