var inputTeams = document.getElementById('input-teams');
var lastSurvingTeam = null;
var lastSurvingTeamNou = null; // serving now
var lastSurvingTeamPrevious = null; // 


inputTeam1.value = 'team 1'; // testdata
inputTeam2.value = 'team 2'; // testdata

function start(event){
    // als namen niet gevuld dan return
    if (inputTeam1.value.trim() == '') return
    if (inputTeam2.value.trim() == '') return
    inputTeams.style.display = 'None'
    counterTeam1.counter = 0;
    counterTeam2.counter = 0;
    displayNames();
    displayCounter();
    startSurving();
    counterTeam1.addEventListener('click',count);
    counterTeam2.addEventListener('click',count);
    undoButton.addEventListener('click',unDo)
    
}

function displayCounter(){
    counterTeam1.textContent = counterTeam1.counter;
    counterTeam2.textContent = counterTeam2.counter;
}

function startSurving(){
    console.log
    if(!servingTeam2.checked){
        displaySurving(counterTeam1);
        astSurvingTeamNou= counterTeam1
    }else if (servingTeam2.checked){
        displaySurving(counterTeam2);
        astSurvingTeamNou = counterTeam2
        
    }
}


function displaySurving(teamCounter){
    counterTeam1.classList.remove('serving'); //verwijder class serving voor eerste counter
    counterTeam2.classList.remove('serving'); //verwijder class serving voor tweede counter
    teamCounter.classList.add('serving'); //voeg class serving voor meegekregen counter
   
}


startButton.addEventListener('click',start);

function count(event){
    this.counter+=1;
    displayCounter();
    displaySurving(this);
    lastSurvingTeam = this;

    lastSurvingTeamPrevious =  lastSurvingTeamNou
    lastSurvingTeamNou = this;
}


function displayNames(event){
nameTeam1.textContent = inputTeam1.value.trim() ||'...';
nameTeam2.textContent = inputTeam2.value .trim()||'...';
}
inputTeam1.addEventListener('change',displayNames);
inputTeam2.addEventListener('change',displayNames);

function unDo(event){
    if(!lastSurvingTeam)return; // prevent cancel
    lastSurvingTeam.counter--;
    displayCounter()
    lastSurvingTeam = null;
    lastSurvingTeamNou = lastSurvingTeamPrevious
    lastSurvingTeamPrevious = null;
    displaySurving(lastSurvingTeamNou);
    
    
}
