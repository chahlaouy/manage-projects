<div class="max-w-2xl mx-auto ">
    <div class="bg-white shadow-2xl p-8 rounded-md">
        <h3 class="font-bold text-center uppercase text-3xl text-gray-800 leading-tight my-12">
            {{ __('Add a project') }}
        </h3>
        
        <form wire:submit.prevent="submitForm">
            @csrf
            <label class="block mb-8">
                <span 
                class="text-gray-700">  {{__('Title')}}  </span>
                <input 
                wire:model="title"
                name="title"
                id="title"
                type="text" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                placeholder="{{__('Title')}}">
            </label>
            @error('title')
                <span class="text-red-400">{{$message}}</span>
            @enderror
            <label class="block mb-8">
                <span 
                class="text-gray-700">  {{__('Description')}}  </span>
                <input 
                wire:model="description"
                name="description"
                id="description"
                type="text" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                placeholder="{{__('Description')}}">
            </label>
            @error('description')
                <span class="text-red-400">{{$message}}</span>
            @enderror
            <label class="block mb-8">
                <span class="block text-gray-500 text-lg mb-4">{{ __('General Notes') }}</span>
                <textarea wire:model="general_notes" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-indigo-500" rows="5" spellcheck="false"></textarea>
            </label>
            @error('general_notes')
                <span class="text-red-400">{{$message}}</span>
            @enderror
            <div class="flex items-center mb-8">
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-indigo-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-indigo-600 hover:text-white mr-8">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal"> {{ __('Attach images') }} </span>
                    <input type='file' class="hidden" wire:model="images" multiple/>
                </label>
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-indigo-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-indigo-600 hover:text-white mr-8">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal"> {{ __('Attach files') }} </span>
                    <input type='file' class="hidden" wire:model="files" multiple/>
                </label>

            </div>
            @error('files')
                <span class="text-red-400">{{$message}}</span>
            @enderror
            @error('images')
                <span class="text-red-400">{{$message}}</span>
            @enderror
            <button x-on:click="Livewire.emit('ProjectAdded')" type="submit" class="rounded text-white px-12 py-2 bg-indigo-600 focus:outline-none hover:bg-indigo-700 mr-4">
                {{__('Submit')}}
            </button>
            <a href="#" x-on:click="showModal = false"> {{__('Cancel')}} </a>
        </form>
    </div>
</div>