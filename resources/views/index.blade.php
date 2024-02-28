@extends('layouts.MainLayout')

@section('title','To Do List')

@section('content')
    <div class='w-ful min-h-full px-8 py-4'>

        <div class=" h-[8rem] flex items-center justify-center border-b-2 border-indigo-500" >
            <h1 class="text-7xl italic font-bold" >To Do List</h1>
        </div>

        <livewire:to-do-list />
        
    </div>
@endsection