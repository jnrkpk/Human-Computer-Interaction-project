<html>
<head>
<title>Future Session checker</title>
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
.exit {
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
Future Session Saver
</header>
<body>

<form name ="End Survey">

<p>

    Would you like to save this session for a future Session? 

</p> 

<input type="radio" name="radio1" id="a1" value="a1"  /> No. </input>
<input type="radio" name="radio2" id="a2" value="a1"  /> Yes. </input>



<p> 


    Would you kindly fill in a survey form? 

</p> 


<input type="radio" name="radio5" id="b1" value="a2"  /> Yes </input>
<input type="radio" name="radio6" id="b2" value="a2"  /> No </input>


</form>

<a href="exit.php" class="exit">&laquo; Exit</a>
<a href="survey.php" class="next">Next &raquo;</a>   
  


</body>
</html>