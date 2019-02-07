@extends('layout')

@section('body')
<section class="row contact">
  <div class="col-xs-12 col-md-12">
    <h1>{{ $entry->title }}</h1>
    <div class="contact__description">{!! $renderer->render($entry->description) !!}</div>
  </div>
</section>
<section class="row contact">
  <div class="col-xs-12 col-md-8">
    <div class="form">
      <form method="POST" action="#">
          @csrf
          <input type="text" name="first_name" placeholder="First Name" required>
          <input type="text" name="last_name" placeholder="Last Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="tel" name="phone" placeholder="Phone">
          <input type="text" name="company" placeholder="Company">
          <input type="text" name="subject" placeholder="Subject">
          <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
          <input type="submit" value="Send" class="button" disabled>
      </form>
    </div>
  </div>
  <div class="col-xs-12 col-md-4">
    <div class="contact__address">
      <h3>Address</h3>
      <div>{!! $entry->address !!}</div>
    </div>
    <div class="contact__phone">
      <h3>Phone Number</h3>
      <p>{{ $entry->phoneNumber }}</p>
    </div>
    <div class="contact__email">
      <h3>Human Resources Email</h3>
      <p>{{ $entry->contactEmail }}</p>
    </div>
  </div>
</section>
@endsection