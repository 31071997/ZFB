<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{  asset('css/app.css') }}">
</head>
<body>
<div>
@foreach($financeCvs as $financeCv)
<center>
 <form>
        <fieldset>
            <legend>C.V. - {{ $financeCv->id }}</legend>
            <table>
            <tr>
                <td><b>First name:</b><br><br></td>
                <td>{{ $financeCv->first_name }}<br><br></td>
            </tr>
            <tr>
                <td><b>Last name:</b><br><br></td>
                <td>{{ $financeCv->last_name }}<br><br></td>
            </tr>
            <tr>
                <td><b>AGE:</b><br><br></td>
                <td>{{ $financeCv->age }}<br><br></td>
            </tr>
            <tr>
                <td><b>Address:</b></td>
                <td>
                  
                  {{ $financeCv->address }} ,
                  {{ $financeCv->select_address }}
                </td>
            </tr>
            <tr>
                 <td><b>Gender:</b><br><br></td>
                 <td>
                     {{ $financeCv->gender }}
                 </td>
            </tr>
            <tr>
                <td><b>Skill:</b><br><br></td>
                <td>{{ $financeCv->skills }}<br><br></td>
            </tr>
            <tr>
                <td><b>Previous Job</b>(if any)<b>:</b><br><br></td>
                <td>Name Of Company: {{ $financeCv->company_name }}<br><br></td>
                <td>Duration of work: {{ $financeCv->time_duration }} <br><br></td>
                <td>Name of Post: {{ $financeCv->post_name }} <br><br></td>
            </tr>
            <tr>
                <td><b>E-Mail Address:</b><br><br></td>
                <td>{{ $financeCv->email }}<br><br></td>
            </tr>

            <tr>
                <td><b>POST: </b></td>
                <td>
                  {{ $financeCv->select_post }}
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
                    <td>{{ $financeCv->ssc_name }}<br><br></td>
                    <td>{{ $financeCv->ssc_gpa }}<br><br></td>
                </tr>
                <tr>
                    <td>H.S.C.</td>
                    <td>{{ $financeCv->hsc_name }}<br><br></td>
                    <td>{{ $financeCv->hsc_gpa }}<br><br></td>
                </tr>
                <tr>
                    <td>B.Sc</td>
                    <td>{{ $financeCv->bsc_name }}<br><br></td>
                    <td>{{ $financeCv->bsc_gpa }}<br><br></td>
                </tr>
                <tr>
                    <td>M.Sc</td>
                    <td>{{ $financeCv->msc_name }}<br><br></td>
                    <td>{{ $financeCv->msc_gpa }}<br><br></td>
                </tr>

                </table>
            </tr>   

            </table>
             <a href="/circular/ViewCircular/InterviewCard"><button style="background: green; width: 200px; height: 30px; color: white; border: none; border-radius: 8px;">Accepted</button></a>
            <button style="background: darkred; width: 200px; height: 30px; color: white; border: none; border-radius: 8px;"">Not Accepted</button>
        </fieldset>

        
    </form><br><br><br>
</center>
@endforeach
</div>

</body>
</html>
   