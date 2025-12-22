<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Donlight</h2>

@if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

<form method="POST" action="{{ route('login.post') }}">
    @csrf

    <div>
        <label>Email</label><br>
        <input type="email" name="email" value="admin@donlight.com">
    </div>

    <br>

    <div>
        <label>Password</label><br>
        <input type="password" name="password" value="dummy">
    </div>

    <br>

    <button type="submit">Login</button>
</form>

</body>
</html>
