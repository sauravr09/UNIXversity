/*Question Options*/
const question_options = [
    "1. What command is used to create a new, empty file?",
    "2. What symbol is used to redirect standard output to a file, overwriting its contents?",
    "3. Which of the following commands will append a file called permissions.txt with the contents and permissions of your current directory?",
    "4. What is the purpose of the chmod command?",
    "5. In a bash script, what does “#!/bin/bash” indicate?",
    "6. What is a process in terms of the Unix operating system?",
    "7. What command is used to list the running processes on a unix system?",
    "8. What command is used to display information about network interfaces, IP addresses, MAC addresses, and interface status?",
    "9. What unix directory is the root directory in the unix file system?",
    "10. What does the Grep command do?",
    "11. What does the cat command do?",
    "12. How do you terminate a running program in the command line?",
    "13. How can you display the last section of a text file?",
    "14. What is vim in the context of Unix?"
];

/*Answer Options*/
const answer_options = [
    ["A. touch", "B. mkdir", "C. create", "D. newfile"],
    ["A. >", "B. >>", "C. <<", "D. >!"],
    ["A. dir -l >> permissions.txt", "B. permissions.txt > ls -l", "C. ls -l >> permissions.txt", "D. ls -la | chmod >> permissions.txt"],
    ["A. It changes the unix mod variable to have specified permissions.", 
        "B. It modifies the group permissions of a file.", "C. compresses the contents of a file to a specific change modifier type.", 
        "D. lists the group permissions of a file."],
    ["A. It tells the interpreter that this file is executable by the author.", "B. It tells the system where to save the bash script.",
         "C. It tells the system which interpreter to use for executing the script.", 
         "D. It tells the interpreter where to save the bash script."],
    ["A. Defines the core functions of the unix operating system.", "B. Defines the format of the file system.",
         "C. The steps a script takes from beginning to end of execution.", "D. A program or task running in the background or foreground."],
    ["A. taskman", "B. list", "C. ps", "D. pr -a"],
    ["A. ip a", "B. show interface status", "C. netstat -i", "D. ipconfig"],
    ["A. /home", "B. /bin", "C. /usr", "D. /"],
    ["A. Get a specific user repository.", "B. Go to a specific directory repository.", "C. Search for patterns in text.", "D. Download a remote repository."],
    ["A. Assigns a file to a specific user category.", "B. Displays the contents of a text file.", "C. Displays the category of a file or directory.", "D. Displays funny cat videos."],
    ["A. rm", "B. kill", "C. ps rm", "D. ps -k"],
    ["A. head", "B. tail", "C. bottom", "D. top"],
    ["A. Vim is a command-line tool used for Virtual Interface Management.", "B. Vim is a package manager used to install software.",
         "C. Vim is a command-line text editor often used for programming and text manipulation in the terminal.", 
         "D. Vim stands for Very-Inconspicuous-Management used to manage user roles, groups, and permissions."]
];

/* The answer key */
const answer_key = [
    "option-a",
    "option-b",
    "option-c",
    "option-b",
    "option-c",
    "option-d",
    "option-c",
    "option-a",
    "option-d",
    "option-c",
    "option-b",
    "option-b",
    "option-b",
    "option-c"
];

/* The user's answer */
let user_answer = [
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    ""
];

/**
 * Helper function: return the answer of radio 
 *  button if it has been selected 
 */
function userAns(opts){
    let answer;
    for (let i =0; i<opts.length; i++){
        if (opts[i].checked){
            answer = opts[i].id;
        }
    }
    return answer;
}

/**
 * Helper function: convert to a letter based answer. 
 */
function prettyAnswer(ans){
    let correctAns;
    if (ans === "option-a"){
        correctAns = "A";
    }
    else if (ans === "option-b"){
        correctAns = "B";
    }
    else if (ans === "option-c"){
        correctAns = "C";
    }
    else{
        correctAns = "D";
    }
    
    return correctAns;
}



/**
 *  Confirms that the users have answered all the questions 
 *      If yes, compare answers with the key and display their score
 *      If not, let them know
 */
