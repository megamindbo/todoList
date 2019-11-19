<?php include 'view/layouts/header.php'; ?>
<div id="main">
    <h3>Edit Work</h3>
    <form action="?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo filter_input(INPUT_POST, 'id'); ?>"><br>
        Work_name:<input type="text" name="work_name" value="<?php echo filter_input(INPUT_POST, 'work_name'); ?>"><br>
        Start_date:<input type="date" name="start_date" value="<?php echo filter_input(INPUT_POST, 'start_date'); ?>"><br>
        End_date:<input type="date" name="end_date" value="<?php echo filter_input(INPUT_POST, 'end_date'); ?>"><br>
        <label for="status">Status</label>:
        <select name="status" id="">
            <option value="Planning" <?php if (filter_input(INPUT_POST, 'status') == 'Planning') echo 'selected';   ?>>Planning</option>
            <option value="Doing" <?php if (filter_input(INPUT_POST, 'status') == 'Doing') echo 'selected';  ?>>Doing</option>
            <option value="Complete" <?php if (filter_input(INPUT_POST, 'status') == 'Complete') echo 'selected'; ?>>Complete</option>
        </select><br>
        <input type="submit" value="Update">
    </form>
</div>
<?php include 'view/layouts/footer.php'; ?>