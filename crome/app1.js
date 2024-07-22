function displayMic() {
    console.log('display');
    document.getElementsByClassName("mic")[0].style.visibility = 'visible';
    document.getElementById('imageContainer1').innerHTML = "";
    document.getElementById('imageContainer2').innerHTML = "";
    document.getElementById('imageContainer3').innerHTML = "";
    document.getElementById('imageContainer4').innerHTML = "";
    document.getElementById('imageContainer1').innerHTML = "";
}

function hideMic() {
    console.log('hide');
    document.getElementsByClassName("mic")[0].style.visibility = 'hidden';
}

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
        let transcript = event.results[current][0].transcript.toLowerCase();
        console.log(`my words: ${transcript}`);

        if (transcript.includes("hi my assistant")) {
            readOut("Hello, friend. Tell me your problem.");
            console.log("Hello sir");
        }

        if (transcript.includes("open youtube")) {
            let input = transcript.substring(transcript.indexOf("open youtube for") + 17).trim();
            readOut("Okay, here are the YouTube search results for " + input);
            input = input.replace(/\s+/g, '+');
            console.log(input);
            window.open(`https://www.youtube.com/results?search_query=${input}`);
        }

        if (transcript.includes("open google")) {
            readOut("Okay, let me open Google.");
            window.open("https://www.google.com/");
        }

        if (transcript.includes("open gmail") || transcript.includes("open g mail")) {
            readOut("Okay, let me open Gmail.");
            window.open("https://www.gmail.com/");
        }

        if (transcript.includes("search for")) {
            readOut("Here are the search results.");
            let input = transcript.substring(transcript.indexOf("search for") + 11).trim().replace(/\s+/g, '+');
            console.log(input);
            window.open(`https://www.google.com/search?q=${input}`);
        }

        if (transcript.includes("deaf watch")) {
            let input = transcript.substring(transcript.indexOf("deaf watch") + 11).trim();
            readOut("Okay, here are the image results for " + input);
            input = input.replace(/\s+/g, '+');
            console.log(transcript);
            window.open(`https://www.google.com/search?tbm=isch&q=${input}`);
        }

        if (transcript.includes("stop")) {
            recognition.stop();
            readOut("Deaf watch deactivated.");
            hideMic();
            console.log("Speech recognition stopped.");
        }
    }
}

//sr stop
recognition.onend = function() {
    console.log("Speech recognition deactivated.");
    hideMic(); // Ensure mic is hidden when speech recognition ends
}

recognition.continuous = true;

startBtn.addEventListener("click", () => {
    recognition.start();
    displayMic();
});

stopBtn.addEventListener("click", () => {
    recognition.stop();
    hideMic();
});

//speech 
function readOut(message) {
    const speech = new SpeechSynthesisUtterance();
    speech.text = message;
    speech.volume = 1;
    window.speechSynthesis.speak(speech);
    console.log("speaking out");
}

speakBtn.addEventListener("click", () => {
    readOut("Hi, What should I help you with?");
});
