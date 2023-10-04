@extends('layouts.layout')
@section('content')
    <div class="p-1 text-xl text-center text-black border-1 border-black h-10 bg-gray-200"><h1>Dashboard</h1></div>
    <div class=" p-10 pl-80 h-auto justify-center grid lg:grid-cols-2 gap-8 bg-gray-100">
        <div class="col-span-3"></div>
        <div class="content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h5 class="font-bold">Admin</h5>
            <p>Welkom Pascal</p>
            <img class="m-2 rounded-full mx-auto content-center h-20 w-24" src="{{Vite::asset('resources/images/profile_picture.png')}}"/>
            <div class="flex-col">
                <p>Last time logged in:</p>
                <p>4:10:2023:12:44pm</p>
            </div>
            <div class="content-between">
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                    Edit profile
                </button>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                    View profile
                </button>
            </div>
        </div>
        <div class="  text-center border-solid border-2 w-64 shadow-xl h-60 bg-white"><h5>Ticket status</h5></div>
        <div class="text-center border-solid border-2 shadow-xl max-w-md h-auto bg-white"><h5>Overzicht gebruikers</h5>
            <table class="table-fixed w-auto">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Date of birth</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Student number</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td>Malcolm Lockyer</td>
                    <td>1961</td>
                </tr>
                <tr>
                    <td>Witchy Woman</td>
                    <td>The Eagles</td>
                    <td>1972</td>
                </tr>
                <tr>
                    <td>Shining Star</td>
                    <td>Earth, Wind, and Fire</td>
                    <td>1975</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center w-64 border-solid border-2 shadow-xl h-40 bg-white"><h5>Unsolved tickets</h5></div>
        <div class="text-center w-64 border-solid border-2 shadow-xl h-40 bg-white"><h5>Create blog</h5></div>
    </div>
@endsection
