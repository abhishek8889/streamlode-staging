@extends('host_layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Register Your account</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            {{ Breadcrumbs::render('register-account') }}
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card card-info">
                <form action="{{ url('register-host-stripe-account') }}" method="POST">
                    <div class="card-body">
                        <div class="col-md-10" >
                            <div class="userform">
                                @csrf
                                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                <h5>Personal Details :</h5>
                                <div class="peronal_details">
                                    <div class="form-group row">
                                        <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" value="{{ auth()->user()->first_name }}">
                                            @error('first_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" value="{{ auth()->user()->last_name }}">
                                            @error('last_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="dob" class="col-sm-3 col-form-label">Date of birth (DOB)</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter your date of birth" value="">
                                            @error('dob')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Personal contact   -->
                                    <div class="form-group row">
                                        <label for="personal_contact" class="col-sm-3 col-form-label">Personal contact <br><span>(Numbers only)</span> </label>
                                        <div class="col-sm-9">
                                            <input type="number" min="0" class="form-control" id="personal_contact" name="personal_contact" placeholder="Enter your personal number" value="">
                                           
                                            @error('personal_contact')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="city" class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city name" value="">
                                            @error('city')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="line1" class="col-sm-3 col-form-label">Street/Line</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="line1" name="line1" placeholder="Enter your street name" value="">
                                            @error('city')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="state" class="col-sm-3 col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state name" value="">
                                            @error('state')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="postal_code" class="col-sm-3 col-form-label">Postal code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Enter your postal code" value="">
                                            @error('postal_code')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Social Security number (SSN) -->
                                    <div class="form-group row">
                                        <label for="ssn" class="col-sm-3 col-form-label">Social Security number (SSN <span>Last 4 Digits</span>) </label>
                                        <div class="col-sm-9">
                                            <input type="number"  min="0"  class="form-control" id="ssn" name="ssn" placeholder="Enter your SSN Number" value="">
                                            @error('ssn')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--  Business Information -->
                                <h5>Business Details :</h5>
                                <div class="business-details">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="{{ isset(auth()->user()->email)?auth()->user()->email:''; }}">
                                            @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="business_phone" class="col-sm-3 col-form-label">Business phone number <br><span>(Numbers only)</span></label>
                                        <div class="col-sm-9">
                                            <input type="number" min="0"  class="form-control" id="business_phone" name="business_phone" placeholder="Enter Your Business Contact Number" value="">
                                            
                                            @error('business_phone')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- |||||||||||||||||  MCC  ||||||||||||||| -->
                                    <!-- <div class="form-group row">
                                        <label for="mcc" class="col-sm-3 col-form-label">Merchant category codes (MCC)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="mcc" name="mcc" placeholder="Enter your Merchant category codes (MCC)" value="">
                                            @error('mcc')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label for="country" class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-9">
                                            <select name="country" id="country" class="form-control">
                                                <option value="US">US</option>
                                            </select>
                                            @error('country')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Bank Details:  -->
                                <h5>Bank Details :</h5>
                                <div class="bank-details">
                                    <div class="form-group row">
                                        <label for="account_holder_name" class="col-sm-3 col-form-label">Account Holder Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="account_holder_name" name="account_holder_name" placeholder="Account Holder Name" value="">
                                            @error('account_holder_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bank_acc_number" class="col-sm-3 col-form-label">Bank account number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bank_acc_number" name="bank_acc_number" placeholder="Bank Account Number" value="">
                                            @error('bank_acc_number')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="acc_routing_num" class="col-sm-3 col-form-label">Account routing number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="acc_routing_num" name="acc_routing_num" placeholder="Account routing number" value="">
                                            @error('acc_routing_num')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bank_acc_region" class="col-sm-3 col-form-label">Bank account region</label>
                                        <div class="col-sm-9">
                                            <select name="bank_acc_region" id="bank_acc_region" class="form-control">
                                                <option value="US">US</option>
                                            </select>
                                            @error('bank_acc_region')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="region_currency" class="col-sm-3 col-form-label">Region currency</label>
                                        <div class="col-sm-9">
                                            <select name="region_currency" id="region_currency" class="form-control">
                                                <option value="USD">USD</option>
                                            </select>
                                            @error('region_currency')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection