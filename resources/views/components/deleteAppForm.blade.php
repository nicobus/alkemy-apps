<form class="form-delete d-inline-flex m-0" action="{{route('appDelete')}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="app_id" value="{{$appl->id}}">
    <div class="col-md-3 d-inline-flex ml-5 p-0">
        <button type="submit" class="btn btn-danger fa fa-trash btn-deleter">
        </button>
    </div>
</form>