let jokeDisplay = document.querySelector(".jokeDisplay")

function capitalize(str) {
  return str.charAt(0).toLocaleUpperCase() + str.slice(1).toLocaleLowerCase();
}

function copiaTesto() {
  let elementoDaCopiare = document.querySelector(".jokeDisplay");

  let selezione = window.getSelection();
  let intervallo = document.createRange();
  intervallo.selectNodeContents(elementoDaCopiare);
  selezione.removeAllRanges();
  selezione.addRange(intervallo);

  document.execCommand("copy");
  selezione.removeAllRanges();
}

fetch('https://api.chucknorris.io/jokes/categories')
  .then(function(response) {
    return response.json()
  })
  .then(function(data) {
    let selectElement = document.querySelector(".dropdownField")
    data.forEach(function(category) {
      let optionElement = document.createElement('option')
      optionElement.value = category
      optionElement.text = capitalize(category)
      selectElement.add(optionElement)
    })
  })
  .catch(function(error) {
    console.error(error)
  })

document.querySelector("a").addEventListener("click", function(e){
    e.preventDefault()
    console.log("Cliccato")
    let categoria = document.querySelector("select").value
    let url = ""
    if(categoria === "random"){
        url = "https://api.chucknorris.io/jokes/random"
    }else{
        url = "https://api.chucknorris.io/jokes/random?category=" + categoria
    }
    fetch(url)
    .then(function(data){
        console.log("Fetch fatta")
        return data.json()
    })
    .then(function(s){
        console.log("Battuta inserita")
        jokeDisplay.innerHTML = s.value
    })
    .catch(function(){
        console.log("Error!")
    })
})


let copyBtn = document.querySelector(".copyButton")
copyBtn.addEventListener("click", function(e){
    copiaTesto()
    alert("Battuta copiata nella clipboard")
})