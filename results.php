<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <style>
    .result{
        width:20rem;
        height:30rem;
        background-color:white;
        color:black;
        margin:auto;

    }
    </style>
</head>
<body style="background-image: linear-gradient(to right,rgb(113, 11, 239),rgb(187, 36, 126));">
    


<?php
// session_start();

$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"cinepluz");

if(isset($_POST['quizsubmit'])){
    
    if(!empty($_POST['quizcheck'])){
        $attempt=count($_POST['quizcheck']);   
        $result=0;
        $k=0;
        
        
        $selected =$_POST['quizcheck'];
        $sel=array_values($selected);
        
        // for($i=0; $i<10; $i++){
        //     if($sel[$i]===NULL)
        //        $sel[$i]=0;
        
        // print_r($sel);

        

         $q="select * from strangerthings_qns";
        $query=mysqli_query($con,$q);

        while( $rows=mysqli_fetch_array($query)){
            // print_r($rows['aid']);
            echo " ";

            $checked= $rows['aid']== $sel[$k];
            if($checked){
                $result++;
            }
            $k++;
            
        }

        
        ?>
        <div class="result">
         <span>Total Questions:</span> <span>10</span>
         <span>Attempted questions:</span> <span><?php echo $attempt ?></span>
         <span> Your score</span> <span><?php echo $result ?> </span>
        </div>
<?php
    }
}
else{
    echo "not connected";
}
?>


</body>
</html>