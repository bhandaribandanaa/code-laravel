@extends('layout')


@section('title')
    contact us
@endsection

@section('content')
	<form method="get">
Name      <input type="text" name="fname" id="fname" placeholder="enter your name"/><br/><br/>
Gender    <input type="radio" name="gender" value="male" checked> Male
  		<input type="radio" name="gender" value="female"> Female
  		<input type="radio" name="gender" value="other"> Other<br><br>
Phone:   <input type="email" name="email" id="email"/><br/><br/>
Email:    <input type="email" name="email" id="email" /><br/><br/>
Address:       <input type="text" name="fname" id="fname" /><br/><br/>
Nationality:  <input type="password" name="password" /><br/><br/>
Date of Birth:
  <input type="date" name="bday">
  <!-- <input type="submit"> --><br><br>
 Education Background:
 	<select>
  	<option value="Medical">Medical</option>
  	<option value="Engineering">Engineering</option>
  	<option value="Art">Art</option>
  	<option value="Agriculture">Agriculture</option>
	</select><br><br>
 Prefered Mode of Contact:
 	<input type="checkbox" name="vehicle1" value="Email">Email
	<input type="checkbox" name="vehicle2" value="Phone">Phone 
	<input type="checkbox" name="vehicle2" value="None">None 
<br>


</form>


@endsection