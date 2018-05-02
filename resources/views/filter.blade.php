<div id="navbar">
<!-- Menu -->
    <div class="well">
    <h5 class="text-left text-price-re">Lọc Sản Phẩm Theo:</h5>
        <form class="form-horizontal" action="{{route('timkiem')}}" method="">
            <div class="form-group">
                <label for="priceto" class="control-label ">Tên sản phẩm:</label>
                <input type="text" class="text-filter-re form-control" id="priceto" name="search" aria-describedby="basic-addon1"> </div>
                <div class="form-group ">
                    <label for="location1" class="control-label ">Loại sản phẩm:</label>
                    <select class="text-filter-re form-control " id="location1" name="members">
                        <option class="text-filter-re" value="">Chọn loại sản phẩm</option>
                          @if ($lsp->count())
                            @foreach($lsp as $loai)
                                <option class="text-filter-re" value="{{$loai->id}}">{{$loai->type_name}}</option>
                            @endforeach
                          @endif
                    </select>
                </div>
                <div class="form-group">
                                    <label for="priceto" class="control-label">Trạng thái:</label>
                                    <br>
                                    <div class="space10">&nbsp;</div>
                                    <div class="row">
                                       
                                        <div class="col-sm-4">
                                            {{-- @foreach($product as $pro) --}}
                                            <a href="{{ route('timkiemloai', $pro='sale') }}">
                                                <div class="ribbon-trangthai sale" name='sale'>Sale</div>
                                            </a>
                                            {{-- @break
                                            @endforeach --}}
                                        </div>
                                        <div class="col-sm-4">
                                            {{-- @foreach($product as $pro) --}}
                                            <a href="{{ route('timkiemloai', $pro='new') }}">
                                                <div class="ribbon-trangthai new" name='new'>New</div>
                                            </a>
                                            {{-- @break
                                            @endforeach --}}
                                        </div>
                                        <div class="col-sm-4 ">
                                            {{-- @foreach($product as $pro) --}}
                                            <a href="{{ route('timkiemloai', $pro='hot') }}">
                                                <div class="ribbon-trangthai hot" name='hot'>Hot</div>
                                            </a>
                                            {{-- @break
                                            @endforeach --}}
                                        </div>
                                        
                                    </div>
                </div>
                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6"> <a href="{{ route('timkiemloai', $pro='giagiam') }}" class="control-label search-price">Giá giảm dần <i class="fa fa-sort-amount-desc"></i></a> </div>
                                        <div class="col-sm-6"> <a href="{{ route('timkiemloai', $pro='giatang') }}" class="control-label search-price">Giá tăng dần <i class="fa fa-sort-amount-asc"></i></a> </div>
                                    </div>
                </div>
                <div class="form-group">
                                    <div class='row '>
                                        <div style="width: 90%; margin-left: 5%">
                                            <label for="pricefrom" class="control-label" name='gia'>Giá:&nbsp;&nbsp;<b>
                                                <span id="outputmin" name="giatien"> Đồng</span> </b></label>
                                            <div class="input-group" style="width: 90%; margin-left: 5%; top: 10px;">
                                                <input id="pricefrom" name="price" type="text" class="span2" /> </div>
                                        </div>

                                    </div>
                </div>
                <div class="space10">&nbsp;</div>
                <div class=" text-center">
                    <input class="btn btn-themvaogio btn-themvaogio-re" id="search_submit" value="Tìm Kiếm" type="submit">
                </div>
                                <!-- Form tim kiem -->
        </form>
                            <!-- Tim kiem -->
    </div>
    <div class="space20">&nbsp;</div>
</div>