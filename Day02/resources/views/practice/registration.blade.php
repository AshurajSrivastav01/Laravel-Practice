<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Registration Form</h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('/user/registration') }}" method="POST">
                        @csrf
                        <!-- Full Name -->
                        <x-input label="Full Name" type="text" name="name" id="name" placeholder="enter your name" />

                        <!-- Email Id -->
                        <x-input label="Email Id" type="email" name="email" id="email" placeholder="abc@gmail.com" />

                        <!-- Password -->
                        <x-input label="Password" type="password" name="password" id="password" placeholder="******" />
                        
                        <!-- Confirm Password -->
                        <x-input label="Confirm Password" type="password" name="confirm_password" id="confirm_password" placeholder="******" />

                        <!-- Terms -->
                        <x-input label="Terms" type="checkbox" name="terms" id="terms"/>

                        <!-- Submit Button -->
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
