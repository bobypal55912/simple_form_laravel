<html>

<head>
<title>Simple  form</title>
</head>
<body>
<style>
body{
    background-color: #e8f3f8;
    font-size: 30px;
    color: steelblue;
    font: 1cm/1.5 sans-serif;
}
h1{
    text-align: center;
    
    
}
form{
    margin: 15px auto;
    width: 320px;
    color: steelblue;
    font-size: 18px;
}
input{
    padding: 3px;
    font-size: 18px;
}
input[type="text"]{
    display:block;
    margin-bottom: 25px;
    width: 200%;
    border: 2px solid steelblue;
    background: #FAF6D9;
}
input[type="date"]{
    display:block;
    margin-bottom: 25px;
    width: 200%;
    border: 2px solid steelblue;
    background: #FAF6D9;

}
input[type="email"]{
    display:block;
    margin-bottom: 25px;
    width: 200%;
    border: 2px solid steelblue;
    background: #FAF6D9;
}
input:focus {
    background: white;
    font-size: 50px;
}
button[type="Submit"]{
    width: 344px;
    height: 45px;
    border: yes;
    background: green;
    color: white;
}
</style>
<h1>Simple form</h1>



@csrf
   
    <form action="projectA" method="GET">
    
    Name    :
    <input type="text" name="name" placeholder="name">
    
    
    @error('name')
    <div>{{$message}}
    </div>@enderror<br><br>
    
    
    Email Id: <input type="email" name="email" placeholder="abc123@gmail.com">
    @error('email')
    <div>{{$message}}
    </div>@enderror<br><br>
    Mobile  :
    <input type="text" name="mobile" placeholder="9876543210">
    @error('mobile')
    <div>{{$message}}
    </div>@enderror<br><br>
    Pin Code:
    <input type="text" name="pin" placeholder="Pincode">
    @error('pin')
    <div>{{$message}}
    </div>@enderror<br><br>
    
    Date    :
    <input type="date" name="date" placeholder="date">
    @error('date')
    <div>{{$message}}
    </div>@enderror<br><br>
   
    
    <b><button type="Submit">Submit</button></b>
    
    <br><br>
    </form>
    
</body>
</html>
