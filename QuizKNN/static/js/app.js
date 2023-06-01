let piatti = [
    {
        nome: "Parmigiana di melanzane",
        foto: "https://www.melarossa.it/wp-content/uploads/2021/05/melanzane-alla-parmigiana-light.jpg?x14364",
        descrizione: "Sei una parmigiana di melanzane!",
        valore: 50
    },
    {
        nome: "Popizze",
        foto: "https://www.tarantomagna.it/new/wp-content/uploads/2016/02/pettole-tarantine.jpg",
        descrizione: "Sei una popizza!",
        valore: 35
    },
    {
        nome: "Riso patate e cozze",
        foto: "https://www.paneacquasale.it/wp-content/uploads/2018/05/riso-patate-e-cozze-9-1.jpg",
        descrizione: "Sei un riso patate e cozze!",
        valore: 20
    },
]

let questions = [
    {
        question: "Quale colore preferisci?",
        answers: [
            {
                "text": "Rosso",
                "value": 10
            },
            {
                "text": "Verde",
                "value": 5
            },
            {
                "text": "Blu",
                "value": 0
            },
        ]
    },
    {
        question: "Quale cibo ti piace di più?",
        answers: [
            {
                "text": "Cozze",
                "value": 0
            },
            {
                "text": "Melanzane fritte",
                "value": 5
            },
            {
                "text": "Panzerotti",
                "value": 10
            },
        ]
    },
    {
        question: "Qual è il tuo animale preferito?",
        answers: [
            {
                "text": "Cane",
                "value": 5
            },
            {
                "text": "Gatto",
                "value": 10
            },
            {
                "text": "Pappagallo",
                "value": 0
            }
        ]
    },
    {
        question: "Qual è la tua stagione preferita?",
        answers: [
            {
                "text": "Inverno",
                "value": 0
            },
            {
                "text": "Primavera",
                "value": 10
            },
            {
                "text": "Estate",
                "value": 5
            }
        ]
    },
    {
        question: "Che tipo di persona sei?",
        answers: [
            {
                "text": "Introverso",
                "value": 5
            },
            {
                "text": "Estroverso",
                "value": 0
            },
            {
                "text": "Nessuno dei due",
                "value": 10
            }
        ]
    },
]

let questionField = document.querySelector("h2")
let labels = document.querySelectorAll("label")
let nextButton = document.querySelector(".next")
let resultImageDiv = document.querySelector(".resultImage")
let index = 0
let score = 0
let finished = false

function showQuestions(){
    questionField.innerHTML = questions[index].question 
    for(let j = 0; j<questions[index].answers.length; j++){
        labels[j].innerHTML = questions[index].answers[j].text
    }
    index++
}

function result() {
    let distanceTo50 = Math.abs(score - 50);
    let distanceTo35 = Math.abs(score - 35);
    let distanceTo20 = Math.abs(score - 20);
    let closestResult

    if (distanceTo50 <= distanceTo35 && distanceTo50 <= distanceTo20) {
        closestResult = piatti.find((piatto) => piatto.valore === 50);
    } else if (distanceTo35 <= distanceTo50 && distanceTo35 <= distanceTo20) {
        closestResult = piatti.find((piatto) => piatto.valore === 35);
    } else {
        closestResult = piatti.find((piatto) => piatto.valore === 20);
    }
    return closestResult
}

showQuestions()

nextButton.addEventListener("click", function(e){
    e.preventDefault()
    let radios = document.querySelectorAll("input")
    for(let i = 0; i<radios.length; i++){
        if(radios[i].checked && !finished){
            if(index == 5){
                finished = true
                document.querySelector(".result").innerHTML = result().descrizione
                let resultImage = document.createElement("img")
                resultImageDiv.appendChild(resultImage)
                resultImage.src = result().foto
            }else{
                score = score + questions[index].answers[i].value
                radios[i].checked = false
                showQuestions()
            }
        }
    }
})

