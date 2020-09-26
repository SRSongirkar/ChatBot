<?php
// connecting to database
    $conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");


    $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if Match PAir
if(mysqli_num_rows($run_query) > 0){
    //fetching replay for Perticular Mess....
    $fetch_data = mysqli_fetch_assoc($run_query);
    
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "Bro/Sis I can't Understand!!!!!";
}

?>