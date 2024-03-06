@php
    // clases
    $button_class = "w-fit h-fit px-4 py-2 rounded-sm active:scale-[.9] transition-all";
    $button_edit = $button_class." bg-yellow-300 hover:bg-yellow-500";
    $button_delete = $button_class." bg-red-500 hover:bg-red-700";
@endphp
<div>
    <div class="flex w-full min-h-14 p-2 bg-gray-700 justify-between items-center rounded-sm" >

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
        @else
            <p class="mr-4">{{$taskBody}}</p>
        @endif


        <!-- botones de accion -->
        <div class="flex items-center space-x-2">
            <button 
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
            >X</button>
        </div>
    </div>
</div>
