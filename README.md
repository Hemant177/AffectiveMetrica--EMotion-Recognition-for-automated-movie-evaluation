# AffectiveMetrica--EMotion-Recognition-for-automated-movie-evaluation
Affective Metrica is a real-time emotion recognition system that analyzes viewer facial expressions while watching movies. Using deep learning (ResNet101v2) and computer vision, it detects emotions like happy, sad, angry, etc., aggregates them, and displays results on a user-friendly UI. Ideal for automated movie evaluation and audience feedback.

# 🎬 Affective Metrica

Affective Metrica is a machine learning-based emotion recognition system designed to evaluate audience emotional responses while watching movies. This project uses facial expression analysis and sentiment aggregation to provide a unique emotional score for films, helping in automated movie evaluation and feedback collection.

---

## 📌 Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [How It Works](#how-it-works)
- [Setup & Installation](#setup--installation)
- [Screenshots](#screenshots)
- [Results](#results)
- [License](#license)

---

## 🚀 Features

- Real-time facial emotion detection using webcam
- Emotion classification using CNN/ResNet models
- Aggregation of emotional data across multiple users
- Visualization of results on UI and terminal
- Flask backend + React frontend integration
- Watchlist and review system integration for movies

---

## 🧰 Tech Stack

- **Frontend**: React.js, HTML, CSS
- **Backend**: Flask (Python)
- **Deep Learning**: ResNet101v2, CNN, HaarCascade
- **Libraries**: OpenCV, Keras, NumPy, Pandas, Matplotlib
- **Other**: MTCNN for face detection, LSTM for temporal emotion analysis (optional)

---

## 📂 Project Structure

├── backend/
│ ├── app.py
│ ├── face_emotion_run.py
│ ├── model.h5
│ └── haarcascade_frontalface_default.xml
├── frontend/
│ ├── public/
│ ├── src/
│ │ ├── App.jsx
│ │ └── components/
│ └── index.html
├── results/
│ ├── output_graph.png
│ └── final_aggregated_emotion.json
├── screenshots/
│ ├── landing_page.png
│ ├── output_result.png
│ ├── terminal_output.png
│ └── aggregated_result_ui.png
└── README.md




---

## ⚙️ How It Works

1. User plays a movie via the frontend.
2. The webcam captures facial expressions in real-time.
3. The backend (Flask) triggers `face_emotion_run.py`.
4. Detected emotions are classified using a trained ResNet101v2 model.
5. Emotions are aggregated and stored in JSON format.
6. Final emotion results are displayed in the UI and logged in the terminal.

---

## 🛠️ Setup & Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/Hemant177/AffectiveMetrica--Emotion-Recognition-for-automated-movie-evaluation.git
   cd AffectiveMetrica--Emotion-Recognition-for-automated-movie-evaluation




   cd backend
pip install -r requirements.txt
python app.py


cd frontend
npm install
npm start


http://localhost:5000


🖼️ Screenshots
🏠 Landing Page

📸 Real-time Emotion Output

💻 Terminal Output

📊 Aggregated Emotion on UI

📈 Results
Model Used: ResNet101v2 (Accuracy: ~82%)

Emotion Labels: Angry, Happy, Sad, Neutral, Fear, Surprise, Disgust

Sample Output:
{
  "Happy": 45,
  "Neutral": 20,
  "Surprise": 10,
  "Sad": 8,
  "Angry": 6,
  "Fear": 5,
  "Disgust": 1
}

Use Case: Suitable for movie studios, streaming platforms, and film researchers to measure audience engagement and emotional impact.


🙋‍♂️ Author
Hemant — Final Year Computer Engineering Student
If you found this project useful, feel free to ⭐ the repo and connect with me!

---


![Landing Page](Screenshots/Output1.png)
![Emotion Detection](Screenshots/output2.png)
![Terminal Output](Screenshots/Output3.png)
![Aggregated Result](Screenshots/output4.png)



---

## 📜 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 🙋‍♂️ Author

**Hemant — Final Year Computer Engineering Student**  
If you found this project useful, feel free to ⭐ the repo and connect with me!

---

## 📞 Support / Contact

If you have any queries, suggestions, or need help setting up or running the project, feel free to contact me:

**👨‍💻 Hemant**  
📱 **Phone**: +91-9172010257
📧 **Email**: hemantpatil17072004@gmail.com  
📍 Final Year Computer Engineering Student  

---


