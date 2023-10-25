@extends('layouts.layout')
@section('content')
    <script>

    </script>
    <div class="p-1 text-xl mt-32 text-center text-white border-1 border-black h-10 bg-indigo-950"><h1 class="text-2xl">
            Ticket board</h1></div>
    <div class=" p-10 pl-80 bg-gradient-to-r from-blue-900 via-indigo-600 to-blue-800 h-auto justify-center grid lg:grid-cols-20 gap-4 ">
        <div class="col-span-6"></div>
        <div class="content-center pb-7 pr-5 pl-5 text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                class=" text-2xl font-medium leading-tight pt-5 mb-5">To Do</h1>
            @foreach($tickets as $ticket)
                <div class="mt-10  border-black shadow-2xl rounded w-auto bg-indigo-950 text-white">
                    <h2 class="text-xl">{{$ticket->title}}</h2>
                    <div class="  border-2 border-black text-gray-950 bg-indigo-200">
                        <p> Category: {{$ticket->category->title}}</p>
                        <p> priority: {{$ticket->priority}}</p>
                        <p> Description: {{$ticket->description}}</p>
                        <p> Created by: {{$ticket->user->name}}</p>
                        <p> Created at: {{$ticket->created_at}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                class=" text-2xl font-medium leading-tight pt-5 mb-5">In progress</h1>
        </div>
        <div class=" content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                class=" text-2xl font-medium leading-tight pt-5 mb-5">Review</h1>
        </div>
        <div class=" content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                class=" text-2xl font-medium leading-tight pt-5 mb-5">Done</h1>
                </div>
            </div>
@endsection
