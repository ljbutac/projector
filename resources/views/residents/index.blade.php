


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
                                    placeholder="Search  Address">
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
      <th scope="col">Operation</th>

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

      <td> 
        <div class="btn-group">
        <a href="{{route('residents.show',$resident->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> </a> 

       <!-- Button trigger modal -->
       <a href="{{route('residents.edit',$resident->id) }}" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-pencil"></i> </a> 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to edit?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a href="{{route('residents.edit',$resident->id) }}" class="btn btn-primary" >Yes</a>
  
      </div>
    </div>
  </div>
    </div>
   

  
<!-- Button trigger modal -->
<button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-trash"></i></button>
<form  action="{{route('residents.destroy', $resident->id) }}" method="POST">
@csrf
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>

        <button  class="btn btn-danger">Yes</button>

       
        @method('DELETE')
      </div>
   
    </div>
 
  </div>
</div>
  
</form>  

</div>

      
      </td>

    </tr>
  @endforeach
  </tbody>
</table>
{{$residents->links()}}

</div>
</div>

</div>
    @endsection