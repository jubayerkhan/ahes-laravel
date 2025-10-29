<!DOCTYPE html>
<html>
<head>
    <title>Admin Register</title>
</head>
<body class="max-w-7xl">
    <h2>Register New Admin</h2>

    <form method="POST" action="{{ route('admin.register.post') }}" class="flex flex-col mb-5">
        @csrf
        <div class="mb-4">
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ route('admin.login') }}">Login here</a></p>
</body>
</html>
