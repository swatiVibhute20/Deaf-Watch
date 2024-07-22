const startBtn = document.querySelector("#start");
const stopBtn = document.querySelector("#stop");
const speakBtn = document.querySelector("#speak");

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();
//sr start
recognition.onstart = function() {
    console.log("Speech recognition active.");
}
//sr result 

recognition.onresult = function(event) {
    let current = event.resultIndex;
    if (event.results[current]) {
        let transcript = event.results[current][0].transcript;
        //console.log(transcript);
        // readOut(transcript);
        transcript= transcript.toLowerCase();
        console.log('my words : '+transcript);

        if(transcript.includes("deaf watch")){
            readOut("hellow, friend tell me your problem ?");
            console.log("hellow sir")
        }
        if (transcript.includes("alert")) {
            // let input = transcript.substring(transcript.indexOf("watch deaf") + 19).trim();
            readOut("dog is barking");
            input = input.replace(/\s+/g, '+');
            console.log(input);
           
        }        
       
        
       
        
        
    }   
}

//sr stop
recognition.onend = function() {
    console.log("Speech recognition deactivated.");
}
recognition.continuous = true ;

startBtn.addEventListener("click", () => {
    recognition.start();
});

stopBtn.addEventListener("click", () => {
    recognition.stop();
});

//speech 
function readOut(message){
    const speech = new SpeechSynthesisUtterance()
    speech.text = message;
    speech.volume = 1 
    window.speechSynthesis.speak(speech)
    console.log("speaking out")
}

speakBtn.addEventListener("click",()=>{
    readOut("Hi, What should I Help You")
});

