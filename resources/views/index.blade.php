<html>
<head>
<title>Book Reader Web Application</title>
</head>
<body>
<div class ="book_container">
<h1> {{ $book_name }} </h1>
<h3> {{ $author_name }} </h3>

<div class="row">
<div class="column left">
  <p>Contents</p>
<a href="/introduction"> About </a><br>
@for($i =1; $i <= $number_of_chapters; $i++)
<a href="/chapter/{{ $i }}"> Chapter {{ $i }} </a><br>
@endfor
<a href="/all-chapters"> All Chapters </a>
</div>
<div class="column right">
<pre>
<p>
The PHP Notes for Professionals book is compiled from Stack Overflow Documentation, the content is written by the 
beautiful people at Stack Overflow. Text content is released under Creative Commons BY-SA. See credits at the end 
of this book whom contributed to the various chapters. Images may be copyright of their respective owners unless 
otherwise specified

Book created for educational purposes and is not affiliated with PHP group(s), company(s) nor Stack Overflow. 
All trademarks belong to their respective company owners

481 pages, published on June 2018


<b>Disclaimer</b>
This is an unofficial free book created for educational purposes and is not affiliated with official PHP group(s) or company(s).
All trademarks and registered trademarks are the property of their respective owners
</p>
</pre>
</div>
</div>
</div>
</body>
<style>
.book_container {
    margin-top: 2%;
    width: 90%;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 15px;
    height: 460px;
}

h1, h3 {
    font-family: arial;
    text-align: center;
}

a {
    font-family: arial;
    text-decoration: none;
    
}

a:hover {
    color: violet;
}

p {
    font-family: arial;
}

.row {
  display: flex;
}

.column {
  float: left;
  padding: 10px;
  height: 500px;
}

.left {
  width: 15%;
}

.right {
  width: 75%;
  overflow-y: scroll;
}

</style>
</html>