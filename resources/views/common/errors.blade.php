@if(count($error) > 0)

<div class="alert alert-danger">
    <strong>Something went wrong !!!</strong>
    <br>
    <br>
    <ul>
        @foreach($errors->all as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif