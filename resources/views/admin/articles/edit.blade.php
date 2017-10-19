@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Редактирование новости @endslot
    @slot('parent') Главная @endslot
    @slot('active') Новости @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.articles.partials.form')

    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection
