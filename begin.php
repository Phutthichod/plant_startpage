<!DOCTYPE html>
<html lang="en">

<head>
     <?php include("./main/head.php"); ?>
   <link rel="stylesheet" href="style.css">
   <style>
    .for-center{
        display: block;
        margin: auto;
    }
    .for-top{
        magin-top: 1000px;
    }
    .card:hover{
       border:2px solid #00cc00; 
    }
    </style>    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
<div style="height:40px;"></div>
    <div class="grid-main">

    </div>
    <!-- <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">gnus</th>
                </tr> 
            
        </thead>
        <tbody>
    </table> -->
    

    <script>
    loaddata();

    function loaddata() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                data = JSON.parse(this.responseText);
                console.log(data[1].p_id);
                let text = ""
                for(i in data){
                    text+=`<div class="grid-item for-center card" style="background-color:#FFFFFF;  width:300px; height:320px;"> 
                                <a href="http://158.108.144.7/tomato_mvc/general_infomation">
                                    <br/>
                                    <img class="for-center card-img-top" src="./theme/assets/images/tomato/${data[i].p_icon}" style="width: 180px; height: 180px; ">
                                </a>
                                <div class="card-body">
                                    <h3 style="text-align: center;">${data[i].p_alias}</h3>
                                    <p style="text-align: center;">${data[i].p_description}</p>
                                </div>
                    </div>`
                }
                $(".grid-main").append(text);

            }
        };
        xhttp.open("POST", "data.php", true);
        xhttp.send();
    }
    </script>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>