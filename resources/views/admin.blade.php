@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Administration <span class="float-right"><a href="{{ route('bitcoins.create') }}" class="btn btn-reverse">Ajouter une boutique</a></span></div>
    
                    <div class="card-body">
                        <h2>Liste des boutiques</h2>
                        <form action="{{ route('search') }}" method="POST" class="mt-2 mb-2">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-9">
                                    <input type="text" class="form-control" name="search" value="{{ old('search') }}" placeholder="Rechercher une boutique">
                                    {!! $errors->first('search', '<p class="form-errors">:message</p>') !!}
                                </div>
                                <div class="col">
                                    <input type="submit" value="Rechercher" class="btn">
                                </div>
                            </div>
                        </form>
                        @include('partials.flash')
                        @if(count($bitcoins) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Nom :</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($bitcoins as $bitcoin)
                                    <tr>
                                        <td>{{ $bitcoin->name }}</td>
                                        <td><a href="{{ route('bitcoins.edit', $bitcoin->id) }}" class="btn float-right">Éditer</a></td>
                                        <td>
                                            <form action="{{ route('bitcoins.destroy', $bitcoin->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" value="Supprimer" class="btn btn-red">
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>Votre base de données est vide</p>
                        @endif

                        
                    </div>
                </div>
                <div class="bitcoins-pagination d-flex justify-content-center mt-3">
                    {{ $bitcoins->links() }}
                </div>
            </div>
        </div>
    </div>
    
@endsection
