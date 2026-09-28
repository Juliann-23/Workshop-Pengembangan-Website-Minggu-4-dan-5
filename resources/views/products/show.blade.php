<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>

    <h1>Detail Produk</h1>

    <p>
        <strong>Nama Produk:</strong>
        {{ $product->name }}
    </p>

    <p>
        <strong>SKU:</strong>
        {{ $product->sku }}
    </p>

    <p>
        <strong>Kategori:</strong>
        {{ $product->category->name }}
    </p>

    <p>
        <strong>Harga:</strong>
        Rp {{ number_format($product->price, 0, ',', '.') }}
    </p>

    <p>
        <strong>Stok:</strong>
        {{ $product->stock }}
    </p>

    <br>

    <a href="{{ route('products.index') }}">Kembali ke Produk</a>

    <a href="{{ route('products.edit', $product) }}">Edit Produk</a>

</body>
</html>
