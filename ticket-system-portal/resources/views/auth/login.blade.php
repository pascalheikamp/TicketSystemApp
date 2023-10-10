@extends('layouts.layout')

@section('content')
    <body class="bg-gradient-to-r from-indigo-600 to-indigo-300">
<div class="container h-auto">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="col-md-8">
            <div class="card">
                <div
                    class="relative overflow-hidden bg-cover bg-no-repeat"
                    style="
      background-position: 50%;
      background-color: #CCCCFF;
      height: 50px;
    ">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
                        style="background-color: rgba(0, 0, 0, 0.75)">
                        <div class="flex h-full items-center justify-center">
                            <div class="px-6 text-center text-white md:px-12">
                                <h1 class="mb-6 text-5xl font-bold"></h1>
                                <h3 class="mb-8 text-2xl font-bold">{{ __('Register') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="block font-medium text-sm text-gray-700">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div><img class=" border- border-2 border-solid border-black w-32" src="{{Vite::asset('resources/images/login-image.png')}}"/> </div>
    </div>
    <div>hello</div>
</div>
    </body>
@endsection
