@extends('layouts.main')


@section('content')


  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="alert alert-secondary">Update Resident Information</h1>
                       
                    </div>
                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="alert alert-info">
                    {{ __('Update Fill Up Form') }}
                     <a href="{{ route('residents.index') }}" class="float-right">Back</a>

                </div>
               
                <div class="card-body">
                    <form method="POST" action="{{ route('residents.update', $resident->id) }}">
                        @csrf
                       @method('PUT')
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="lname" value="{{ old('lname', $resident->lname) }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror"
                                 name="fname" value="{{ old('fname',$resident->fname) }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middlename') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="mname" value="{{ old('mname',$resident->mname) }}" required autocomplete="mname" autofocus>

                                @error('mname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="age" value="{{ old('age',$resident->age) }}" required autocomplete="age">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="address" value="{{ old('address',$resident->address) }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="placeofbirth" class="col-md-4 col-form-label text-md-right">{{ __('PlaceofBirth') }}</label>

                            <div class="col-md-6">
                                <input id="placeofbirth" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="placeofbirth" value="{{ old('placeofbirth', $resident->placeofbirth) }}" required autocomplete="placeofbirth" autofocus>

                                @error('placeofbirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('DateofBirth') }}</label>

                            <div class="col-md-6">
                                <input id="dateofbirth" type="date" class="form-control @error('name') is-invalid @enderror" 
                                name="dateofbirth" value="{{ old('dateofbirth',$resident->dateofbirth) }}" required autocomplete="dateofbirth" autofocus>

                                @error('dateofbirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="sex" value="{{ old('sex',$resident->sex) }}" required autocomplete="sex" autofocus>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="civilstatus" class="col-md-4 col-form-label text-md-right">{{ __('Civil Status') }}</label>

                            <div class="col-md-6">
                                <input id="civilstatus" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="civilstatus" value="{{ old('civilstatus',$resident->civilstatus) }}" required autocomplete="civilstatus" autofocus>

                                @error('civilstatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}</label>

                            <div class="col-md-6">
                                <input id="citizenship" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="citizenship" value="{{ old('citizenship',$resident->citizenship) }}" required autocomplete="citizenship" autofocus>

                                @error('citizenship')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="occupation" value="{{ old('occupation',$resident->occupation) }}" required autocomplete="occupation" autofocus>

                                @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ps" class="col-md-4 col-form-label text-md-right">{{ __('4 PS') }}</label>

                            <div class="col-md-6">
                                <input id="ps" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="ps" value="{{ old('ps',$resident->ps) }}" required autocomplete="ps" autofocus>

                                @error('ps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="m-2 p-2">


            
<form method="POST" action="{{route('residents.destroy', $resident->id) }}">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">Delete Id no: {{$resident->id}}</button>
</form>
        </div>
    </div>
</div>
    @endsection