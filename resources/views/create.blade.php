@extends('layout')

@section('content')
<h1> Create a new contact</h1>
<form method="POST" action ="/home">

    {{csrf_field()}}


    <div class ="field">
        <label class="label" for="name">Name</label>
        <div class="control">
            <input type="text" class="input" name="name" placeholder="Name">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="title">Title</label>
        <div class="control">
        <input type="text" class="input" name="title" placeholder="Title">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="phone_number">Phone Number</label>
        <div class="control">
            <input type="text" class="input" name="phone_number" placeholder="Phone Number">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="picture">Picture</label>
        <div class="control">
            <input type="text" class="input" name="picture" placeholder="picture">
        </div>
    </div>

    <div class ="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Entry</button>
        </div>

    </div>

</form>
    
@endsection