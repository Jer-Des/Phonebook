@extends('layout')
@section('content')
<h1 class="title has-text-centered"> Phonebook Application </h1>
<div>

        <input type = "text" name="query" placeholder="Search for an entry">

        <button type="submit" onClick="location.href = '{{ url('home/create') }}'">Create Entry</button>

  <!--
        <button id="modalBtn" class="button">start modal</button>
        <div id="simpleModal" class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                  
                  <p>test12</p>
                </div>
                <button id="closeBtn" class="modal-close is-large" aria-label="close"></button>
              </div>
              <script src="modal.js"></script>
    -->
</div>
    
    <table class="table is-striped is-hoverable is-fullwidth">
            <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Phone Number</th>
      
                  </tr>
    @foreach ($addresses as $addresses) 
            <tr>
              <td>{{$addresses->picture}}</td>
              <td>{{$addresses->name}}</td>
              <td>{{$addresses->title}}</td>
              <td>{{$addresses->phone_number}}</td>
              <td>  
            <div class="field is-grouped">
                <form method="GET" action="/home/{{$addresses->id}}/edit">
                    <button class = "button is-link is-small is-inline" type="submit">edit</button>
                </form>

                <form method="POST" action="/home/{{ $addresses->id }}" >
                    {{ method_field('DELETE') }}
                    {{csrf_field()}}
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-danger is-small is-inline">delete</button>
                        </div>
                    </div>
                
                </form>
            </div>
              </td>
              
            </tr>
          
    @endforeach
</table>
@endsection