@extends('layout.base')

@section('pageContent')
    <section>
        <div class="container-main">
            <div class="container">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{$comic['thumb']}}" :alt="{{$comic['title']}}">
                        <p>{{$comic['title']}}</p>
                    </div>
                @endforeach
            </div>
            <div>
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <section class="comics">
        <div class="container">
            <ul>
                @foreach ($elements as $element)
                    <li>
                        <img src="images/{{$element['src']}}" alt="{{$element['name']}}">
                        <span>{{$element['name']}}</span>
                    </li>
                @endforeach
            </ul> 
        </div>
    </section>
@endsection