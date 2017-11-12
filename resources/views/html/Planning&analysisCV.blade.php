<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
<div>
<center>
 <form action="{{ route('planningcv') }}" method="post">
        <fieldset>
            <legend>C.V.</legend>
            <table>
            <tr>
                <td><b>First name:</b><br><br></td>
                <td><input type="text" name="first_name" placeholder="Type your first name"/><br><br></td>
            </tr>
            <tr>
                <td><b>Last name:</b><br><br></td>
                <td><input type="text" name="last_name" placeholder="Type your last name"/><br><br></td>
            </tr>
            <tr>
                <td><b>AGE:</b><br><br></td>
                <td><input type="text" name="age" placeholder="Enter your age"/><br><br></td>
            </tr>
            <tr>
                <td><b>Address:</b></td>
                <td>
                  <select name="select_address">
                    <option>DHAKA</option>
                    <option>CHITTAGONG</option>
                    <option>RAJSHAHI</option>
                    <option>SYLHET</option>
                    <option>KHULNA</option>
                    <option>BARISAL</option>
                    <option>RANGPUR</option>
                    <option>MYMENSINGH</option>
                  </select>
                  <input type="address" placeholder="Enter full address" name="address">
                </td>
            </tr>
            <tr>
                 <td><b>Gender:</b><br><br></td>
                 <td>
                     <input type="radio" name="gender" value="male">Male
                     <input type="radio" name="gender" value="female">Female
                 </td>
            </tr>
            <tr>
                <td><b>Skill:</b><br><br></td>
                <td><input type="text" name="skills" placeholder="Enter your skills"/><br><br></td>
            </tr>
            <tr>
                <td><b>Previous Job</b>(if any)<b>:</b><br><br></td>
                <td><input type="text" name="company_name" placeholder="Name of company"/><br><br></td>
                <td><input type="text" name="time_duration" placeholder="Duration of work"/><br><br></td>
                <td><input type="text" name="post_name" placeholder="Name of post"/><br><br></td>
            </tr>
            <tr>
                <td><b>E-Mail Address:</b><br><br></td>
                <td><input type="text" name="email" placeholder="Enter your E-MAil Address"/><br><br></td>
            </tr>

            <tr>
                <td><b>POST: </b></td>
                <td>
                  <select name="select_post">
                    <option>Java Developer.</option>
                    <option>Senior Software Engineer.</option>
                    <option>Senior .Net Developer.</option>
                    <option>Android Developer.</option>
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
                    <td><input type="text" name="ssc_name"  placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="ssc_gpa"  placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>H.S.C.</td>
                    <td><input type="text" name="hsc_name" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="hsc_gpa"  placeholder="Enter your GPA"/><br><br></td>
                </tr>
                <tr>
                    <td>B.Sc</td>
                    <td><input type="text" name="bsc_name" placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="bsc_gpa" placeholder="Enter your CGPA"/><br><br></td>
                </tr>
                <tr>
                    <td>M.Sc</td>
                    <td><input type="text" name="msc_name"  placeholder="Enter your Institution name"/><br><br></td>
                    <td><input type="text" name="msc_gpa" placeholder="Enter your CGPA"/><br><br></td>
                </tr>

                </table>
            </tr>   

            </table>
        </fieldset>

        <div class="fix button">
                        <center><input style="background: blue; position: absolute; height: 30px; width: 150px; color: white; border: none; cursor: pointer;" type="submit" value="submit"/></center> 
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
    </form>
</center>
</div>

</body>
</html>
   