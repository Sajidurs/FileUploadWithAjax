<?php

#Checking image status
if (isset($_FILES['theimg'])) {

    // Getting Images and Saving them in a variable
    $imageName = $_FILES['theimg']['name'];
    $imageSize = $_FILES['theimg']['size'];
    $tmpName = $_FILES['theimg']['tmp_name'];
    $error = $_FILES['theimg']['error'];


    // Checking if there is any error while uploading the image
    if ($error === 0) {

        if ($imageSize > 1000) {
            #Image uploading failed Message
            $em = "Sorry Your File size is too large";

            #Response array
            $error = array(
                'error' => 1,
                'em'    => $em
            );

            // Printing the array and converting it into JSON format

            echo json_encode($error);
            exit();
        } else{
            echo "Perfect";
        }

    } else {
        #Image uploading failed Message
        $em = "Enexpected error occurred";

        #Response array
        $error = array(
            'error' => 1,
            'em'    => $em
        );
    }
}
?>