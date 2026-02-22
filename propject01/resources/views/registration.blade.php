<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>User Registration</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('/register') }}" method="POST">
                            @csrf

                            <x-input label="Full Name" type="text" name="name" placeholder="Enter your full name"/>
                            <x-input label="Email Address" type="text" name="email" placeholder="Enter your email"/>
                            <x-input label="Phone" type="number" name="phone" placeholder="Enter phone number"/>
                            <x-input label="Password" type="password" name="password" placeholder="Enter your password"/>
                            <x-input label="Confirm Password" type="password" name="confirm_password" placeholder="Confirm password"/>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>