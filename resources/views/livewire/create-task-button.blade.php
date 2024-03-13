@php
    // clases
    $button_class = "w-full md:w-fit h-fit md:px-4 py-2 rounded-sm flex justify-center active:scale-[.9] shadow-[3px_3px_0_0_#000] active:shadow-[none] transition-all ";
    $button_modal = $button_class." bg-indigo-400 hover:bg-indigo-600";
    $button_confirm = $button_class." bg-green-500 hover:bg-green-700";
    $button_cancel = $button_class." bg-red-500 hover:bg-red-700";
@endphp
<div class="w-full" >
    <button 
        wire:click="openModal"
        class="{{$button_modal}} "
    >
        {{__('ToDoList.button.add')}}
    </button>

    @if($showModal)
        <div class="fixed w-screen h-screen bg-[rgba(50_50_50_/0.9)] top-0 left-0 flex items-center justify-center md:grid md:place-content-center  ">
            <form 
                wire:submit.prevent="createTask" 
                class="w-11/12 md:w-[40rem] md:min-h-[16rem] px-2 py-4 bg-gray-700 flex items-center justify-center flex-col md:grid gap-y-3 md:grid-cols-2 md:place-items-center rounded-md">
                @csrf
                <textarea 
                    wire:model="body"
                    name="textBody" 
                    placeholder="hola mundo"
                    autofocus
                    class="w-11/12 md:w-10/12 min-h-12 max-h-80 resize-none mx-auto p-2 mt-2 col-span-2 text-black caret-indigo-500 rounded-md"
                    x-init="$nextTick(() => resize())"
                    x-data="{ resize() { $el.style.height = '0px'; $el.style.height = $el.scrollHeight + 'px'; }}"
                    @input="resize()"
                ></textarea>
                @error('body')<div class="col-span-2 text-red-800 bg-red-300 rounded-lg px-4 py-2"> {{$message}} </div>@enderror
                
                <input class="{{$button_confirm}} " type="submit" value="{{__('ToDoList.button.confirm')}}">
                <button type="button" wire:click="closeModal" class="{{$button_cancel}} " >{{__('ToDoList.button.cancel')}}</button>
            </form>
        </div>
    @endif
</div>
