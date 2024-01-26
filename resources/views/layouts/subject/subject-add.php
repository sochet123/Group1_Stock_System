@extends('layouts.master')
@section('title','Subject')
@section('subject','active')

@section('content')
<div class="content-title">
    <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Subject Add</h4>
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="username">Code</label>
                <input type="text" class="form-control" id="code" placeholder="Code" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Code is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Name<span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="name" placeholder="Name">
              <div class="invalid-feedback">
                  Name is required.
              </div>
            </div>
            <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">With textarea</span>
            </div>
        <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

            
            <hr class="mb-4">
            <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>
    
</div>
@endsection