@extends('layouts.app') 

@section('content')
    <form id="form" method="POST" action="/storeAnimal">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- pour afficher le message d'erreur du $validator --}}

        <div class="form-group">

            <label for="name">Nom</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="name" rows="3" required>

            <label for="sexe">Sexe</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="sexe" rows="3" required>

            <label for="age">Age</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="age" rows="3" required>

            <label for="weight">Poids</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="weight" rows="3" required>

            <label for="height">Taille</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="height" rows="3" required>


            <label for="race_id">Race</label>
            <select name="race_id">
                @foreach ($races as $race)
                    <option value="{{ $race->id }}">{{ $race->name }}</option>
                @endforeach               
            </select>


        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection