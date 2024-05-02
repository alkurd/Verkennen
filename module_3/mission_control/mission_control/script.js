// variables om de timeout & interval bij te houden
var countdown_event = null;
var timed_event = null;
const rocketElement = document.getElementById('rocket')
const countDuwnElement = document.getElementById('countdown');
const controlButton =  document.getElementById('control-button');
rocketElement.state = 0;
countDuwnElement.state = 0;
const controlTitel = document.getElementById('control-title');

// var rocket =0;


// zet de mission control title, button en clear de countdown (interval & nummer) en timeout
function set_mission_control(title, buttonTitle, buttonOnclick) {
    
}

// verwijder alle states van de raket en voegt de juiste toe
function set_rocket_state(state) {
    rocketElement.className = state;

}

/* stage 1:
    set mission control: Prepare to Launch, button 'Start count down naar stage 2
    set rocket state: 1
*/
function set_stage_1() {
    controlButton.textContent = 'Start count down';
    countDuwnElement.state = 1;
    controlTitel.textContent ='Prepare to Launch';
    controlTitel.className = '';
    controlButton.classList.remove('hide');
    set_rocket_state('state1');
    controlButton.onclick = set_stage_2

}

/* stage 2:
    set mission control: Counting down, button Abort click naar stage 1
    set rocket state: 2
    start timed event: na 5 seconden rocket state: 3
    start coundown event: na 10 seconden naar stage 3
*/
function set_stage_2() {
    controlTitel.textContent = 'Count down';
    controlButton.textContent = 'Abort';
    countDuwnElement = 10;
    set_rocket_state('state2');
    controlButton.onclick = set_stage_1;
    setTimeout(function(){set_rocket_state('state3');},5000);
    setTimeout(function(){set_stage_3();},10000)
    seconds = setInterval(start_countdown_event, 10000)
}

/* stage 3:
    set mission control: Lift off!
    set rocket state: 4
    start timed event: na 3 seconden naar stage 4
*/
function set_stage_3() {
    controlButton.textContent = 'Lift off';
    set_rocket_state('state4');
    controlButton.onclick = set_stage_4;
    
    setTimeout(function(){set_stage_4();},3000)

}

/* stage 4:
    set mission control: Add more power, button Boost rocket click naar stage 5
    set rocket state: 5
    start countdown event: na 2 seconden naar stage 6
*/
function set_stage_4(){
    controlTitel.textContent = 'Add more power';
    controlButton.textContent = 'Boost rocket';
    controlButton.onclick = set_stage_5;
    set_rocket_state('state5');
    setTimeout(function(){set_stage_6();},2000);

}

/* stage 4:
    set mission control: Rocket away
    set rocket state: 6
    start timed event: na 2 seconden rocket state 8 en een countdown van 3 seconden met Restarting in... die naar stage 1 gaat
*/
function set_stage_5() {
    controlButton.textContent = 'Rocket away';
    set_rocket_state('state6');

}

/* stage 6:
    set mission control: Rocket exploded
    set rocket state: 7
    start timed event: na 3 seconden zelfde titel, try again button naar stage 1
*/
function set_stage_6() {

}

// voer een functie (event) uit na x seconden, zonder count down
function start_timed_event(seconds, event) {
    if (seconds <= 0) {
        console.error("Ongeldige tijdsduur. Seconden moet een positief getal zijn.");
        return;
    }
}
    

// voer een functie (event) uit na x seconden, met count down
function start_countdown_event(seconds, event){
    setinter
}

// set sage 1 on page load
set_stage_1();

function set_stage_3() {
    controlButton.textContent = 'Lift off';
    set_rocket_state('state4');
    controlButton.onclick = set_stage_4;
    
    setTimeout(function(){set_stage_4();},3000)

}

function set_stage_4(){
    controlTitel.textContent = 'Add more power';
    controlButton.textContent = 'Boost rocket';
    controlButton.onclick = set_stage_5;
    set_rocket_state('state5');
    setTimeout(function(){set_stage_6();},2000);

}

function start_timed_event(seconds, event) {
    seconds = 1
    countDuwnElement.counter -= seconds;
    countDuwnElement.textContent = countDuwnElement.counter;
    if (countDuwnElement.counter === 0){
        clearInterval(seconds)
    }
    displayCounter();
}