@extends('layouts.layout')
@section('content')
    <form method="post" action="{{ route('store') }}" class=" flex flex-col mt-20 mx-auto w-full max-w-lg">
        @csrf
        <h1 class=" text-center text-xl font-semibold">Create ticket</h1>
        <div class=" pt-10 flex flex-wrap -mx-8 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="firstname">
                    Title
                </label>
                <input
                    class=" @error('title') border-red-500 @enderror appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    value="{{ old('title') }}" name="title" id="title" type="text"
                    placeholder="{{fake()->text()}}">
                @error('title')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Category
                    </label>
                    <div class="relative">
                        <select
                            class="block  appearance-none w-auto bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name='category_id' id="category_id">
                            <option name="eduction"  value="1">Eduction</option>
                            <option name="careandwelfare" value="2">Care and welfare</option>
                            <option name="teachingmaterials" value="3">Teaching materials</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 justify-end flex items-end px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Description
                </label>

                <textarea
                    class="@error('description') border-red-500 @enderror appearance-none block w-full h-40 bg-gray-200 text-gray-700 border pb-32 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="w3review" name="description" rows="4" cols="50" value="test">
</textarea>
                @error('description')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Priority
                    </label>
                    <div class="relative">
                        <select
                            class="block  appearance-none w-auto bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name='priority' id="priority">
                            <option name="high" value="high">High</option>
                            <option name="medium" value="medium">Medium</option>
                            <option name="low" value="low">Low</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 justify-end flex items-end px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>



            <button
                class=" h-10 ml-auto justify-center flex flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                type="submit">
                Create ticket
            </button>
        </div>
    </form>
@endsection
