<div>
    <div class="md:w-[90%] lg:w-[80%] min-h-[20rem] bg-gray-800 rounded-sm mx-auto mt-4 p-2 flex flex-col space-y-1">
        
        @forelse($tasks as $task)
            <livewire:task-card :taskID="$task->id" :taskBody="$task->body" :key="$task->id" />
        @empty
        @endforelse
    </div>
</div>
