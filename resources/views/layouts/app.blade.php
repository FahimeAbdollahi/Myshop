<!DOCTYPE html>
<html>
<head>
    <title>My E-commerce Site</title>
</head>
<body>
    <header>
        <h1>My E-commerce Site</h1>
        <nav>
            <a href="{{ route('admins.index') }}">Admins</a>
            <a href="{{ route('sellers.index') }}">Sellers</a>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="{{ route('orders.index') }}">Orders</a>
            <a href="{{ route('categories.index') }}">Categories</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
