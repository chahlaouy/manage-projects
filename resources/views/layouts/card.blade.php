<div class="bg-white py-4 h-64 relative shadow-md rounded">
                
    <a href="{{$project->path()}}" class="block text-xl font-normal px-8 border-l-4 border-indigo-600 py-3 mb-6"> {{$project->title}} </a>
    <div class="text-gray-500 leading-loose tracking-wide px-8">
        {{ Str::limit($project->description, 200) }}
    </div>
    {{-- archive button --}}
    <div class="absolute bottom-0 right-0 p-4">
        <div class="w-5">

            <?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg  id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>{{ __('Archive')}}</title><path class="fill-current text-indigo-400" d="M21,5H11.72l-.32-1A3,3,0,0,0,8.56,2H3A3,3,0,0,0,0,5V19a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V8A3,3,0,0,0,21,5Zm1,14a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V5A1,1,0,0,1,3,4H8.56a1,1,0,0,1,.95.68L10.28,7H21a1,1,0,0,1,1,1Z"/></svg>
        </div>
    </div>
</div>