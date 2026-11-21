
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer | TFA7 POS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 { color: #263654; }

        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button, .back {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 18px;
            border: none;
            border-radius: 5px;
            background: #263654;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .error {
            color: #dc2626;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Create Customer</h1>

    <form action="{{ url('/customers') }}" method="POST">
        @csrf

        <label for="full_name">Full Name</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="{{ old('full_name') }}"
        >
        @error('full_name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email Address</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
        >
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="phone">Phone Number</label>
        <input
            type="text"
            id="phone"
            name="phone"
            value="{{ old('phone') }}"
        >
        @error('phone')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Save Customer</button>
        <a href="{{ url('/customers') }}" class="back">Back</a>
    </form>
</div>
</body>
</html>
