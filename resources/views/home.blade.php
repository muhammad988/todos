@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Welcome to Laravel ToDo App</h1>
        <hr/>

        @include('partials.flash_notification')

        <p>For any query please contact</p>

        <h3>Muhammad</h3>
        <h4><a href="mailto: muhammad.h.alali@gmail.com">muhammad.h.alali@gmail.com</a></h4>
    </div>
@endsection
