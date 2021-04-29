<?php
    require_once('../views/requires/header.php');
    if(isset($_POST['submit'])){
        require_once('../db/db.php');
        $from = $_SESSION['userId'];
        $to = $_POST['to'];
        $notice = $_POST['notice'];
        $date = date("Y-m-d");
        /* print_r($_SESSION); 
        print_r($_POST);
        print_r($date);
        exit; */
        if(empty($_POST['notice']))
        {
            header('location: ../views/sendNotice.php?message=empty');
        }
        else{
            $q1 = "INSERT INTO notice (from, to, notice, date) VALUES ('$from','$to', $notice, '$date')";
            if (mysqli_query($conn, $q1)) {
                /* print_r(mysqli_query($conn, $q1));exit; */
                header('location: ../views/sendNotice.php?message=sucessfull');
            }
            else{
                header('location: ../views/sendNotice.php?message=error');
            }
        }














        /* else if(file_exists('../db/notices.json')){

            $current_data = file_get_contents('../db/notices.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                    'to' => $_POST['to'],
                   'from' => $_SESSION['type'],
                    'date' => date("Y-m-d"),
                   'notice' => $_POST['notice']
                );
                    
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);
                if(file_put_contents('../db/notices.json', $final_data))  
                {  
                    header('location: ../views/sendNotice.php?message=sucessfull');
                }
        }   
        else  
        {  
            header('location: ../views/sendNotice.php?message=error');
        } */
    }
    else  
    {  
        header('location: ../views/login.php');
    }
?>