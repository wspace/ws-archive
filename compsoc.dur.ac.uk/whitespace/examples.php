<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Whitespace Examples</title>
<LINK REL="STYLESHEET" TYPE="text/css" HREF="home.css">
</head>
<body>


<table class="layout">
<tr>
<th colspan=2>
<h1> Whitespace Examples</h1>
</th>
</tr>
<tr>
<td class="layout" width="10%">
<p>

<a href="index.php">Whitespace</a><br>
<a href="tutorial.php">Tutorial</a><br>
Examples<br>
<a href="contrib.php">Contributions</a><br>
<a href="download.php">Download</a><br>
<a href="tools.php">Tools</a><br>
<a href="feedback.php">Feedback</a><br>
<a href="mailinglist.php">Mailing List</a><br>
<a href="explanation.php">Explanation</a><br>

</p>
</td>
<td width="90%" class=main>

<h2>Whitespace Examples</h2>

<dl>
<dt><strong><a href="hworld.ws">Hello, World!</a></strong></dt>
<dd>
<p>Here is the ubiquitous Hello World program. Note how the characters are
converted to a binary encoding. The subroutine for writing out a string
is also interesting.
</p>
</dd>

<dt><strong><a href="name.ws">Hello, user!</a></strong></dt>
<dd>
<p>
Slightly extended from the previous program, this program asks the user
their name before saying hello to them. The subroutine for reading in a string
is particularly interesting. Note how the input is duplicated twice, since we 
need to use it multiple times.
</p>
</dd>

<dt><strong><a href="calc.ws">Calculator</a></strong></dt>
<dd>
<p>
To demonstrate a bit of arithmetic. Fairly straightforward, but again notice 
that the majority of the work is in stack manipulation to keep track of the
local variables.
</p>

<dt><strong><a href="fact.ws">Factorial</a></strong></dt>
<dd>
<p>
This program demonstrates how we can handle arbitrarily big numbers and 
recursion. Note the definition of the factorial function quite happily calls 
itself since the only storage it uses is on the stack.
</p>

<dt><strong><a href="hanoi.ws">Towers of Hanoi</a></strong></dt>
<dd>
<p>
This program works out a solution for the towers of hanoi problem, recursively,
and shows the use of stack frames for local variables in recursive functions.
</p>

<dt><strong><a href="fibonacci.ws">Fibonacci</a></strong></dt>
<dd>
<p>
Written by Chris Morris, this is the other canonical way of showing how 
recursion works.
</p>
	
<dt><strong><a href="tutorial.html">[Fact|Tut]orial</a></strong></dt>
<dd>
<p>
A version of the <a href="tutorial.php">tutorial</a> which, when executed,
does the same as the <a href="fact.ws">factorial</a> program above.
</p>
	
</dl>

<!-- -*-HTML-*- -->
<hr>
<p>
<a href="mailto:eb@dcs.st-and.ac.uk"><em>eb@dcs.st-and.ac.uk</em></a>
Released April 1st, 2003<br>
Last Updated May 4th, 2004
</p>
<p>
Hosted by <a href="http://compsoc.dur.ac.uk/">Durham University Computing
Society</a></p>
</td> 
</tr>
</table>
</body></html>
