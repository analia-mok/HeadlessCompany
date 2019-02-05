@extends('layout')

@section('body')
<div class="row career">
  <div class="col-xs-12 col-md-12">
    <h2>{{ $entry->jobTitle }}</h2>
    <h3>{{ $entry->department }}</h3>

    <div>{!! $entry->jobDescription !!}</div>
    @if( count($entry->requirementsLists) > 0 )
      @foreach( $entry->requirementsLists as $list)
        <section class="career__list">
          <h3>{{ $list->listHeader }}</h3>
          <ul>
            @foreach($list->listItems as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </section>
      @endforeach
    @endif

    <div class="career__location">
      @if( $entry->isRemote )
        <strong class="career__location__remote">Available as a Remote Position</strong>
      @endif

      @if( $entry->location )
        <p>Position located at our headquarters in New Haven, CT</p>
      @endif
    </div>

    <div class="career__btn-container">
      <a href="#" class="career__apply-btn button">APPLY NOW</a>
    </div>
  </div>
</div>
@endsection