<?php
    #---- هنا بعمل فيتش للكونتينت الموجود فى الملف بتاع الجاسون بجيب محتوى الملف بتاع الجاسون
    $data = file_get_contents('http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz?fbclid=IwAR26Fc4C65llGrN4l1T13YiUSUz_Im98tXvJtgnd9uvat_iKQWrRL5TmoK4');
    #--- arrayباخد الجاسون واحوله ل
    $dataArray = json_decode($data,true);
    


    #--- arrayهنا بعمل لووووووب عشان اعرض الداتا اللى جوه ال        
    foreach ($dataArray['data'] as $key => $value) {

        echo $value["products_id"].'<br>';
        echo $value["products_name"].'<br>';
        echo $value["products_description"].'<br>';
        echo $value["products_quantity"].'<br>';
        echo $value["products_model"].'<br>';
        echo $value["products_image"].'<br>';
        echo $value["products_date_added"].'<br>';
        echo $value["products_liked"].'<br>';

    }


    

    // $file = fopen("students.txt","a");
    // fread($file,filesize('students.txt'));
    // fclose($file);


?>