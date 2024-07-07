const quiz = [
    {
        question: "Who is the King of Cricket?",
        ans_1: "Kohli",
        ans_2: "Babar Azam",
        ans_3: "Smith",
        ans_4: "Khushdil Shah",
        correct_ans: "ans2"
    },
    {
        question: "Who is the number one Odi batsmen?",
        ans_1: "Kohli",
        ans_2: "Smith",
        ans_3: "Babar Azam",
        ans_4: "Root",
        correct_ans: "ans3"
    },

    {
        question: "Which team won last world cup in football?",
        ans_1: "Brazil",
        ans_2: "Argentina",
        ans_3: "France",
        ans_4: "Germany",
        correct_ans: "ans2"
    },

    {
        question: "Which team has won more world cups in football?",
        ans_1: "Brazil",
        ans_2: "Argentina",
        ans_3: "France",
        ans_4: "Germany",
        correct_ans: "ans1"
    },

    {
        question: "Which team has won more world cups in cricket?",
        ans_1: "Australia",
        ans_2: "Pakistan",
        ans_3: "India",
        ans_4: "England",
        correct_ans: "ans1"
    },

    {
        question: "In which game there are playing five players at a time?",
        ans_1: "Football",
        ans_2: "Voleyball",
        ans_3: "Baseball",
        ans_4: "Basketball",
        correct_ans: "ans4"
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
let score_1=0;
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

       score_1+=5;
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
    var answers=document.getElementsByName('answer')
    for(let i=0;i<answers.length;i++)
    {
        if(answers[i].checked)
        {
            check=true;
        }
    }

    if(check==false)
    {
        var div = document.createElement("div");
            div.className = "alert alert-danger alert-dismissible";
            div.innerHTML = 
            `<button class="btn-close" data-bs-dismiss="alert"></button>
             Please first select your answer!`;
            div.style = "height:50px; width:300px; font-size:15px; font-weight:bold; margin-left:20px";
            document.getElementById("ans").appendChild(div);
            return; // Exit the function if this condition is met
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
        window.location.href = "score1.php";
        localStorage.setItem("totalScore1", score_1);
    }
}

time=60;
setInterval(function() 
{
    document.getElementById("two").innerHTML=time;
    time--;

    if(time==0)
    {
        window.location.assign("score1.php");
    }
}, 1000);

submit.addEventListener("click", chk);
nxtt.addEventListener("click", next);
