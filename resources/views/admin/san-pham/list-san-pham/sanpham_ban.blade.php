@extends('admin.layout.main')
@section('title', 'Sản phẩm')
@section('content')
<script type="text/javascript">
    function updateCart(qty,rowId) {
        console.log(qty);
        console.log(rowId);
        $.get(
  
    '{{asset('admin/show_san_pham/update')}}',
    {qty:qty,rowId:rowId},
    function(){
        location.reload();
    }
        );
}
</script>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid" style="margin-top: 81px;">
            <!-- start page title -->
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Product</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-right">Price</th>
                                        <th scope="col" class="text-right">Total</th>
                                        <th scope="col" class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartContent as $key => $item)
                                    <tr>
                                      
                                        <td><img class="img-responsive" width="100px"
                                            src="{{asset('product/'.$item->options['image'])}}"> </td>
                                        <td>{{$item->name}}</td>
                                        <td><input class="form-control" type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
                                        </td>
                                        <td class="text-right">{{number_format($item->price,0,',','.')}}đ</td>
                                        <td class="text-right">
                                            {{number_format($item->price*$item->qty,0,',','.')}}đ
                                        </td>
                                        <td class="text-right"><button class="btn btn-sm btn-danger btn-remove"><a
                                                    href=""></a><i class="fa fa-trash"></i></button> </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right">
                                            <strong>{{ $totalPrice }}</strong>
                                        </td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="row">
                            <div class="col-sm-12  col-md-6">
                                <button class="btn btn-block btn-light">Continue Shopping</button>
                            </div>
                            <div class="col-sm-12 col-md-6 text-right">
                                <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
        <!-- Footer Start -->

        <!-- end Footer -->
    </div>
    @endsection()