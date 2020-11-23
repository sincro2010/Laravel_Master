@extends('layouts.main')

@section('title')
Order #{{$orders->id}}
@endsection


@section('main-content')
    <h5>Order #{{$orders->id}}</h5>
    <br>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Customer email</th>
            <th scope="col">Partner</th>
            <th scope="col">Order contents</th>
            <th scope="col">Status</th>
            <th scope="col">Total</th>
            <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            
            
            <tr>
            <th scope="row">{{$orders->client_email}}</th>
            <td>{{$orders->partner['name']}}</td>
            <td>
            @foreach($orders->orderProduct as $prod)  
                {{$prod['quantity']}}x{{$prod->product['name']}}/
            @endforeach
            </td>
            <td>  
            @php($status = $orders->status)
          
            @if (!$status)
              new
            @elseif ($status == 10)
                confirmed
            @else
                completed
            @endif
           </td>
           <td>
            @php($orderTotal = 0)
            @foreach($orders->orderProduct as $prod)
                @php($orderTotal += $prod['quantity']*$prod['price'])
            @endforeach
            ${{$orderTotal}}
            </td>
            <td><a href="{{ route('update-order', $orders->id )}}"><button class="btn btn-primary">Edit</button></a></td>
            </tr>
            
        </tbody>
        </table>
@endsection