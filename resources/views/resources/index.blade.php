@extends('layout')

@section('body')
<h1>Resources</h1>
<h3>White Papers</h3>
<div class="row card__container">
    @component('components.widget-card-container', [
        'entries' => $white_papers,
        'renderer' => $renderer,
        'type' => 'White Paper',
        'base_slug' => 'white-paper'])
    @endcomponent
</div>
<div class="row">
    <div class="col-xs-12 col-lg-4 offset-lg-4 card__container__button-holder">
        <a href="/white-papers" class="button">See All White Papers</a>
    </div>
</div>
@endsection