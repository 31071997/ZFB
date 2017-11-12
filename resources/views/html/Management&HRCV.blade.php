@extends('html.commonfields')
@section('title','CV')
@section('content')
<section class="fix maincontent">
    <form action="">
        <fieldset>
            <legend>C.V.</legend>
            <table>
            <tr>
                <td><b>First name:</b><br><br></td>
                <td><input type="text" name="" value="" placeholder="Type your first name"/><br><br></td>
            </tr>
            <tr>
                <td><b>Last name:</b><br><br></td>
                <td><input type="text" name="" value="" placeholder="Type your last name"/><br><br></td>
            </tr>
            <tr>
                <td><b>AGE:</b><br><br></td>
                <td><input type="text" name="" value="" placeholder="Enter your age"/><br><br></td>
            </tr>
            <tr>
                <td><b>Address:</b></td>
                <td>
                  <select>
                    <option>DHAKA</option>
                    <option>CHITTAGONG</option>
                    <option>RAJSHAHI</option>
                    <option>SYLHET</option>
                    <option>KHULNA</option>
                    <option>BARISAL</option>
                    <option>RANGPUR</option>
                    <option>MYMENSINGH</option>
                  </select>
                  <input type="address" placeholder="Enter full address" name="">
                </td>
            </tr>
            <tr>
                 <td><b>Gender</b><br><br></td>
                 <td>
                     <input type="radio" name="GENDER">Male
                     <input type="radio" name="GENDER">Female
                 </td>
            </tr>
            <tr>
                <td><b>Skill:</b><br><br></td>
                <td><input type="text" name="" value="" placeholder="Enter your skills"/><br><br></td>
            </tr>
            <tr>
                <td><b>Previous Job</b>(if any)<b>:</b><br><br></td>
                <td><input type="text" name="" value="" placeholder="Name of company"/><br><br></td>
                <td><input type="text" name="" value="" placeholder="Duration of work"/><br><br></td>
                <td><input type="text" name="" value="" placeholder="Name of post"/><br><br></td>
            </tr>
            <tr>
                <td><b>E-Mail Address:</b><br><br></td>
                <td><input type="text" name="" value="" placeholder="Enter your E-MAil Address"/><br><br></td>
            </tr>

            <tr>
                <td><b>POST: </b></td>
                <td>
                  <select>
                    <option>Sales, Marketing & Implementation Officer.</option>
                    <option>Service and Sales Engineer.</option>
                    <option>Brand Manager.</option>
                  </select>
                </td>
            </tr>


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
                    <td><input type="text" name="" value="" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="" value="" placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>H.S.C.</td>
                    <td><input type="text" name="" value="" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="" value="" placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>B.B.A.</td>
                    <td><input type="text" name="" value="" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="" value="" placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>M.B.A.</td>
                    <td><input type="text" name="" value="" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="" value="" placeholder="Enter your GPA"/><br><br></td>
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