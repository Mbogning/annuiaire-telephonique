<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Annuaire</title>
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
  <div class="message"></div>
  <div class="container mt-3">
    <?php
    include_once 'create_form.php';
    include_once 'listing.php';
    ?>
  </div>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">
    function deleteAnnuaire(action) {
      const xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if (this.responseText == 'ok') {
            document.querySelector('.message').innerHTML = "<div class='alert alert-success'>Suprimer</div>"
            setTimeout(() => {
              location.reload()
            }, 1000)
            return true

          }
          return false
        }
      };
      xhttp.open("GET", action);
      xhttp.send();
    }

    var btnDel = document.querySelectorAll('#delete')

    for (let i = 0; i < btnDel.length; i++) {
      btnDel[i].addEventListener('click', (e) => {
        e.preventDefault();
        cible = e.target

        let ref = e.target.href
        if (deleteAnnuaire(ref)) {


        }
      })

    }
  </script>
</body>

</html>