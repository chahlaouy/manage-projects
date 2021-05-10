<x-app-layout>
    <x-slot name="header">
        <header class="flex items-center justify-between">
            <span class="flex-1 font-semibold text-xl text-gray-800 leading-tight ">{{ __('My projects') }}</span>
            <a href="/projects/create" class="block rounded text-sm bg-indigo-600 text-white px-4 py-2 mr-auto"> {{ __('Create a new project') }} </a>
        </header>
    </x-slot>
    <div class="grid grid-cols-3 gap-8">
        @forelse ($projects as $project)
            @include('layouts.card')
        @empty
            <div>
                {{ __('You have no projects yet create one') }}
            </div>
        @endforelse
    </div>
</x-app-layout>