@extends('admin_layout.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            {{ Breadcrumbs::render('Admin-setting') }}
            </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                <div class="text-center">
                    @if(isset(auth()->user()->profile_image_name) || !empty(auth()->user()->profile_image_name))
                    @if(auth()->user()->profile_image_name == "" || auth()->user()->profile_image_name == null)
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('Assets/images/default-avatar.jpg') }}" alt="default image">
                    @else
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('Assets/images/user-profile-images/'.auth()->user()->profile_image_name)  }}" alt="{{ auth()->user()->profile_image_name }}">
                    @endif
                    @else
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('Assets/images/default-avatar.jpg') }}" alt="default image">
                    @endif
                </div>
                @if(isset(auth()->user()->first_name) || !empty(auth()->user()->last_name))
                <h3 class="profile-username text-center">{{ auth()->user()->first_name. ' ' .auth()->user()->last_name }}</h3>
                @endif
                <!-- profile occupation -->
                <p class="text-muted text-center"></p>
                

                <!-- <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                </ul> -->
                <button type="button" class="btn btn-primary  btn-block" data-toggle="modal" data-target="#modal-default">
                Upload Profile
                </button>
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action="{{ url('/admin/admin-profile-update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Want to change profile ?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                @if( isset( auth()->user()->profile_image_url ) || !empty( auth()->user()->profile_image_url) )
                                <input type="hidden" name="profile_exist" value="1">
                                @else
                                <input type="hidden" name="profile_exist" value="0">
                                @endif
                            <input type="file" name="profile_img">
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Upload Profile</button>
                            </div>
                        </div>
                    </form>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- <a href="#" class="btn btn-primary btn-block"><b>upload Profile</b></a> -->
                </div>
                <!-- /.card-body -->
            </div>
            @error('profile_img')
                <div class="text text-danger">{{ $message }}</div>
            @enderror
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#passwordTab" data-toggle="tab">Password</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="settings">
                            <form action="{{ url('/admin/admin-update') }}" id="general_setting_form" method="POST" class="form-horizontal">
                                @csrf
                                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fname" placeholder="First Name" name="first_name" value="{{ !empty(auth()->user()->first_name)?auth()->user()->first_name: ''; }}" />
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name" name="last_name" value="{{ !empty(auth()->user()->last_name)?auth()->user()->last_name: ''; }}"  />
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ !empty(auth()->user()->email)?auth()->user()->email: ''; }}" />
                                    
                                    <span class="text-center" id="email_error"></span>
                                    </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputName2" placeholder="Phone" name="phone" value="{{ !empty(auth()->user()->phone)?auth()->user()->phone: ''; }}" />
                                    </div>
                                    </div>
                                  
                                   
                                
                                    <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- password tab -->
                        <!-- <div class="tab-pane" id="passwordTab">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                <label for="fname" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="inputName2" placeholder="Phone">
                                </div>
                                </div>
                            
                                <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<script>
      $(document).ready(function(){
        $('#general_setting_form').on('submit',function(e){
          // e.preventDefault();
        
            email = $('#email').val();
         extension =  email.at(-4)+email.at(-3)+email.at(-2)+email.at(-1);
        
         if(extension == '.com'){
          return true;
          // $('#general_setting_form').submit();
          // console.log('done');
         }else{
          $('#email_error').html('your email format is not valid');
          return false;
          // console.log('errror');
         }
        });
    });
</script>
@endsection