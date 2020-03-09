<html>
<head>
<title>Previous Session checker</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
<script>
function checkAll() {
    questioncheckOne();
    questioncheckTwo();
    questioncheckThree();

function questioncheckOne(){
    var correctAnswer = document.getElementById("a3")
    if (correctAnswer.checked == true) {
        score++;
        alert("Correct, your score is now " +score)
    }
    else {
            alert("Wrong, your score is now " +score)
    }
};


function questioncheckTwo(){
    var correctAnswer = document.getElementById("b2")
    if (correctAnswer.checked == true) {
        score++;
        alert("Correct, your score is now " +score)
    }
    else {
            alert("Wrong, your score is now " +score)
    }
};

}
</script>

</head>
<header>
Previous Session Checker
</header>
<body>

<form name ="End Survey">

<p>

    Have you had a previous Session? 

</p> 

<input type="radio" name="radio1" id="a1" value="a1"  /> No. </input>
<input type="radio" name="radio2" id="a2" value="a1"  /> Yes. </input>



<p> 


    If yes would you like to? 

</p> 


<input type="radio" name="radio5" id="b1" value="a2"  /> a).Start with previous chat and Counsellor. </input>
<input type="radio" name="radio6" id="b2" value="a2"  /> b).Start new chart. </input>


</form>

<a href="cselection.php" class="previous">&laquo; Previous</a>
<a href="exit.php" class="next">Next &raquo;</a>   
  


</body>
</html>