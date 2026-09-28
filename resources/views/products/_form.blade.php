@csrf

<div>
    <label for="category_id">Kategori</label>
    <select name="category_id" id="category_id" required>
        <option value="">-- Pilih Kategori --</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<br>

<div>
    <label for="name">Nama Produk</label>
    <input type="text"
           name="name"
           id="name"
           value="{{ old('name', $product->name ?? '') }}"
           required>
</div>

<br>

<div>
    <label for="sku">SKU</label>
    <input type="text"
           name="sku"
           id="sku"
           value="{{ old('sku', $product->sku ?? '') }}"
           required>
</div>

<br>

<div>
    <label for="price">Harga</label>
    <input type="number"
           name="price"
           id="price"
           value="{{ old('price', $product->price ?? '') }}"
           min="0"
           required>
</div>

<br>

<div>
    <label for="stock">Stok</label>
    <input type="number"
           name="stock"
           id="stock"
           value="{{ old('stock', $product->stock ?? '') }}"
           min="0"
           required>
</div>

<br>

<button type="submit">{{ $buttonText }}</button>
