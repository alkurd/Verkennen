products = [
    {
        title: 'Eiren',
        weight: 200,
    },
    {
        title: 'Melk',
        weight: 400,
    },
    {
        title: 'Kip',
        weight: 300,
    }
]
function calacTotal(){
    let lineTotals = document.querySelectorAll('.line_total');
    console.dir(lineTotals);
    let total = 0;
    for (let lineTotal of lineTotals){
        total += Number(lineTotal.textContent || '0');
    }
    let totalElement =document.getElementById('Totaal');
    totalElement.textContent = total.toString();
    console.log(total);
    if (total > 500000){
        totalElement.style.color ='red';
        alert('U heeft over 5 Ton');
    }
}
function calcLineTotal(event) {
    let amount = Number(this.value);
    let total = this.palletWeight * amount;
    if (amount < 0){
        this.value = '0';
        amount = 0;
        alert('Je kan niet onder 0 ');
    }
    if (amount > 120){
        this.value = '120';
        amount = 120;
        alert('Je kan niet over 120 ');
    }
    this.lineTotalElement.textContent = total;
    calacTotal();
}
for(let index in products){
// console.log(products[0].title);
// console.log(products[0]['title']);

var checkerContainer = document.getElementById('checker');
var palletLine = document.createElement('p');
checkerContainer.appendChild(palletLine);

var palletTitel = document.createElement('label');
palletTitel.textContent = products[index].title;
palletLine.appendChild(palletTitel);

var palletInput = document.createElement('input');
palletInput.textContent = products[index].title;
palletInput.type = 'number';
palletInput.id = 'input_0';
palletInput.min = 0;
palletInput.max = 100;
palletInput.addEventListener('change', calcLineTotal);
palletLine.appendChild(palletInput);

var palletWeight = document.createElement('span');
palletWeight.textContent = products[index].weight + 'kg';
palletLine.appendChild(palletWeight);

var lineTotelDisplay = document.createElement('span');
lineTotelDisplay.textContent = 0;
lineTotelDisplay.classList.add('line_total');
// lineTotelDisplay.id = 'line_total';
palletLine.appendChild(lineTotelDisplay);


palletInput.lineTotalElement = lineTotelDisplay;
palletInput.palletWeight = products[index].weight;
}

// lineTotelDisplay = document.createElement('span');
