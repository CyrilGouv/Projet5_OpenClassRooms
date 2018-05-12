@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Administration</div>
    
                    <div class="card-body">
                        <h2>Liste des boutiques</h2>
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
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>Votre base de donnée est vide</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
