<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img class ="card-img" src="{{$appl->image_path}}" alt="imagen-app">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title text-center d-inline">{{$appl->name}}</h2>
                <a href="" class=" ml-auto d-inline"><i class="far fa-heart"></i></a>
                <div class="btn-compra text-center">
                    <h3 class="precio d-block">$ {{$currentPrice->value}}</h3>
                    @if (Auth::check())
                    <form class="form-agregar-carrito d-inline-flex" action="#" method="POST">
                        @csrf
                        <input id="id" type="hidden" name="id" value="{{$appl->id}}">
                        <input id="customer_id" type="hidden" name="customer_id" value="{{Auth::user()->customer->id}}">
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        <button id="btn-buy" class="btn btn-success my-3 mx-5"><span class="fas fa-shopping-cart" aria-hidden="true"></span> Comprar</button>
                    </form>
                    @else
                        <a id="btn-buy" href="{{route('login', ['redirect_to'=>url()->current()])}}" class="btn btn-success my-3 mx-5"><span class="fas fa-shopping-cart" aria-hidden="true"></span> Comprar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>