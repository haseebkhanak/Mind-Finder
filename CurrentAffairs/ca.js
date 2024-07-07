const quiz=[
    {
        question: "Who won the Nobel Peace Prize in 2021?",
        ans_1:"Dimitri",
        ans_2:"M.Ressa",
        ans_3:"Haseeb Salman",
        ans_4:"Both A & B",
        correct_ans:"ans4"
    },

    {
        question: "Who is the current Prime Minister of the UK?",
        ans_1:"Rishi Sunak",
        ans_2:"Bojpari",
        ans_3:"Boris Johnson",
        ans_4:"Saakshi Sunak",
        correct_ans:"ans1"
    },

    {
        question: "Which country is hosting the 2023 Cricket World Cup?",
        ans_1:"Srilanka",
        ans_2:"India",
        ans_3:"Both A & B",
        ans_4:"None",
        correct_ans:"ans2"
    },

    {
        question: "Who is the current Secretary-General of the UN?",
        ans_1:"Antonio Guterres",
        ans_2:"Kofi annan",
        ans_3:"Trygve Lie",
        ans_4:"None",
        correct_ans:"ans1"
    },

    {
        question: "Which country launched its manned mission to space?",
        ans_1:"Africa",
        ans_2:"China",
        ans_3:"America",
        ans_4:"Brazil",
        correct_ans:"ans2"
    },

    {
        question: "Who launched the world's first digital currency?",
        ans_1:"China",
        ans_2:"America",
        ans_3:"Portugal",
        ans_4:"Bhamas",
        correct_ans:"ans4"
    }
]

let q=document.getElementById("ques");
let a=document.getElementById("a");
let b=document.getElementById("b");
let c=document.getElementById("c");
let d=document.getElementById("d");
let submit=document.getElementById("sub");
var nxtt=document.getElementById("nxt");

var questioncount=0;
var score_2=0;
var right=0;
var wrong=0;

function load()
{
    q.innerHTML=quiz[questioncount].question;
    a.innerHTML=quiz[questioncount].ans_1;
    b.innerHTML=quiz[questioncount].ans_2;
    c.innerHTML=quiz[questioncount].ans_3;
    d.innerHTML=quiz[questioncount].ans_4;
    questioncount++;
}

load();

let submitchk=false;

function chk()
{

   let correct;
   let answers = document.getElementsByName("answer");

   for (let i = 0; i < answers.length; i++) {
    if (answers[i].checked) {
        correct = answers[i].value;

    }
}
   
   if(correct==quiz[questioncount-1].correct_ans)
   {
       
       score_2+=5;
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
       var div=document.createElement("div")
       div.className="alert alert-danger alert-dismissible"
       div.innerHTML= 
       `<button class="btn-close" data-bs-dismiss="alert"></button>
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

    let check=false;//It will check that answer is selected or not
    let answers = document.getElementsByName("answer");
    for(let i=0;i<answers.length;i++)
    {
            if(answers[i].checked)
        {
                check=true;
        }
    }
    
    if (check === false) 
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
        submitchk=false;  // Reset submit flag for the next question
     
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
        window.location.href = "score2.php";
        localStorage.setItem("totalScore2", score_2);
    }

}


time=60;
setInterval(function() 
{
    document.getElementById("two").innerHTML=time;
    time--;

    if(time==0)
    {
        window.location.assign("score2.php");
    }
}, 1000);

submit.addEventListener("click",chk)
nxtt.addEventListener("click",next)

