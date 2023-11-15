@extends('layouts.layout')
@section('content')

    <div class="container w-auto flex mx-auto justify-center mt-36 h-auto">
        <div
            class="flex pb-10 justify-center w-auto pl-0 sm:max-w-md mt-0 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class=" w-full flex flex-col">
                <div class="card-body w-96 h-80 pl-0 ">
                    <h1 class=" mt-2 text-center text-7xl error-message">403</h1>
                    <h2 class="text-center text-2xl">Forbidden</h2>
                    <img class=" w-24 h-24 mt-5 mx-auto" src="{{Vite::asset('resources/images/forbidden.png')}}"/>
                    <div class="mt-5 ml-3 underline border-2 w-full border-gray-900"></div>
                    <div class="text-center pt-3 error-description"><p>Access to this resource on the server is
                            denied.</p>
                        <button
                            class="mt-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                            <a href="{{route('student.edit')}}">Go back</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
@endsection
