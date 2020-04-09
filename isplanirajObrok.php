<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <title>Fast meal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
        
        <link rel="stylesheet" href="../public/fastMeal.css">
    </head>
    <body>
      <form method="get">
        <div id="forma" class="container my-sm-1">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Dostupne namirnice</label>
            
              <input type="text" name="namirnice" class="col-sm-10 form-control" id="namirnice" placeholder="Vase namirnice..">

          </div>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 ">Vrsta jela</legend>
                <select class="custom-select col-sm-10" name="vrstaJela"id="vrstaJela">
                  <option selected>Slano</option>
                  <option value="1">Slatko</option>
                  <option value="2">Oba</option>
                  
                </select>
            </div>
          </fieldset>
          <div class="form-group row">
            <div id="btnParent" class="col-sm-2">
              <button type="submit" class="btn">Pronadji recepte</button>
            </div>
          </div>
        </div>
      </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        
    </body>
</html>