<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="#" method="POST" enctype="multipart/form-data">
    <div class="text-center">
        <img src="imges/wp4143648-harley-quinn-wallpapers.png"
             class="profileImage" id="profileImage" style="cursor:pointer; width:120px; height:120px; border-radius:50%;">
        <input type="file" name="profileImage" id="fileInput" accept="image/*" style="display:none;">
    </div>

    <div class="col-6 d-grid mt-3">
        <button type="submit" class="btn btn-outline-primary">Update</button>
    </div>
</form>



    <script>
        document.getElementById("profileImage").addEventListener("click", function(e) {
            e.preventDefault(); // stop image button submit
            document.getElementById("fileInput").click(); // open file picker
        });

        document.getElementById("fileInput").addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // preview image instantly
                    document.getElementById("profileImage").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>








</body>

</html>