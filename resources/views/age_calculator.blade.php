<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
</head>
<style>
    
html,body{
   background: url('/Lawrencium(1).png');
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
    height: 100%;
  
    
}
h1{
    font-size: 4.5rem;
   
        font-family: "Ubuntu", sans-serif;
        font-weight: 700;
        font-style: normal;
        color: white;
      
}
.container{
    border:0px solid black;
    display: flex;
    color: white;
    align-items: center;
    text-align: center;
    flex-direction: column;
    margin: 50px;
    padding:200px;
    border-radius: 15px;
    background-color:#7570d5;
    font-size: 4rem;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.756);

    transition: box-shadow 2s ease-in-out;
   
    font-family: "Ubuntu", sans-serif;
    font-weight: 500;
    font-style: normal;

    
}
input[type="date"]{
    margin-top: 50px;
    margin-bottom: 20px;
    font-size: 1.5rem;
    padding: 25px;
    border : 2px solid #3e4a61;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
    border-radius: 50px;
    color:white;
    background-color:#181439;
    
}
input[type="date"]:hover{
    background-color:white;
    color: #181439;
    transition: 0.5s ease;
    
}
.btn{
    margin-top: 10px;
    margin-bottom: 20px;
    font-size: 1.2rem;
    background-color:white;
    padding: 20px;
    border : 2px solid #3e4a61;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
    border-radius: 50px;
    color:#181439
    
}
.btn:hover{
    background-color:#181439;
    color: white;
    transition: 0.5s ease;

}
.p{
    font-size: 3.5rem;
   
   font-family: "Ubuntu", sans-serif;
   font-weight: 700;
   font-style: normal;
   color: white;
}




    </style>
<body>
   <h1>Age Calculator</h1>
  <div class="box">
    <div class="container">
        <form method="POST" action="{{route('calc_age')}}">
        @csrf
        <label>Date Of Birth :</label><br>
        <input type="date" name="date"/>
        <br>
        <button type="submit" class="btn">Calculate Age</button>
        @isset($age)
     
        <p class="p">You are {{$age}} Years old 🎉</p><br>


            
      
       
        @endisset
    </form>
       </div>
 
      
   
  </div> 

</body>
</html>