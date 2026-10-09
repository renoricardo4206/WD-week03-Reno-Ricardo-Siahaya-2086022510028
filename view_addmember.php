<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Membership</title>
</head>

<body>
  <div class="container p-3">
    <h1>New Member</h1>
    <form>
      <div class="row">
        <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="Full name">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="inputPhone">Phone</label>
          <input type="text" class="form-control" id="inputPhone" placeholder="123-456-7890">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
      </div>

      <div class="row">
        <div class="form-group">
          <label for="inputNote">Note</label>
          <input type="text" class="form-control" id="inputNote" placeholder="Additional information">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</body>

</html>