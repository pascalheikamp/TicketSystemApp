@extends('layouts.layout')
@section('content')
    <form method="post" action="{{route('reviewed')}}"
          class=" flex flex-col mt-20 mx-auto w-full max-w-lg">
        @csrf
        @method('POST')
        <h1 class=" text-center text-xl font-semibold">{{$ticket->title}}</h1>
        <div class=" pt-10 flex flex-wrap -mx-8 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="firstname">
                    Reviewed by
                </label>
                <input type="hidden" id="ticket_id" name="ticket_id" value="{{$ticket->id}}">
                <input
                    class=" @error('reviewedby') border-red-500 @enderror appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    name="reviewedby" id="reviewedby" type="text"
                >
                @error('reviewedby')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">

            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Solution
                </label>

                <textarea
                    class="@error('solution') border-red-500 @enderror appearance-none block w-full h-40 bg-gray-200 text-gray-700 border pb-32 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="solution" name="solution" rows="4" cols="50" value="test"> {{$ticket->description}}
</textarea>
                @error('solution')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">

            </div>
        </div>


        <button
            class=" h-10 ml-auto justify-center flex flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
            type="submit">
            Review ticket
        </button>
        </div>
    </form>
@endsection
