@extends('layouts.app')

@section('title', 'Xml view')

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
  <div class="container mgTop20">
    <h2>Xml view</h2>
    <table class="dmarc-table table" style="background:#fff">
          <thead>
              <tr>
                  <th>IP Address</th>
                  <th>count</th>
                  <th>Header from</th>
                  <th>DKIM status</th>
                  <th>SPF status</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($xml  as $val)
              <tr class="xmlRow">
                  <td >{{$val->row->source_ip}}</td>
                  <td >{{$val->row->count}}</td>
                  <td >{{$val->identifiers->header_from}}</td>
                  <td class="dkum">{{$val->row->policy_evaluated->dkim}}</td>
                  <td class="spf">{{$val->row->policy_evaluated->spf}}</td>
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
@endsection