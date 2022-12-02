<head>
    <style>
        form{
            color:rgb(100, 60, 7);
          
           
           
       
          font-size:xx-large;
          font-weight: bolder;
          font-family: cursive;
          border-width: 20px;
  width:900px;
  text-align: center;
  padding-left:500px;
          
        }
        

        body{
            background-image: url('imgs/clg.png');
            background-repeat: no-repeat;
            background-size:contain;
            background-color: rgba(89, 243, 243, 0.774);
            
            
        }
       
        input{
            font-weight: bolder;
            font-size: 25px;
            font-style:normal;
            font-family: cursive;
        }
        input:hover,textarea:hover{
            background-color: rgb(217, 235, 140);
         
                font-weight: bolder;
            font-style: normal;
            font-family: cursive;
        }
        textarea{
            font-size: 25px;
        }
       fieldset{
        border-color:palevioletred;
           border-width:5px;
           border-style: dashed;
           background-color: pink;
         
           
       }
       button,#cancel{
           color:rgb(131, 209, 29);
           border-color: black;
           border-style: solid;
           background-color: rgb(110, 15, 15);
           font-family: cursive;
           font-weight: bold;
           font-size:25px;
        margin-left:100px;
           
       }
       button:hover,#cancel:hover{
        color:rgb(209, 191, 28);
        cursor: pointer;
        font-size:30px;
        width:200px;
        height: 100;
       }
    </style>
    <title>Form</title>
</head>

<body>
<form action="display.php" autocomplete="on" method="POST" onreset="message()"  onsubmit=" return confirmInput()" name="myForm">
    <fieldset>
    <h1>Subscribe</h1>
   <label>First name</label> <br/>
    <input type="text" size="100%"  name="fname" id="fname" onblur="myFunction()"  value="nikita"></input><br/>
    <br/>
    <label>Last name</label> <br/>
    <input type="text" size="100%"  name="lname" id="lname" onblur="myFunction()" value="bagewadi"></input><br/>
    <br/>
    <label>E-mail</label> <br/>
    <input type="text" size="100%"  name="email" id="email" value="nikibagewadi@gmail.com"></input><br/>
    <br>
    <br/>
    <label>Phone</label> <br/>
    <input type="text" size="100%"  name="phone" id="phone" value="8765432107"></input><br/>
    <br>
    <br/>
    <label>Password</label> <br/>
    <input type="password" size="100%"  name="password" id="pass"></input><br/>
    <br>
    <br/>
    <label>Address</label> <br/>
    <textarea rows="3"   placeholder="enter area"  required size="100%" ></textarea><br/>
    <br>
    <label for="gender">Gender: </label> <br>
              <input type="radio" value="male" id="malegender" name="gender"/>Male <br> 
              <input type="radio" value="female" id="femalegender" name="gender"/>Female <br/>  
              <br>
             
              <label>Date of birth</label><br>         

              <input type="date"  name="dateofbirth" value="date" required/><br>
              <br>
              <label>Favourite Color</label><br>         

              <input type="color" value="color" name="favcolor" required/><br>
              <br>
              <label >Number of companies you are applying</label><br>         

              <input type="number" value="number" name="favnumber" min="0" max="100"  required/><br>
              <br>
              

<label for="Comapnies">Comapnies: </label> <br>
              <input type="checkbox" name=data[] required/>Service based <br> 
              <input type="checkbox" name=data[] />Product based <br/>  
              <input type="checkbox" name=data[] />Unicorn Startup <br> 
              <br>
             Select Country<br>
             
              <select onchange="f()" id="country" name="country">
              <option value="India" >India</option>
              <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="Australia">Australia</option>
              </select>
              <br>
              <br>
              <label>Upload your resume</label>
              <input type="file" value="resume" id="resume" required>
              <br>
              <br> 
              <label for="subject">Bio</label>
        <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px" onfocus="f1(this)" onselect="f2()" ></textarea>
       <br><br>
             
              


              <button href="index.html"  onclick="phonenumber(document.myForm.phone)">Submit</button>
              <br>
              <br>
              <input type="reset" value="Cancel" id="cancel">
              
             
            
              </fieldset>
              <p id="para"></p>
</form>

<script>
    function myFunction() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
  x = document.getElementById("lname");
  x.value = x.value.toUpperCase();
}
function preferedGender() {
  prefer = document.forms[0].genders.value;
  alert("Your gender is " + prefer);
}
function f1(x)
{
    x.style.background = "green";
    x.style.color="white";
    
 
}
function f()
{
  alert("changed something");
}
function message() {
  alert("This is now cleared");
}
function f2()
{
    var x=document.getElementById("para").innerHTML="you selected something";
    alert(x);
}

function confirmInput() {
    let fname = document.forms["myForm"]["fname"].value;
  if (fname == "") {
    alert("first name must be filled out");
    return false;
  }
  let lname = document.forms["myForm"]["lname"].value;
  if (lname == "") {
    alert("last name must be filled out");
    return false;
  }
  var password=document.myForm.password.value; 
  if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  } 

  var x=document.myForm.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false; 
}
}

function phonenumber(inputtxt)
{
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if(inputtxt.value.match(phoneno))
     {
	   return true;      
	 }
   else
     {
	   alert("Not a valid Phone Number");
	   return false;
     }
}


    </script>
</body>

