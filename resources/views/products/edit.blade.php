
@include('products.styles')

<div class="products-page">
    <div class="card product-form-card">

        <header class="card-header">
            <p class="card-header-title">Modification d'un produit</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input class="input" type="text" name="name" value="{{$product->name}}">
                        </div>

                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description">{{$product->description}}</textarea>
                        </div>

                    </div>
                    <div class="field">
                        <label class="label">Prix</label>
                        <div class="control">
                            <input class="input" type="number" name="price" value="{{$product->price}}">
                        </div>

                    </div>


                    <div class="field">
                        <label class="label">Stock</label>
                        <div class="control">
                            <input class="input" type="number" name="stock" value="{{$product->stock}}">
                        </div>

                    </div>

                    <div>

                        <div class="field">
                            <label class="label">Catégorie</label>
                            <select name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}

                                    </option>

                                @endforeach


                            </select>

                        </div>

                        <div class="field">
                            <label class="label">Catalogues</label>
                            <select name="cats[]" multiple>
                                @foreach($catalogues as $catalogue)
                                    <option value="{{$catalogue->id}}">
                                        {{$catalogue->name}}

                                    </option>

                                @endforeach


                            </select>

                        </div>

                    </div>
</div>


                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

