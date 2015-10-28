@extends('app')

@section('content')
    <h1>Login to Your Account</h1>
    <hr>

    <form>
        @include('partials/form/input', ['name' => 'username', 'label' => 'Username', 'placeholder' => 'Your login name'])
        @include('partials/form/password', ['name' => 'password', 'label' => 'Password', 'placeholder' => 'Your password'])
 
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
