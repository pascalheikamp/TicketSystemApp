<div
    class=" mx-auto pl-2 pr-4  text-center border-solid border-2 shadow-xl w-full max-w-md h-auto bg-white">
    <h1 class=" text-2xl font-medium leading-tight pt-5 mb-5">{{$ticket->title}}</h1>
    <div class="flex justify-around">
        <h2 class="text-xl">Category:</h2>
        <h2 class="text-xl">Description:</h2>
    </div>
    <div class="flex justify-around">
        <h2>{{$ticket->category_id}}</h2>
        <h2>{{$ticket->description}}</h2>
    </div>
    <div class="flex justify-around mt-5">
        <h2 class="text-xl">Created at:</h2>
        <h2 class="text-xl">Updated at</h2>
    </div>
    <div class="flex justify-around">
        <h2>{{$ticket->created_at}}</h2>
        <h2>{{$ticket->updated_at}}</h2>
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
            <a href="{{route('dashboard.index')}}">Delete</a>
        </button>
    </div>
</div>

