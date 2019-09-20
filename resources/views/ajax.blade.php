<div id="showCategoryProduct">
    <div class="row col-auto">
        @foreach($products as $product)
            <div class="col-3">
                <div class="card flex-row mb-2 shadow-sm h-md-150">
                    <div class="card-body d-flex flex-column align-items-start">
                        <center><a href="{{Route('thongtinSP',$product->id)}}"><img src="{{$product->image}}"
                                                                            height="130" width="180"></a></center>
                        <br>
                        <strong class="d-inline-block mb-2 text-dark">{{$product->name}}</strong>
                        <div class="text-muted">Giá:<strike>{{$product->unit_price}}$</strike>
                        </div>
                        <div class="mb-1 text-danger">Giá khuyến mại: {{$product->promotion_price}}$</div>
                        <br>
                        <p>
                            <a class="btn btn-outline-dark mb-1"
                               href="{{Route('thongtinSP',$product->id)}}">Thông tin &raquo</a>
                            <a class="btn btn-outline-dark mb-1"
                               href="{{Route('homepay',$product->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="23"
                                     viewBox="0 0 24 24">
                                    <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/>
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
