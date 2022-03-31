<?php

/*
Question 02: 

Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

When you click on the power/start button, your bike takes a start, 

When you click stop, your bike takes a stop, 

When you press the break, your bike take break, 

when you give the gear, your bike move faster and faster, 

when you press the signal button, your bike shows a signal light.

When you press the headlight button, your bike’s headlight will start.

Solve this game using Switch case and submit it on github. */


$bikeFeature = 4; //Total feature 6.

switch($bikeFeature) {
    case '1':
        echo "Start the Bike";
        break;
    case '2':
        echo "Stop the Bike";
        break;
    case '3':
        echo "Break the Bike";
        break;
    case '4':
        echo "Gear the bike";
        break;
    case '5':
        echo "Signal the Bike";
        break;
    case '6':
        echo "Headlight on the Bike";
        break;
    default:
    echo "Please enter valid Bike feature! ";

    //Output: Gear the bike

}

?>