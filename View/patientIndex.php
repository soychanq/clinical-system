<?php
// Include database file
require_once '../App/Classes/Person.php';
require_once '../App/Classes/Connection.php';
$personObj = new Person();
?>
<!DOCTYPE html>
<html lang>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
include '../View/sections/header.php';
?>

<body>
    <div>
    </div>

    <div class="container">
        <div class="row">
            <h1>
                Personas
            </h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfopno</th>
                    <th scope="col">Consulta</th>
                    <th scope="col">Ver todo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $people = $personObj->displayPerson();
                foreach ($people as $person) {
                ?>
                    <tr>
                        <th scope="row"><?php print($person['name']); ?></th>
                        <td><?php print($person['phone']); ?></td>
                        <td>
                            <form method="POST" action="/add-checkup/">
                            <input type="hidden"  name="code" value="<?php print($person['codigo']); ?>">
                            <button class="btn btn-primary" type="submit">Consulta</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="/view-patient/">
                            <input type="hidden" name="code" value="<?php print($person['codigo']); ?>">
                            <button class="btn btn-primary" type="submit">Ver todo</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
</body>

</html>