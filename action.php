<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stellar_maindb";
} else {
    $servername = "localhost";
    $username = "uncc5o1bqiiul";
    $password = "knsvppcabjxi";
    $dbname = "dbssxzbqm7grv4";

}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['submit'])) {
    $FirstName = $_REQUEST['FirstName'];
    $Phone = $_REQUEST['Phone'];
    $Email = $_REQUEST['Email'];
    $leadid = $_REQUEST['universal_leadid'];
    $xxTrustedFormCertUrl = $_REQUEST['xxTrustedFormCertUrl'];
    $InsuranceType = $_REQUEST['InsuranceType'];
    $DomainID = $_REQUEST['DomainID'];
    $Message = $_REQUEST['Message'];
    date_default_timezone_set('US/Eastern');
    $currenttime = date('Y-m-d h:i:s');
    $created_at = $currenttime;



    // Sanitize phone number: Remove non-digit characters
    $Phone = preg_replace('/[^0-9]/', '', $Phone); // Removes all non-numeric characters

    // Remove the leading +1 or 1 if present
    if (substr($Phone, 0, 2) === '1') {
        $Phone = substr($Phone, 1); // Remove the leading '1'
    }
    if (substr($Phone, 0, 1) === '1') {
        $Phone = substr($Phone, 1); // Remove the leading '1'
    }

    // echo $Phone;exit;

    $sql = "INSERT INTO  leads (LeadUniqueID,xxTrustedFormCertUrl,DomainID,FirstName,InsuranceType,Email,Phone,Message,CreatedAt,UpdatedAt)
                        VALUE ('$leadid','$xxTrustedFormCertUrl','$DomainID','$FirstName','$InsuranceType','$Email','$Phone','$Message','$created_at','$created_at')";

    if ($conn->query($sql) === TRUE) {

        echo "
        <div id='successMessage' style='
            position:fixed;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:#d1e7dd;
            color:#0f5132;
            padding:20px 30px;
            border-radius:12px;
            box-shadow:0px 0px 20px rgba(0,0,0,0.3);
            z-index:9999;
            font-size:18px;
            min-width:320px;
            text-align:left;
            line-height:1.6;
        '>
            <button onclick='closeAndRedirect()' style='
                position:absolute;
                top:10px;
                right:15px;
                background:none;
                border:none;
                font-size:24px;
                font-weight:bold;
                color:#0f5132;
                cursor:pointer;
            '>&times;</button>
        
            <div style='text-align:center; font-weight:bold; font-size:20px; margin-bottom:10px;'>Form Submitted Successfully!</div>";

        if (!empty($FirstName)) {
            echo "<div><strong>Name:</strong> " . htmlspecialchars($FirstName) . "</div>";
        }
        if (!empty($Email)) {
            echo "<div><strong>Email:</strong> " . htmlspecialchars($Email) . "</div>";
        }
        if (!empty($Phone)) {
            echo "<div><strong>Phone:</strong> " . htmlspecialchars($Phone) . "</div>";
        }
        if (!empty($leadid)) {
            echo "<div><strong>Jornaya Lead ID:</strong> <span style='user-select: all; font-weight:bold; color:red'>" . htmlspecialchars($leadid) . "</span></div>";
        } elseif (!empty($xxTrustedFormCertUrl)) {
            echo "<div><strong>TrustedForm Cert URL:</strong> <span style='user-select: all; font-weight:bold; color:blue'>" . htmlspecialchars($xxTrustedFormCertUrl) . "</span></div>";
        }

        echo "
        </div>
        
        <script>
        // Function to close the message and redirect
        function closeAndRedirect() {
            var message = document.getElementById('successMessage');
            if (message) {
                message.remove();
            }
            window.location.href = 'index.php';
        }
        
        // Auto-hide the message and redirect after 2 minutes
        setTimeout(function() {
            closeAndRedirect();
        }, 120000); // 2 minutes
        </script>
        ";





        // echo "<script>window.location.href='index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Form Unable to Submit');</script>";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);

}


?>