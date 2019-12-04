<ul>
    <li><a href="/">Home<Home/a></li>
    <li><a href="about">About</a></li>
    <li><a href="contact">Contact Us</a></li>
    <li><a href="customers">Customers</a></li>
</ul>


<h1>Costumers</h1>

<ul>
    @foreach ($customers as $customer)
    <li>{{ $customer }}</li>
    @endforeach
</ul>