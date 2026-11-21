
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <h1>Edit User Account</h1>

    <a href="{{ url('/users') }}">Back to Users</a>

    <form
        action="{{ url('/users/' . $user->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <p>
            <label>Username:</label><br>
            <input
                type="text"
                name="username"
                value="{{ old('username', $user->username) }}"
            >

            @error('username')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Full Name:</label><br>
            <input
                type="text"
                name="full_name"
                value="{{ old('full_name', $user->full_name) }}"
            >

            @error('full_name')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Current Profile Picture:</label><br>

            @if ($user->avatar)
                <img
                    src="{{ asset('storage/' . $user->avatar) }}"
                    alt="Current Avatar"
                    width="120"
                    height="120"
                    style="object-fit:cover; border-radius:50%;"
                >
            @else
                <p>No profile picture uploaded.</p>
            @endif
        </p>

        <p>
            <label>Replace Profile Picture:</label><br>
            <input
                type="file"
                name="avatar"
                accept="image/jpeg,image/png,image/webp"
            >

            <br>
            <small>
                Accepted formats: JPG, JPEG, PNG, WEBP.
                Maximum size: 2MB.
                Leave empty to keep the current picture.
            </small>

            @error('avatar')
                <br>
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Update User</button>
    </form>

</body>
</html>
