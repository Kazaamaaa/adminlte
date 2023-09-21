@extends('layout.main')
@section('content')
 <body class="hold-transition sidebar-mini">
    <div class="wrapper">
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>FORM USER</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">USER</a></li>
                  <li class="breadcrumb-item active">CREATE USER</li>
                </ol>
              </div>
            </div>
        </form>
          </div><!-- /.container-fluid -->
        </section>


 <section class="content">
    <div class="container-fluid">
        <form action="{{ route('user.store')}}" method="POST">
            @csrf
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                  @error('name')
                  <small>{{ $message }}</small>
                  @enderror 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    @error('email')
                    <small>{{ $message }}</small>
                    @enderror  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  @error('password')
                  <small>{{ $message }}</small>
                  @enderror  
                </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
         
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </form>
    </div>
  </section>
     </div>
@endsection
