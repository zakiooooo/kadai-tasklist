@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="center jumbotron">
            <div class="text-center">
                <h1>{{ $user->name }}</h1>
                <h1>You don't have access authority.</h1>
                {!! link_to_route('logout.get', 'Logout', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection