@extends('layout')

@section('content')

<h1 class="title">Edit Entry</h1>
<form method="POST" action="/home/{{$address->id}}">

    {{method_field('PATCH')}}

    {{csrf_field()}}


    <div class ="field">
        <label class="label" for="picture">Picture</label>
        <div class="control">
            <input type="text" class="input" name="picture" placeholder="picture" value="{{$address->picture}}">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="name">Name</label>
        <div class="control">
        <input type="text" class="input" name="name" placeholder="name" value="{{$address->name}}">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{$address->title}}">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="phone_number">Phone Number</label>
        <div class="control">
            <input type="text" class="input" name="phone_number" placeholder="Phone Number" value="{{$address->phone_number}}">
        </div>
    </div>
    <div class ="field">
        <div class="control">
            <button type="submit" class="button is-link">Update Entry</button>
        </div>

    </div>
        
</form>
@endsection