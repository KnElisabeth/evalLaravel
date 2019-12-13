@extends('layouts.app') 


@section('content')
    <table class="table table-sm table-dark">
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Sexe</th>
        <th scope="col">Age</th>
        <th scope="col">Poids</th>
        <th scope="col">Taille</th>
        <th scope="col">Race</th>
            @if (Auth::user()->role == 'administrator') 
                <div class="top-right links">
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                </div>
            @endif
        
        @foreach($animals as $animal)
            <tr>
                <td>{{ $animal->id }}</td>
                <td>{{ $animal->name }}</td>
                <td>{{ $animal->sexe }}</td>
                <td>{{ $animal->age }}</td>
                <td>{{ $animal->weight }}</td>
                <td>{{ $animal->height }}</td>
                <td>{{ $animal->race->name}}</td>
                @if (Auth::check())
                    @if (Auth::user()->role == 'administrator')                  
                        <div class="top-right links">
                            <td>
                                <form action="{{ route ('editAnimal',$animal->id) }}" method="POST">
                                @csrf
                                    <button type="submit">Modifier</button>
                            </form>
                            </td>
                            <td>
                                <form action="{{ route ('deleteAnimal',$animal->id) }}" method="POST">
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
