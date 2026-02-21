<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Create User</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" name="phone_number" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <hr>

        <h5>Address Details</h5>

        <div class="mb-3">
            <label>Address Line 1</label>
            <input type="text" name="address1" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address Line 2</label>
            <input type="text" name="address2" class="form-control">
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Pincode</label>
                <input type="text" name="pincode" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>City</label>
                <input type="text" name="city" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>State</label>
                <input type="text" name="state" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Country</label>
            <input type="text" name="country" class="form-control">
        </div>

        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
