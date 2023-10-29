

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>email</title>
  <link rel="stylesheet" type="text/css" href="boukam/bootstrap.min.css">
  <script src="boukam/jquery-3.6.3.min.js" type="text/javascript"></script>
  <script src="boukam/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>
<body>
  <div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
    <div class="col-4">k</div>
    <div class="col-4">
         <form action="" method="GET">
            
         
          <input id="name" name="name" placeholder="name" class="form-control">
          <input id="email" name="email" placeholder="email" class="form-control">
          <input id="subject" name="subject" placeholder="subject" class="form-control">
          <textarea class="form-control"id="body" name="body" placeholder="email body"></textarea>
          <input type="button" name="send " value="send an email" class="btn btn-primary" onclick="sendEmail()">
          <button onclick="sendEmail()">valide</button>
        </form>
    </div>
    <div class="col-4">m</div>
  </div>
</body>


<script type="text/javascript">
 function sendEmail() {
   var name = $(#name);
   var email = $(#email);
   var subject = $(#subject);
   var body = $(#body);
   if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
       console.log('passed contion....');

   }
 }

 function isNotEmpty(caller) {
  console.log('sending..');

  if (caller.value()== "") {
     caller.css('border','1px solid red');
  return false;
} else{
  caller.css('border','');
  return true;

}
 
   
 }
</script>

</html>