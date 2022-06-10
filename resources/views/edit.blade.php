@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Contact Data
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
      <form method="post" action="{{ route('contacts.update', $contact->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">First Name:</label>
              <input type="text" class="form-control" name="fname" value="{{ $contact->fname }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Last Name:</label>
              <input type="text" class="form-control" name="lname" value="{{ $contact->lname }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Email:</label>
              <input type="text" class="form-control" name="email" value="{{ $contact->email }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Phone:</label>
              <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Subject:</label>
              <input type="text" class="form-control" name="subject" value="{{ $contact->subject }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Message:</label>
              <input type="text" class="form-control" name="message" value="{{ $contact->message }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection