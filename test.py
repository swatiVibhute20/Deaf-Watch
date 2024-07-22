import nltk
from nltk.tokenize import word_tokenize
from nltk.corpus import stopwords
import speech_recognition as sr

# Download NLTK data
nltk.download('punkt')
nltk.download('stopwords')

def recognize_speech(file_path):
    r = sr.Recognizer()
    try:
        with sr.AudioFile(file_path) as source:
            audio_data = r.record(source)  # Read the entire audio file
            text = r.recognize_google(audio_data)
            #print(text)
            return text
    except sr.UnknownValueError:
        return "Speech recognition could not understand the audio."
    except sr.RequestError as e:
        return "Could not request results from Google Speech Recognition service; {0}".format(e)

def tokenize_and_remove_stopwords(text):
    # Tokenize the input text
    tokens = word_tokenize(text)                                                  

    # Load the stopwords
    stop_words = set(stopwords.words('english'))

    # Remove stopwords from tokens
    filtered_tokens = [word for word in tokens if word.lower() not in stop_words]

    return filtered_tokens

# Example usage
file_path = "D:\\D\\MINI - PROJECT\\recorded_audio.wav"  # Provide the path to your audio file
recognized_text = recognize_speech(file_path)
# if recognized_text:
#     result = tokenize_and_remove_stopwords(recognized_text)
#     print(result)
