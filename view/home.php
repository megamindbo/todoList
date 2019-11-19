<?php include 'view/layouts/header.php'; ?>
<main class="nofloat">
    <h1>All Work</h1>
    <a href="?action=calendar">Calendar</a><br>
    Create Work : <a href="?action=create">Create Work</a>
    <table>
        <th>Work Name</th>
        <th>Starting Date</th>
        <th>Ending Date</th>
        <th>Action</th>
        <?php foreach ($works as $work) : ?>
            <tr>
                <td>
                    <?php echo $work['work_name']; ?>
                </td>
                <td>
                    <?php echo ($work['start_date']); ?>
                </td>
                <td>
                    <?php echo ($work['end_date']); ?>
                </td>
                <td>
                    <select name="status" id="">
                        <option value="<?php echo $work['status']; ?>"><?php echo $work['status']; ?></option>
                    </select>
                </td>
                <td>
                    <form action="?action=edit" method="POST" id="myForm">
                        <input type="hidden" name="id" value="<?php echo $work['id']; ?>">
                        <input type="hidden" name="work_name" value="<?php echo $work['work_name']; ?>">
                        <input type="hidden" name="start_date" value="<?php echo $work['start_date']; ?>">
                        <input type="hidden" name="end_date" value="<?php echo $work['end_date']; ?>">
                        <input type="hidden" name="status" value="<?php echo $work['status']; ?>">
                        <input type="submit" value="Edit">
                    </form>
                    <form action="?action=delete" method="post">
                        <input type="hidden" name="id" value="<?php echo $work['id']; ?>">
                        <input type="submit" value="Delete" id="delete_work">
                    </form>
                </td>

            </tr>
        <?php endforeach; ?>

    </table>
</main>
<?php include 'view/layouts/footer.php'; ?>