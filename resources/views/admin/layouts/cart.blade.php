
@extends('admin.layouts.layouts')

@section('title', 'Cart')

@section('content')

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        @if(count($carts) > 0)
          @foreach($carts as $cart)
              <tr>
                  <td data-th="Product">
                      <div class="row">
                          <div class="col-sm-3 hidden-xs"><img src="{{asset('images/products').'/'.$cart['feature']}}" alt="..." class="img-responsive" width="100ps;" /></div>
                          <div class="col-sm-9">
                              <h4 class="nomargin">{{$cart['name']}}</h4>
                              <p>{{$cart['description']}}.</p>
                          </div>
                      </div>
                  </td>
                  <td data-th="Price">{{$cart['price']}}</td>
                  <td data-th="Quantity">
                      <input type="number" class="form-control text-center" value="1">
                  </td>
                  <td data-th="Subtotal" class="text-center">{{$cart['price']}}</td>
                  <td class="actions" data-th="">
                      <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                      <a  href="{{route('deleteCart',$cart['id'])}}"    class="btn btn-danger btn-sm"><i class="fa fa-trash-o" ></i></a>
                  </td>
              </tr>
          @endforeach
      @else
            <td > <h3 class="text-center well">no Cart  yet</h3></td>
      @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total 1.99</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
        </tr>
        </tfoot>
    </table>

@endsection