<?php 
	include 'Config/conn.php'
?>

<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
    <link rel="stylesheet" href="./App/css/style.css">

</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>PELANGGAN JUDOL TERCINTA</h1>
            <a class="button-36" href="?action=create">Data + </a>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>NAME</th>
                        <th>JUMLAH ORDER</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $counter = 1;
                    foreach ($users as $user): 
                    ?>
					<tr>
						<td><?= $counter++ ?></td>
						<td><?= $user["name"] ?></td>
						<td><?= $user["nim"] ?></td>
						<td><?= $user["email"] ?></td>
						<td><?= $user["address"] ?></td>
						<td>
							<a class="button-36" href="?action=show&id=<?= $user['id']; ?>">Show</a>
							<a class="button-36" href="?action=edit&id=<?= $user['id']; ?>">Edit</a>
							<a class="button-36hapus" href="?action=delete&id=<?= $user['id']; ?>" onclick="return checkDelete()">Hapus</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
            </table>
        </section>
    </main>
    <script src="../js/jquery.min.js"></script>
		<script>
			function checkDelete(){
				return confirm('Ingin menghapus data ?');
			}

		</script>
</body>

</html>