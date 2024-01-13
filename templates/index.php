<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="static/style.css" rel="stylesheet">
    <title>Virtual Dressing Room</title>
   
</head>
<body>
    <h1>Virtual Dressing Room</h1>
    <img src="{{ url_for('video_feed') }}">
    <form action="{{ url_for('change_cloth', direction='prev') }}" method="post" onsubmit="showLoader()">
        <button type="submit" class="action-btn">Previous Cloth</button>
        <div class="loader" id="loader"></div>
    </form>
    <form action="{{ url_for('change_cloth', direction='next') }}" method="post" onsubmit="showLoader()">
        <button type="submit" class="action-btn">Next Cloth</button>
        <div class="loader" id="loader"></div>
    </form>
    <form action="{{ url_for('upload') }}" method="post" enctype="multipart/form-data" onsubmit="showLoader()">
        <label for="file">Upload Image:</label>
        <input type="file" name="file" id="file" accept=".png, .jpg, .jpeg, .gif">
        <button class="upload-btn" type="submit">Upload</button>
        <div class="loader" id="loader"></div>
    </form>

    <script>
        function showLoader() {
            document.getElementById("loader").style.display = "inline-block";
        }
    </script>
</body>
</html>
