let numContaniner = document.getElementById('num');
let value = 0;
let btnInc = document.querySelector('.inc');
let btnDec = document.querySelector('.dec');
let btnReset = document.querySelector('.reset');
btnInc.addEventListener("click", () => {value++;numContaniner.textContent = value});
btnDec.addEventListener("click", () => {value--;numContaniner.textContent = value});
btnReset.addEventListener("click",() => {value=0;numContaniner.textContent = value});