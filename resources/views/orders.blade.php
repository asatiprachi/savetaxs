
 
<div class="container">

<h2> HEllO <span>{{ Auth::user()->name }}</span></h2>

<p>Data of the Registered Users.</p> 

<table class="table table-bordered">

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

</div>
