<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>dash</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>


    @include('admin/temp/NavMenu')
    @include('admin/temp/Header')


    @switch($temp)
        @case(1)
            {{-- @include('includes.dash', ['temp' => 1]) --}}
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
                                                                @if (isset($data))
                                                                    <h3 class="m-b-0 text-white">{{ count($data) }}</h3>
                                                                @else
                                                                    <p>Not data.</p>
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
                                                            <h6 class="m-b-5 text-white">Étudiants</h6>
                                                            <h3 class="m-b-0 text-white">
                                                                @if (isset($stg))
                                                                    <h3 class="m-b-0 text-white">{{ count($stg) }}</h3>
                                                                @else
                                                                    <p>Not data.</p>
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
                                                            <h6 class="m-b-5 text-white">Entretien</h6>
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
                                        @include('admin/temp/TableStg')

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

        @case(3)
            {{-- @include('includes.header', ['temp' => '3']) --}}
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

        @case(4)
            {{-- @include('includes.header', ['temp' => '4']) --}}
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

    @yield('content')


    <!-- Required Js -->
    <script src="/assets/js/vendor-all.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/pcoded.min.js"></script>

</body>

</html>
