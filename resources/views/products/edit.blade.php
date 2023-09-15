<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>

<body>
    <h1>Edit a Product</h1>
    <a href="{{ route('product.index') }}">View Products</a>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.update', ['product' => $product->id]) }}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Product Name" value="{{ $product->name }}" />
            <span>
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Quantity" value="{{  $product->qty  }}" />
            <span>
                @error('qty')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{  $product->price  }}" />
            <span>
                @error('price')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{  $product->description  }}" />
            <span>
                @error('description')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>

</html>
