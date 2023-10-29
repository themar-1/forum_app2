@extends('layouts.adminLayout')
@section('content')
    @switch($temp)
        @case(1)
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
                                                        <h5>Home</h5>
                                                    </div>
                                                    <ul class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="index.blade.php"><i
                                                                    class="feather icon-home"></i></a></li>
                                                        <li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- [ breadcrumb ] end -->
                                    <!-- [ Main Content ] start -->
                                    <div class="row">

                                        <!-- product profit start -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card prod-p-card bg-c-red">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-25">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">Entreprises</h6>
                                                            <h3 class="m-b-0 text-white">
                                                                @if (isset($entreprises))
                                                                    <h3 class="m-b-0 text-white">{{ count($entreprises) }}</h3>
                                                                @else
                                                                    <p>No data.</p>
                                                                @endif
                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-building"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card prod-p-card bg-c-blue">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-25">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">Stagiaires</h6>
                                                            <h3 class="m-b-0 text-white">
                                                                @if (isset($stg))
                                                                    <h3 class="m-b-0 text-white">{{ count($stg) }}</h3>
                                                                @else
                                                                    <p>No data.</p>
                                                                @endif

                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-user-graduate"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card prod-p-card bg-c-green">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-25">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">S'inscrire</h6>
                                                            <h3 class="m-b-0 text-white">
                                                                @if (isset($loginaction))
                                                                    <h3 class="m-b-0 text-white">{{ count($loginaction) }}</h3>
                                                                @else
                                                                    <p>Not data.</p>
                                                                @endif
                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-user-plus"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card prod-p-card bg-c-yellow">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-25">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">Entretiens</h6>
                                                            <h3 class="m-b-0 text-white">
                                                                @if (isset($Entretien))
                                                                    <h3 class="m-b-0 text-white">{{ count($Entretien) }}</h3>
                                                                @else
                                                                    <p>Not data.</p>
                                                                @endif
                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-briefcase"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product profit end -->


                                        <!-- sessions-section start -->
                                        @include('admin/TableStg')

                                    </div>

                                    <!-- [ Main Content ] end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case(2)
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
                                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                                placeholder="Enter Admin Name" name="name">
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
                                        <div class="form-check  m-2">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">je veux ajouter</label>
                                        </div>
                                        <input type="number" class="d-none" value="1" name="role">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case(3)
            <div class="pcoded-main-container text-capitalize">
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
                                                        <li class="breadcrumb-item"><a href="#!">Ajouter entreprises</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('admin.ajouter.add_E') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">nom :</label>
                                                    <input type="text" class="form-control" id="name"
                                                        aria-describedby="emailHelp" placeholder="nom" name="nom">
                                                    @error('name')
                                                        <bold class="text-danger">{{ $message }}</bold>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="representant">representant :</label>
                                                    <input type="text" class="form-control" id="representant"
                                                        aria-describedby="emailHelp" placeholder="representant"
                                                        name="representant">
                                                    @error('representant')
                                                        <bold class="text-danger">{{ $message }}</bold>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="activite">activite :</label>
                                                    <input type="text" class="form-control" id="activite"
                                                        aria-describedby="emailHelp" placeholder="activite" name="activite">
                                                    @error('activite')
                                                        <bold class="text-danger">{{ $message }}</bold>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="logo">logo :</label>
                                                    <input type="url" class="form-control" id="logo"
                                                        aria-describedby="emailHelp" placeholder="https://www.example.com"
                                                        name="logo">
                                                    @error('logo')
                                                        <bold class="text-danger">{{ $message }}</bold>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="web">web :</label>
                                                    <input type="url" class="form-control" id="web"
                                                        aria-describedby="emailHelp" placeholder="https://www.yourdomain.com"
                                                        name="web">
                                                    @error('web')
                                                        <bold class="text-danger">{{ $message }}</bold>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">email :</label>
                                                    <input type="email" class="form-control" id="email"
                                                        aria-describedby="emailHelp" placeholder="email" name="email">
                                                    @error('email')
                                                        <bold class="text-danger">{{ $message }}</bold>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="stand">stand :</label>
                                                    <input type="number" class="form-control" id="stand"
                                                        aria-describedby="emailHelp" placeholder="stand" name="stand">
                                                    @error('stand')
                                                        <bold class="text-danger">{{ $message }}</bold>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" class="mt-3 btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case(4)
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
                                        <div class="form-check  m-2">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">je veux ajouter</label>
                                        </div>
                                        <input type="number" class="d-none" value="1" name="role">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case(5)
            @include('includes.header', ['temp' => '5'])
        @break

        @case(6)
            @include('includes.header', ['temp' => '6'])
        @break
    @endswitch

@endsection
