<x-app-layout>
    <x-slot name="header">
        <header class="flex items-center justify-between" x-data="{showModal : false}">
            <span class="flex-1 font-semibold text-xl text-gray-800 leading-tight ">{{ __('My projects') }}</span>
            <button  x-on:click="showModal = true" class="block rounded text-sm bg-indigo-600 text-white px-4 py-2 mr-auto"> {{ __('Create a new project') }} </button>
            <div x-show="showModal" class="animate__animated absolute top-0 right-0 w-full min-h-screen z-50 py-12 bg-gray-900 bg-opacity-10" :class="showModal ? 'animate__slideInUp' : ''">
                <livewire:project-modal />
            </div>
        </header> 
    </x-slot>
    <div>
        <livewire:project-data-table />
    </div>
</x-app-layout>