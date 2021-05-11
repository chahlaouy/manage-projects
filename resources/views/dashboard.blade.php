<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="/projects" class="text-2xl font-bold leading-loose tracking-wide"> {{__('My projects')}} </a>
      
</x-app-layout>
