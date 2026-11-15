<!DOCTYPE html>
<html>
<head>
    <title>Skill Connect Dashboard</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: white;
            background: #070b1a;
        }

        .box {
            text-align: center;
            padding: 50px;
            border-radius: 25px;
            background: #111830;
            border: 1px solid #334155;
            box-shadow: 0 20px 60px rgba(0,0,0,.4);
        }

        h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        p {
            color: #94a3b8;
            margin-bottom: 25px;
        }

        a {
            display: inline-block;
            padding: 12px 20px;
            margin: 5px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            background: #2563eb;
        }

        a:hover {
            background: #4f46e5;
        }

        button {
            padding: 12px 20px;
            border: 0;
            border-radius: 10px;
            color: white;
            background: #dc2626;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="box">

    <h1>
        Welcome to Skill Connect 👋
    </h1>

    <p>
        Hello, {{ Auth::user()->name }}
    </p>

    <a href="{{ route('jobs.index') }}">
        Available Jobs
    </a>

    <a href="{{ route('jobs.my') }}">
        My Jobs
    </a>

    <a href="{{ route('jobs.create') }}">
        Post New Job
    </a>

    <br><br>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">
            Logout
        </button>
    </form>

</div>

</body>
</html>