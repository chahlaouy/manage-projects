<div class="bg-white py-4 relative shadow-md rounded mt-8 p-4">
                
    <h3 class="text-lg font-bold mb-8"> {{ __('Activity feeds') }} </h3>

    <div>
        <ul>
            @forelse ($activities as $activity)
                
                <li class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-indigo-400 rounded-full flex items-center justify-center mr-2">
                        <span class="block font-bold text-lg">D</span>
                    </div>
                    <div class="flex-1">
                        <span class="block font-bold text-md">Foulen</span>
                        <div class="block">{{$activity->description}} 
                            @if ($activity->subject)
                                <span class="font-bold">{{ $activity->subject->title }}</span>
                            @endif 
                            <span class="text-gray-400 text-xs"> {{ $activity->created_at->diffForhumans() }} </span>
                        </div>
                    </div>
                </li>
            @empty
                <div> {{ __('There is no activity yet') }} </div>
            @endforelse
        </ul>
    </div>
    
</div>