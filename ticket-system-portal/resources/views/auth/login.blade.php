@extends('layouts.layout')

@section('content')
    <body class=" w-auto bg-gradient-to-r from-indigo-600 to-indigo-300">
<div class="container w-auto flex mx-auto justify-center mt-36 h-auto">
    <div class="flex justify-center w-auto pl-0 sm:max-w-md mt-0 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class=" w-full flex justify-between">
                <div class="card-body pr-3 pl-3 w-full">
                    <h5
                        class="border-b-2 border-neutral-100 px-6 py-3 text-xl font-medium leading-tight dark:border-neutral-600 dark:text-black">
                        Login
                    </h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="block font-medium text-sm text-gray-700">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class=" bg-blue-50 block mt-1 w-64 border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="block font-medium text-sm text-gray-700">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="block mt-1 w-64 bg-blue-50 border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button type="submit" class="ml-3 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Log in') }}
                                </button>
                                    <div><img class=" border-2 border-solid border-black w-32" src="{{Vite::asset('resources/images/login-image.png')}}"/> </div>
                            </div>
                        </div>
                    </form>
                </div>
            <img class="mx-auto rounded-full border-blue-600 border-2  mt-32 justify-center h-40 w-40" src="{{Vite::asset('resources/images/group-people.jpg')}}"/>
            </div>
        </div>

    </div>
</div>
    </body>
@endsection
