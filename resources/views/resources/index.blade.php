@extends('layout')

@section('body')
<h1 class="page-title">Resources</h1>

<h3>Case Studies</h3>
<div class="row card__container">
    @if(count($case_studies) > 0)
        @component('components.widget-card-container', [
            'entries' => $case_studies,
            'renderer' => $renderer,
            'type' => 'Case Studies',
            'base_slug' => 'case-study'])
        @endcomponent
    @else
        <div class="col-xs-12 col-md-12 card__container__nocontent">No Case Studies Found</div>
    @endif
</div>
@if(count($case_studies) >= 3)
<div class="row">
    <div class="col-xs-12 col-lg-4 offset-lg-4 card__container__button-holder">
        <a href="/case-studies" class="button">See All Case Studies</a>
    </div>
</div>{{-- case-studies --}}
@endif

<h3>White Papers</h3>
<div class="row card__container">
    @if(count($white_papers) > 0)
        @component('components.widget-card-container', [
            'entries' => $white_papers,
            'renderer' => $renderer,
            'type' => 'White Paper',
            'base_slug' => 'white-paper'])
        @endcomponent
    @else
        <div class="col-xs-12 col-md-12 card__container__nocontent">No White Papers Found</div>
    @endif
</div>
@if(count($white_papers) >= 3)
<div class="row">
    <div class="col-xs-12 col-lg-4 offset-lg-4 card__container__button-holder">
        <a href="/white-papers" class="button">See All White Papers</a>
    </div>
</div> {{-- white-papers --}}
@endif

<h3>Ebooks</h3>
<div class="row card__container">
    @if(count($ebooks) > 0)
        @component('components.widget-card-container', [
            'entries' => $ebooks,
            'renderer' => $renderer,
            'type' => 'Ebook',
            'base_slug' => 'ebook'])
        @endcomponent
    @else
        <div class="col-xs-12 col-md-12 card__container__nocontent">No Ebooks Found</div>
    @endif
</div>
@if(count($ebooks) >= 3)
<div class="row">
    <div class="col-xs-12 col-lg-4 offset-lg-4 card__container__button-holder">
        <a href="/ebooks" class="button">See All Ebooks</a>
    </div>
</div> {{-- white-papers --}}
@endif
@endsection