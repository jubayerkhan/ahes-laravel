<!DOCTYPE html>
<html>
<head><title>User Register</title></head>
<body>
    <h2>User Register</h2>
    <form method="POST" action="{{ route('register.post') }}">
        @csrf
        <div><label>Name:</label><input type="text" name="name" required></div>
        <div><label>Email:</label><input type="email" name="email" required></div>
        <div><label>Password:</label><input type="password" name="password" required></div>
        <div><label>Confirm Password:</label><input type="password" name="password_confirmation" required></div>
        <button type="submit">Register</button>
    </form>
    <p>Already registered? <a href="{{ route('login') }}">Login</a></p>
    <p>Go to home page <a href="{{ route('home') }}">Home</a></p>
</body>
</html>
