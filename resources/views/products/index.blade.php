
@include('products.styles')

<div class="products-page">
    @if(session('success'))
        <div  class="notification is-success" id="success-message">
            {{ session('success') }}
        </div>
    @endif
    <div class="card product-table-card">
        <header class="card-header">
            <p class="card-header-title">Products</p>

            <a class="button is-info" href="{{ route('products.create') }}">Ajouter un Produit</a>

        </header>
        <div class="card-content">
            <div class="content">
                <div class="table-wrapper">
                <table class="table is-hoverable">
                    <thead class=" text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th colspan="3" align="center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id }}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock}}</td>

                            <td>
                                <a class="button is-primary" href="{{ route('products.show',$product->id) }}">
                                    Détails</a>
                                </td>
                            <td>

                                <a class="button is-warning" href="{{ route('products.edit', $product->id) }}">Modifier</a></td>

                             <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="button is-danger" >Delete</button>

                                </form>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                </div>

            </div>
        </div>
    </div>
</div>



