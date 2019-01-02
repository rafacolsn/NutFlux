@extends( 'layout' )

@section( 'title' )
    {{ $mediasObj -> title }}
@stop

@section( 'content' )
    <medias-show :media="{{ json_encode( $mediasObj ) }}"></medias-show>

@stop
