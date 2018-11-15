<!DOCTYPE html>

<html lang="en-us">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129326199-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-129326199-1');
    </script>

        <meta charset="utf-8">
        <title>H2O Empire - Uses</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/solar/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">

    </head>
    <body>
       
            <?php include '../resources/navigation.php'; ?>


        <div class="card center w-50 bg-light text-dark" style="margin: auto; margin-bottom: 9%; margin-top: 4%;">
            <div class="card-header">
                Login
            </div>

            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="Email">Email address:</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="Email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="Password">Password:</label>
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Check">
                        <label class="form-check-label" for="Check">I am Human</label>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                    <br>
                    <p>Don't have an account? <a href="signup.html">Click here to sign up.</a></p>
                </form>  
            </div>
        </div>

        <?php include '../resources/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>