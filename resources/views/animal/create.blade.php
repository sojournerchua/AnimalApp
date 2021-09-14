@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
      <div class=col-8 offset-2">
        <div class="form-group row">
          <label for="animalname" class="col-md-4 col-form-label"> Animal name </label>


                <input id="animalname"
                   type="text"
                   class="form-control"
                   name="animalname"
                   value="{{ old('animalname') }}"
                   autocomplete="animalname" autofocus>

            <div class="row pt-3">
              <label for="image" class="col-md-4 col-form-label"> Animal Image </label>

              <input type="file" class="form-control-file" id="image" name="image">
            </div>
          </div>
          </div>

          <div class="row pt-3">
            <button class="btn btn-primary"> Submit </button>
          </div>
</div>

  </form>
</div>


@endsection
