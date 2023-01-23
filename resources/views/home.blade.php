@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-5 g-3 ">
            @foreach ($filmsList as $element)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{$element->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted flex-fill">{{$element->original_title}}</h6>
                            <p class="card-text">{{$element->nationality}} | {{$element->date}}</p> 
                            <p class="card-text text-muted">{{$element->vote}}</p> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection