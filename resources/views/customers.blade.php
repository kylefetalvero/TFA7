
<!DOCTYPE html>
<html>
<head>
    <title>POS - Customer Accounts</title>
</head>
<body>

    <h1>Customer Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customers</a> |
        <a href="/users">Users</a>
    </nav>

    <h2>Customer List</h2>

    @if(session('success'))
        <p style="color:green; background:#d1fae5; padding:10px;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ url('/customers/create') }}">
        + Create Customer
    </a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>
                    <a href="{{ url('/customers/' . $customer->id . '/edit') }}">
                        Edit
                    </a>

                    |

                    <form action="{{ url('/customers/' . $customer->id) }}"
                          method="POST"
                          style="display:inline;"
                          onsubmit="return confirm('Are you sure you want to delete this customer?');">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

</body>
</html>
