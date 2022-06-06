@extends('layouts.app')
   
      @if (Session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
      @endif

    @section('content')
    <h1>Hi user</h1>
    <section>

 <form action ="" method="POST">
     @csrf
     <input type="text" name="username" placeholder="Username">
     <input type="password" name="password" placeholder="Password">
     <input type="submit" name="submit" value="Submit">
</form>
    </section>
    @endsection
