@extends( 'layout' )

@if(session('success'))
{{session('success')}}
@endif

@section( 'title' )
    Account index
@stop

@section( 'content' )
@foreach ($accountsAll as $item)
    <p>{{$item->email}}</p>
@endforeach
    
@stop