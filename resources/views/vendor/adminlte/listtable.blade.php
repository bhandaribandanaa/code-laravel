@extends('adminlte::master')
@section('body')
{{-- @if($mylines->count > 0) --}}
<div class="container">
<table  class="table table-bordered">
	<tr>
		<th scope="col">Name</th>
		<th scope="col">Email</th>
		<th scope="col">Phone</th>
		<th scope="col">Address</th> 
		<th scope="col">Nationality</th> 
		<th scope="col">Date of Birth</th> 
		<th scope="col">Gender</th> 
		<th scope="col">Mode of Contact</th> 
		<th scope="col">Education Background</th>   
	</tr>
	
@foreach ($mylines as $myline)
	@if($myline)	
	<tr>
		<td> {{$myline[0]}} </td>
		<td> {{$myline[1]}} </td>
		<td> {{$myline[2]}} </td>
		<td> {{$myline[3]}}</td>
		<td> {{$myline[4]}}</td>
		<td> {{$myline[5]}} </td>
		<td> {{$myline[6]}}</td>
		<td> {{$myline[7]}}</td>
		<td> {{$myline[8]}}</td>
	</tr>
	@endif
@endforeach

</table>
</div>
@stop
 