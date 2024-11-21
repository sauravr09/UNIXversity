<!DOCTYPE html>
<html lang="en">
<?php
    $pageName = "UNIXversity - Introduction";
	include("assets/inc/header.php");
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/quiz.css" rel="stylesheet" type="text/css">
<script src="assets/scripts/quiz.js"></script>
<title>Quiz Page</title>
</head>
<body onload="updateQuest()">

    <!-- PopUp DIV -->
    <div id="popup">
        <p id="popup-content">
            Please answer all the questions!
        </p>
    </div>
    <!-- Main quiz div -->
    <div class="grey-container">
        <!-- Sidebar -->
        <div class="quiz-container">

        <!-- Sidebar/Question Nav -->
            <div id="question-list" class="question-sidebar">
                <div onclick="getQuest(this)" class="question-link active">Question 1</div>
                <div onclick="getQuest(this)" class="question-link">Question 2</div>
                <div onclick="getQuest(this)" class="question-link">Question 3</div>
                <div onclick="getQuest(this)" class="question-link">Question 4</div>
                <div onclick="getQuest(this)" class="question-link">Question 5</div>
                <div onclick="getQuest(this)" class="question-link">Question 6</div>
                <div onclick="getQuest(this)" class="question-link">Question 7</div>
                <div onclick="getQuest(this)" class="question-link">Question 8</div>
                <div onclick="getQuest(this)" class="question-link">Question 9</div>
                <div onclick="getQuest(this)" class="question-link">Question 10</div>
                <div onclick="getQuest(this)" class="question-link">Question 11</div>
                <div onclick="getQuest(this)" class="question-link">Question 12</div>
                <div onclick="getQuest(this)" class="question-link">Question 13</div>
                <div onclick="getQuest(this)" class="question-link">Question 14</div>
            </div>

            <!-- Main quiz content -->
            <div class="quiz-main">
                <div class="quiz-content" onclick="saveAns()">
                    <div class="question-number">2. Lorem ipsum lorem ipsum lorem ipsum lorem ipsum?</div>
                    <div class="answer-option">
                        <input type="radio" name="question" id="option-a">
                        <label for="option-a">A. Lorem ipsum</label>
                    </div>
                    <div class="answer-option">
                        <input type="radio" name="question" id="option-b">
                        <label for="option-b">B. Lorem ipsum</label>
                    </div>
                    <div class="answer-option">
                        <input type="radio" name="question" id="option-c">
                        <label for="option-c">C. Lorem ipsum</label>
                    </div>
                    <div class="answer-option">
                        <input type="radio" name="question" id="option-d">
                        <label for="option-d">D. Lorem ipsum</label>
                    </div>
                    <p id="correct_answer">Correct Answer is:</p>
                </div>
            <!-- Quiz Navigation buttons -->
                <div class="quiz-navigation">
                    <button class="nav-button" onclick="prevQuest(); updateQuest();">Back</button>
                    <button class="nav-button" onclick="nextQuest(); updateQuest();">Next</button>
                    <button class="nav-button" onclick="validateAns()">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
