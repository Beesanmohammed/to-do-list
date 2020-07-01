<div  class=" container mx-auto px-60 bg-gray-200" > 
@extends('todo.layout')
@section('content')
<h1 class="text-2xl">My To-Do's List</h1>
@if (session()->has('message'))
<div class="alert alert-success"/>
    {{session('message')}}
    @endif
<form class="py-5" action="/todo/create" method="post" >
 @csrf
<input class="py-2 px-2 border rounded " type="text" name="title" placeholder="new task"/>
<input class="py-2 border rounded" type="submit" name="create" value="create"/>
<a href="/todo/index" class="py-2 border rounded">back</a>

</form>

</div>
  </div>
  