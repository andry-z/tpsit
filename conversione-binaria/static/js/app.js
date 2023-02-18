function convertAndDisplay() {
  let inputNumber = document.getElementById("inputNumber").value;
  let binary = "";

  function convert(n) {
    if (n == 0) {
      return binary;
    } else {
      binary = (n % 2) + binary;
      return convert((n - (n % 2)) / 2);
    }
  }

  let binaryResult = document.getElementById("binaryResult");
  binaryResult.innerHTML = "Il numero binario è: " + convert(inputNumber);
}
