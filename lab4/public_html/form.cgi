#!/usr/bin/perl
use CGI':standard';
use strict;
my $name = param('name');
my $colour = param('colour');
my $age = param('age');
my @foods = param('foods');

print "content-type: text/html\n\n";
print qq~<LINK REL="STYLESHEET" TYPE="text/css" HREF="form_styles.css">\n~;

print "<html>";
print "<body>";

print "<p class=content>Hello, ";
print "$name";
print "<br>";
print "You are ";
print "$age";
print " years old!";
print "<br>";
print "Your favourite colour is:";
print "$colour";
print "<br>";
print "Your favourite foods are: ";
print "@foods";
print "!</p>";
print "<br>";
print "</body>";
print "</html>";