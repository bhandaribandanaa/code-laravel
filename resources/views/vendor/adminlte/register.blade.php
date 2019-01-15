@extends('adminlte::master')
@section('body')
<div class="container">
    <p class="login-box-msg"></p>
    <form method="POST" action=".">
        {{ csrf_field() }}
        <div class="form-group">
                    Name:
                    <input type="text" name="name" class="form-control" value=""
                           placeholder="" required> 
                </div>
                 <div class="form-group has-feedback ">
                    Gender:
                        <input type="radio" name="gender" value="male" checked > Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other 
                </div>
                <div class="form-group has-feedback ">
                    Email:
                    <input type="email" name="email" class="form-control" value=""
                           placeholder="" required>
                </div>                
                <div class="form-group has-feedback ">
                    Phone:
                    <input type="text" name="phone" class="form-control" value=""
                           placeholder=""  pattern="[1-9]{1}[0-9]{9}" required  >
                </div>
                <div class="form-group has-feedback ">
                    Address:
                    <input type="text" name="address" class="form-control" value=""
                           placeholder="" required="required">
                </div>
                <div class="form-group has-feedback ">
                    Nationality:
                    <input type="text" name="nationality" class="form-control" value="" required>
                </div>
                <div class="form-group has-feedback ">
                    Date of Birth:
                    <input type="date" name="bday" class="form-control" required>
                </div>
                <div class="form-group has-feedback ">
                    Education Backgroud:
                    <select class="form-control" name='educationbackground' required="required" >
                            <option  value="Medical">Medical</option>
                            <option  value="Engineering">Engineering</option>
                            <option value="Art">Art</option>
                            <option ' value="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="form-group has-feedback " required>
                    Prefered Mode of Contact:
                            <input type="checkbox"  name="modeofContact" value="Email">Email
                            <input type="checkbox" name="modeofContact" value="Phone">Phone 
                            <input type="checkbox" name="modeofContact" value="None">None 
                 </div>

      </div class="form-group has-feedback ">
      <div> <center><button type="submit" class="btn btn-primary">Submit</button></div></center>
     

    </form>
</div><!-- /.register-box -->
@stop


