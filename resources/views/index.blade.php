@extends('layouts.MainLayout')

@section('title','To Do List')

@section('content')
    <div class='w-ful min-h-full px-8 py-4'>
        <!-- Title -->
        <div class=" h-[8rem] flex items-center justify-center border-b-2 border-indigo-500" >
            <h1 class="text-7xl italic font-bold" >{{__('ToDoList.title')}}</h1>
        </div>
        <!-- button of actions -->
        <div class="h-[4rem] border-b-2 border-indigo-500 flex items-center">
            <livewire:create-task-button />
        </div>

        <livewire:to-do-list />
        
        <livewire:TaskHandler />
    </div>
@endsection