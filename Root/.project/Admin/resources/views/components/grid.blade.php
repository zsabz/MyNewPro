{{-- @dd(request()->root()) --}}
@php
    $url = explode('/', request()->path())
    // $link = []
    // foreach ($url as $key => $value) {
    //     if ($key == 0) {
    //         # code...
    //         $link[$key] =  request()->root() . '/' . $value
    //     }
    //     else{
            
    //         $link[$key] =  request()->root() . '/' . $key[0] . '/' .$value
    //     }
    // }
@endphp

    <ul class="d-flex justify-content-start p-3 mb-3" style="direction: rtl; font-size:16px;border-radius: 10px; background-image: linear-gradient(to left,#f7a302, white); color:black ;position: sticky;top:70px;Z-index:3">
        <li>
            <a href="{{ request()->root() . '/ad'.'/dash'}}">
                صفحه اصلی
            </a>
        </li>
        <li>
            <a style="color:black !important" class="mr-1" href="{{ request()->root() . '/ad/'. $url[1]}}">
                @switch($url[1])
                    @case('addProduct')
                        <li> / محصولات</li>
                        @break
                    @case('addCategory')
                        <li>/ دسته بندی</li>
                        @break
                    @case('productsShow')
                        <li>/ نمایش محصولات</li>
                        @break
                    @case('slider')
                        <li>/ اسلایدر </li>
                    @break
                    @case('key')
                        <li>/ کلمات کلیدی </li>
                        @break
                    @case('coment')
                        <li>/ نظرات </li>
                        @break    
                    @case('user')
                        <li>/ کاربران </li>
                    @break 
                    @default   
                @endswitch
            </a>
        </li>
        {{-- @foreach ($links as $item)
            <li>
                <a href="{{$item['link']}}">
                    {{$item['title']}}
                </a>
            </li>
        @endforeach --}}
    </ul>
