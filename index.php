<?php

include __DIR__ . '/getAdmin.php';
include __DIR__ . '/header.php';

?>


<h1 class="my-5">Login</h1>
<form method="post" action="">
    <div class="mb-3">
        <label for="utente" class="form-label">Utente</label>
        <input type="text" class="form-control" name="utente" id="utente" aria-describedby="utente">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-success mt-5">Submit</button>
</form>

<?php

include __DIR__ . '/footer.php';

?>