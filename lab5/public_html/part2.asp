<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="CPS 530 Web Systems Development">
  <meta name="keywords" content="Labs, CPS 530, Web Systems Development">
  <meta name="author" content="Sameer Naumani">

  <style>
  body{
  background-color: <%=Request.QueryString("Colour")%>
  }
  </style>

  <title>CPS 530 Lab 5 Part 2</title>
</head>
<body>
<h2>

    
                <head>
                <title>Lab 05 Part 2</title>
                <style>
                h1{
                  text-align: center;
                }
                body {
                  text-align: center;
             
                  background-position: 100px 300px;
                }
                </style>
                
                </head>
                
                <body>
                <h1>Lab 05 Part 2</h1>
                <h2>Sameer Naumani</h2>
                <p>Choose a colour and I'll make a page with that background colour!</p>
                <form action="lab05submit.asp" method="get">
                <select name = "colour">
                Choose a colour:
                <option>Red</option>
                <option>Blue</option>
                <option>Green</option>
                <option>Grey</option>
                <option>Purple</option>
                <option>Yellow</option>
                <option>Orange</option>
                </select>
                <input type="submit" />
                </form>
                </body>
                
                
                
               
<%
  If Request.Cookies("LastVisit") Is Nothing Then
    Request.Write("First Visit")
    Response.Cookies("LastVisit") = Date()
    Response.Cookies("LastVisit").Expires = Date() + 5
  Else
    CookieCount = Request.Cookies("LastVisit")
    Response.Write("The last time you visited was " & CookieCount)
  End If
%>
</h2>
</body>
</html>