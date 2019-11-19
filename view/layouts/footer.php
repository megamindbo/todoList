<footer>
    <p id="copyright">
        &copy; <?php echo date("Y"); ?> My Work
    </p>
</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script type="text/javascript">


    $(document).ready(function() {
        $('body').on('click','#delete_work',function(e){
            if(!confirm('Are you sure delete?')){
                e.preventDefault();
                return false;
            }
            return true;
        });
        // page is now ready, initialize the calendar...
        $('.calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            // put your options and callbacks here
            events: [
                <?php foreach ($works as $work) : ?> {
                        title: '<?php echo  $work['work_name']; ?>',
                        start: '<?php echo  $work['start_date']; ?>',
                        end: '<?php   echo  $work['end_date']; ?>',
                        <?php if($work['status'] == 'Complete') 
                             echo "color: 'green'";
                        ?>
                        
                    },
                <?php endforeach; ?>

            ]
        })
    });
</script>

</html>