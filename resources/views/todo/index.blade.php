@extends('todo.layout')
@section('content')

<div class="flex justify-center">
<h1 class="text-2xl">All Task's</h1>
<a href="/todo/create" class="mx-5 py-2 text-blue-400 cursor-pointer">create new
<span class="fas fa-plus-circle "></span>
</a>
</div>
@if (session()->has('message'))
<div class="alert alert-success">
    {{session('message')}}
    @endif
</div>



<ul class="my-5 mx-auto" style="width:50%"> 

    @foreach($todo as $td)
    <li class="flex justify-between border-b pb-4 px-4">
   <div> 
       @include('todo.completeButton')
   </div>

       @if($td->completed) 
       <p class="line-through">{{$td->title}}</p>
       @else
       <p>{{$td->title}}</p>
       @endif
       <div>


       <a href="{{asset(route('todo.edit',$td->id))}}" 
           class="text-blue-400 cursor-pointer"> 
    <span class="fas fa-edit px-2"></span>       
    </a>
    
    <span class="fas fa-trash text-red-400 px-2 cursor-pointer"
             onclick="event.preventDefault();
             document.getElementById('form-delete-{{$td->id}}').submit()"></span>  

             <form style="display:none" id="{{'form-delete-'.$td->id}}" method="post"
             action="{{asset(route('todo.delete',$td->id))}}" >
            @csrf 
            @method('delete')
            </form>
       </div>

     </li>

  @endforeach
</ul>

@endsection
</div>
