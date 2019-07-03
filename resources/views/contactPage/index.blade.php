@extends('layouts.app')

@section('content')
<div class="contact bg-fixed">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full my-16 pb-20 lg:pb-8">
            <div class="container max-w-4xl mx-auto mt-8 md:pt-16 text-center break-normal">
                <p class="text-white font-extrabold text-2xl md:text-5xl">
                    CONTACT US
                </p>
                <p class="text-xl text-gray-500 italic">Get In Touch With Us</p>
                <div class="h-1 bg-yellow-600 w-24 opacity-75 my-0 py-0 rounded-t mx-auto"></div>
            </div>
        </div>
        @include('svg.wave_bottom')
    </div>
</div>


<div class="container p-4 md:px-0 max-w-6xl mx-auto -mt-32 mb-10 rounded-lg bg-black-300 w-full bg-gray-900 relative">

    <nav class="mt-0 w-full">
        <div class="container mx-auto flex items-center">

            <div class="flex flex-1 justify-end content-center">
                <div class="flex w-1/2 justify-end content-center">
                    <a href="/facebook.com/sevelstarlog" class="mr-4">
                        <img src="images/icon/facebook.svg" alt="" class="h-8 inline-block footer_icon">
                    </a>
                    <a href="/instagram.com/sevenstarlog" class="mr-4">
                        <img src="images/icon/twitter.svg" alt="" class="h-8 inline-block footer_icon">
                    </a>
                    <a href="/twitter.com/sevenstarlog" class="mr-12">
                        <img src="images/icon/instagram.svg" alt="" class="h-8 inline-block footer_icon">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="max-w-5xl mx-auto text-center">
        @include('forms.contact')
    </div>


</div>

@include('contactPage.ourBranch')

@include('partials.footer')

@endsection
