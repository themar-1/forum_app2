<!DOCTYPE html>
<html>
<head>
    <title>Entreprise Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #EFFDF5; 
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            background-color: #fff;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            color: #00B074; 
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li .view-cv {
            background-color: #00B074; 
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
        }

        li .view-cv:hover {
            background-color: #009564;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #00B074; 
            color: #fff;
            padding: 10px;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }

        .user-btn {
            background-color: #00B074; 
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 20px 40px;
            border-radius: 5px;
            font-size: 18px;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 5px;
        top: 100%;
        right: 0;
    }

    .dropdown-content a {
        color: #00B074; 
        padding: 11px 68px;
        text-decoration: none;
        display: block;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .dropdown-content a:hover {
    background-color: #EFFDF5;
    color: #00B074; 
}


    </style>
</head>
<body>
    <div class="top-bar">
        <div class="logo">
            <img src="{{ asset('img/logos/' . $logo) }}" alt="Company Logo">
        </div>
        <div class="user-dropdown">
            <button class="user-btn">Profile</button>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href={{route('entreprise.logout')}} >Logout</a>
            </div>
        </div>
    </div>

    <div class="dashboard-container">
        <h1>Welcome {{ $entrepriseName }}</h1>
        <h1>Candidats qui ont postulé</h1>
        <ul>
            @foreach ($appliedCandidates as $application)
                <li>
                    {{ $application->stagiaire->prenom }} {{ $application->stagiaire->nom }}
                    <form action="{{ route('showCVs') }}" method="post">
                        @csrf
                        <input type="hidden" name="fileName" value="{{ $application->stagiaire->cv }}">
                        <button class="view-cv">View CV</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
