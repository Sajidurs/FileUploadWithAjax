<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>File</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">
    <!-- Error Message Start -->
    <h4 id="error"></h4>
    <!-- Error Message End -->


    <div class="section_wrapper">
        <div class="container section">
            <div class="row">
                <div class="col-mad-12">
                    <div class="file_uploading_area">
                        <form action="upload.php" enctype="multipart/form-data" method="post" id="form">
                            <input type="file" id="theimg">
                            <input type="submit" id="submit" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Custom JS -->
    <script src="/assets/js/custom.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#submit").click(function (e) {
                e.preventDefault();

                let form_data = new FormData();
                let img = $("#theimg")[0].files;

                // Checking if image is selected or not
                if (img.length > 0) {
                    form_data.append('theimg', img[0]);

                    $.ajax({
                        url: 'upload.php',
                        type: 'post',
                        data: form_data,
                        contentTypes: false,
                        processData: false,
                        success: function (res) {
                            console.log(res);
                        }
                    });
                } else {
                    $("#error").text("Please pick an image to display");
                }
            });
        });
    </script>
</body>

</html>