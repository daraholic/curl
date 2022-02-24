<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="shortcut icon" href="#">
</head>

<body>
  <div class="containter">
    <h2>CROS table</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatibus obcaecati ratione, aliquam ut delectus voluptatem harum possimus vel culpa voluptates perferendis cupiditate illo ipsum dolores, animi quo. Corporis, velit.</p>
    <!-- <form action="./getForm.php" method="post" id="myform"> -->
    <form action="./getapi.php" id="myform">
    </form>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3>cors get data</h3>
        </div>
        <div class="col-12">
          <button id="mybtn" type="button" class="btn btn-success">get data</button>
        </div>
      </div>
    </div>

  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {

      $('#mybtn').click(function(e) {
        console.log('123');
        // var url = "https://data.ntpc.gov.tw/api/datasets/4A03827A-588B-4058-AB21-EC02283E2BB7/json?page=0&size=100"
        var url = "./getapi.php";

        $.ajax({
          type: "post",
          url: url,
          dataType: 'json',
          success: function(data) {
            console.log(typeof(data));
            console.log(data);
          },
         
        });
      });

    });
  </script>
</body>

</html>