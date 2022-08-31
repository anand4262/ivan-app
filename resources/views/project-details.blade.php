@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card p-4">
        <h1>Tata Consultancy Services</h1>
        <h4>#React Developers</h4>
        <h5>Related Major: Web Developer</h5>
        <h5>Location: Hyderabd</h5>
        <p>No of applicatiants needed: <span class="bg-light px-2 py-1 rounded">4 </span></p>
        <p class="bg-light p-4 rounded">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet optio eum nulla iure eos quae eveniet blanditiis odit qui perspiciatis, asperiores sapiente id hic error. Accusamus dolorum illum aliquam beatae.</p>
        <h2 class="mt-4">Applied Users</h2>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>John</td>
                <td>Doe</td>
              </tr>
            </tbody>
          </table>
        <form action="post" class="mt-3">
            @csrf
            <input type="submit" value="Apply for this project" class="btn btn-dark w-100">
        </form>
    </div>
</div>
@endsection