@extends('adminlte::page')
@section('content')
        <x-app-layout>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{-- {{ __("Mis Vacantes!") }} --}}
                            <h1 class="text-2xl font-bold text-center mb-10">
                                Editar Interno: {{$internacion->name}}
                            </h1>
                            
                            <div class="md:flex md:justify-center p-5">
                                {{-- <livewire:editar-uci
                                    :uci="$uci"                                
                                /> --}}
                                <livewire:editar-internacion 
                                    :internacion="$internacion"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    
@stop

