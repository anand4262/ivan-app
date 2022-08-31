@extends('layouts.app')
@section('content')
<div class="conatiner">
    <div class="card p-4">
        <form method="post">
            @csrf
            <div class="form-group">
              <label for="company-name">Company Name</label>
              <input type="email" class="form-control" id="company-name" name="company_name" aria-describedby="emailHelp" placeholder="Enter company name">
            </div>
            <div class="form-group mt-3">
              <label for="location">Location</label>
              <input type="text" class="form-control" name="location" id="location" placeholder="Enter location">
            </div>
            <div class="form-group mt-3">
                <label for="project-title">Project Title</label>
                <input type="text" class="form-control" name="project_title" id="project-title" placeholder="Enter project title">
            </div>
            <div class="form-group mt-3">
                <label for="project-title">Related Major</label>
                <input type="text" class="form-control" name="project_title" id="project-title" placeholder="Enter related major">
            </div>
            <div class="form-group mt-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
              </div>
            <div class="form-group mt-3">
                <label for="people-required">People Required</label>
                <input type="text" class="form-control" name="people_required" id="people-required" placeholder="Enter related major">
            </div>
            <button type="submit" class="btn btn-dark mt-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection