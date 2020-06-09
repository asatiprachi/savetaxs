
 
<div class="container">

<h2> HEllO <span>{{ Auth::user()->name }}</span></h2>

<p>Data of the Registered Users.</p> 

<table class="table table-bordered">

<thead>

<tr>

<th>Id</th>

<th>Name</th>

<th>Email</th>

</tr>

</thead>

<tbody>

$users = DB::table('users')->select('id','name','email')->get();

@foreach($users as $value)

<tr>

<td>{{ $value->id }}</td>

<td>{{ $value->name }}</td>

<td>{{ $value->email }}</td>


</tr>

@endforeach

</tbody>

</table>

</div>
