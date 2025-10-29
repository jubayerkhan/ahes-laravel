<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<body>
    <h1>Admin Panel</h1>
    <h1>Panel 1</h1>
    <h1>Panel 2</h1>
    <h1>Panel 3</h1>
    <h1>Welcome Admin!</h1>
    <h1>Welcome to Admin Dashboard</h1>
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>

</html>