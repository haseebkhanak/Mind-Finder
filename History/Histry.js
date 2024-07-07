const quiz = [
    {
        question: "In which year did Columbus reach the America?",
        ans_1: "1492",
        ans_2: "1490",
        ans_3: "1499",
        ans_4: "1502",
        correct_ans: "ans1"
    },
    {
        question: "Who was the first female pharaoh of Egypt?",
        ans_1: "Hatshepsut",
        ans_2: "Sobekneferu",
        ans_3: "Thutmose",
        ans_4: "Neferusobek",
        correct_ans: "ans2"
    },

    {
        question: "Who was the first Emperor of Rome?",
        ans_1: "Julius Caesar",
        ans_2: "Constantine",
        ans_3: "Augustus",
        ans_4: "None",
        correct_ans: "ans3"
    },

    {
        question: "Who was the first caliph of Islam?",
        ans_1: "Hazrat Ali",
        ans_2: "Hazrat Omar",
        ans_3: "Hazrat Abubakar",
        ans_4: "Hazrat Usman",
        correct_ans: "ans3"
    },

    {
        question: "In which century was the Ottoman Empire founded?",
        ans_1: "12 Century",
        ans_2: "11 Century",
        ans_3: "14 Century",
        ans_4: "13 Century",
        correct_ans: "ans4"
    },

    {
        question: "Which city was the capital of the Ottoman Empire?",
        ans_1: "Baghdad",
        ans_2: "Istanbul",
        ans_3: "Anatoliya",
        ans_4: "Konya",
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
let score_3=0;
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

       score_3+=5;
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


function next() {

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
        window.location.href = "score3.php";
        localStorage.setItem("totalScore3", score_3);
    }
}

time=60;
setInterval(function() 
{
    document.getElementById("two").innerHTML=time;
    time--;

    if(time==0)
    {
        window.location.assign("score3.php");
    }
}, 1000);
submit.addEventListener("click", chk);
nxtt.addEventListener("click", next);
