@extends( 'layout' )

@section( 'title' )
    {{ $mediasObj -> title }}
@stop

@section( 'content' )
    <medias-show :media="{{ json_encode( $mediasObj ) }}" :user="{{ json_encode( $user ) }}" :choices="{{ json_encode( $choices ) }}" csrf="{{ csrf_token() }}"></medias-show>
@stop
