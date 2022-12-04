<?php
session_start();
$adminid=$_SESSION["adminid"];


?>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css"> 
    </head>
    <style>
        .innerright,label {
    color: rgb(16, 170, 16);
    font-weight:bold 7;
}
.container,
.row,
.imglogo {
    margin:auto;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 100px;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
    background-color: rgb(105, 221, 105);
}

.greenbtn {
    background-color: rgb(16, 170, 16);
    color: white;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.greenbtn,
a {
    text-decoration: none;
    color: white;
    font-size: large;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

th{
    background-color: orange;
    color: black;
}
td{
    background-color: #fed8b1;
    color: black;
}
td, a{
    color:black;
}
    </style>
    <body>
       
    <div class="container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="image/logo.png"/></div>
           <div class="leftinnerdiv">
                <Button class="greenbtn"> ADMIN</Button>
                <Button class="greenbtn" onclick="openpart('addbook')" >ADD BOOK</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')" > BOOK REPORT</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"> BOOK REQUESTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')"> ADD STUDENT</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')"> STUDENT REPORT</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>

            <div class="rightinnerdiv">
    <div id="bookrequestapprove" class="innerright portion" style=display:none"
    <button class="greenbtn">Book Request Approve</button>
    <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
        <label>Book Name:</label><input type="text" name="bookname"/>
        </br>
        <label>Issue:</label><input type="text" name="yesorno"/></br>
</div>



     
<div class="rightinnerdiv">
    <div id="bookrequests" class="innerright portion" style=display:none"
    <button class="greenbtn">Book Request Approve</button>
    <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
        <label>Book Name:</label><input type="text" name="bookname"/>
        </br>
        <label>Issue:</label><input type="text" name="yesorno"/></br>
            


     
           
            
            <!--Add new book-->
            <div class="rightinnerdiv">   
            <div id="addbook" class="innerright portion" style=display:none"
            <Button class="greenbtn" >ADD NEW BOOK</Button>
            <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
            <label>Book Name:</label><input type="text" name="bookname"/>
            </br>
            <label>Detail:</label><input  type="text" name="bookdetail"/></br>
            <label>Autor:</label><input type="text" name="bookaudor"/></br>
            <label>Publication</label><input type="text" name="bookpub"/></br>
            <div>Branch:<input type="radio" name="branch" value="other"/>other<input type="radio" name="branch" value="BSIT"/>BSIT<div style="margin-left:80px"><input type="radio" name="branch" value="BSCS"/>BSCS<input type="radio" name="branch" value="BSSE"/>BSSE</div>
            </div>   
            <label>Price:</label><input  type="number" name="bookprice"/></br>
            <label>Quantity:</label><input type="number" name="bookquantity"/></br>
            <label>Book Photo</label><input  type="file" name="bookphoto"/></br>
            </br>
   
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>

            </form>
            </div>
            </div>
            <!--Add new book-->
            <!--book report-->
            <div class="rightinnerdiv">
                <div id="bookreport" class="innerright portion" style=display:none"
                <Button class="greenbtn">Book Report</Button>
                <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
                    <label>Book Name:</label><input type="text" name="bookname"/>
            </br>
            <label>Detail:</label><input  type="text" name="bookdetail"/></br>
            <label>Report Issue:</label><input type="text" name="report"/></br>
            </div>
<!--Book Requests-->
<div class="rightinnerdiv">
    <div id="bookrequests" class="innerright portion" style=display:none"
    <button class="greenbtn">Book Request Approve</button>
    <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
        <label>Book Name:</label><input type="text" name="bookname"/>
        </br>
        <label>Issue:</label><input type="text" name="yesorno"/></br>
</div>
<!--Add student -->
            <div class="rightinnerdiv">   
            <div id="addperson" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ADD Student</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label><input type="text" name="addname"/>
            </br>
            <label>Pasword:</label><input type="pasword" name="addpass"/>
            </br>
            <label>Email:</label><input  type="email" name="addemail"/></br>
            <label for="typw">Choose type:</label>
            <select name="type" >
                <option value="student">student</option>
                <option value="teacher">teacher</option>
            </select>
            <label>Issue:</label><input type="text" name="yesorno"/></br>
            <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>
<!--Add student -->

<div class="rightinnerdiv">   
            <div id="studentreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Student Report</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label><input type="text" name="addname"/>
            </br>
            <label>Pasword:</label><input type="pasword" name="addpass"/>
            </br>
            <label>Email:</label><input  type="email" name="addemail"/></br>
           

            <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="issuebookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Issue Book Record</Button>
            <div class="rightinnerdiv">   
            <div id="issuebook" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ISSUE BOOK</Button>
            <form action="issuebook_server.php" method="post" enctype="multipart/form-data">
            <label for="book">Choose Book:</label>
            <select name="book" >
                 <div class="rightinnerdiv">   
            <div id="addperson" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ADD Person</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label><input type="text" name="addname"/>
            </br>
            <label>Pasword:</label><input type="pasword" name="addpass"/>
            </br>
            <label>Email:</label><input  type="email" name="addemail"/></br>
            <label for="typw">Choose type:</label>
            <select name="type" >
                <option value="student">student</option>
                <option value="teacher">teacher</option>
            </select>

            <input type="submit" value="SUBMIT"/>
            </form>

            <div class="rightinnerdiv">   
            <div id="studentreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Student Report</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label><input type="text" name="addname"/>
            </br>
            <label>Pasword:</label><input type="pasword" name="addpass"/>
            </br>
            <label>Email:</label><input  type="email" name="addemail"/></br>
           

            <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>

            <div class="rightinnerdiv">
                <div id="bookrequest" class="innerright portion" style=display:none"
                <Button class="greenbtn">Book Request</Button>
                <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
                    <label>Book Name:</label><input type="text" name="bookname"/>
            </br>
            <label>Detail:</label><input  type="text" name="yesorno"/></br>
</div>
            
            
            <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
        </script>

           
            </html>