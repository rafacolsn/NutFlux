@foreach ($actor as $actors)
    <h1>{{ $actor->firstname }} {{ $actor->lastname }}</h1>
    {{-- <img src="{{$actor->picture}}" alt=""> --}}
    <?php var_dump($actor); ?>
@endforeach

