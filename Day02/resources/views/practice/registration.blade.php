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
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" 
                                   name="full_name"
                                   class="form-control" 
                                   placeholder="Enter your full name" 
                                   >
                            <span class="text-danger">
                                @error('full_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" 
                                   name="email"
                                   class="form-control" 
                                   placeholder="Enter your email" 
                                   >
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" 
                                   name="password"
                                   class="form-control" 
                                   placeholder="Enter password" 
                                   >
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" 
                                   name="confirm_password"
                                   class="form-control" 
                                   placeholder="Confirm password" 
                                   >
                            <span class="text-danger">
                                @error('confirm_password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select" >
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <span class="text-danger">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>                 
                        </div>

                        <!-- Terms -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="terms" 
                                   value="1"
                                   >
                            <label class="form-check-label">
                                I agree to the terms and conditions
                            </label>
                            <span class="text-danger">
                                @error('terms')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

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
