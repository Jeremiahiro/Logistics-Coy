@extends('layouts.app')

@section('content')
<div class="reg bg-fixed bg-center bg-cover">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full mx-auto max-w-6xl lg:flex py-16 mt-8">

            <div class="w-full lg:w-1/2 my-auto px-10">
                <div class="container mx-auto text-center">
                    <p class="text-white font-extrabold text-2xl lg:text-4xl tracking-wide">
                        CREATE A SEVENSTAR ACCOUNT
                    </p>
                    <p class="text-xl text-gray-500 italic">Save yourself time. You dont need to re-enter your details
                        each
                        time you make a booking.
                        <br>
                        Create your account in 60 seconds.</p>
                    <div class="h-1 bg-yellow-600 w-24 opacity-75 my-0 py-0 rounded-t mx-auto"></div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                    <div class="mx-auto ad_container rounded">
                        <div class="py-4 px-8 border-b border-gray-300 flex justify-between">
                            <span class="uppercase text-2xl">{{ __('register') }}</span>
                            <p class="text-gray-500 my-auto">
                                Have an Account? <a href="/login" class="text-yellow-600 hover:underline">Login
                                    here</a>
                            </p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="py-4 px-8">
                                <div class="flex mb-4">
                                    <div class="w-1/2 mr-1">
                                        <label class="block text-gray-300 text-sm font-bold mb-2 mx-2"
                                            for="first_name">{{ __('First Name') }}</label>
                                        <input
                                            class="appearance-none border rounded w-full py-2 px-3 text-lg text-gray-800 @error('first_name') is-invalid @enderror"
                                            name="first_name" value="{{ old('first_name') }}" id="first_name"
                                            type="text" placeholder="Your first name">

                                        @error('first_name')
                                        <span class="text-red-600 text-xs mx-3 italic" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 ml-1">
                                        <label class="block text-gray-300 text-sm font-bold mb-2 mx-2"
                                            for="first_name">{{ __('Last Name') }}</label>
                                        <input
                                            class="appearance-none border rounded w-full py-2 px-3 text-lg text-gray-800 @error('last_name') is-invalid @enderror"
                                            name="last_name" value="{{ old('last_name')}}" id="first_name" type="text"
                                            placeholder="Your last name">

                                        @error('last_name')
                                        <span class="text-red-600 text-xs mx-3 italic" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-300 text-sm font-bold mb-2 mx-2"
                                        for="email">{{ __('E-Mail Address') }}</label>
                                    <input
                                        class="appearance-none border rounded w-full py-2 px-3 text-lg text-gray-800 @error('email') is-invalid @enderror"
                                        id="email" type="email" name="email" value="{{ old('email') }}"
                                        placeholder="Your email address">
                                    @error('email')
                                    <span class="text-red-600 text-xs mx-3 italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="flex mb-4">
                                    <div class="w-1/2 mr-1">
                                        <label class="block text-gray-300 text-sm font-bold mb-2 mx-2"
                                            for="password">{{ __('Password') }}</label>
                                        <input
                                            class="appearance-none border rounded w-full py-2 px-3 text-lg text-gray-800 @error('password') is-invalid @enderror"
                                            name="password" id="password" type="password" placeholder="***********">
                                        @error('password')
                                        <span class="text-red-500 text-xs mx-3 italic" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 ml-1">
                                        <label class="block text-gray-300 text-sm font-bold mb-2 mx-2"
                                            for="password_confirm">{{ __('Confirm Password') }}</label>
                                        <input class="appearance-none border rounded w-full py-2 px-3 text-lg text-gray-800"
                                            name="password_confirmation" id="password_confirmation" type="password"
                                            placeholder="*********">
                                    </div>
                                </div>

                                <div class="mb-4 terms">
                                    <input type="checkbox" name="accept_terms" id="permitted" class="hidden">
                                    <label for="permitted" class="flex cursor-pointer text-gray-500">
                                        <span class="w-4 h-4 mr-4 border border-gray-700 flex-no-shrink my-auto"></span>
                                        I agree to the Sevenstar Logistics <a href="/terms"
                                            class="hover:underline ml-2"> Terms
                                            and
                                            Conditions</a>
                                    </label>

                                    <div class="blocked my-6 text-gray-500 text-center">(Accept <a href="/terms"
                                            class="text-yellow-600 hover:underline">Terms and Conditions</a> to
                                        Continue)</div>
                                    <button
                                        class="hidden appearance-none my-6 mx-auto px-5 py-2 text-white bg-yellow-600 font-bold cursor-pointer rounded-full text-lg focus:outline-none"
                                        type="submit">
                                        {{ __('Sign Up') }}
                                    </button>
                                </div>


                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
