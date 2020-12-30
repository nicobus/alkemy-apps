
                          
                            
                            @csrf
                          
                     @if ($appl->id == null)
                     <div class="form-group row">
                        <label for="category_id" class="col-md-4 col-form-label text-md-right">Categoria:</label>
                        <div class="col-md-6">
                            <select class="form-control custom-select mr-sm-2 @error('marca_id') is-invalid @enderror" id="marca_id"
                                name="category_id">
                                @if (old('category_id'))
                                <option value="{{$categories[old('category_id')-1]->id}}" selected>{{$categories[old('category_id')-1]->name}}</option>
                                @else
                                @if ($appl->category != null)
                                <option value="{{$appl->category->id}}" selected>{{$appl->category->name}}</option>
                                @else
                                <option value="" selected>Seleccione la categoria de la app</option>
                                @endif
                                @endif 
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                <option value=""><a href="">Agregar marca</a></option>
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('modelo') is-invalid @enderror"
                                placeholder="Ingrese el nombre de la app..." name="name" value="{{old('name', $appl->name)}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                     @endif        


<div class="form-group row">
    <label for="price" class="col-md-4 col-form-label text-md-right">Precio:</label>
    <div class="col-md-6">
        <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
            placeholder="Ingrese el precio de la app..." name="price" value="{{old('price', $currentPrice->value)}}">
        @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>



<div class="form-group row">
    <label for="image" class="col-md-4 col-form-label text-md-right">Imagen de la app:</label>
    <div class="col-md-6">
        <input type="file" class="form-control-file" id="image" name="image">
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-3 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{$btntext}}
        </button>
    </div>
</div>






