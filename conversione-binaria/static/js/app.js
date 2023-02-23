let binary = "";

let submitButton = document.getElementById("button");
submitButton.addEventListener("click", function () {
  binary = "";
  let inputNumber = document.getElementById("inputNumber").value;
  let binaryResult = document.getElementById("binaryResult");
  binaryResult.innerHTML = "Il numero binario è: " + convert(inputNumber);
});

function convert(n) {
  if (n == 0) {
    return binary;
  } else {
    binary = (n % 2) + binary;
    return convert((n - (n % 2)) / 2);
  }
}
