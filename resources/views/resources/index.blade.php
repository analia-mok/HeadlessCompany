@extends('layout')

@section('body')
<h1>Resources</h1>
<div class="row">
    @foreach($white_papers as $entry)
    <div class="col-xs-12 col-md-4 card">
        {{-- <img src="/" alt="{{ $entry }}" class="card-img-top"> --}}
        <div class="card-body">
            <span class="card__category">CASE STUDY</span>
            <h3 class="card__title">{{ $entry->title }}</h3>
            {{-- <div class="card__content">{!! $entry->summary !!}</div> --}}
        </div>
    </div>
    @endforeach
</div>
@endsection