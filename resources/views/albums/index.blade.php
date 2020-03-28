@extends('layouts.app')

@section('content')
    <h3 class="text-center">Albums</h3>
    @if($albums)

        <div id="albums">
            <div class="grid-x text-center">
                @foreach($albums as $album)
                    @if($album->user_id == Auth::user()->id)
                        <div class="cell small-4 end">
                            <a href="{{ url('albums/' . $album->id) }}">
                             <img src="/uploads/albums_photos/{{$album->cover_image}}" alt="{{$album->name}}" class="thumbnail">
                              </a>
                            <br>
                            <h4>{{$album->name}}</h4>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    @else
        <p>No Albums to display</p>
    @endif
@endsection
