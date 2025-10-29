<!DOCTYPE html>
<html>
<head><title>User Login</title></head>
<body>
    <h2>User Login</h2>
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div><label>Email:</label><input type="email" name="email" required></div>
        <div><label>Password:</label><input type="password" name="password" required></div>
        <button type="submit">Login</button>
    </form>
    <p>Don’t have an account? <a href="{{ route('register') }}">Register</a></p>
    <p>Go to home page <a href="{{ route('home') }}">Home</a></p>
</body>
</html>
