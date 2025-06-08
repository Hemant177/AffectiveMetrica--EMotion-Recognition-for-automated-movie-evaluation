from flask import Flask, jsonify
from flask_cors import CORS
import subprocess
import json
import os
import time

app = Flask(__name__)
CORS(app)

process = None

@app.route('/run-model', methods=['GET'])
def run_model():
    global process

    if process and process.poll() is None:
        return jsonify({"message": "Model already running!"}), 400

    # Delete old result
    if os.path.exists("emotion_result.json"):
        os.remove("emotion_result.json")

    # Start model in background (non-blocking)
    process = subprocess.Popen(["python", "face_emotion_run.py"])
    return jsonify({"message": "Model started"}), 200


@app.route('/get-emotion', methods=['GET'])
def get_emotion():
    try:
        if not os.path.exists("emotion_result.json"):
            return jsonify({"status": "processing"}), 202

        with open("emotion_result.json", "r") as f:
            data = json.load(f)
        return jsonify({"status": "done", "emotion": data.get("emotion", "unknown")})
    except Exception as e:
        return jsonify({"error": str(e)}), 500


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)
