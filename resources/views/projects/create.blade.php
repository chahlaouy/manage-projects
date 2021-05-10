<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a project') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white rounded-md shadow p-8">
        <h2 class="font-bold text-center uppercase text-3xl text-gray-800 leading-tight my-12">
            {{ __('Create a new project') }}
        </h2>
        <form action="/projects" method="post">
            @csrf
            <label class="block mb-8">
                <span class="text-gray-700"> {{__('Title')}} </span>
                <input 
                name="title"
                id="title"
                type="text" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                placeholder="{{__('Title')}}">
            </label>
            <label class="block mb-8">
                <span 
                class="text-gray-700">  {{__('Description')}}  </span>
                <input 
                name="description"
                id="description"
                type="text" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                placeholder="{{__('Description')}}">
            </label>
            <button type="submit" class="rounded text-white px-12 py-2 bg-indigo-600 focus:outline-none hover:bg-indigo-700">
                {{__('Submit')}}
            </button>
            <a href="/projects"> {{__('Cancel')}} </a>
        </form> 
    </div>

</x-app-layout>