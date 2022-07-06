@extends('layouts.app')

@section('content')
    <h4>Liste des utilisateurs</h4>
    <table class="table table-bordered table-striped">
        <thead>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Voir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        
    
@endsection