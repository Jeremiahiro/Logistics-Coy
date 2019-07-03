@extends('layouts.app')

@section('content')
<div class="bg-gray-900">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full my-16 pb-20 lg:pb-8">
            <div class="container max-w-4xl mx-auto text-center break-normal">
                <p class="text-white font-extrabold text-2xl lg:text-4xl">
                    ABOUT US
                </p>
                <p class="text-xl text-gray-500 italic">Logistics at Its Best</p>
                <div class="h-1 bg-yellow-600 w-24 opacity-75 my-0 py-0 rounded-t mx-auto"></div>
            </div>
        </div>
        @include('svg.wave_bottom')
    </div>
</div>
@include('aboutPage.container_top')

@include('aboutPage.our_services')
@include('aboutPage.whyus')
@include('aboutPage.faq')


@include('partials.footer')

@endsection
