@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Éditer une boutique</div>
    
                    <div class="card-body">
                        @include('partials.flash')
                        <form action="{{ route('bitcoins.update', $bitcoin->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nom de la boutique: <sup>*</sup></label>
                                <input type="text" class="form-control" name="name" value="{{ $bitcoin->name }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Adresse : <sup>*</sup></label>
                                <input type="text" class="form-control" name="address" id="address" value="{{ $bitcoin->address }}">
                            </div>
                            <div class="form-group">
                                <label for="website">Site Web : </label>
                                <input type="text" class="form-control" name="website" value="{{ $bitcoin->website }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <input type="text" class="form-control" name="email" value="{{ $bitcoin->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone : </label>
                                <input type="text" class="form-control" name="phone" value="{{ $bitcoin->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook : </label>
                                <input type="text" class="form-control" name="facebook" value="{{ $bitcoin->facebook }}">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter : </label>
                                <input type="text" class="form-control" name="twitter" value="{{ $bitcoin->twitter }}">
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram : </label>
                                <input type="text" class="form-control" name="instagram" value="{{ $bitcoin->instagram }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description : <sup>*</sup></label>
                                <textarea rows="8" type="text" class="form-control" name="description">{{ $bitcoin->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="submit" value="Éditer" class="btn">
                                <a href="{{ route('admin') }}" class="btn btn-cancel">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
