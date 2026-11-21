
<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

    <h1>Edit Customer Account</h1>

    <a href="{{ url('/customers') }}">Back to Customers</a>

    <form action="{{ url('/customers/' . $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name"
                   value="{{ old('full_name', $customer->full_name) }}">
            @error('full_name')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email"
                   value="{{ old('email', $customer->email) }}">
            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Phone:</label><br>
            <input type="text" name="phone"
                   value="{{ old('phone', $customer->phone) }}">
            @error('phone')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Update Customer</button>
    </form>

</body>
</html>
