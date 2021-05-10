@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="u-s-p-b-60">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-16">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary u-s-m-b-12">CREATE PRODUCT</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <form method="post" action="{{ route('products.store')}}">
                            @csrf
                            <form>
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input required type="text" class="form-control" id="name" placeholder="Nombre Producto">
                                  </div>
                                  <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <input required type="text" class="form-control" id="desciption" placeholder="Descripcion Del Producto">
                                  </div>
                                  <div class="form-group">
                                    <label for="price">Precio</label>
                                    <input required type="number" class="form-control" id="price" placeholder="Precio Del Producto">
                                  </div>
                                  <div class="form-group">
                                    <label for="stock">Existencias</label>
                                    <input required type="number" class="form-control" id="stock" placeholder="Existencias Del Producto">
                                  </div>
                                  <div class="form-check">
                                    <input class="available" type="checkbox" value="" id="available">  
                                    <label class="form-check-label" for="defaultCheck1">Disponibilidad</label>
                                  </div>
                                  <div class="form-group">
                                    <label for="categorias">Seleccione categorias del producto</label>
                                    <select name="categories[]" multiple class="form-control" id="categories">
                                    @foreach ($categories as $cat)
                                         <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="url">Imagen url</label>
                                    <input required type="text" class="form-control" id="url" placeholder="URL Imagen del Producto">
                                  </div>
                                  <div class="form-group">
                                    <label for="url">Imagen url</label>
                                    <input type="text" class="form-control" id="url" placeholder="URL Imagen del Producto">
                                  </div>
                                  <div class="form-group">
                                    <label for="url">Imagen url</label>
                                    <input type="text" class="form-control" id="url" placeholder="URL Imagen del Producto">
                                  </div>
                                  
                                  <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection