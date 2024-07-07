const quiz = [
    {
        question: "Which planet is known as the Red Planet?",
        ans_1: "Jupiter",
        ans_2: "Mars",
        ans_3: "Saturn",
        ans_4: "Pluto",
        correct_ans: "ans2"
    },
    {
        question: "What is the largest ocean on Earth?",
        ans_1: "Pacific",
        ans_2: "Atlantic",
        ans_3: "Indian",
        ans_4: "Arctic",
        correct_ans: "ans1"
    },

    {
        question: "Land of the Rising Sun?",
        ans_1: "China",
        ans_2: "Korea",
        ans_3: "Japan",
        ans_4: "None",
        correct_ans: "ans3"
    },

    {
        question: "Who is the author of the Harry Potter series?",
        ans_1: "Thorne",
        ans_2: "Stifney",
        ans_3: "Robert Gal",
        ans_4: "J.K.Rowling",
        correct_ans: "ans4"
    },

    {
        question: "What is the currency of Japan?",
        ans_1: "Yan",
        ans_2: "Yun",
        ans_3: "Yaun",
        ans_4: "Yen",
        correct_ans: "ans4"
    },

    {
        question: "Who invented the telephone first?",
        ans_1: "Elisha Gray",
        ans_2: "Graham Bell",
        ans_3: "Antonio Meucci",
        ans_4: "None",
        correct_ans: "ans2"
    }
];

var ques = document.getElementById("ques");
var option_a = document.getElementById("a");
var option_b = document.getElementById("b");
var option_c = document.getElementById("c");
var option_d = document.getElementById("d");
var submit = document.getElementById("sub");
var nxtt=document.getElementById("nxt");

let questioncount = 0;
let score_4=0;
let right=0;
let wrong=0;

function load()
{
    ques.innerHTML = quiz[questioncount].question;
    option_a.innerText = quiz[questioncount].ans_1;
    option_b.innerText = quiz[questioncount].ans_2;
    option_c.innerText = quiz[questioncount].ans_3;
    option_d.innerText = quiz[questioncount].ans_4;
    questioncount++;
}

load();

let submitchk=false;

function chk() 
{
    var correct;
    var answers = document.getElementsByName("answer");
    for (let i = 0; i < answers.length; i++) {
        if (answers[i].checked) {
            correct = answers[i].value;

        }
    }

    if (correct == quiz[questioncount-1].correct_ans) 
    {

       score_4+=5;
       right++;

       var div=document.createElement("div")
       div.className="alert alert-success alert-dismissible"
       div.innerHTML= 
       `<button class="btn-close" data-bs-dismiss="alert"></button>
       Right Answer!`
       div.style="height:50px; width:250px; font-size:15px; font-weight:bold; margin-left:20px"
       document.getElementById("ans").appendChild(div)
       submitchk=true;

    } 
    else 
    {
        wrong++;
        var div=document.createElement("div");
        div.className="alert alert-danger alert-dismissible";
        div.innerHTML=`<button class="btn-close" data-bs-dismiss="alert"></button>
        Wrong Answer!`
        div.style="height:50px; width:250px; font-size:15px; font-weight:bold; margin-left:20px"
        document.getElementById("ans").appendChild(div)

        submitchk=true;

    }

    // Disable radio buttons after submission
    for (let i = 0; i < answers.length; i++) {
       answers[i].disabled = true;
   }

       // Disable submit button after submission
        submit.disabled=true;
}


function next() 
{

    let check=false;
    var answers=document.getElementsByName('answer');
    for(let i=0;i<answers.length;i++)
    {
        if(answers[i].checked)
        {
            check=true;
        }
    }

    if(check==false){
        var div=document.createElement("div")
        div.className="alert alert-danger alert-dismissible"
        div.innerHTML= 
        `<button class="btn-close" data-bs-dismiss="alert"></button>
        Please first select your answer!`
        div.style="height:50px; width:300px; font-size:15px; font-weight:bold; margin-left:20px"
        document.getElementById("ans").appendChild(div)
        return; //Exit function
    }

    if(submitchk==false)
    {
    var div = document.createElement("div");
    div.className = "alert alert-danger alert-dismissible";
    div.innerHTML = 
    `<button class="btn-close" data-bs-dismiss="alert"></button>
    Please click the "Submit" button!`;
    div.style = "height:50px; width:300px; font-size:15px; font-weight:bold; margin-left:20px";
    document.getElementById("ans").appendChild(div);
    return;
    }

    for(let i=0;i<answers.length;i++)
    {
        answers[i].checked=false;
    }
    
    if (quiz.length > questioncount) 
    {
        load();
        submitchk=false;

             // Enable radio buttons on next question
             for (let i = 0; i < answers.length; i++) {
                answers[i].disabled = false;
            }

            // Enable submit button on next question
            submit.disabled=false;

            // Remove any existing alert messages
            document.getElementById("ans").innerHTML="";
    } 
    else 
    {
        alert("You have correct " + right + " answers out of "+ quiz.length + " Questions" );
        window.location.href = "score4.php";
        localStorage.setItem("totalScore4", score_4);
    }
}

time=60;
setInterval(function() 
{
    document.getElementById("two").innerHTML=time;
    time--;

    if(time==0)
    {
        window.location.assign("score4.php");
    }
}, 1000)
submit.addEventListener("click", chk);
nxtt.addEventListener("click", next);
