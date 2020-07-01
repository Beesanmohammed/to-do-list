@extends('todo.layout')
@section('content')


<h1 class="text-2xl">updat your task</h1>

<form class="py-5" action="{{asset(route('todo.update',$todo->id))}}" method="post" >
 @method('put')
 @csrf
<input class="py-2 px-2 border rounded " type="text" name="title" value="{{$todo->title}}" 
placeholder="new task"/>
<input  class="py-2 border rounded" type="submit" name="update" value="update"/>
</form>

@endsection
