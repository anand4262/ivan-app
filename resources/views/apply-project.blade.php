@extends('layouts.app')
@section('content')
<div class="container w-50 m-auto">
    <div class="card p-4">
        <h4>Fill the form to apply for the project</h4>
        <form method="post">
            @csrf
            <div class="form-group">
              <label for="first-name">First Name</label>
              <input type="email" class="form-control" id="first-name" name="first_name" aria-describedby="emailHelp" placeholder="Enter first name">
            </div>
            <div class="form-group mt-3">
              <label for="last-name">Last Name</label>
              <input type="text" class="form-control" name="last_name" id="last-name" placeholder="Enter last name">
            </div>
            <div class="form-group mt-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
              </div>
            <button type="submit" class="btn btn-dark mt-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection