<ul class="list-group">
    @foreach ($categories as $category)
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <a href="{{route('appsByCategory', ['category' => $category->name])}}">
        {{$category->name}}
      </a>
      <span class="badge badge-primary badge-pill">{{count($category->apps)}}</span>
      </li>
    @endforeach
  </ul>