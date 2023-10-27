@extends('layouts.layout')
@section('content')
    <div class="container w-auto flex mx-auto justify-center mt-36 h-auto">
        <button class="test mx-auto btn btn-success">Click Me</button>
        </div>
    @if (session('message'))
        <div class="container w-auto flex mx-auto justify-center mt-36 h-auto">
            <div
                class="flex justify-center w-auto pl-0 sm:max-w-md mt-0 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class=" w-full flex flex-col">
                    <div class="card-body pr-3 pl-3 w-full">
                        <div class="text-center"><h3 class="font-bold text-2xl">Alert</h3></div>
                        <img class=" mx-auto w-20" src="{{Vite::asset('/resources/images/unauthorized.png')}}"/>
                        <div class="alert">{{ session('message') }}</div>
                    </div>
                </div>
            </div>
    @endif
@endsection
