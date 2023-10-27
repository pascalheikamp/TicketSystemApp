@extends('layouts.layout')
@section('content')
    <div class="dashboard-section">
        <div class=" mt-14 p-10 pl-80 h-auto justify-center grid lg:grid-cols-20 gap-8 bg-gray-100">
            <div class="col-span-3"></div>
            <div class="content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                    class=" text-2xl font-medium leading-tight pt-5 mb-5">Profile</h1>
                <p class="pb-2">Welkom {{ Auth::user()->firstname }}</p>
                <img class="m-2 rounded-full mx-auto content-center h-20 w-24"
                     src="{{Vite::asset('resources/images/profile_picture.png')}}"/>
                <div class="flex-col">
                    <p>Last time logged in:</p>
                    <p>4:10:2023:12:44pm</p>
                </div>
                <div class="mt-5 pb-5 content-between">
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                        Edit profile
                    </button>
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                        View profile
                    </button>
                </div>
            </div>
            <div class="content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                    class=" text-2xl font-medium leading-tight pt-5 mb-5">Create Ticket</h1>
                <img class="m-12 rounded-full mx-auto content-center w-36"
                     src="{{Vite::asset('resources/images/ticket.png')}}"/>
                <button
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{route('ticket.create')}}"> Go to create page</a>
                </button>
            </div>
            <div class=" content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                    class=" text-2xl font-medium leading-tight pt-5 mb-5">Ticket status</h1>
                <img class="m-2 rounded-full mx-auto content-center w-36"
                     src="{{Vite::asset('resources/images/status.png')}}"/>
                <div class="mt-5 pb-5 content-between">
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                        Edit profile
                    </button>
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                        View profile
                    </button>
                </div>
            </div>
            @foreach($tickets as $ticket)
            @include('partials.Ticket.ticket-card')
            @endforeach
        </div>
@endsection


