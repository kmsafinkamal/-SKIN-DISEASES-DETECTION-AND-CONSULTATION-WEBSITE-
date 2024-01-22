<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Image Classification Result</title>
    <style>
        body {
            background-color: rgba(183, 236, 236, 0.678);
            color: #212529;
            font-family: 'Arial', sans-serif;
            text-align: center;
        }

        h1 {
            color: #027e8f;
        }

        .result-container {
            max-width: 700px;
            margin: 50px auto;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(144, 214, 214, 0.678);
            border: 2px solid #027e8f;
        }

        p {
            margin-bottom: 15px;
        }

        .result-label {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 5px;
        }

        .result-value {
            font-size: 30px;
            font-weight: bold;
            color: red;
        }

        .btn-back {
            background-color: #027e8f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>

    <div class="result-container">
        <h1>AI Skin Detection Result</h1>
        
        <!-- <p class="result-label">Class Index:</p>
        <p class="result-value">{{ class_index }}</p> -->

        <br>

        <p class="result-label">Disease Name:</p>
        <p class="result-value">{{ class_name }}</p>

        <br>

        <a href="/" class="btn-back">Back to Upload</a>
    </div>
    <!-- <h1>Image Classification Result</h1>
    <p>Class Index: {{ class_index }}</p>
    <p>Class Name: {{ class_name }}</p> -->
</body>
</html>