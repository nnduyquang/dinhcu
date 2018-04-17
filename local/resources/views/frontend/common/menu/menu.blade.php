<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div id="menu_top">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7 justify-content-left align-self-center text-left">
                        <span> Hotline: 0901 83 85 86 | (028) 54.39.8888 | (024) 38.25.1111</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu_bottom">
        <div class="container">
            <div class="col-md-12 p-0">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{URL::to('/')}}">{{ Html::image('images/logo/logo.jpg','',array('class'=>'logo')) }}</a>
                    </div>
                    <div class="col-md-9">
                        <ul class="main_menu">
                            <li class="li-normal"><a href="{{URL::to('/trang/gioi-thieu')}}">Giới Thiệu</a></li>
                            <li class="has-item-down"><a href="#">Bão Lãnh Mỹ</a>
                                <ul class="sub_menu">
                                    {{--@foreach($listMenu['categoryMain'] as $key=>$item)--}}
                                    {{--<li><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>--}}
                                    {{--@endforeach--}}
                                    <li><a href="#">Diện hôn phu/ hôn thê</a></li>
                                    <li><a href="#">Diện vợ chồng</a></li>
                                    <li><a href="#">Diện đồng tính</a></li>
                                    <li><a href="#">CÁC DIỆN GIA ĐÌNH KHÁC (F1/F2/F3/F4)</a></li>
                                </ul>
                            </li>
                            <li class="has-item-down"><a href="#">Bão Lãnh Úc</a>
                                <ul class="sub_menu">
                                    {{--@foreach($listMenu['categoryMain'] as $key=>$item)--}}
                                    {{--<li><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>--}}
                                    {{--@endforeach--}}
                                    <li><a href="#">Diện hôn phu/ hôn thê</a></li>
                                    <li><a href="#">Diện vợ chồng</a></li>
                                    <li><a href="#">Diện đồng tính</a></li>
                                    <li><a href="#">Con bảo lãnh 173-143</a></li>
                                </ul>
                            </li>
                            <li class="has-item-down"><a href="#">QUỐC TỊCH CON SINH TẠI VN</a>
                                <ul class="sub_menu">
                                    {{--@foreach($listMenu['categoryMain'] as $key=>$item)--}}
                                    {{--<li><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>--}}
                                    {{--@endforeach--}}
                                    <li><a href="#">Mỹ</a></li>
                                    <li><a href="#">Úc</a></li>
                                </ul>
                            </li>
                            <li class="has-item-down"><a href="#">DU LỊCH</a>
                                <ul class="sub_menu">
                                    {{--@foreach($listMenu['categoryMain'] as $key=>$item)--}}
                                    {{--<li><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>--}}
                                    {{--@endforeach--}}
                                    <li><a href="#">Úc-600</a></li>
                                    <li><a href="#">Mỹ- B1/B2</a></li>
                                </ul>
                            </li>
                            <li class="li-normal"><a href="{{URL::to('/bai-viet/tu-van')}}">TIN TỨC</a></li>
                            {{--<li class="li-normal"><a href="#">Menu 5</a></li>--}}
                            <li class="li-normal"><a href="{{URL::to('/trang/lien-he')}}">Liên Hệ</a></li>
                            {{--<li style="padding: 0">--}}
                            {{--<ul class="menu-search">--}}
                            {{--<li class="li-search"><a href="#" id="clickSearch"><i class="fa fa-search"--}}
                            {{--aria-hidden="true"></i></a>--}}
                            {{--</li>--}}
                            {{--<li class="li-search" style="width: 100%">--}}
                            {{--{!! Form::open(array('route' => 'search','method'=>'POST','id'=>'formSearch')) !!}--}}
                            {{--{!! Form::text('key-search', '', array('placeholder' => 'Tìm Kiếm','class' => 'form-control','id'=>'searchInput')) !!}--}}
                            {{--{!! Form::close() !!}--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
