


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
                  
              
                <a href="{{ route('residents.index') }}" class="btn btn-info mb-2">Back</a>
            </div>

            </form>
            
            </div>
       
                </div>
            
</div>
<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LastName</th>
      <th scope="col">FirstName</th>
      <th scope="col">MiddleName</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Town</th>
      <th scope="col">Province</th>
      <th scope="col">PlaceofBirth</th>
      <th scope="col">DateofBirth</th>
      <th scope="col">Sex</th>
      <th scope="col">CivilStatus</th>
      <th scope="col">Citizenship</th>
      <th scope="col">Occupation</th>
      <th scope="col">4 PS</th>

    </tr>
  </thead>
  <tbody>

 <tr>
      <th scope="row">{{ $resident->id}}</th>
      <td>{{ $resident->lname}}</td>
      <td>{{ $resident->fname}}</td>
      <td>{{ $resident->mname}}</td>
      <td>{{ $resident->age}}</td>
      <td>{{ $resident->address}}</td>
      <td>{{ $resident->town}}</td>
      <td>{{ $resident->province}}</td>
      <td>{{ $resident->placeofbirth}}</td>
      <td>{{ $resident->dateofbirth}}</td>
      <td>{{ $resident->sex}}</td>
      <td>{{ $resident->civilstatus}}</td>
      <td>{{ $resident->citizenship}}</td>
      <td>{{ $resident->occupation}}</td>
      <td>{{ $resident->ps}}</td>
    </tr>

  </tbody>
</table>


</div>
</div>

</div>
    @endsection