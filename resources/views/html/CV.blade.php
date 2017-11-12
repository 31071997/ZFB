@extends('layouts.app')
@section('title','Circular')
@section('content')
<section class="fix maincontent">
	<form action="" method="POST">
        <fieldset>
            <legend>C.V.</legend>
            <table>
            <tr>
                <td><b>First name:</b><br><br></td>
                <td><input type="text" name="first_name" placeholder="Type your first name"/><br><br></td>
            </tr>
            <tr>
                <td><b>Last name:</b><br><br></td>
                <td><input type="text" name="last_name"  placeholder="Type your last name"/><br><br></td>
            </tr>
            <tr>
                <td><b>AGE:</b><br><br></td>
                <td><input type="text" name="age" placeholder="Enter your age"/><br><br></td>
            </tr>
            
                  <input type="address" placeholder="Enter full address" name="address">
                </td>
            </tr>
            
            <tr>
                <td><b>Skill:</b><br><br></td>
                <td><input type="text" name="skills" placeholder="Enter your skills"/><br><br></td>
            </tr>
            
            <tr>
                <td><b>E-Mail Address:</b><br><br></td>
                <td><input type="text" name="email"  placeholder="Enter your E-MAil Address"/><br><br></td>
            </tr>
<input type="text" name="post">Post

            <tr>
                <th><b>Academic Qualication: </b></th>
                <table border="1" cellpadding="2" cellspacing="2">
                <tr>
                    <th>DEGREE</th>
                    <th>Name of Institution</th>
                    <th>Obtained GPA</th>
                </tr>
                <tr>
                    <td>S.S.C.</td>
                    <td><input type="text" name="ssc_name" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="ssc" placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>H.S.C.</td>
                    <td><input type="text" name="hsc_name"  placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="hsc" placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>B.S.</td>
                    <td><input type="text" name="bs_name" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="bs" placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>M.S.</td>
                    <td><input type="text" name="ms_name" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="ms" placeholder="Enter your GPA"/><br><br></td>
                </tr>

                </table>
            </tr>	

            </table>
        </fieldset>

        <div class="fix button">
                        <center><input type="submit" value="submit"/></center>
        </div>
    </form>
</section>
@endsection('content')
	
