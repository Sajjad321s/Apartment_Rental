<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-image: url("{{ asset('admin3.jpg') }}");
            background-size: cover;
            background-color: #dfe9f5;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #F5F5F5; /* Semi-transparent white background */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            text-align: center;
            color: #333; /* Set the text color */
        }

        .form-group label {
            color: #333;
        }

        .form-control {
            border-radius: 2px;
            transition: border-color 0.3s ease-in-out;
        }

        .form-control:hover,
        .form-control:focus {
            border-color: #007bff; /* Blue color on hover/focus */
        }

        .btn-success {
            background-color: #28a745; /* Green color for success button */
            border: none;
            width: 100%;
        }

        .btn-success:hover {
            background-color: #218838; /* Darker shade on hover */
        }

        .alert {
            margin-top: 1rem;
            color: #721c24; /* Dark red color for alert text */
            background-color: #f8d7da; /* Light red color for alert background */
            border: 1px solid #f5c6cb; /* Border color for alert */
            border-radius: 5px;
            padding: 0.75rem 1.25rem;
        }
        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #fff; /* White color for the logo text */
            font-size: 24px; /* Adjust the font size as needed */
            font-weight: bold; /* Optionally, make it bold */
            letter-spacing: 2px; /* Adjust letter spacing as needed */
        }
    </style>
</head>
<body>
    <div class="logo">Apartment Renting</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('error-msg'))
                    <p class="alert">{{ Session::get('error-msg') }}</p>
                @endif

                <form action="{{ route('admin.login') }}" class="mt-5" method="post">
                    @csrf
                    <div class="card-header">
                        <h1 class="card-title">Admin Login</h1>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" value="Login" class="btn btn-success mt-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
