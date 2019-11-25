<h1>Customer Home Page</h1>



<a href="/customers/create">Add New Customer</a>

@forelse($customers as $customer)

    <p><strong>Name: {{ $customer->name }}</strong> | {{ $customer->email  }}</p>


    @empty

    <p>no customer to show</p>



    @endforelse
