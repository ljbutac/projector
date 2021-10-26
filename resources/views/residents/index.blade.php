@extends('layouts.main')


@section('content')


  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="alert alert-secondary">Barangay Information System</h1>
                       
                    </div>
<div class="row">
<div class=" card mx-auto">

<div> 
       @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
            </div>
                @endif
</div>

    <div class="card-header">
    <div class="row">
           <div class="col">
               <form method="GET" action="{{ route('residents.index')}}">
                   <div class="form-row align-items-center">
                       <div class="col">
                           <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                    placeholder="Search Id and Address">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
                <a href="{{ route('residents.index') }}" class="btn btn-info mb-2">Back</a>
            </div>

            </form>
            
            </div>
            <div>
                <a href="{{route('residents.create') }}" class="btn btn-success"> Create</a>
                    </div>
                </div>
            
</div>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LastName</th>
      <th scope="col">FirstName</th>
      <th scope="col">MiddleName</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">PlaceofBirth</th>
      <th scope="col">DateofBirth</th>
      <th scope="col">Sex</th>
      <th scope="col">CivilStatus</th>
      <th scope="col">Citizenship</th>
      <th scope="col">Occupation</th>
      <th scope="col">4 PS</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
 @foreach($residents as $resident)
 <tr>
      <th scope="row">{{ $resident->id}}</th>
      <td>{{ $resident->lname}}</td>
      <td>{{ $resident->fname}}</td>
      <td>{{ $resident->mname}}</td>
      <td>{{ $resident->age}}</td>
      <td>{{ $resident->address}}</td>
      <td>{{ $resident->placeofbirth}}</td>
      <td>{{ $resident->dateofbirth}}</td>
      <td>{{ $resident->sex}}</td>
      <td>{{ $resident->civilstatus}}</td>
      <td>{{ $resident->citizenship}}</td>
      <td>{{ $resident->occupation}}</td>
      <td>{{ $resident->ps}}</td>
      <td> 

      <a href="{{route('residents.edit',$resident->id) }}" 
        class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <form method="POST" action="{{route('residents.destroy', $resident->id) }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </td>

    </tr>
  @endforeach
  </tbody>
</table>


</div>
</div>

</div>
    @endsection