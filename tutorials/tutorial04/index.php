<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>Tutorial 04</title>
    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                var p = $('#Prinicipal').val();
                var r = $('#Rate').val();
                var n = $('#Years').val();
                var url = "result.php?Prinicipal="+p+"&Rate="+r+"&Years="+n;
                 alert(url);
                $.get(url,function(data){
                    alert(data);
                    $("#result").html(data);
                });
            });
        });
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="result.php" method="get">
                    <div class="alert alert-primary text-center" role="alert">Simple Interest</div>
                        <div class="card">
                            <div class="card-header text-center">Calculate Interest</div>
                                <div class="card-body m-2 p-3">

                                <div class="mb-3">
                                    <label for="Prinicipal" class="form-label">Enter Prinicipal : </label>
                                    <input type="text" class="form-control" name="Prinicipal" id="Prinicipal" value="2000">
                                 </div>

                                <div class="mb-3">
                                    <label for="Rate" class="form-label">Enter Rate : </label>
                                    <input type="text" class="form-control" name="Rate" id="Rate" value="20">
                                </div>

                                <div class="mb-3">
                                    <label for="Years" class="form-label">Enter Year : </label>
                                    <input type="text" class="form-control" name="Years" id="Years" value="4">
                                </div>
                            
                                <div class="div mt-6">
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <button type="button" id="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               <div> <h1 id="result" class="text text-center"></h1></div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>