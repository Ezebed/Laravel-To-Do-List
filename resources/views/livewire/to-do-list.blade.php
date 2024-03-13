<div>
    <div class="md:w-[90%] lg:w-[80%] min-h-[20rem] bg-gray-800 rounded-sm mx-auto mt-4 p-2 flex flex-col space-y-1">
        
        @forelse($tasks as $task)
            <livewire:task-card :taskID="$task->id" :taskBody="$task->body" :taskStatus="$task->completed" :key="$task->id" />
        @empty
            <div class="flex grow flex-col md:flex-row justify-center items-center h-full w-full bg-gray-700 space-y-4 space-x-4">
                <figure class="w-[150px] h-[200px] border-4 border-indigo-600 rounded-md relative">
                    <p class="size-[20px] bg-indigo-600 rounded-full absolute top-[30px] left-[30px]" ></p>
                    <p class="size-[20px] bg-indigo-600 rounded-full absolute top-[30px] right-[30px]" ></p>
                    <p class="w-[70px] h-[30px] border-8 border-indigo-600 border-b-transparent border-b-0 rounded-[100px_100px_0_0] absolute top-[70px] left-[35px] " ></p>
                    <p class="size-[50px] border-4 border-indigo-600 rounded-full absolute bottom-[20px] left-[45px]"></p>
                    <p class="w-[70px] h-[5px] bg-indigo-600 absolute bottom-[43px] left-[33px] -rotate-45" ></p>
                </figure>
                <p class="text-3xl font-bold text-white italic">{{__('ToDoList.listEmpty')}}</p>

            </div>
        @endforelse
    </div>
</div>
