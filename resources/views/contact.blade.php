@extends('templates.app')


@section('content')
    @include('templates.header-default')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact">
                    <div class="contact-form" aos-animate data-aos="fade-right">
                        <h2>Contact</h2>
                        <p>Vous souhaitez ajouter votre business à notre annuaire ou tout simplement nous contacter, n'hésitez pas !</p>
                        @include('partials.flash')
                        <form action="{{ route('sendMail') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nom : <sup>*</sup></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                {!! $errors->first('name', '<p class="form-errors">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom : <sup>*</sup></label>
                                <input type="text" class="form-control" name="prenom" value="{{ old('prenom') }}">
                                {!! $errors->first('prenom', '<p class="form-errors">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <label for="email">Email : <sup>*</sup></label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                {!! $errors->first('email', '<p class="form-errors">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <label for="subject">Sujet : <sup>*</sup></label>
                                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                                {!! $errors->first('subject', '<p class="form-errors">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <label for="message">Message : <sup>*</sup></label>
                                <textarea rows="8" type="text" class="form-control" name="message">{{ old('message') }}</textarea>
                                {!! $errors->first('message', '<p class="form-errors">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('templates.sidebar')
        </div>
    </div>

    @include('templates.footer')
@endsection