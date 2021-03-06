@extends('layouts.main')


@section('content')

<link rel="stylesheet" type="text/css" href="{{url('css/flex.css')}}">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="alert alert-secondary">Add Resident Information</h1>
                       
                    </div>
                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  class="alert alert-info"  >
                    {{ __('Fill Up Form') }}
                    <a href="{{ route('residents.index') }}" class="btn btn-info float-right">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('residents.store') }}">
                        @csrf
                  
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror"
                                 name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="mname" value="{{ old('mname') }}" required autocomplete="mname" autofocus>

                                @error('mname')
                                    <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        


                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="age" value="{{ old('age') }}" required autocomplete="age">

                                @error('age')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="address" id="exampleFormControlSelect1">
                                    <option>Select Barangay</option>
                                    <option>Acnam</option>
                                    <option>Barangobong</option>
                                    <option>Barikir</option>
                                    <option>Bugayong</option>
                                    <option>Cabittauran</option>
                                    <option>Caray</option>
                                    <option>Garnaden</option>
                                    <option>Naguillan (Pagpag-ong)</option>
                                    <option>Poblacion</option>
                                    <option>Santo Ni??o</option>
                                    <option>Uguis</option>
                                </select>

                                @error('address')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="town" class="col-md-4 col-form-label text-md-right">{{ __('Town') }}</label>

                            <div class="col-md-6">
                      <input disable id="town" type="text" class="form-control" name="town" 
                      placeholder="Nueva Era" value="Nueva Era">
                      
                         
                                 
                               
                                @error('town')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="town" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                            <div class="col-md-6">
                      <input disable id="province" type="text" class="form-control" name="province" 
                      placeholder="Ilocos Norte" value="Ilocos Norte">
                      
                         
                                 
                               
                                @error('province')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="placeofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Place of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="placeofbirth" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="placeofbirth" value="{{ old('placeofbirth') }}" required autocomplete="placeofbirth" autofocus>

                                @error('placeofbirth')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dateofbirth" type="date" class="form-control @error('name') is-invalid @enderror" 
                                name="dateofbirth" value="{{ old('dateofbirth') }}" required autocomplete="dateofbirth" autofocus>

                                @error('dateofbirth')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="sex" id="exampleFormControlSelect1">
                                    <option>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                                @error('sex')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="civilstatus" class="col-md-4 col-form-label text-md-right">{{ __('Civil Status') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="civilstatus" id="exampleFormControlSelect1">
                                    <option>Select</option>
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Widowed</option>
                                    <option>Divorced</option>
                                </select>

                                @error('civilstatus')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}</label>

                            <div class="col-md-6">
                      <input disable id="citizenship" type="text" class="form-control" name="citizenship" 
                      placeholder="Filipino" value="Filipino">
                      
                         
                                 
                               
                                @error('citizenship')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>

                                @error('occupation')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ps" class="col-md-4 col-form-label text-md-right">{{ __('4 PS') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="ps" id="exampleFormControlSelect1">
                                    <option>Select</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>

                                @error('ps')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection