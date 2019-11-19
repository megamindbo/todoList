<?php include 'view/layouts/header.php'; ?>
<div id="main">
    <h3>Create Work</h3>
    <form action="?action=store" method="post">
        Work_name:<input type="text" name="work_name" value=""><br>
        Start_date:<input type="date" name="start_date" value=""><br>
        End_date:<input type="date" name="end_date" value=""><br>
        <label for="status">Status</label>:
        <select name="status" id="">
            <option value="Planning">Planning</option>
            <option value="Doing">Doing</option>
            <option value="Complete">Complete</option>
        </select><br>
        <button type="">Create</button>
    </form>
</div>
<?php include 'view/layouts/footer.php'; ?>