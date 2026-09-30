
@include('products.styles')

@if(session('success'))
    <div class="notification is-success" id="success-message">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
     <div class="alert alert-danger">
        <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
     </div>
@endif

<div class="products-page">
    <div class="card product-form-card">
        <header class="card-header">
            <p class="card-header-title">Création d'un produit</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input class="input" type="text" name="name">
                        </div>
                        @error('name')
                               <div  class="alert  alert-danger">{{  $message  }}</div>
                            @enderror


            </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description"> </textarea>
                        </div>

                    </div>
                    <div class="field">
                        <label class="label">Prix</label>
                        <div class="control">
                            <input class="input" type="number" name="price">
                        </div>

                    </div>


                    <div class="field">
                        <label class="label">Stock</label>
                        <div class="control">
                            <input class="input" type="number" name="stock">
                        </div>

                    </div>

                    <div class="field">
                        <label class="label">Catégorie</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->name}}

                                        </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="field">
                        <label class="label">Catalogues</label>
                        <div class="control">
                            <div class="select is-multiple is-fullwidth">
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
                            <button class="button is-link">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