function validateAns(){
    const questions = document.getElementsByClassName("question-link");
    let activeQuest = document.getElementsByClassName("question-link active");
    let correctField = document.getElementById("correct_answer");
    let popUp = document.getElementById("popup");
    let result = document.getElementById("popup-content");
    let score = 0;
    //Check to see if all questions has been answered
    for (let i=0; i<user_answer.length; i++){
        if (user_answer.includes("")){
            // bring the text to tell user that they have not answered all questions. 
            popUp.style.transition = "display .5s ease-in";
            popUp.style.display = "block";
            if (user_answer[i] === ""){
                sucessSubmit = false;
                questions[i].scrollIntoView({behavior: "smooth"});
                questions[i].style.transition = "color .5 ease";
                questions[i].style.color = "blue";
                //go back to original style
                setTimeout(function (){
                    popUp.style.transition = "display .5 ease-out";
                    popUp.style.display = "none";
                    questions[i].style.transition = "color .5 ease";
                    questions[i].style.color = "white";
                    activeQuest[0].scrollIntoView({behavior: "smooth"});
                }, 2000)
            }
        }
        else{
            questions[0].scrollIntoView({behavior: "smooth"});
            // determine score
            if (user_answer[i] === answer_key[i]){
                score += 1;
            }
            // Handle score & display the final score
            if (score >= 9){
                result.style.color = "green";
            }
            else{
                result.style.color = "red"
            }
            result.style.fontSize = "1.5em";
            result.innerText = "Total: "+score+"/14"; 
            popUp.style.display = "block";
            // display the correct answers for each question
            correctField.style.display = "block";
        }
    }
}

/**
 * Allow the user to goto a specific question through the sidebar. 
 */
function getQuest(element){
    
    let currentQuest = document.getElementsByClassName("question-link active")[0];
    if (typeof(element) != null){
        if (element.getAttribute("class") != "question-link active"){
            element.setAttribute("class", "question-link active");
        }
        if (typeof(currentQuest) != "undefined" && (element != currentQuest)){
            currentQuest.setAttribute("class", "question-link");
        }
        //update the questions now
        updateQuest();
    }
}

/**
 * Save the user answer as they progress through the quiz
 */
function saveAns(){
    const questions = document.getElementsByClassName("question-link");
    const options = document.getElementsByName("question"); 
    let chosenAns = userAns(options); 
    for (let i=0; i< questions.length; i++){
        if (questions[i].getAttribute("class") === "question-link active"){
            //if users have a answer chosen, store it. 
            if ((typeof(chosenAns) != "undefined")){ 
                user_answer[i] = chosenAns;  
            }
        }
    }
}


/**
 * Allow the user to go back to the previous question 
 * when they press the back button.  
 */
function prevQuest(){
    const questions = document.getElementsByClassName("question-link");
    let currentQuest; 
    for (let i=0; i< questions.length; i++){
        if (questions[i].getAttribute("class") === "question-link active"){
            currentQuest = questions[i];
        }
    }
    //convert the collection to array to use 'indexOf' 
    let currentIndex = Array.from(questions).indexOf(currentQuest); 
    // if the current index is 0, do nothing. 
    if (currentIndex == 0){
        currentQuest.scrollIntoView({behavior: "smooth"});
    }
    else{
        currentQuest = questions[currentIndex-1];
        questions[currentIndex].setAttribute("class", "question-link");
        currentQuest.setAttribute("class", "question-link active");
        // make sure question is in view
        currentQuest.scrollIntoView({behavior: "smooth"});
        currentIndex -= 1;
    }
}


/**
 * Allow the user to go back to the previous question 
 * when they press the back button.  
 */
function nextQuest(){
    const questions = document.getElementsByClassName("question-link");
    let currentQuest; 
    for (let i=0; i< questions.length; i++){
        if (questions[i].getAttribute("class") === "question-link active"){
            currentQuest = questions[i];
        }
    }
    //convert the collection to array to use 'indexOf' 
    let currentIndex = Array.from(questions).indexOf(currentQuest); 
    if (currentIndex < 13){
        currentQuest = questions[currentIndex+1];
        questions[currentIndex].setAttribute("class", "question-link");
        currentQuest.setAttribute("class", "question-link active");
        //Get the question into view
        currentQuest.scrollIntoView({behavior: "smooth"});
        currentIndex += 1;
    }
    else if(currentIndex = 13){
        currentQuest.scrollIntoView({behavior: "smooth"});
    }
}


/**
 * Update the current question with question content
 */
function updateQuest(){
    const questions = document.getElementsByClassName("question-link");
    let questionField = document.getElementsByClassName("question-number")[0];
    let answerField = document.getElementsByName("question");
    let correctField = document.getElementById("correct_answer");
    // When the users reach a specific question #, update it with its question and answer content
    for (let i=0; i< questions.length; i++){
        if (questions[i].getAttribute("class") === "question-link active"){
            //updating questions
            questionField.innerHTML = question_options[i];
            correctField.innerHTML = "Correct answer is: "+prettyAnswer(answer_key[i]);

            //updating answers
            for (let j=0; j<answerField.length; j++){
                answerField[j].labels[0].innerHTML = answer_options[i][j];
                if (user_answer[i] != ""){
                    // update the radio input with user's ans
                    if (user_answer[i] === answerField[j].getAttribute("id")){
                        answerField[j].checked = true;
                    }
                    else{
                        answerField[j].checked = false;
                    }
                }
                else{
                    answerField[j].checked = false;
                }
            }
            
        }
    }
}

