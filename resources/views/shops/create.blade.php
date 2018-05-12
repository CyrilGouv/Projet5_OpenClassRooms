@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter une nouvelle boutique</div>
    
                    <div class="card-body">
                        <form action="{{ route('bitcoins.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nom de la boutique: <sup>*</sup></label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="address">Adresse : <sup>*</sup></label>
                                <input type="text" class="form-control" name="address" id="address">
                            </div>
                            <div class="form-group">
                                <label for="website">Site Web : </label>
                                <input type="text" class="form-control" name="website">
                            </div>
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone : </label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook : </label>
                                <input type="text" class="form-control" name="facebook">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter : </label>
                                <input type="text" class="form-control" name="twitter">
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram : </label>
                                <input type="text" class="form-control" name="instagram">
                            </div>
                            <div class="form-group">
                                <label for="description">Description : <sup>*</sup></label>
                                <textarea rows="8" type="text" class="form-control" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Ajouter" class="btn">
                                <a href="{{ route('admin') }}" class="btn btn-cancel">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
