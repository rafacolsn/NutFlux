@extends( 'layout' )

@if ( session('success') )
    {{ session('success') }}
@endif

@section( 'title' )
    Choices index
@stop

@section( 'content' )
    <choices-index :choiceslist="{{ json_encode( $choices ) }}" :user="{{ json_encode( $user ) }}" csrf="{{ csrf_token() }}"></choices-index>

@stop
