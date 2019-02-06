@extends('layout')

@section('body')
<div class="row person">
  <div class="col-xs-12 col-md-4">
    <img src="{{ $entry->headshot->getFile()->getUrl() }}" alt="{{ $entry->fullName }}" class="person__profile"></img>
  </div>
  <div class="col-xs-12 col-md-8">
    <h1>{{ $entry->fullName }}</h1>
    <h3>{{ $entry->title }}</h3>
    <div>
      {!! $renderer->render($entry->biography) !!}
    </div>
  </div>
</div>
@endsection