@if(session->has('message'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    {{--"@error('titel') is-invalid @enderror"--}} 

@enderror
 @foreach($errors->all() as error)
 <div class="alert alert-danger">
{{$error}} </div>
@endforeach 
