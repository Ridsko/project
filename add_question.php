<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<!--        <link rel="shortcut icon" type="image/png" href="#">-->
        
        <title>Add Question</title>
        <meta name="description" content="vragenlijst">
        <link rel="stylesheet" href="style.css">
        
        <style>
            
            .add-question {
                display: grid;
                grid-template-columns: repeat(6, 15rem);
                grid-template-rows: 10rem 1fr 10rem;
                grid-row-gap: 2rem;
            }
            
            .add-question_type {
                grid-column: 6 / span 1;
                place-self: start center;
            }
            .add-question_title {
                grid-column: 1 / span 5;
                grid-row: 1;
                padding-left: 1rem;
                border: .3rem solid black;
            }
            .add-question_answers {
                grid-column: 1 / span 5;
                grid-row: 2;
                
                display: grid;
                grid-row-gap: 1rem;
            }
            .add-question_answer-option {
                display: grid;
                grid-template-columns: 2rem 1fr 2rem;
                grid-column-gap: 1rem;
                
            }
            .image--remove {
                max-width: 100%;
                max-height: 100%;
                
                align-self: center;
            }
            .button, .input--required{
                grid-row: 3;
                place-self: center;
            }
            .button {
                place-self: center start;
                min-width: 80%;
            }
            .button--add {
                grid-column: 1;
            }
            .button--remove {
                grid-column: 2;
            }
            .input--required {
                grid-column: -2;
                display: grid;
                grid-template-columns: 2fr 1fr;
                justify-items: end;
            }
            
            /* STYLIN ELEMENTS */
            .input, .button, .select {
                background-color: rgb(var(--primary-color));
            }
            .select {
                border-radius: 1rem;
                padding: 1rem .5rem;
            }
        </style>
    </head>
    <body class="body">
        <div class="questions">
            <div class="add-question">
                <select class="select add-question_type" name="question-type">
                    <option value="multiple">Multiple</option>
                    <option value="text">Text</option>
                    <option value="yesno">Yes/No</option>
                </select>
                <input type="text" class="add-question_title" placeholder="typ hier je vraag">
                <div class="add-question_answers">
                    
                </div>
                <button class="button button--add" type="button">Add Option</button>
                <button class="button button--remove" id="removeoption" type="button">Remove Option</button>
                <div class="input--required">
                    <p class="paragraph">Verplicht</p>
                    <input class="input input--checkbox" type="checkbox"> 
                </div>
            </div>
        </div>
        <button class="button button--add-question">Nieuwe vraag</button>
        <script>
            'use strict';
//            const answerOptions = new Map();
            const maxAnswerOptionsPerQuestion = 4;
            let optionCounter = 0;
            const answerOptionsPerQuestion = [];
            const answerOptionMC = `
                <div class="add-question_answer-option">
                    <input type="checkbox">
                    <input type="text" class="text text--answer" placeholder="antwoordoptie...">
                </div>
            `; 
            document.querySelector('button').addEventListener('click', function(){
               if(optionCounter < maxAnswerOptionsPerQuestion){
               optionCounter++;
               document.querySelector('.add-question_answers').insertAdjacentHTML('beforeend', answerOptionMC); }
            });
            document.getElementById('removeoption').addEventListener('click',function(){
                optionCounter--
                let element = document.querySelector('.add-question_answer-option');
                element.remove();
            });
            /* TO DO */
            /*
             * Add Eventlisteners to respective buttons 
             * Multiple questions types 
             * Scroll to option when clicked on
             * Max answer options per question
             * Save temp (JS) / save to DB (PHP/SQL)
             * Make questionaire (not just a list of questions)
             * Media Queries (resonsive)
             * Clean up code (CSS, JS), clean up structure (files, dirs), cleanup abs versus relative paths (e.g. DIR PHP), push GitHub.
             * 
             */
            //max 
        </script>
    </body>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
?>