@extends('layout')

@section('body')
<div class="container careers">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <section class="careers__header">
        @if( count($entries) > 0 )
          <h1 class="careers__title">Headless Is Hiring!</h1>
          <span>Join the Headless crew today</span>
        @else
          <h1>Careers</h1>
        @endif
      </section>
      <div class="careers__careers">
        @if( count($entries) > 0 )
          @foreach( $departments as $dept)
            <section class="careers__careers__section">
              <h2>{{ $dept['title'] }}</h2>
              <ul>
                @foreach($dept['listings'] as $listing)
                  <li><a href="/career/{{ $listing->slug }}">{{ $listing->jobTitle }}</a></li>
                @endforeach
              </ul>
            </section>
          @endforeach
        @else
          <p>Sorry, we have available jobs</p>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection