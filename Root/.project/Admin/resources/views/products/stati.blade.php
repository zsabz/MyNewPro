@extends('views::products.index');

@section('stati')

@csrf
<div class="pd-20 card-box mb-30" dir="rtl">
    <form action="key" method="post">
        @csrf
<div class="row" >
    
    <div class="col-md-8">
        <input type="file" class="form-control" name="title" type="text" placeholder="ایکن">
    </div>
<div class="col-md-8">
    <input class="form-control" name="title" type="text" placeholder="عنوان">
</div>
<div class="col-md-8">
    <input type="text" class="form-control" name="title" type="text" placeholder="متن">
</div>
<div class="col-md-8">
    <input type="hyperlink" class="form-control" name="title" type="text" placeholder="لینک">
</div>

<div class="col-md-4">
    <button style="width: 30% ; height:50%;" class="text-lg btn btn-success px-5 m-4">اضافه</button>
</div>
</div>
</form>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام کلمه کلیدی</th>
                <th scope="col">توضیحات</th>
                <th scope="col">لینک</th>
                <th scope="col">ویرایش</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>
        @foreach ($items as $item)        
        <tbody>
            <tr class="table-active">
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$item -> title}}</td>
                <td>{{$item -> text}}</td>
                <td>{{$item -> link}}</td>
                
                <td><a href="key/{{$item->id}}/edit" class="badge badge-primary">ویرایش</a></td>
               
<td>
                <form action="key/{{$item->id}}/" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="badge badge-danger" type="submit">حذف</button>
                </form>
</td>
<td><button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Keyword')"
class="badge badge-success">

@if ($item->status == 1)
   فعال
@else
   غیرفعال
@endif
</a>
</p>
@endforeach
@include('views::products.page')
@endsection
