<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Bootstrap Friendly Contact with php mailer</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <script src="contact_frm_validation.js"></script>
</head>

<body>

  <div class="container-fluid pt-4">
    <div class="row ">
      <div class="col-md-6 offset-md-3 border p-4">
        <form method="post" id="contact_frm">
          <div class="show_success_msg">

          </div>
          <h3>Contact form with php mailer:</h3>
          <div class="form-row">

            <div class="form-group col-md-12">
              <label for="name">name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="">
            </div>

            <div class="form-group col-md-12">
              <label for="email">Email<span>*</span></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="">
            </div>

            <div class="form-group col-md-12">
              <label for="contact">Contact Number<span>*</span></label>
              <input type="text" class="form-control" name="contact" id="contact" placeholder="">
            </div>

            <div class="form-group col-md-12">
              <label for="message">Message</label>
              <input class="form-control" name="message" id="message" rows="3"></input>
            </div>
            <div class="col-sm-12 pt-3">
              <button type="button" name="submit_btn" id="submit_btn" class="btn btn-sm btn-primary"> Send Message</button>
            </div>

          </div>
        </form>

      </div>
    </div>

  </div>

</body>

</html>