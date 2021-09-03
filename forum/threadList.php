<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <style>
    #ques { 
        min-height: 556px;
    }
    </style>

    <title>Welcome to iDiscuss - coding forums</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <?php
    
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id = $id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){

        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }


    ?>


    <?php 
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        // Insert into thread db 

        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];


        $th_title = str_replace("<", "&lt;", $th_title);
        $th_title = str_replace(">", "&gt;", $th_title);

        $th_desc = str_replace("<", "&lt;", $th_desc);
        $th_desc = str_replace(">", "&gt;", $th_desc);




        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success </strong> Your thread has been added please wait for community to respond.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
       
    }
    ?>






    <!-- Category Container starts here  -->
    <div class="container my-3">

        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> forum!</h1>
            <p class="lead"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing knowledge with each other.No Spam / Advertising / Self-promote
                in the forums.
                Do not post copyright-infringing material.
                Do not post “offensive” posts, links or images.
                Do not cross post questions.
                Do not PM users asking for help.
                Remain respectful of other members at all times.</p>
            <p class="lead">
                <a class="btn btn-warning btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

   
    
    echo '<div class="container my-3">
        <h1 class = "py-2">Start a Discussion</h1>
        <form action ="'.$_SERVER['REQUEST_URI'].'" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Problem title</label>
                <input type="text" class="form-control" id="title" name = "title" aria-describedby="emailHelp"
                    placeholder="Enter title">
                <small id="emailHelp" class="form-text text-muted">Keep your title as crisp and short as possible.
                    </small>
            </div>
            <input type="hidden" name="sno" value = "'.$_SESSION["sno"].'" >
           
            <div class="form-group my-2">
                <label for="exampleFormControlTextarea1">Elaborate your concern</label>
                <textarea class="form-control" id="desc" name = "desc" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>';
}

else {
    echo ' <div class="container">
    <h1 class = "py-2">Start a Discussion</h1>
    <p class = "lead">You are not logged in . Please login to able to start a Discussion.</p>
    </div>';
    
}
    ?>


    <div class="container mb-5" id="ques">
       
        <h1>Browse Questions</h1>
        <?php
    
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id =$id;";
    $result = mysqli_query($conn,$sql);
    $noresult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noresult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_time = $row['timestamp'];
        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT user_email FROM `users` WHERE sno = '$thread_user_id'";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
  
       echo  '<div class="media d-flex my-3">
            <img class="mr-3" src="img/user.png" width="40px" height="30px" alt="Generic placeholder image">
            <div class="media-body mx-2">
                
                <h5 class="mt-0"><a class = "text-dark" href = "thread.php?threadid='. $id .'" > '.$title.'</a></h5>
                '.$desc. '<div style = "font-weight : bold" class="my-0">Asked by: '.$row2['user_email'] . ' at '. $thread_time .
                '</div>'.
                ' </div>'. 
          '</div>';


    }
    if($noresult){
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4">No Comments found</p>
          <p class="lead">Be the first person to comment.</p>
        </div>
      </div>';
    }
    
    
    ?>
    </div>







    <?php include 'partials/_footer.php'; ?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>