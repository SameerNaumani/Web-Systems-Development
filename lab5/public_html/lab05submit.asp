  
<!DOCTYPE html>
<html>
<head>
<title>Lab05 Part 2 Submission</title>
<style>
body {
background-color: <%=Request.QueryString("Colour")%>;
background-position: 100px 100px;
font-size: 50px;
}
</style>
</head>

<body>

<%
Response.Cookies("LastVisit") = Date()
Response.Cookies("LastVisit").Expires = Date() + 5
Response.Write("You last visited on : " & Session("LastVisit"))
Response.Write("<br />")
Response.Cookies("TimeVisited") = Time()
Response.Cookies("TimeVisited").Expires = Time() + 5
Response.Write("The time you last visited was : " & Session("TimeVisited"))
Response.Write("<br />")
Response.Write("<br />")
%>


<a href="http://sameer.somee.com/">Go Back</a>
</body>











</html>