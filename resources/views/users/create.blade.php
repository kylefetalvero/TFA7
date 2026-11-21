
<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

    <h1>Create User Account</h1>

    <a href="{{ url('/users') }}">Back to Users</a>

    <form action="{{ url('/users') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <p>
            <label>Username:</label><br>
            <input type="text" name="username" value="{{ old('username') }}">

            @error('username')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="{{ old('full_name') }}">

            @error('full_name')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Profile Picture:</label><br>
            <input
                type="file"
                name="avatar"
                accept="image/jpeg,image/png,image/webp"
            >

            <small>Accepted formats: JPG, JPEG, PNG, WEBP. Maximum size: 2MB.</small>

            @error('avatar')
                <br>
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Save User</button>
    </form>

</body>
</html>
