@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')

         <div class="card card-primary card-outline mb-4">
        <h5 class="card-header">PROFILE</h5>
        <h5 class="card-title card-body">Welcome to Profile Panel. This panel serves as your auto PDF form</h5>
        <div class="card-body">
          <div class="alert alert-primary" role="alert"><strong>Personal Information</strong></div>
          <p class="card-text"></p>
          <form class="row g-3">
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Middle Name</label>
              <input type="text" class="form-control" id="inputEmail4">
              <p>{{-- just for space --}}</p>
            </div>
            <div class="col-md-3">
                 
                <label for="inputEmail4" class="form-label">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="inputEmail4">
              </div>
              <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Ext. Name</label>
                  <select class="form-control" aria-label="Default select example">
                    <option selected>[ Select ]</option>
                    <option value="1">JR</option>
                    <option value="2">SR</option>
                    <option value="3">I</option>
                    <option value="3">II</option>
                    <option value="3">III</option>
                    <option value="3">IV</option>
                    <option value="3">V</option>
                  </select>
              </div>
            <div class="col-md-3">
              <label for="inputAddress" class="form-label">Date of Birth<span class="text-danger">*</span></label>
              <input type="date" class="form-control" id="date" placeholder="">
            </div>
            <div class="col-md-6">
              <label for="inputAddress2" class="form-label">Place of Birth<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              <p>{{-- just for space --}}</p>
            </div>
            <div class="col-md-3">
              <label for="inputCity" class="form-label">Sex<span class="text-danger">* </span></label>
              <div class="form-check mt-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>              
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">Sex<span class="text-danger">* </span></label>
              <div class="form-check mt-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="option1">
                  <label class="form-check-label" for="inlineRadio3">Single</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio4" value="option2">
                  <label class="form-check-label" for="inlineRadio4">Married</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio5" value="option2">
                  <label class="form-check-label" for="inlineRadio5">Separated</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio6" value="option2">
                  <label class="form-check-label" for="inlineRadio6">Widow</label>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <label for="inputCity" class="form-label">Citizenship<span class="text-danger">* </span></label>
              <div class="form-check mt-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="citizenship1" value="option1">
                  <label class="form-check-label" for="citizenship1">Filipino</label>    
              </div>              
                
              </div>
            </div>
            <div class="col-md-2">
              <label for="inputCity" class="form-label">Dual Citizenship<span class="text-danger">* </span></label>
              <div class="form-check mt-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="dualcitizenship1" value="option1">
                  <label class="form-check-label" for="dualcitizenship1">Dual Citizenship</label>    
              </div>              
              </div>
            </div>
            <div class="col-md-2">
              <label for="dualc" class="form-label">Citizenship Process</label>
                <select class="form-control" aria-label="Default select example">
                  <option selected>[ Select ]</option>
                  <option value="1">By Birth</option>
                  <option value="2">by Citizenship</option>
                </select>
                <p>{{-- just for space --}}</p>
            </div>
            <div class="col-md-2">
              <label for="dualcc" class="form-label">Select Country</label>
                <select class="form-control" aria-label="Default select example">
                  <option selected>[ Select ]</option>
                  <option value="1">Afghanistan</option>
                  <option value="2">Afg</option>
                </select>
            </div>
            <div class="col-md-3">
              <label for="religion" class="form-label">Religion/Belief<span class="text-danger">* </span></label>
                <select class="form-control" aria-label="Default select example">
                  <option selected>[ Select ]</option>
                  <option value="1">Christianity</option>
                  <option value="2">Islam</option>
                  <option value="2">Others</option>
                </select>
            </div>
            <div class="col-md-3">
              <label for="inputAddress2" class="form-label">Height (m)<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Meters..."> 
            </div>
            <div class="col-md-3">
              <label for="inputAddress2" class="form-label">Weight (kg)<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Kilos..."> 
            </div>
            <div class="col-md-3">
              <label for="dualcc" class="form-label">Blood Type<span class="text-danger">* </span></label>
                <select class="form-control" aria-label="Default select example">
                  <option selected>[ Select ]</option>
                  <option value="OP">O positive</option>
                  <option value="ON">O negative</option>
                  <option value="AP">A positive</option>
                  <option value="AN">A negative</option>
                  <option value="BP">B positive</option>
                  <option value="BN">B negative</option>
                  <option value="BP">AB positive</option>
                  <option value="BN">AB negative</option>
                  <option value="N/A">B positive</option>
                </select>
                <p>{{-- just for space --}}</p>
            </div>
            <div class="col-md-12">
              <div class=" col-md-12 alert alert-primary" role="alert"><strong>Address and Contacts</strong></div>
            </div>
            <div class="col-md-3">
              <label for="inputEmail4" class="form-label">Telephone</label>
            <input type="text" class="form-control" id="inputTelephone" placeholder="(000) 000-0000">
          </div>
          <div class="col-md-3">
            <label for="inputEmail4" class="form-label">Mobile Number. (1) <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="____-___-____">
        </div>
        <div class="col-md-3">
          <label for="inputEmail4" class="form-label">Mobile Number. (2)</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="____-___-____">
        <p>{{-- just for space --}}</p>
      </div>
      <div class="col-md-3">
        <label for="inputEmail4" class="form-label">Email</label>
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="email" aria-label="Username" aria-describedby="basic-addon1">
          
        </div>
      </div>
      <div class="col-md-12">
        <div  class=" alert alert-secondary" role="alert"><strong>Residential Address</strong></div>
      </div>
      <div class="col-md-4">
        <label for="inputEmail4" class="form-label">House/Block/Lot. No.</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Street  </label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="">
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Subdivision/Village/Purok</label>
  <input type="text" class="form-control" id="inputEmail4" placeholder="">
  <p>{{-- just for space --}}</p>
