@extends('layouts.main')

@section('title', 'Orders list')


@section('main-content')
    <h5>Orders list</h5>
    <br>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Partner</th>
            <th scope="col">Order total</th>
            <th scope="col">Order contents</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($orders as $order)
            <tr>
            <th scope="row"><a href="{{route('one-order', $order->id)}}">#{{$order->id}}</a></th>
            <td>{{$order->partner['name']}}</td>
            <td>
            @php($orderTotal = 0)
            @foreach($order->orderProduct as $prod)
                @php($orderTotal += $prod['quantity']*$prod['price'])
            @endforeach
            ${{$orderTotal}}
            </td>
            <td>
            @foreach($order->orderProduct as $prod)  
                {{$prod['quantity']}}x{{$prod->product['name']}}/
            @endforeach
            </td>
            <td>  
            @php($status = $order->status)
          
            @if (!$status)
              new
            @elseif ($status == 10)
                confirmed
            @else
                completed
            @endif
           </td>
            </tr>
            @endforeach
        </tbody>
        </table>
@endsection