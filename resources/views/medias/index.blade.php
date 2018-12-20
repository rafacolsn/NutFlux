@extends( 'layout' )

@if(session('success'))
{{session('success')}}
@endif

@section( 'title' )
    Actors index
@stop

@section( 'content' )
    <ul>
        @foreach ($mediasAll as $item)
        <li>{{$item->title}}</li>
        <li><img src="{{$item->poster}}" style="height:200px;" alt="{{$item->poster}}"></li>
        @endforeach
        
    </ul>

@stop
