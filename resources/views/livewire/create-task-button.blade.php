@php
    // clases
    $button_class = "w-fit h-fit px-4 py-2 rounded-sm active:scale-[.9] transition-all";
    $button_modal = $button_class." bg-indigo-400 hover:bg-indigo-600";
    $button_confirm = $button_class." bg-green-500 hover:bg-green-700";
    $button_cancel = $button_class." bg-red-500 hover:bg-red-700";
@endphp
<div>
    <button 
    wire:click="openModal"
    class="{{$button_modal}} ">
        {{__('ToDoList.button.add')}}
    </button>

    @if($showModal)
        <div class="fixed w-screen h-screen bg-[rgba(50_50_50_/0.9)] top-0 left-0 grid place-content-center ">
            <form 
                wire:submit.prevent="createTask" 
                class="lg:w-[40rem] lg:h-[15rem] bg-gray-700 grid grid-cols-2 place-items-center rounded-md">
                @csrf
                <textarea 
                    wire:model="body"
                    name="textBody" 
                    class="w-10/12 h-32 resize-none mx-auto p-2 mt-2 col-span-2 text-black caret-indigo-500 rounded-md"
                ></textarea>
                
                <input class="{{$button_confirm}} " type="submit" value="{{__('ToDoList.button.confirm')}}">
                <button wire:click="closeModal" class="{{$button_cancel}} " >{{__('ToDoList.button.cancel')}}</button>
            </form>
        </div>
    @endif
</div>
