@extends('home')
@section('content')

<form class="container" action="{{ route('post.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Görev Başlığı</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Görev Açıklaması</label>
      <input name="description" type="text" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Kaydet</button>
  </form>

@endsection
