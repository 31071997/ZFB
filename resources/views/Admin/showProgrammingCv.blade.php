<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{  asset('css/app.css') }}">
</head>
<body>
<div>
@foreach($programmingCvs as $programmingCv)
<center>
 <form >
        <fieldset style="background:  lightgrey ;">
            <legend style="background: darkblue; color:white; ">C.V. - {{ $programmingCv->id }}</legend>
            <table>
            <tr>
                <td><b>First name:</b><br><br></td>
                <td>{{ $programmingCv->first_name }}<br><br></td>
            </tr>
            <tr>
                <td><b>Last name:</b><br><br></td>
                <td>{{ $programmingCv->last_name }}<br><br></td>
            </tr>
            <tr>
                <td><b>AGE:</b><br><br></td>
                <td>{{ $programmingCv->age }}<br><br></td>
            </tr>
            <tr>
                <td><b>Address:</b></td>
                <td>
                  
                  {{ $programmingCv->address }} ,
                  {{ $programmingCv->select_address }}
                </td>
            </tr>
            <tr>
                 <td><b>Gender:</b><br><br></td>
                 <td>
                     {{ $programmingCv->gender }}
                 </td>
            </tr>
            <tr>
                <td><b>Skill:</b><br><br></td>
                <td>{{ $programmingCv->skills }}<br><br></td>
            </tr>
            <tr>
                <td><b>Previous Job</b>(if any)<b>:</b><br><br></td>
                <td>Name Of Company: {{ $programmingCv->company_name }}<br><br></td>
                <td>Duration of work: {{ $programmingCv->time_duration }} <br><br></td>
                <td>Name of Post: {{ $programmingCv->post_name }} <br><br></td>
            </tr>
            <tr>
                <td><b>E-Mail Address:</b><br><br></td>
                <td>{{ $programmingCv->email }}<br><br></td>
            </tr>

            <tr>
                <td><b>POST: </b></td>
                <td>
                  {{ $programmingCv->select_post }}
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
                    <td>{{ $programmingCv->ssc_name }}<br><br></td>
                    <td>{{ $programmingCv->ssc_gpa }}<br><br></td>
                </tr>
                <tr>
                    <td>H.S.C.</td>
                    <td>{{ $programmingCv->hsc_name }}<br><br></td>
                    <td>{{ $programmingCv->hsc_gpa }}<br><br></td>
                </tr>
                <tr>
                    <td>B.Sc</td>
                    <td>{{ $programmingCv->bsc_name }}<br><br></td>
                    <td>{{ $programmingCv->bsc_gpa }}<br><br></td>
                </tr>
                <tr>
                    <td>M.Sc</td>
                    <td>{{ $programmingCv->msc_name }}<br><br></td>
                    <td>{{ $programmingCv->msc_gpa }}<br><br></td>
                </tr>

                </table>
            </tr>   

            </table>
             <hr> 
            <a href="/circular/ViewCircular/InterviewCard" text-decoration="none"><button style="background: green; width: 200px; height: 30px; color: white; border: none; border-radius: 8px;">Accepted</button></a>
            <button style="background: darkred; width: 200px; height: 30px; color: white; border: none; border-radius: 8px;"">Not Accepted</button>
        </fieldset><br><br>
         

        
    </form>
   
    
</center>
@endforeach
</div>

</body>
</html>
   
