@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form method="POST" action="{{ route('userstore') }}">

                    @csrf

                    <div class="form-group">
                        <label for="naam">Naam</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="wachtwoord">Wachtwoord</label>
                        <input type="password" class="form-control" id="wachtwoord" name="password">
                    </div>
                    <div class="form-group">
                        <label>Lid</label>
                        <br>
                        <select name="lid">
                                <option value="0"selected>geen lid</option>
                                <option value="1" >is lid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Admin</label>
                        <br>
                        <select name="isAdmin">
                                <option value="0" selected>Geen Admin</option>
                                <option value="1" >Is Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Voeg lid toe</button>
                </form>
            </div>
        </div>
    </div>
@endsection
