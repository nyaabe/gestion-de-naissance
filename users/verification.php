<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>Contact</h1>
    <form method="post" action="email.php">
        <label>E-mail :</label>
        <input type="text" id="email" name="email">
        <label> Votre message :</label>
        <textarea id="message" name="message"></textarea>
        <input type="number" id="age" name="ag">
        <input type="submit">
    </form>
    <script>
        document.forms[0].addEventListener("submit", function(evenement) { 
            if (document.getElementById("email").value == "") {
                evenement.preventDefault();
                alert("Tapez un email valable pour avoir une réponse.");
                document.getElementById("email").focus();

            }
            else if (document.getElementById("message").value == "") {
                evenement.preventDefault();
                alert("Pensez à taper un message !");
                document.getElementById("message").focus();
            }
        });


        document.getElementById("age").addEventListener("change", verif);

        function verif() {
            let age = document.getElementById("age").value;
            if (age <= 10 || age >= 120)
                alert("Tapez un âge compris entre 10 et 120 ans");
            else
                alert("Vous avez : " + age + " ans");
    </script>
</body>
<?php 

    if(isset($_POST['ag'])) {//dans l'HTML: <input name="name_de_linput_html"...>
 echo "Le champ est pris en compte!";
} else {
 echo "name_de_linput_html est inconnu!";
}

 ?>