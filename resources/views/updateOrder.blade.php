
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
            <th scope="col">Customer email*</th>
            <th scope="col">Partner*</th>
            <th scope="col">Order contents</th>
            <th scope="col">Status*</th>
            <th scope="col">Total</th>
            <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            
        <form method = "post" action="{{ route('update-order-submit', $orders->id)}}">
        {{ csrf_field() }}
            <tr>
            
            <th scope="row"><input type="email" name="email" id="email" value="{{$orders->client_email}}" placeholder="customer email" class="form-control"><br></th>
            
            <td><select name="partner-select" id="partner-select" class="form-control">
            @foreach(App\Order::get() as $order)
            <option value='{{$order->partner_id}}' {{ $orders->partner_id==$order->partner_id? 'selected' : '' }}>{{$order->partner['name']}}</option>
            @endforeach
            </select></td>

            <td>
            @foreach($orders->orderProduct as $prod)  
                {{$prod['quantity']}}x{{$prod->product['name']}}/
            @endforeach
            </td>

            <td><select name="status-select" id="status-select" class="form-control">
           
            @php($statusOption = [0, 10, 20])
            @php($statusIcon='')
            @foreach(  $statusOption as $option)
            <option value='{{$option}}' {{ ($orders->status == $option) ? 'selected' : '' }}>
            @if ($option== 0)
            new
            @elseif ($option ==10)
            confirmed
            @elseif ($option ==20)
            completed
            @endif
            </option>
            @endforeach
            </select></td>   
           <td>

            @php($orderTotal = 0)
            @foreach($orders->orderProduct as $prod)
                @php($orderTotal += $prod['quantity']*$prod['price'])
            @endforeach
            ${{$orderTotal}}
            </td>
            <td><button type="submit" class="btn btn-success">Submit</button></td>
            </tr>
            </form>
        </tbody>
        </table>
@endsection
