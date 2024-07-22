from flask import Flask, render_template, jsonify, request
import speech_recognition as sr
import requests
import openai 
from constants import APIKEY

from test import recognize_speech, tokenize_and_remove_stopwords

microphone = sr.Microphone()
app = Flask(__name__)

# Define global variables
linka = []
r = sr.Recognizer()

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/start', methods=['POST'])
def start():
    global audio_text
    global token
    global linka
    
    with microphone as source:
        print("Recording started...")
        audio = r.listen(source)
        print("Recording stopped.")
        
        # Save the recorded audio as a WAV file
        with open("recorded_audio.wav", "wb") as f:
            f.write(audio.get_wav_data())
        
        # Process audio
        audio_text = recognize_speech("recorded_audio.wav")
        token = tokenize_and_remove_stopwords(audio_text)
        
        # Fetch images and append to linka
        linka.clear()  # Clear linka before adding new links
        for token in token:
            link = fetch_image(token)
            if link:
                linka.append(link)
        
        print(linka)
        # openai.api_key=APIKEY


        # response = openai.Image.create(
        #     model="dall-e-2",
        #     prompt="audio_text",
        #     quality="standard",
        #     n=1,
        # )

        # image_url=response.data[0].url
        # print(image_url)
        
        return jsonify({'message': 'Recording completed.', 'text': audio_text, 'linka': linka})



# Function to fetch image URLs
def fetch_image(search_term):
    url = f"http://localhost/1/fetch_image.php?search={search_term}"
    
    try:
        response = requests.get(url)
        if response.status_code == 200:
            # Assuming the response contains the image data in JSON format
            data = response.json()
            if "images_results" in data:
                if data["images_results"]:
                    thumbnail_url = data["images_results"][0].get("thumbnail")
                    if thumbnail_url:
                        return thumbnail_url
        else:
            print(f"Failed to fetch image. Status code: {response.status_code}")
    except requests.exceptions.RequestException as e:
        print(f"An error occurred: {e}")


#import streamlit as st

#print(image_url)
#st.image(image_url,caption="CSK",use_column_width=True)


@app.route('/image')
def image():
    return render_template('image.html')

@app.route('/about')
def about():
    return render_template('about.html')

@app.route('/features')
def features():
    return render_template('features.html')

@app.route('/contact-us')
def contact_us():
    return render_template('contact-us.html')

@app.route('/profile')
def profile():
    return render_template('profile.html')

@app.route('/text')
def text():
    return render_template('text.html')

@app.route('/futureGoals')
def futureGoals():
    return render_template('futureGoals.html')



if __name__ == '__main__':
    app.run(debug=True)
