<?php

 include('header.php');
 ?>



<!doctype html> 
<html> 
<head>
 <title>Two Column With Header and Footer</title> 
 <link rel="stylesheet" type="text/css" href="abc.css"> 
 </head> 
 <body> 
 <div id="container">        
 <div id="header">           
      <h1>This is my site!</h1>       
       </div> <!-- end header -->      
         <div id="menu">     
              <ul>             
              <li><a href="admin/admin.php">Admin</a></li>           
                <li><A href="teacher/student.php">teacher</a></li>

                 <li><a href="student/login.php">student</a></li>        
                 <li><a href="#">About me</a></li>
                 <li><a href="#">Contact Me</a></li> 

               </ul>   
                   </div>

                     <div id="mainContainer">    
                          <div id="content">      
                    <h2>Here’s some content</h2>      
                    <p>This is where a story would go</p>    
                    <h2>Here’s more content</h2>   
                <p>This is another story</p>   
             </div> <!-- end content -->          
              <div id="sidebar">            
             <h3>Page information</h3>              
              <ul>                  
              <li>Admin information</li>                 
               <li>Teacher information</li>                 
               <li>Student information</li>             
               </ul>  
               		<h1></h1>
		
                </div> <!-- end sidebar -->           
                <div id="footer">             
                <p>pondicherry@university.johnpu.com</p>          
                 </div> <!-- end footer -->        
                  </div> <!-- end mainContainer --> 
                  </div> <!-- end container --> 
                  </body>
            </html> 