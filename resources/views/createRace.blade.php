@extends('layouts.app') 

@section('content')
    <form id="form" method="POST" action="/storeRace">
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

            <label for="life">Espérance de vie</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="life" rows="3" required>

            <label for="class_id">Race</label>
            <select name="class_id">
                @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                @endforeach               
            </select>


        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection