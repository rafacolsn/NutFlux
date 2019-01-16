@extends( 'layout' )

@section( 'title' )
    @if ( $type === "favourites" )
        Favourites Choices
    @endif
    @if ( $type === "watched" )
        Watched Choices
    @endif
    @if ( $type === "later" )
        To-Watch Later Choices
    @endif
@stop

@section( 'content' )
    <choices-show :choices="{{ json_encode( $choices ) }}" :type="{{ json_encode( $type ) }}"></choices-show>
@stop
