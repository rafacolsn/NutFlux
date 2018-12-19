
@if(session('success'))
{{session('success')}}
@endif

<h1>Liste des acteurs</h1>

<ul>
    @foreach ($actorsAll as $actor)
        <li>{{ $actor->firstname }} {{ $actor->lastname }}</li>
        <img style="height:150px" src="{{$actor->picture}}" alt="">
    @endforeach
</ul>
   
