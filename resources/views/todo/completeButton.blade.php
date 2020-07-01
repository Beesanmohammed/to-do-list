
@if($td->completed)
             <span class="fas fa-check text-green-400 px-2 cursor-pointer"
             onclick="event.preventDefault();
             document.getElementById('form-incomplete-{{$td->id}}')
             .submit()"></span>

             <form style="display:none" id="{{'form-incomplete-'.$td->id}}" method="post"
             action="{{route('todo.incompleted',$td->id)}}" >
            @csrf 
            @method('put')
            </form>

             @else
             <span onclick="event.preventDefault();document.getElementById('form-complete-{{$td->id}}'
             ).submit()"
                class="fas fa-check text-blak-300 px-2 cursor-pointer"></span>
    
    <form action="{{asset(route('todo.completed',$td->id))}}" method="post"
       style="display:none" id="{{'form-complete-'.$td->id}}" >
            @csrf 
            @method('put')
            </form>
             @endif
          





   <!-- <a href="{{asset(route('todo.delete',$td->id))}}" class="py-2 border rounded"> Edit
             </a> -->

            