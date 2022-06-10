<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Contacts Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">First Name:</label>
              <input type="text" class="form-control" name="fname"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="country_name">Last Name:</label>
              <input type="text" class="form-control" name="lname"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="country_name">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="country_name">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="country_name">Subject:</label>
              <input type="text" class="form-control" name="subject"/>
          </div>
          <div class="form-group">
              <label for="cases">Message:</label>
              <input type="text" class="form-control" name="message"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Contact</button>
      </form>
  </div>
</div>
@endsection