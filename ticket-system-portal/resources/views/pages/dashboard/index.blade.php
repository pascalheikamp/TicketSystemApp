@extends('layouts.layout')
@section('content')
    <div class="p-1 text-xl text-center col-span-1 text-white h-10 bg-slate-900"><h1>Dashboard</h1></div>
    <div class=" p-10 h-auto justify-center grid lg:grid-cols-4 gap-6 bg-gray-100">
        <div class="col-span-4"></div>
        <div class=" right-20 text-center border-solid border-2 w-64 shadow-xl h-60 bg-white"><h5>Gebruikers</h5></div>
        <div class="text-center border-solid border-2 shadow-xl h-60 bg-white"><h5>Overzicht gebruikers</h5></div>
        <div class="text-center w-64 border-solid border-2 shadow-xl h-40 bg-white"><h5>unsolved tickets.</h5></div>
    </div>
@endsection
