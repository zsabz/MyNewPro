@extends('views::products.index');
@section('content')
  
<form action="/ad/product/key/{{$keyword->id}}" method="post" dir="rtl">
    @csrf
    @method('PATCH')
<div class="row" >
    @php
$links = [
    [
        'title' => 'کلمات کلیدی ',
        'link' => '/products',
    ],
    [
        'title' => ' ویرایش کلمات کلیدی',
        'link' => $item->name,
    ],
];
@endphp
<div class="col-md-10">
<input class="form-control" name="name" type="text" placeholder={{$keyword->name}}>
</div>

<div class="col-md-2">
<button class="badge badge-success">ویرایش</button>
</div>
</div>
</form>
        @endsection
