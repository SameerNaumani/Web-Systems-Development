#!/usr/bin/python

import cgi, cgitb
form = cgi.FieldStorage()

f_name = form.getvalue('firstname')
l_name = form.getvalue('lastname')
addr = form.getvalue('address')
pNum = form.getvalue('pnumber')

print "Content-type:text/html\r\n\r\n"
print "<html>"

print "<head>"
print "<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>"
print "<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet'>"
print "<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet'>"
print "<script src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js'></script>"
print "<title> Lab 06 PYTHON </title>"
print "<style> body { font-family: 'Dancing Script'; font-size: 50px; background-color:#00802b; } p { font-family: Montserrat; font-weight: bold;} #mvbtn { background-color: #006600; font-family: 'Ubuntu Mono'; font-weight: bold; border: none; padding: 15px 32px; font-size: 16px; }</style>"
print "</head>"

print "<body>"

print "<p>First Name: </p> %s" % f_name.upper()
print "<p>Last Name: </p> %s" % l_name.upper()
print "<p>Address: </p> %s" % addr.upper()

numberarr = pNum.split("-")


print "<p>Phone #: </p> "
print "<span id='p1' style='background:#99ffcc;height:100px;width:100px; position:relative;'> (%s) </span>" % numberarr[0] 
print "<span id='p2' style='background:#00e673;height:100px;width:100px; position:relative;'> - %s </span>" % numberarr[1]
print "<span id='p3' style='background:#00994d;height:100px;width:100px; position:relative;'> - %s </span>" % numberarr[2]


print "<script>"


print "	$(document).ready(function(){ "
print	"	$('button').click(function() { "
		
		
print "$('#p1').animate({height: '250px', opacity: '0.4'},'slow'); "
print "$('#p1').animate({width: '250px', opacity: '0.8'},'slow'); "
print "$('#p1').animate({height: '100px', opacity: '0.4'},'slow'); "
print "$('#p1').animate({width: '100px', opacity: '0.8'},'slow'); "

print "$('#p2').animate({width: '100px', opacity: '0.5'},'slow'); "
print "$('#p2').animate({height: '100px', opacity: '0.3'},'slow'); "
print "$('#p2').animate({width: '300px', opacity: '0.5'},'slow'); "
print "$('#p2').animate({height: '300px', opacity: '0.3'},'slow'); "

print "$('#p3').animate({height: '500px', opacity: '0.8'},'slow'); "
print "$('#p3').animate({height: '500px', opacity: '0.4'},'slow'); "
print "$('#p3').animate({height: '300px', opacity: '0.8'},'slow'); "
print "$('#p3').animate({height: '300px', opacity: '0.4'},'slow'); }); });" 

print "</script>"
print "<button id='mvbtn'> Click to move around the Phone number </button>"


print "</body>"
print "</html>"