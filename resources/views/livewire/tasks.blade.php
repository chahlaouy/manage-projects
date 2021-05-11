<div>
    @forelse ($tasks as $task)    
        <div class="bg-white py-4 flex items-center justify-between rounded shadow-md mb-8">
            <h2 class="text-lg border-l-4 border-indigo-500 px-2"> {{ $task->description }} </h2>
        
            <div class="flex items-center">
                <span class="text-gray-400 mr-4"> 
                    {{ $task->created_at->diffForHumans() }}
                </span>
                <label class="inline-flex items-center">
                    <input wire:change="toggleComplete({{$task->id}})"  type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 mr-2" {{ $task->completed ? 'checked' : ''}}>
                </label>
            </div>
        </div>

    @empty
        <div class="mb-8">
            {{ __('You have no tasks yet create one') }}
        </div>
    @endforelse

</div>