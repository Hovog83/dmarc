@extends('layouts.app')

@section('title', 'Lookup')

@section('content')

  <section id="hero">
    <div class="hero-container">
      <h2>Lookup</h2>
      <form action="/lookup/get-dns" method="post" role="form" id="getDns" class="php-email-form">
        <div class="row no-gutters">
          <div class="col-md-6 form-group pr-md-1">
            <input type="text" name="selectot" class="form-control" placeholder="Selectot" />
            <div class="validate" id="selectotValidate"></div>
          </div>
          <div class="col-md-6 form-group pl-md-1">
            <input type="text" class="form-control" name="domen"  placeholder="Domen"  />
            <div class="validate" id="domenValidate"></div>
          </div>
        </div>

        <div class="mb-1">
          <div class="loading">Loading</div>
        </div>
        <input type="submit" > </div>
      </form>
    </div>
	<div class="container mgTop20">
		<div class="row">
			<div class="col-xs-6 table-responsive" id="info"  style="display: none">
					<div>
						<h3>SPF</h3>
						<p id="spfInfo"></p>
					</div>
					<h2>dmarc</h2>
					<table class="table" id="tableDmarc">
						<thead>
							<tr>
								<th>host</th>
								<th>type</th>
								<th>ttl</th>
								<th>txt</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<h2>DKim</h2>
					<table class="table" id="tableDkim">
						<thead>
							<tr>
								<th>host</th>
								<th>type</th>
								<th>ttl</th>
								<th>txt</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>

			</div>	
		</div>
	</div>
  </section>



@endsection