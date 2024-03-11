@php
    // clases
    $button_class = "w-fit h-fit px-4 py-2 rounded-sm active:scale-[.9] shadow-[3px_3px_0_0_#000] active:shadow-[none] transition-all ";
    $button_edit = $button_class." bg-yellow-300 hover:bg-yellow-500";
    $button_delete = $button_class." bg-red-500 hover:bg-red-700";
    $button_confirm = $button_class." bg-green-500 hover:bg-green-700";
@endphp
<div class="flex " >
    <input type="checkbox" class="appearance-none min-h-full w-4 rounded-l-md focus:ring-inset focus:ring-offset-0 focus:ring-transparent ">
    <div class="flex w-full min-h-14 h-full p-2 bg-gray-700 justify-between items-center rounded-sm" >

        <!-- texto de la tarjeta -->
        
        @if($editable)
            <textarea 
                wire:model="taskBody"
                name="textBody"
                autofocus
                class="w-full min-h-fit max-h-80 resize-none p-2 mr-2 text-black caret-indigo-500 rounded-md"
                x-init="$nextTick(() => resize())"
                x-data="{ resize() { $el.style.height = '0px'; $el.style.height = $el.scrollHeight + 'px'; }}"
                @input="resize()"
            ></textarea>

            <!-- botones de accion -->
            <div class="flex items-center space-x-2">
                <button 
                    type="button"
                    class="{{$button_confirm}}"
                    wire:click="updateTask"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-lg size-6 text-black" viewBox="0 0 16 16">
                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                    </svg>
                </button>
                <button 
                    type="button"
                    class="{{$button_delete}}"
                    wire:click="unsetEditable"  
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x text-white size-6" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                    </svg>
                </button>
            </div>
        @else
            <div class="mr-4 flex items-center">
                
                <p class="w-full">{{$taskBody}}</p>
            </div>

            <!-- botones de accion -->
            <div class="flex items-center space-x-2">
                <button 
                    type="button"
                    class="{{$button_edit}}"
                    wire:click="setEditable"
                >
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-pencil-square text-black size-6" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </button>
                <button 
                    type="button"
                    class="{{$button_delete}}"
                    wire:click="deleteTask"  
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x text-white size-6" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                    </svg>
                </button>
            </div>
        @endif
    </div>
</div>
