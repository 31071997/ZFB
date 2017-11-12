@extends('html.commonfields')
@section('title','Circular')
@section('content')
<section class="fix maincontent">
@extends('html.logout')
	<table border="2" cellpadding="2" cellspacing="2">
	   <tr>
		 <th rowspan=2>Job ID</th>
	     <th rowspan=2>POST</th>
		 <th rowspan=2>Job Detail</th>
	     <th rowspan=2>Vacancy</th>
		 <th rowspan=2>Skills</th>
		 <th rowspan=2>Job Experience</th>
		 <th colspan=2>Educational Requirements</th>
		 <th rowspan=2>Salary Range</th>
	     <th rowspan=2>Submit C.V.</th>
	   </tr>  
	   <tr>
	     <th >B.B.A.</th>
	     <th>M.B.A.</th>
	     
	   </tr> 
	   
	   <tr>
		 <td>01</td>
	     <td>Sales, Marketing & Implementation Officer</td>
		 <td>
		  <ul>
		   <li><b>City:</b> Chittagong</li>
	       <li><b>Job Location:</b> Bangladesh</li>
	       <li><b>Contract Type:</b> Full time</li>
	       <li><b>Job Category:</b> Management and HR</li>
	     <td>04</td>
		 <td>
		   <ul>
		     <li>Good knowledge in Accounting, Inventory, POS, Payroll Software operation & implementation..</li>
	         <li>Must be energetic and able to work under pressure, independently for a long time.</li>
	         <li>Must be structured person with strong analytical skills.</li>
			 <li>SEO,Tele and E-Mail Marketing, Customer Support Service (In door and out door)</li>
			 <li>Sound knowledge in English required.</li>
			 <li>All the applicants must be mentally ready to work for the company for at least 2 years</li>
		   <ul> 
		  </td>
		 <td>
		   <ul>
		     <li>The applicants should have experience in the following area(s):
			     Face-to-Face Customer Support, Customer Support through Phone, 
				 Tele Marketing, Online (web/e-mail) Support</li>
			 <li>The applicants should have experience in the following business area(s):IT Enabled Service, Software Company</li>
		   </ul>
		 </td>
		 <td>3 out of 4(Major in HRM)</td>
		 <td>3 out of 4</td>
		 <td>25k</td>
	     <td><a href="/circular/ViewCircular/Finamce&accpuntCV"><input type="button" value="Apply"/></td>
	   </tr>  
	   <tr>
		 <td>02</td>
	     <td>Service and Sales Engineer</td>
		 <td>
		  <ul>
		   <li><b>City:</b> Chittagong</li>
	       <li><b>Job Location:</b> Bangladesh</li>
	       <li><b>Contract Type:</b> Full time</li>
	       <li><b>Job Category:</b>Marketing</li>
	     <td>02</td>
		 <td>
		   <ul>
		     <li>Product Category knowledge in the related field.</li>
			 <li>Good presentation, interpersonal and negotiation skills.</li>
			 <li>Excellent communication and negotiation skills.</li>
			 <li>Understanding and leveraging synergies across departments for better customer delivery.</li>
			 <li>Good communication and interpersonal skills.</li>
		   <ul> 
		  </td>
		 <td>
		   <ul>
		     <li>At least 3 years in relevant products.</li>
			 <li>Track record of networking skills.</li>
		   </ul>
		 </td>
		 <td>3 out of 4</td>
		 <td>3 out of 4</td>
		 <td>25k</td>
Management&HRCV.blade.php
	     <td><a href="/circular/ViewCircular/Management&HRCV"><input type="button" value="Apply"/></a></td>
	   </tr>
	   <tr>
		 <td>03</td>
	     <td>Brand Manager </td>
		 <td>
		  <ul>
		   <li><b>City:</b> Chittagong</li>
	       <li><b>Job Location:</b> Bangladesh</li>
	       <li><b>Contract Type:</b> Full time</li>
	       <li><b>Job Category:</b> Marketing</li>
	     <td>02</td>
		 <td>
		   <ul>
		     <li>Product Category knowledge in the related field.</li>
			 <li>Good presentation, interpersonal and negotiation skills.</li>
			 <li>Excellent communication and negotiation skills.</li>
			 <li>Understanding and leveraging synergies across departments for better customer delivery.</li>
			 <li>Good communication and interpersonal skills.</li>
		   <ul> 
		  </td>
		 <td>
		   <ul>
		     <li>At least 3 years in relevant products.</li>
			 <li>Track record of networking skills.</li>
		   </ul>
		 </td>
		 <td>3 out of 4</td>
		 <td>3 out of 4</td>
		 <td>25k</td>
	    <td><a href="/circular/ViewCircular/Management&HRCV"><input type="button" value="Apply"/></a></td>
	   </tr>  
	 </table>
 </section>              
@endsection(content)