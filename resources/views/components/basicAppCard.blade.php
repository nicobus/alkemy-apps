<div class="card mb-3 col-sm-12 col-md-6 col-lg-3 col-xl-3" style="width: 500px;">
    @if (Auth::user() != null && Auth::user()->hasRole('dev'))
        <a class="link-app-detail" href="{{route('appEdit', ['id' => $aplication->id])}}"></a>
    @else
        <a class="link-app-detail" href="{{route('appDetail', ['id' => $aplication->id])}}"></a>
    @endif
   
        <img class="card-img-top mt-2" onerror='https://loremflickr.com/286/180?random={{$aplication->image_path}}'; src="/storage/{{$aplication->image_path}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$aplication->name}}</h5>
          <a href="{{route('appDetail', ['id' => $aplication->id])}}" class="btn">Ver detalles</a>
        </div>
</div>
