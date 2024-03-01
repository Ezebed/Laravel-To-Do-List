@php
    // clases
    $button_class = "w-fit h-fit px-4 py-2 rounded-sm active:scale-[.9] transition-all";
    $button_edit = $button_class." bg-yellow-300 hover:bg-yellow-500";
    $button_delete = $button_class." bg-red-500 hover:bg-red-700";
@endphp
<div>
    <div class="md:w-[90%] lg:w-[80%] min-h-[20rem] bg-gray-800 rounded-sm mx-auto mt-4 p-2 flex flex-col space-y-1">
        <div class="flex w-full h-14 p-2 bg-gray-700 justify-between items-center rounded-sm" >
            <p>Esta es una tarea larga</p>
            <div>
                <button class="{{$button_edit}}" >E</button>
                <button class="{{$button_delete}}">X</button>
            </div>
        </div>
        <div class="flex w-full h-14 p-2 bg-gray-700 justify-between items-center rounded-sm" >
            <p>Esta es una tarea larga</p>
            <div>
                <button class="{{$button_edit}}" >E</button>
                <button class="{{$button_delete}}">X</button>
            </div>
        </div>
        <div class="flex w-full h-14 p-2 bg-gray-700 justify-between items-center rounded-sm" >
            <p>Esta es una tarea larga</p>
            <div>
                <button class="{{$button_edit}}" >E</button>
                <button class="{{$button_delete}}">X</button>
            </div>
        </div>
    </div>
</div>
