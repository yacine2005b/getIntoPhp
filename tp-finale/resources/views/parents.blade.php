@extends('layout.layout')

@section('content')
<h1> hello everyone</h1>
<div class="Users">
    @foreach ($users as $user)
@if ($user->role =='parent')
<div class="cardUser">
    <h3><u>{{$user->name}}</u></h3>
    <a class="sndMessage" href="">Send a Message</a>
</div>
@endif
@endforeach
</div>






@endsection

<style>
    .Users{
        display: flex;

    }
    .cardUser{
        padding: 10px;
        border: 2px solid black;
        margin: 5px;

    }
    h3{
        margin-bottom: 7px;
        text-align: center;
    }
    .sndMessage{
        cursor: pointer;
        padding: 4px 27px;
        border: 2px solid black;
        border-radius: 4px;
        margin: 20px;
    }
</style>
