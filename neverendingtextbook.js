//This section of javascript is for styling
//-----------------

  $(function() {
    $( ".menu" ).menu();
  $( "#button" ).button();
  $( "#radioset" ).buttonset();
  $( "#tabs" ).tabs();
    $( "#accordion" ).accordion();
  });

//This section of javascript is for the logic of the calculations


//This function recognizes that the user has clicked the Train button.  This should generate new numbers and results for the calculation by calling the train function
$('#linear_mult').click(function() {
linear_mult( );
});

$('#consecutive_integers').click(function() {
consecutive_integers( );
});

$('#sum_of_consecutive_integers').click(function() {
sum_of_consecutive_integers( );
});

$('#linear_div').click(function() {
linear_div( );
});

$('#train').click(function() {
train();
});

$('#wash').click(function() {
wash( );
});

$('#percent').click(function() {
percent( );
console.log('working');
});

var linear_mult = function( ) {
    var x = Math.floor((Math.random()*20)+1);
    var y = Math.floor((Math.random()*20)+1);
    var z = (x * y);
    var results = x;
    $('#equation').html('(x) * (' + y + ') = ' + z + '.  What is x?');
    answercheck(results);
};

var consecutive_integers = function( ) {
    var x = Math.floor((Math.random()*100)+1);
    var y = Math.floor((Math.random()*300)+150);
    var z = (y - x + 1);
    var results = z;
    $('#equation').html('How many consecutive integers are there from ' + x + ' to '  + y + ', inclusive?');
    answercheck(results);
};

var sum_of_consecutive_integers = function( ) {
    var x = Math.floor((Math.random()*30));
    var y = Math.floor((Math.random()*50)+30);
    var terms = (y - x + 1);
    var mean = (x+y)/2;
    var sum = terms * mean;

    var results = sum;
    $('#equation').html('What is the sum of all integers from ' + x + ' to '  + y + ', inclusive?');
    answercheck(results);
};

var linear_div = function( ) {

    var y = Math.floor((Math.random()*20)+1);
    var x = Math.floor((Math.random()*20)+1) * y;
    var a = Math.floor((Math.random()*20)+1);
    var z = (x / y) + a;
    console.log(x);

    var results = x;
    $('#equation').html('(x / ' + y + ' + ' + a + ') = ' + z + '  .   What is x?');
    answercheck(results);
};



var train = function() {
    var x = Math.floor((Math.random()*10)+1);
    var y = Math.floor((Math.random()*10)+1);
    var z = (x+y) * Math.floor((Math.random()*10)+1);
    var results = z/(x+y);
    $('#equation').html('Mr. Green and Mr. Yellow are ' + z + ' miles apart.  Mr. Green is running ' + x + ' MPH heading east.  Mr. Yellow is running ' + y + ' MPH heading west.  If they both leave at the same time, in how many hours will they meet?');
    answercheck(results);
};

var wash = function() {
var x = Math.floor(Math.random()*3)+2;
var y = ((Math.floor(Math.random()*3)+2) * x);
var rate_first = (1 / x);
var rate_second = (1 / y);
var combined_rate = (rate_first + rate_second);
var new_size = (9);
var results = (new_size) * (1/(combined_rate));
    $('#equation').html('Cindy can wash a car in ' + x + ' minutes.  John can wash a car in ' + y + ' minutes.  In how many minutes can John and Cindy to wash nine cars together?');
answercheck(results);
};

    var water_percent = function( ) {




    var minutes = Math.floor((Math.random()*5)+1);
    console.log(minutes + ' minutes')

    var evaporated_amount = Math.floor((Math.random()*5)+5);
            console.log(evaporated_amount + ' evaporated amount');

    var ounces = evaporated_amount*minutes*Math.floor((Math.random()*2)+4);
    console.log(ounces + ' ounces');

    var results = ((evaporated_amount * minutes)/ ounces) * 100;
    $('#equation').html('A jug is filled with ' + ounces + ' ounces of water.  ' + ' Jeremy takes a sip of ' + evaporated_amount + ' ounces of water every minute for ' + minutes + ' minutes.  What percent of the original amount of water did Jeremy drink during this period?');
    answercheck(results);
    console.log('results' + results);
};


    var percent = function( ) {

    var original = Math.floor((Math.random()*100)+1);
    var percent_increase = Math.floor((Math.random()*100)+1);
    var results = original * ((percent_increase + 100) / 100);

    $('#equation').html(original + ' is increased by ' + percent_increase + '% to yield the result y. What is y?');
    answercheck(results);
};

// This is the answercheck function.  Results are passed through to it.  This function handles all validation and behavior regarding checking the answer. 
var answercheck = function(results) {

    $('#check').css('display','inline');
    $('#answer_input').css('display','inline');
    $('#validation').html("What's the answer?");
    $('#answer_input').val('');;

    //This is the function for validating if the answer input matches results
    var validate = function( results ) {
        var answer_input = $("#answer_input").val();

        //If the anwser input does match results, congratulates the user
        if(answer_input == results) {
            $('#validation').text('Great Job!  You got it right.');
        }

        //If the answer input does not match results, tell the user.
        else {
            $('#validation').text("That's not correct.  Keep trying!");
        };
    };

    //Pressing the enter button will lets users validate results
    $('#answer_input').keypress(function() {
        if (event.keyCode == 13) {
            validate(results);
        };
    });


    //Pressing the check answer button will let users validate results
    $('#check').click(function() {
        validate(results);
    });

};




