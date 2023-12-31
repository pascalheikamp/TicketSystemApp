@extends('layouts.layout')
{{--@section('toggle-script')--}}
{{--    <script>--}}

{{--    </script>--}}

{{--@endsection--}}
@section('content')
    <div class="dashboard-section">
        <div class=" mt-16 p-10 pl-80 h-auto justify-center grid lg:grid-cols-2 gap-8 bg-gray-100">
            <div class="col-span-2"></div>
            <div class="content-center text-center border-solid border-2 w-72 shadow-xl h-auto bg-white"><h1
                    class=" text-2xl font-medium leading-tight pt-5 mb-5">Admin</h1>
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
            <div
                class=" pl-2 pr-4  text-center border-solid border-2 shadow-xl w-full max-w-md h-auto bg-white">
                <h1 class=" text-2xl font-medium leading-tight pt-5 mb-5">Ticket status</h1>
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
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">
                        <a href="{{route('ticket.overview')}}">Ticket board</a>
                    </button>
            </div>
            <div class="pl-2 pr-4   text-center border-solid border-2 shadow-xl w-full max-w-md h-auto bg-white">
                <h1 class=" text-2xl font-medium leading-tight pt-5 mb-5">Ticket overview</h1>
                <div class="p-10">
                    <div class="text-left">
                    <label>Select category</label>
                    </div>
                            <select name="category" id="category_id" class="category flex flex-start">
                            @foreach($categories as $category)
                             <option value="{{$category->id}}" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">{{$category->title}}</option>
                            @endforeach
                            </select>
                </div>
                <table class="w-auto ">
                    <thead class="text-xs border-b-4 border-blue-700 text-black uppercase  dark:text-black">
                    <tr>
                        <th scope="col">Ticket id</th>
                        <th>title</th>
                        <th>category</th>
                        <th>priority</th>
                        <th>created by</th>
                        <th>Active</th>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                    @foreach($tickets as $ticket)
                        <tr class="bg-white ">
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->title}}</td>
                            <td>{{$ticket->category->title}}</td>
                            <td>{{$ticket->priority}}</td>
                            <td>{{$ticket->user->name}}</td>

                            <td class="px-6 py-4 text-right">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" data-id="{{$ticket->id}}" class="sr-only peer toggle" {{$ticket->status == true ? 'checked' : ''}}>
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div></div>
            <div>
                <table id="#dateable" class=" w-auto table-fixed">
                    <div class="pb-5">
                        <label>Search:</label>
                    <input class="border-2 rounded border-black filter-input" data-column="0" type="text">
                    </div>
                    <thead class="text-xs text-gray-700 uppercase bg-blue-600 dark:bg-blue-700 dark:text-white">
                    <tr>
                        <th scope="col">Firstname</th>
                        <th>Lastname</th>
                        <th>Date of birth</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Student number</th>
                        <th>Klas</th>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection


