@extends('views::products.index')

@section('productShow')
@php
        $links = [
            [
                'title' => 'product',
                'link' => '/products',
            ],
            
        ];
        @endphp
        @yield('breadcrumb')
    <div class="pd-20 card-box mb-30" dir="rtl">
        <div class="clearfix mb-20 row" >
            <div class="pull-left col-4">
                <h4 class="text-blue h4">محصولات</h4>
            </div>
            <div class="header-search col-8 border-2">
            <form action="/ad/search" class="rtl">
                <div class="hero__search__form form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input dir="rtl" name="search_word" type="text" id="search-pro" class="form-control search-input" placeholder="جستجو sssکنید">
                    <div class="dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-right" style="position: absolute;
                        top: 4rem;
                        left: 0px;
                        will-change: transform;
                        display: none;
                        min-height: 200px;">
                            <ul class="result">
                                
                            </ul>
                        </div>
                    </div>
                    <div class="search_result position-absolute rtl text-right">
                        <span>
                            برای جستجو، حداقل 2 کاراکتر را درج کنید.
                        </span>
                        <div class="search-result"></div>
                    </div>
                </div>
            </form>
        </div>
        </div>

        <div class="table-responsive" dir="rtl">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">نام محصول </th>
                        <th scope="col">دسته بندی</th>
                        <th scope="col">نام کاربر </th>
                        <th scope="col">کلمات کلیدی</th>
                        <th scope="col">کامنت ها</th>
                        <th scope="col">عملیات</th>
                    </tr>
                </thead>
                {{-- @dd($items[0]->user) --}}

                @if (Session()->has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                @foreach ($items as $item)
                    <tbody>
                        <tr class="table table-striped">
                            <th scope="row">{{ ($items->currentPage() - 1) * $items->perPage() + $loop->iteration }}
                            </th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->title ?? '---' }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>
                                @foreach ($item->keywords as $it)
                                    {{ $it->name }}-
                                @endforeach
                            </td>
                            <td>
                                @foreach ($item->comments as $it)
                                    <p class="mb-0 comment-td"> - {{ $it->text }}</p>
                                @endforeach
                            </td>
                            <td><a href="product/{{ $item->id }}/edit" class="badge badge-primary px-4">ویرایش</a></td>
                            <td>
                                <form
                                    action="home?mainModel=Product&relatedModel=Coment&id={{ $item->id }}&relations=product"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="badge badge-danger px-4" onclick="return myDelete()"
                                        type="submit">حذف</button>
                                </form>
                            </td>
                            <td><a href="product/{{ $item->id }}" class="badge badge-warning">مشاهده</a></td>
                            <td><button
                                    onclick="ajax_change_statue(event,{{ $item->id }}, {{ $item->status }}, 'Product')"
                                    class="badge badge-success">
                                    @if ($item->status == 1)
                                        فعال
                                    @else
                                        غیرفعال
                                    @endif
                                    </a>
                                    </p>
                            </td>
                        </tr>


                    </tbody>
                @endforeach
            </table>
        </div>
    </div>




    @include('views::products.page')
@endsection
