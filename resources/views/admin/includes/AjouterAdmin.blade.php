@extends('admin.index',['menu'=>2])
@section('title', 'Ajouter Admin') 
@section('content') 

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5>Space</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.blade.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Ajouter Admin</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.ajouter.add_A') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Admin name</label>
                                <input type="text" class="form-control" id="name"
                                    aria-describedby="emailHelp" placeholder="Enter Admin Name" name="name">
                                @error('name')
                                    <bold class="text-danger">{{ $message }}</bold>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" name="password">
                                @error('password')
                                    <bold class="text-danger">{{ $message }}</bold>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <input type="number" class="d-none" value="1" name="role">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 