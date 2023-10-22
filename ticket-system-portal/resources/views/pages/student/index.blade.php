@extends('layouts.layout')
@section('content')
    @include('partials.header.header-partial')
    <div class="dashboard-section">
        <div class="p-1 text-xl text-center text-black border-1 border-black h-10 bg-gray-200"><h1>Student</h1></div>
        <div class=" p-10 pl-80 h-auto justify-center grid lg:grid-cols-20 gap-32 bg-gray-100">
            <div class="col-span-3"></div>
            <div class="content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                    class=" text-2xl font-medium leading-tight pt-5 mb-5">Profile</h1>
                <p class="pb-2">Welkom Pascal</p>
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
                    Go to create page
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
            <div
                class=" mx-auto pl-2 pr-4  text-center border-solid border-2 shadow-xl w-full max-w-md h-auto bg-white">
                <h1 class=" text-2xl font-medium leading-tight pt-5 mb-5">Ticket title</h1>
                <div class="flex justify-around">
                    <h2 class="text-xl">Category:</h2>
                    <h2 class="text-xl">Description:</h2>
                </div>
                <div class="flex justify-around">
                    <h2>Created at</h2>
                    <h2>Created at</h2>
                </div>
                <div class="flex justify-around mt-5">
                    <h2 class="text-xl">Created at:</h2>
                    <h2 class="text-xl">Updated at</h2>
                </div>
                <div class="flex justify-around">
                    <h2>Created at</h2>
                    <h2>Created at</h2>
                </div>
                <div class="mt-5 pb-5 content-between">
                    <button
                        class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-md">
                        <img class="h-5 w-5" src="{{Vite::asset('resources/images/edit.png')}}"/>
                        Edit
                    </button>
                    <button
                        class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete
                    </button>
                </div>
            </div>
        </div>
@endsection


