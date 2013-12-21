


<head>
    <title>Rate Problems</title>
    <link rel="stylesheet" href="/css/numbers.css" type="text/css">
    <link href="../css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

    <script src="../js/jquery-1.9.1.js"></script>
    <script src="../js/jquery-ui-1.10.3.custom.js"></script>
</head>

<body>
<!--
        <ul class="menu">
            <li><a id = "train" href="#">Rate Problems</a></li>
            <li><a id = "wash" href="#">Rate Problem 2</a></li>
            <li><a id = "linear_mult" href="#">Algebra Multiplication</a></li>
            <li><a id = "linear_mult" href="#">Algebra Division</a></li>
            <li><a id = "water_percent" href="#">Percent</a></li>
        </ul>
-->

<h1> Consecutive Integers </h1>
<div id="accordion">
  <h3>How to solve them</h3>
  <div>


    <h4> Try this problem: </h4>

    <p> How many integers are there from 15 to 20?  Was your answer 5? </p>

    <p> That's incorrect! There are actually 6. Count out the numbers and see for yourself! </p>

    <ul>
        <li> 15 </li>
        <li> 16 </li>
        <li> 17 </li>
        <li> 18 </li>
        <li> 19 </li>
        <li> 20 </li>
    </ul>

    <p> You don't actually have to list out all of the numbers to solve this problem.  To solve consecutive integer problems forumlaically, remember this formula: </p>
    <em> Last - First + 1 </em>

  </div>

    <h3> Try it! </h3>
    <div>
    <button type="button" id="consecutive_integers">New Problem</button>
    <h2> <span id='equation'></span> 
        <span id='answer'></span> </h2>  
        <div id='check_section'>
            <input type='text' id='answer_input' maxlength="14">
            <span id="check"> <button id="button">Check Answer</button> </span>    
            <p><span id='validation'></span></p>
        </div> 

</div>
</div>







<script src="../neverendingtextbook.js"></script>
 
</body>
</html>