@extends('layouts.app')
@section('content')
<div class="card mb-5 p-4 d-flex flex-row justify-content-between align-items-center">
   <div class="project-info">
      <h4>Project Title</h4>
      <p>Company Name, location</p>
      <a href="" class="btn btn-dark">Apply Now</a>
   </div>
   <div class="app_count card p-3 text-center bg-light">
     <p>Total no. of applcations</p>
     <h5>23</h5>
   </div>
</div>
<div class="card p-4 ">
    <h3 class="text-center mb-3">Top Companies</h3>
    <div class="single-top-list ">
        <h4 class="mb-3">Company Name</h4>
        <p>Projects posted: <span class="bg-warning p-2 rounded">23</span> </p>
    </div>
    <hr class="bg-dark border-2  border-dark mt-0 mb-3">
    <div class="single-top-list ">
        <h4 class="mb-3">Company Name</h4>
        <p>Projects posted: <span class="bg-warning p-2 rounded">23</span> </p>
    </div>
    <hr class="bg-dark border-2  border-dark mt-0 mb-0">
</div>
@endsection