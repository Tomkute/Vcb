@extends('layouts.main')
@section('contents')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="card card-info p-5">
            <div class="card-header">
                <h3 class="card-title text-center"> Form Login</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-6 col-form-label" >UserName</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3"
                                   placeholder="Username" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-6 col-form-label" >Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3"
                                   placeholder="Password" name="password">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sign in</button>

                </div>
            </form>
        </div>
    </div>
@endsection
