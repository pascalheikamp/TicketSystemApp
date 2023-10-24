<div
    class=" mx-auto pl-2 pr-4  text-center border-solid border-2 shadow-xl w-full max-w-md h-auto bg-white">
    <h1 class=" text-2xl font-medium leading-tight pt-5 mb-5">{{$ticket->title}}</h1>
    <div class="flex justify-around">
        <h2 class="text-xl">Category:</h2>
        <h2 class="text-xl">Description:</h2>
    </div>
    <div class="flex justify-around">
        <h2>{{($ticket->category_id)}}</h2>
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
        <form method="post" action="{{route('delete', $ticket->id)}}">
            @csrf
            @method('DELETE')
        <input type="submit" value="Delete"
            class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
        </form>
    </div>
</div>

