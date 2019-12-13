@extends('layouts.app') 


@section('content')
    <table class="table table-sm table-dark">
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Espérance de vie</th>
        <th scope="col">Classe</th>
            @if (Auth::user()->role == 'administrator') 
                <div class="top-right links">
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                </div>
            @endif
        
        @foreach($races as $race)
            <tr>
                <td>{{ $race->id }}</td>
                <td>{{ $race->name }}</td>
                <td>{{ $race->life }}</td>
                <td>{{ $race->class->name}}</td>
                @if (Auth::check())
                    @if (Auth::user()->role == 'administrator')                  
                        <div class="top-right links">
                            <td>
                                <form action="{{ route ('editRace',$race->id) }}" method="POST">
                                @csrf
                                    <button type="submit">Modifier</button>
                            </form>
                            </td>
                            <td>
                                <form action="{{ route ('deleteRace',$race->id) }}" method="POST">
                                @csrf
                                    <button type="submit">Supprimer</button>
                                </form>
                            </td>
                        </div>
                    @endif
                @endif                       
            </tr>
        @endforeach
    </table>
@endsection
