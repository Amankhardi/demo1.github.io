<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Book Appointment </h2>
    </div>
    <body>
    <div class="w-50 m-auto">
        <form action="config.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text"name="username" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text"name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile </label>
                <input type="text"name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Date </label>
                <input type="text"name="date" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Comment</label>
                <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
    </div>
</section>
</body>
</html>