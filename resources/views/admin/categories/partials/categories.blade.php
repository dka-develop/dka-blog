@foreach ($categories as $category_list)

  <option value="{{$category_list->id or ""}}"

    @isset($category->id)

      @if ($category->parent_id == $category_list->id)
        selected=""
      @endif

      @if ($category->id == $category_list->id)
        hidden=""
      @endif

    @endisset

    >
    {!! $delimiter or "" !!}{{$category_list->title or ""}}
  </option>

  @if (count($category_list->children) > 0)

    @include('admin.categories.partials.categories', [
      'categories' => $category_list->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach
