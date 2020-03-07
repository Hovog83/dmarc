@extends('layouts.app')

@section('title', 'Lookup')

@section('content')

  <section id="hero">
    <div class="hero-container">
      <h2>Xml</h2>
      <form action="/xml-reader"  method="POST" enctype="multipart/form-data" class="php-email-form">
        <div class="row no-gutters">
          <div class="col-md-6 form-group pr-md-1">
          	{{ csrf_field() }}
            <input type="file" name="file"   />
            <div class="validate"></div>
          </div>
        </div>
        <input type="submit" >
      </form>
    </div>
  </section>


@endsection