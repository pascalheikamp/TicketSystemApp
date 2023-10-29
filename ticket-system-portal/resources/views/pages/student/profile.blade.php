@extends('layouts.layout')
@section('content')
    <body class="bg-gradient-to-r from-indigo-100 via-indigo-300 to-indigo-400"></body>
    <div class="dashboard-section ">
        <div class=" mt-12 p-10 pl-80 h-auto justify-center grid lg:grid-cols-1 gap-8 ">
            <h1 class="text-center text-2xl">Profile</h1>
            <div class=" pb-5 pl-10 pt-2 rounded flex flex-col bg-indigo-50">
                <div class="flex content-between">
                    <div>
                        <h2 class="mx-auto text-xl">Personal information:</h2>
                        <ul>
                            <li>Firstname: {{Auth::user()->firstname}}</li>
                            <li>Lastname: {{Auth::user()->lastname}}</li>
                            <li>Username:{{Auth::user()->name}}</li>
                            <li>Email:{{Auth::user()->email}}</li>
                            <li>Date of birth:{{Auth::user()->date_of_birth}}</li>
                            <li>Address:{{Auth::user()->address}}</li>
                            <li>
                                <button
                                    class=" mt-5 inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-md">
                                    <a href="{{route('edit.profile', Auth::user()->id)}}">Edit</a>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-20">
                        <h2 class=" mx-auto text-xl">School information:</h2>
                        <ul>
                            <li>Student number:{{Auth::user()->student_number}}</li>
                            <li>Class:{{Auth::user()->klas}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
