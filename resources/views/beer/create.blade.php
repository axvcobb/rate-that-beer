@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADD A BEER</div>
                <div class="card-body">
                  <form method="POST" action="/beer">
                    @csrf
                    <div class="form-group">
                      <label for="name">Beer Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                      <label for="brewery">Brewery Name</label>
                      <input type="text" class="form-control" name="brewery">
                    </div>
                    <div class="form-group">
                      <label for="style">Style</label>
                      <input type="text" class="form-control" name="style">
                    </div>
                    <div class="form-group">
                      <label for="abv">ABV</label>
                      <input type="text" class="form-control" name="abv">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
