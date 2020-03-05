@extends('layouts.app')

@section('title', 'Lookup')

@section('content')

  <section id="hero">
    <div class="">
      <h2>Xml views</h2>
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
                        @foreach ($xml->record as $val)
                          <tr >
                              <td >{{$val->row->source_ip}}</td>
                              <td >{{$val->row->count}}</td>
                              <td >{{$val->identifiers->header_from}}</td>
                              <td >{{$val->row->policy_evaluated->dkim}}</td>
                              <td >{{$val->row->policy_evaluated->spf}}</td>
                          </tr>
                        @endforeach

                      </tbody>
                  </table>
    </div>
  </section>


@endsection