</div>
<div class="col-md-3">
  <label for="dualcc" class="form-label">Region</label>
    <select class="form-control" aria-label="Default select example">
      <option selected>[ Select ]</option>
      <option value="1">Afghanistan</option>
      <option value="2">Afg</option>
    </select>
</div>
<div class="col-md-3">
  <label for="dualcc" class="form-label">Province</label>
    <select class="form-control" aria-label="Default select example">
      <option selected>[ Select ]</option>
      <option value="1">Afghanistan</option>
      <option value="2">Afg</option>
    </select>
</div>
<div class="col-md-3">
  <label for="dualcc" class="form-label">Municipality</label>
    <select class="form-control" aria-label="Default select example">
      <option selected>[ Select ]</option>
      <option value="1">Afghanistan</option>
      <option value="2">Afg</option>
    </select>
</div>
<div class="col-md-3">
  <label for="dualcc" class="form-label">Barangay</label>
    <select class="form-control" aria-label="Default select example">
      <option selected>[ Select ]</option>
      <option value="1">Afghanistan</option>
      <option value="2">Afg</option>
    </select>
    <p>{{-- just for space --}}</p>
</div>
<div class="col-md-12">
  <div  class=" alert alert-secondary" role="alert"><strong>Permanent Address</strong></div>
</div>
<div class="col-md-4">
  <label for="inputEmail4" class="form-label">House/Block/Lot. No.</label>
<input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<div class="col-md-4">
<label for="inputEmail4" class="form-label">Street  </label>
<input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<div class="col-md-4">
<label for="inputEmail4" class="form-label">Subdivision/Village/Purok</label>
<input type="text" class="form-control" id="inputEmail4" placeholder="">
<p>{{-- just for space --}}</p>
</div>
<div class="col-md-3">
<label for="dualcc" class="form-label">Region</label>
<select class="form-control" aria-label="Default select example">
<option selected>[ Select ]</option>
<option value="1">Afghanistan</option>
<option value="2">Afg</option>
</select>
</div>
<div class="col-md-3">
<label for="dualcc" class="form-label">Province</label>
<select class="form-control" aria-label="Default select example">
<option selected>[ Select ]</option>
<option value="1">Afghanistan</option>
<option value="2">Afg</option>
</select>
</div>
<div class="col-md-3">
<label for="dualcc" class="form-label">Municipality</label>
<select class="form-control" aria-label="Default select example">
<option selected>[ Select ]</option>
<option value="1">Afghanistan</option>
<option value="2">Afg</option>
</select>
</div>
<div class="col-md-3">
<label for="dualcc" class="form-label">Barangay</label>
<select class="form-control" aria-label="Default select example">
<option selected>[ Select ]</option>
<option value="1">Afghanistan</option>
<option value="2">Afg</option>
</select>
<p>{{-- just for space --}}</p>
<p>{{-- just for space --}}</p>
</div>

<div class="col-md-12">
<div class="d-flex justify-content-end">
  <button class="btn btn-primary col-md-2" type="button">SAVE</button>
</div>
</div>



      
      
          </form>
          
      </div>
      
@stop