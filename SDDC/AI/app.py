# app.py
from flask import Flask, render_template, request, jsonify
import os
from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing import image
from flask_cors import CORS
import numpy as np

app = Flask(__name__)
CORS(app)

# Load the pre-trained model
model_path = 'skin_disease_ENB7.h5'  # Replace with the path to your .h5 model file
model = load_model(model_path)

# Function to preprocess the uploaded image
def preprocess_image(img_path):
    img = image.load_img(img_path, target_size=(150, 150))
    img_array = image.img_to_array(img)
    img_array = np.expand_dims(img_array, axis=0)
    return img_array

# Route for the home page
@app.route('/')
def index():
    return render_template('index.html')

# ...

# Route for handling image upload and classification
@app.route('/upload', methods=['POST'])
def upload():
    # Check if the post request has the file part
    if 'file' not in request.files:
        return jsonify({'error': 'No file part'})

    file = request.files['file']

    # If the user does not select a file, browser also submit an empty part
    if file.filename == '':
        return jsonify({'error': 'No selected file'})

    # If the file is valid
    if file:
        # Save the file
        file_path = os.path.join('uploads', file.filename)
        file.save(file_path)

        # Preprocess the image
        img_array = preprocess_image(file_path)

        # Make predictions
        predictions = model.predict(img_array)
        class_index = int(np.argmax(predictions))
        # class_name = 'YourClassNames'  # Replace with your class names

        class_names = ['Acne and Rosacea', 'Actinic Keratosis  Lesions', 'Atopic Dermatitis', 'Basal cell carcinoma', 'Benign keratosis', 'Bullous Disease', 'Cellulitis Impetigo', 'Dermatofibroma', 'Eczema', 'Exanthems and Drug Eruptions', 'Hair Loss and Diseases', 'Herpes HPV', 'Light Pigmentation', 'Lupus Tissue diseases', 'Melanocytic nevus', 'Melanoma  Nevi and Moles', 'Nail Fungus', 'Poison Ivy', 'Psoriasis  Lichen Planus', 'Scabies Lyme', 'Seborrheic Keratoses', 'Squamous cell carcinoma', 'Systemic Disease', 'Tinea Ringworm', 'Urticaria Hives', 'Vascular Tumors', 'Vascular lesion', 'Vasculitis', 'Warts Molluscum']  # Replace with your actual class names
        # Get the class name based on the index
        class_name = class_names[class_index]

        # Return the result as JSON
        result = {'class_index': class_index, 'class_name': class_name}
        return render_template('result.php', class_index=class_index, class_name=class_name, image_name=file.filename)
        # return jsonify(result)


# if __name__ == '__main__':
#     app.run(debug=True)
    
if __name__ == '__main__':
    app.run(debug=True, port=5000)

