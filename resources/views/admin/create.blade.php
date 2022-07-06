@extends('layouts.app')

@section('content')


<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter un utilisateur') }}
        </h2>
    
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{url ('/users') }}" method="post">
            @csrf
            <!-- Titre -->
            <div>
                <label for="name">Nom <label>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required  />
            </div>
            <!-- Détail -->
            <div class="mt-4">
                <label for="email">Email<label>
                <input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required  />
            </div>

            <div class="mt-4">
                <label for="password"> Mot de passe<label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required  />
            </div>
            
            <div class="flex items-center justify-end mt-4">
                
            <button class="btn btn-primary btn-sm" type="submit">Ajouter</button>
            </div>
        </form>
    
    @endsection