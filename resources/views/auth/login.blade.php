@extends('layouts.app')

@section('content')
<div class="reg bg-fixed bg-center bg-cover">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full mx-auto max-w-6xl lg:flex py-16 mt-8">

            <div class="w-full lg:w-1/2 my-auto px-10">
                <div class="container mx-auto text-center">
                    <p class="text-white font-extrabold text-2xl lg:text-4xl tracking-wide">
                        WELCOME BACK
                    </p>
                    <p class="text-xl text-gray-500 italic">Login to Continue where you left off.</p>
                    <div class="h-1 bg-yellow-600 w-24 opacity-75 my-0 py-0 rounded-t mx-auto"></div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 shadow-lg my-5">
                <div class="mx-auto ad_container rounded">
                    <div class="py-4 px-8 border-b border-gray-300 lg:flex flex-wrap justify-between">
                        <span class="uppercase text-2xl">{{ __('login') }}</span>
                        <p class="text-gray-500 my-auto">
                            Need an Account? <a href="/register" class="text-yellow-600 hover:underline">Register
                                here</a>
                        </p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="py-4 px-8">

                            <div class="mb-4">
                                <label class="block text-gray-300 text-sm font-bold mb-2 mx-2"
                                    for="email">{{ __('E-Mail Address') }}</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-lg text-gray-800 @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" id="email" type="email">

                                @error('email')
                                <span class="text-red-600 text-sm mx-3 italic" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-300 text-sm font-bold mb-2 mx-2"
                                    for="password">{{ __('Password') }}</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-lg text-gray-800 @error('password') is-invalid @enderror"
                                    name="password" id="password" type="password">
                                @error('password')
                                <span class="text-red-600 text-sm mx-3 italic" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="mb-4 terms">
                                <input type="checkbox" name="remember" id="remember" class="hidden">
                                <label for="remember" class="flex cursor-pointer text-gray-500">
                                    <span class="w-4 h-4 mr-4 border border-gray-700 flex-no-shrink my-auto"
                                        {{ old('remember') ? 'checked' : '' }}></span>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="flex justify-between mx-10">
                                <button
                                    class="appearance-none my-6 px-5 py-2 text-white bg-yellow-600 font-bold cursor-pointer rounded-full text-lg focus:outline-none"
                                    type="submit">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="my-auto hover:underline text-gray-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
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
