@extends( 'layout' )

@section( 'title' )
    Search results for "{{ $keyword }}"
@stop

@section( 'content' )
    <search-results :keyword="{{ json_encode( $keyword ) }}" :results="{{ json_encode( $results ) }}" ></search-results>
@stop
