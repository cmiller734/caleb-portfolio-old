//Quiz application
//comments are added to demonstrate understanding of the mechanics being used

$(document).ready( function() {
//store HTML elements in variables
const quizContainer = document.getElementById('quiz');
const resultsContainer =  document.getElementById('results');
const submitButton =  document.getElementById('submit');

const myQuestions = [ 
    { //Q1
        question: "In plain English, what is an API?",
        answers: {
            a: "An interface that allows software components to interact",
            b: "An Application Probability Interface",
            c: "A set of instructions that tells the server to interface with the client"
        },
        correctAnswer: "a" 
    },
    { //Q2
        question: "When someone references DHTML, what three languages do they mean?",
        answers: {
            a: "Of course it's HTML, CSS, and JS!",
            b: "Pretty sure it's Ruby, AngularJS, and C#...",
            c: "CoffeeScript, Java, and SQL"
        },
        correctAnswer: "a" 
    },
    { //Q3
        question: "What is the capital of England?",
        answers: {
            a: "Birmingham",
            b: "Bristol",
            c: "London"
        },
        correctAnswer: "c" 
    },
    { //Q4
        question: "What is the 4th planet from the sun?",
        answers: {
            a: "Venus",
            b: "Jupiter",
            c: "Mars",
            d: "Saturn"
        },    
        correctAnswer: "c"
    }
];

function buildQuiz(){
    const output = []; //store the answers

    myQuestions.forEach( //for every Question object in the myQuestions array
        (currentQuestion, questionNumber) => {//currentValue, index - so the current Question object at the number in Question 
            const answers =[]; //array to store the answers in 
            for (letter in currentQuestion.answers) { //'letter' object gets defined in myQuestions. For each letter in the answers array defined below  
                answers.push(
                    `<label>
            <input type="radio" name="question${questionNumber}" value="${letter}">
            ${letter} :
            ${currentQuestion.answers[letter]}
          </label>`
                    //'<label><input type="radio" name="question${questionNumber}" value="${letter}"> ${letter} : ${currentQuestion.answers[letter]} </label>'
                ); //add the defined HTML to the answers array. notice how the question number, the value, and the letter/corresponding answer are dynamically added
            } //end for loop

            output.push(
                //'<div class="question">hi!</div>'
                `<div class="question"> ${currentQuestion.question} </div>
                <div class="answers"> ${answers.join("")} </div>`
                //'<div class="question">${currentQuestion.question}</div><div class="answers"> ${answers.join("")}</div>' //store the question and the answers into an array which we will display
            );
        }
    );
    //combine the output and put it in the quiz container
    quizContainer.innerHTML = output.join("");
}

function showResults(){
    //define a passing grade %
    var passingGradePercent = 0.7;
    var msg = '';

    //gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll('.answers'); //query selector takes all DOM Nodes from the quiz container class that have the class of .answers 
                                                                            //and puts it in the answerContainers NodeList 
    var numCorrect = 0; 

    //same as before, you're looping through the array of questions, with the Question object at the questionNumber index
    myQuestions.forEach( 
        (currentQuestion, questionNumber) => {
            const answerContainer = answerContainers[questionNumber]; //get the answerContainer Node at the questionNumber index & store
            const selector = `input[name=question${questionNumber}]:checked`; //store the checked input button in a variable
            const userAnswer = (answerContainer.querySelector(selector) || {}).value; //get the value of the checked input button. {} is there because when the program comes across an empty answer
                                                                                        //i.e. no selection has been checked, we don't want the program to crash
            if (userAnswer == currentQuestion.correctAnswer) {
            numCorrect++;
            answerContainers[questionNumber].style.color='lightgreen'; //highlight the correct answer (current selection) in green 
        } else {
            answerContainers[questionNumber].style.color='red'; //highlight the current selection in red
            }
        }        
    );

    msg += 'You got ' + numCorrect + ' correct answers out of ' + myQuestions.length + ' answers. ';
    if (numCorrect > Math.round(myQuestions.length * passingGradePercent)) { //if the number of correct answers is higher than 70%
        msg += 'You passed! Nice job.'
    }
    else {
        msg += 'Almost got it! Take another shot.'
    }

    resultsContainer.innerHTML += msg;

    resultsContainer.innerHTML += " <button><a href='.'>Try again</a></button>"; //give the user an easy way to try again
 
}

//display quiz
buildQuiz();
//show the results when you click the submit button
submitButton.addEventListener('click', showResults);
});
