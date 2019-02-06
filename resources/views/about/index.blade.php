@extends('layout')

@section('body')
<div class="row about">
  <div class="col-xs-12 col-md-12">
    <div class="about__header">
      <h1>{{ $entry->header }}</h1>
      @if( $entry->description )
      <div>{!! $entry->description !!}</div>
      @endif
    </div>
  </div>
</div>{{-- /.about --}}
<div class="row about__employees">
  <div class="col-xs-12 col-md-12">
    @if( $entry->employeeHeader )
      <h1 class="about__employees__header">{{ $entry->employeeHeader }}</h1>
    @endif
  </div>
</div>{{-- /.about__employees --}}
<div class="row about__employees__container">
  @foreach( $entry->employees as $employee )
    <a href="/about/{{ $employee->slug }}" class="col-xs-12 col-md-6 col-lg-4 about__employees__container__employee">
      <img src="{{ $employee->headshot->getFile()->getUrl() }}" alt="{{ $employee->fullName }}">
      <div class="about__employees__container__employee__content">
        <h3>{{ $employee->fullName }}</h3>
        <span>{{ $employee->title }}</span>
      </div>
    </a>
  @endforeach
</div>
@endsection