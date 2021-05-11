
<div class="grid grid-cols-3 gap-8 mb-8">
       
    @forelse ($projects as $project) 
        @include('layouts.card')
    @empty
        <div>
            {{ __('You have no projects yet create one') }}
        </div>
    @endforelse
    <div class="">
        {{ $projects->links() }}
    </div>
    
</div>
