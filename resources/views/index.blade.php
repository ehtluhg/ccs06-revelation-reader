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
The Bible is considered a sacred text by three major world religions, Judaism, Christianity, and Islam. Many devout believers 
consider it to be the literal truth. Others treat it with great respect, but believe that it was written by human beings and, 
as such is a complex, often contradictory document.

Modern scholars believe that the Hebrew Bible, or Tanakh, was composed by four or five writers between 1000 to 400 BCE based on 
much older traditions. The New Testament was composed by a variety of writers between 60 to 110 CE. The contents of the New 
Testament were formalized by Athanasius of Alexandria in 367 CE, and finally canonized in 382 CE.

There are many disagreements about the order and composition of the Bible between various religions and sects, some of which are 
doctrinal in nature. The sequence of books in this hypertext should not be construed as endorsing any particular religion.

<b>Important note:</b> to view the Greek and Hebrew sections of this part of the site you must have Unicode support correctly set up in 
your browser. Special instructions about getting Hebrew Unicode running properly can be found here.

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
