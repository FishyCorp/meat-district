<?php require "header.php" ?>
<?php require "functions.php" ?>
    <table border="1">
        <th>Kundnr</th><th>Namn</th><th>Epost</th><th>Adress</th><th>Stad</th><th>Ordrar</th>
        <?php
            foreach(getAllUsers() as $user){
        ?>
            <tr>
                <td><?php echo $user["id"] ?></td>
                <td><?php echo $user["firstname"] ?></td>
                <td><?php echo $user["lastname"] ?></td>
                <td><?php echo $user["mail"] ?></td>
                <td><?php echo $user["address"] ?></td>
                <td><?php echo $user["city"] ?></td>
                <td><?php echo $user["orders"] ?></td>
            </tr>
            <?php
            }
            ?>
    </table>

<?php require "footer.php" ?>