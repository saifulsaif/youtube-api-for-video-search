<!DOCTYPE html>
<html lang="en">
    <head>		
        <title>Your awesome Youtube search engine</title>
        <meta charset="UTF-8" />					
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Awesome videos!" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <h1 class="w100 text-center"><a href="index.html">YouTube Video Search</a></h1>
        </header>
         <div class="row">
            <div class="col-md-12">
               
                <div class="header" style=" background-color: burlywood;height: 58px">f</div>
            </div>
          
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#">
                    <p><input type="text" id="search" placeholder="Type something..." autocomplete="off" class="form-control" /></p>
                    <p><input type="submit" value="Search" class="form-control btn btn-primary w100"></p>
                </form>
                <div id="results"></div>
            </div>
        </div>
        
        
        <!-- scripts  AIzaSyC-oETr9pCwwH4hyf4JO9YUFhhdoYRI1AM -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>
    </body>
</html>