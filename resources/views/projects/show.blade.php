<x-app-layout>
    
    <x-slot name="header">
        <header class="flex items-center justify-between text-sm">
            <div class="flex items-center">
                <div class="leading-tight mr-4 flex items-center">
                    <a href="{{route('projects.index')}}" class="mr-1">{{ __('My projects') }}</a>
                    <span class="mr-1">/</span>
                    <span>{{$project->title}}</span>
                    
                </div>
                
            </div>
            <div class="flex items-center">
                <div class="flex items-center justify-center bg-blue-200 w-10 h-10 rounded-full mr-4 uppercase text-xl">
                    {{ Str::limit(auth()->user()->name, 1, '') }}
                </div>
                <a href="/projects/create" class="block rounded text-white px-12 py-2 bg-indigo-500 focus:outline-none hover:bg-indigo-600"> {{ __('Invite to project') }} </a>
            </div>
        </header>
    </x-slot>
    <div x-data="{showModal : false}">
        <div x-show="showModal" class="animate__animated absolute top-0 right-0 w-full min-h-screen z-50 py-12 bg-gray-900 bg-opacity-10" :class="showModal ? 'animate__slideInUp' : ''">
            <livewire:task-modal :project="$project" />
        </div>
        <div class="flex items-end justify-between mb-4">

            <h3 class="text-gray-500 text-lg"> {{ __('Tasks') }} </h3>
            <button x-on:click="showModal = true" class="rounded text-white px-12 py-2 bg-indigo-500 focus:outline-none hover:bg-indigo-600"> {{__('Add task')}} </button>
        </div>
        <div class="flex">
            <div id="tasks" class="flex-1 mr-8">
    
                <livewire:tasks :project="$project"/>
               
                <label class="block">
                    <span class="block text-gray-500 text-lg mb-4">{{ __('General Notes') }}</span>
                    <textarea class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-indigo-500" rows="8" spellcheck="false"></textarea>
                </label>
            </div>
            <div class="w-72">
                @include('layouts.card')
            </div>
        </div>
    </div>
    
</x-app-layout>