#!/usr/bin/ruby -w

print "Content-type: text/html\n\n"
require "cgi"
cgi = CGI.new("html4")


puts "<html>"
puts "<head>"

puts "<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>"
puts "<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet'>"
puts "<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet'>"
puts "<script src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js'></script>"
puts "<title>Lab 06 RUBY</title>"

puts "<style> body { font-family: 'Dancing Script'; font-size: 50px; background-color:#b30000; } p { font-family: 'Montserrat'; font-weight:bold; } #fadebtn {
	background-color: #990000;
	font-family: 'Ubuntu Mono';
	font-weight: bold;
	border: none;
	padding: 15px 32px;
	font-size: 16px;
} span {display:none;} </style>"

puts "</head>"

puts "<body>"

puts "<p> First Name: </p>" + cgi['firstname'].upcase 
puts "<p> Last Name: </p>" + cgi['lastname'].upcase 
puts "<p> Address: </p>" + cgi['address'].upcase 

numberarr = cgi['pnumber'].split("-")


puts "<p> Phone #: </p>" + "<span id='p1'>" + "(" + numberarr[0] + ") - " + "</span>" + "<span id='p2'>" + numberarr[1] + " - </span>" + "<span id='p3'>" + numberarr[2] + "</span>"

puts "<script>"

puts <<SCRIPT

$(document).ready(function(){
	$("button").click(function() {
		var span1 = $("#p1");
		var span2 = $("#p2");
		var span3 = $("#p3");
		
		span1.fadeIn(3000).css("color", "yellow"); 
		span2.fadeIn(5000).css("color", "blue");
		span3.fadeIn(8000).css("color", "green");
		
	}); 
});
SCRIPT


puts "</script>"

puts "<button id='fadebtn'>Click to fade in the Phone number </button>"




puts "</body>"
puts "</html>"