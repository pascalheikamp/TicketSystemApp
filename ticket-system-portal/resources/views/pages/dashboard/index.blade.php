@extends('layouts.layout')
@section('content')
    <div class="p-1 text-xl text-center text-black border-1 border-black h-10 bg-gray-200"><h1>Dashboard</h1></div>
    <div class=" p-10 pl-80 h-auto justify-center grid lg:grid-cols-1 gap-16 bg-gray-100">
        <div class="col-span-2"></div>
        <div class="content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1 class=" text-2xl font-medium leading-tight pt-5 mb-5">Admin</h1>
            <p class="pb-2">Welkom Pascal</p>
            <img class="m-2 rounded-full mx-auto content-center h-20 w-24" src="{{Vite::asset('resources/images/profile_picture.png')}}"/>
            <div class="flex-col">
                <p>Last time logged in:</p>
                <p>4:10:2023:12:44pm</p>
            </div>
            <div class="mt-5 pb-5 content-between">
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                    Edit profile
                </button>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                    View profile
                </button>
            </div>
        </div>
        <div class=" mx-auto pl-2 pr-4  text-center border-solid border-2 shadow-xl w-full max-w-md h-auto bg-white"><h1 class=" text-2xl font-medium leading-tight pt-5 mb-5">Ticket status</h1>
            <div class="flex justify-around">
        <div class="rounded-full border-blue-600 w-32 h-32 border-2">
            <h4 class=" text-xl font-medium leading-tight mt-6">Solved</h4>
            <h4 class="text-3xl font-medium leading-tight mt-2">10</h4>
        </div>
                <div class="rounded-full border-blue-600 w-32 h-32 border-2">
                    <h4 class="text-xl font-medium leading-tight mt-6">Unsolved</h4>
                    <h4 class="text-3xl font-medium leading-tight mt-2">20</h4>
                </div>
            </div>
        </div>
        <div class=" pl-2 pr-4  text-center border-solid border-2 shadow-xl w-24 max-w-md h-28 bg-white"><h5>Total users</h5>
            <h2 class="font-bold">{{count($users)}}</h2>
            <img class="w-6 mx-auto mb-2" src="{{Vite::asset('resources/images/users.png')}}">
        </div>
        <div class="ml-9 pl-10 pb-10 pr-10 text-center w-full border-solid border-2 shadow-xl h-auto bg-white"><h1 class=" text-3xl font-medium leading-tight pt-5 mb-5">Overview users</h1>
            <table class=" table-fixed">
                <thead class="text-xs text-gray-700 uppercase bg-blue-600 dark:bg-blue-700 dark:text-white">
                <tr>
                    <th scope="col">Firstname</th>
                    <th>Lastname</th>
                    <th>Date of birth</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Student number</th>
                    <th>Klas</th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Remove</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="bg-white dark:bg-gray-200 hover:bg-gray-100 dark:hover:bg-gray-100">
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->date_of_birth}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->student_number}}</td>
                        <td>{{$user->klas}}</td>
                        <td class="px-6 py-4 text-right">
                            <button class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-md">
                                <img class="h-5 w-5" src="{{Vite::asset('resources/images/edit.png')}}"/>
                                Edit
                            </button>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
