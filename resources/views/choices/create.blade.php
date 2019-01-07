@extends( 'layout' )

@section( 'title' )
    Add Media to Choices Lists
@stop

@section( 'content' )
    <choices-create :medias="{{ json_encode( $medias ) }}" :user="{{ json_encode( $user ) }}" csrf="{{ csrf_token() }}"></choices-create>
@stop
