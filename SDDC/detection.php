<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Skin Disease Detection and Consultation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: rgba(201, 235, 235, 0.678);
        }

        main {
            padding: 20px;
            text-align: center;
        }

        #imageUploadContainer {
            max-width: 600px;
            margin: 0 auto;
        }

        #imagePreview {
            max-width: 100%;
            margin-top: 20px;
        }

        #uploadInput {
            display: none;
        }

        label {
            background-color: #34db6c;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.2em;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
            color: #e74c3c;
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

    <!-- main content start from here -->

    <main>
        <div id="imageUploadContainer">
            <label for="uploadInput">Choose an image</label>
            <input type="file" id="uploadInput" accept="image/*">
            <div id="imagePreview"></div>
            <div id="result"></div>
        </div>
    </main>

<!-- footer start form here -->
<div class="mt-5 pt-5 pb-5 footer" style="background-color: #027e8f">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xs-12 about-company">
          <h1 class="pr-5 text-white">SDDC</h1>
          <p class="pr-5 text-white-50">A user friendly website that all want.</p>
          <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
        </div>
        <div class="col-lg-4 col-xs-12  links">
          <h4 class="mt-lg-0 mt-sm-3 text-white ">Creator</h4>
            <ul class="m-0 p-0 text-white-50">
              <li>- K. M. Safin Kamal</li>
              <li>- Mysha Maliha Priyanka</li>
            </ul>
        </div>
        <hr>
        <div class="col copyright">
          <p class=""><small class="text-white-50">© 2023. All Rights Reserved to SAFIN.</small></p>
        </div>
      </div>
    </div>
  </div>


    <script>
        const uploadInput = document.getElementById('uploadInput');
        const imagePreview = document.getElementById('imagePreview');
        const resultDiv = document.getElementById('result');

        uploadInput.addEventListener('change', (e) => {
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    imagePreview.innerHTML = `<img src="${e.target.result}" alt="Uploaded Image"  width="300" height="300">`;
                };

                reader.readAsDataURL(file);
            }
        });
    </script>

</body>
</html>
