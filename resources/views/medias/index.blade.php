@extends( 'layout' )

@if(session('success'))
    {{session('success')}}
@endif

@section( 'title' )
    Medias index
@stop

@section( 'content' )
    <medias-index :actors="{{ json_encode($mediasAll) }}" csrf="{{ csrf_token() }}"></medias-index>
@stop
