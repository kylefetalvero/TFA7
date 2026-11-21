
<!DOCTYPE html>
<html>
<head>
    <title>POS - User Accounts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f4f6f9;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #263654;
            color: white;
        }

        .success {
            padding: 12px;
            background: #d1fae5;
            color: #065f46;
            margin-top: 15px;
        }

        .avatar {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 50%;
        }

        .button {
            display: inline-block;
            padding: 9px 14px;
            background: #263654;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1>User Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customers</a> |
        <a href="/users">Users</a>
    </nav>

    <h2>User List</h2>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <a href="{{ url('/users/create') }}" class="button">
        + Create User
    </a>

    <table>
        <tr>
            <th>ID</th>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Action</th>
        </tr>

        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    @if (!empty($user->avatar))
                        <img
                            src="{{ asset('storage/' . $user->avatar) }}"
                            alt="User Avatar"
                            class="avatar"
                        >
                    @else
                        <img
                            src="https://placehold.co/55x55?text=User"
                            alt="Placeholder Avatar"
                            class="avatar"
                        >
                    @endif
                </td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
                <td>
                    <a href="{{ url('/users/' . $user->id . '/edit') }}">
                        Edit
                    </a>

                    |

                    <form
                        action="{{ url('/users/' . $user->id) }}"
                        method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('Delete this user?');"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No users found.</td>
            </tr>
        @endforelse
    </table>

</body>
</html>
