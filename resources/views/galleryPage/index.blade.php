@extends('layouts.app')

@section('content')
<div class="bg-gray-900">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full mt-24 pb-20">
            <div class="container max-w-4xl mx-auto text-center break-normal">
                <p class="text-white font-extrabold text-2xl lg:text-4xl">
                    OUR GALLERY
                </p>
                <p class="text-xl text-gray-500 italic">Some Shots of Our Activity</p>
                <div class="h-1 bg-yellow-600 w-24 opacity-75 my-0 py-0 rounded-t mx-auto"></div>
            </div>
        </div>
        {{--  @include('svg.wave_bottom')  --}}
    </div>
</div>

<div class="mx-auto">

    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_about.jpg" alt="About" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/airport_architecture.jpg" alt="Airport Architecture" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/airport_architecture2.jpg" alt="Arc" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_1.jpg" alt="Background 1" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
    </div>

    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_2.jpg" alt="Background 2" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_news.jpg" alt="News" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/contact.jpg" alt="Delivery" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/flight1.jpg" alt="Flight" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/study1.jpg" alt="Study" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
    </div>

    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_2.jpg" alt="Background 2" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/contact.jpg" alt="Delivery" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_news.jpg" alt="News" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
    </div>

    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/study1.jpg" alt="Study" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_about.jpg" alt="About" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/airport_architecture.jpg" alt="Airport Architecture" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/airport_architecture2.jpg" alt="Arc" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_1.jpg" alt="Background 1" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
    </div>

    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_2.jpg" alt="Background 2" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_news.jpg" alt="News" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/contact.jpg" alt="Delivery" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>

    </div>


    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_2.jpg" alt="Background 2" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/contact.jpg" alt="Delivery" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_news.jpg" alt="News" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
    </div>

    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/study1.jpg" alt="Study" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_about.jpg" alt="About" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/airport_architecture.jpg" alt="Airport Architecture" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/airport_architecture2.jpg" alt="Arc" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_1.jpg" alt="Background 1" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
    </div>

    <div class="lg:flex lg:flex-wrap mx-12 lg:mx-0 lg:my-1">
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_2.jpg" alt="Background 2" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/bg_news.jpg" alt="News" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>
        <div class="flex-1 mr-1 mb-1 lg:mb-0">
            <img src="images/background/contact.jpg" alt="Delivery" onclick="myFunction(this);"
                class="modal-open w-full h-full">
        </div>

    </div>

    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-75 top-0 left-0 cursor-pointer"></div>
        <div class="z-50 max-w-2xl bg-white rounded-lg shadow-2xl">

            <div class="modal-close absolute top-5 right-0 lg:mr-48 cursor-pointerfont-bold">
                <svg class="h-12 w-12 fill-current text-black-200 lg:text-gray-200" role="button"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </div>

            <div class="modal-body border-4 rounded border-yellow-600">
                <img id="expandedImg" class="w-full h-65">

                <div id="imgtext" class="absolute bottom-15 left-15 text-white font-bold -mt-6 ml-2"></div>
            </div>

        </div>
    </div>
</div>

@include('partials.footer')

@endsection
