<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h1>MiniShop Admin - Dashboard</h1>

<hr>

<a href="{{ route('admin.dashboard') }}">Dashboard</a> |

<a href="{{ route('admin.categories.index') }}">Categories</a> |

<a href="{{ route('admin.products.index') }}">Products</a> |

<a href="{{ route('admin.about') }}">About</a>
<p>Categories: {{ $stats['categories'] }}</p>

<p>Products: {{ $stats['products'] }}</p>

<p>Inventory Value: {{ number_format($stats['inventory_value']) }}</p>

</body>
</html>