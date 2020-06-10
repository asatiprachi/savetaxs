@extends('layouts.default')
@section('content')
 


<section class="order" style="justify-content: start;align-items: start;">
<h2> HEllO, <span>{{ Auth::user()->name }}</span></h2>
 <table class="table1">

   <thead>

        <tr>

          <th>Id</th>

          <th>city</th>

          <th>Email</th>

          <th>state</th>

          <th>language</th>

         </tr>

    </thead>

  <tbody>


    @foreach($orders as $order)

       <tr>

          <td>{{ $order->id }}</td>

          <td>{{ $order->city }}</td>

          <td>{{ $order->email }}</td>

          <td>{{ $order->state }}</td>

         <td>{{ $order->language }}</td>

       </tr>

    @endforeach

  </tbody>

 </table>
</section>


@endsection

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/orders.css') }}" rel="stylesheet">