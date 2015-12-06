<html>
    <head>
        <script src="../Scripts/calendar.js" type="text/javascript"/>
        <script type="text/javascript">

        $(document).ready(
            function()
            {
                $(".mopCalendar").mopCalendar(new Date());
            }
        );
    
    </script>
    </head>
    <body>
<div class="mopCalendar">

	<div class="mopCalendarHeader"></div>

	<div class="mopCalendarBody"></div>

	<div class="mopCalendarFooter"></div>

</div>
        <div class="mopCalendarBtnFirst"></div>
	    <div class="mopCalendarBtnPrevious"></div>
	    <div class="mopCalendarMonth"></div>
	    <div class="mopCalendarBtnNext"></div>
	    <div class="mopCalendarBtnLast"></div>
            <table style="width:100%;">
	    <thead>
	        <tr>
	            <th class="mopCalendarDayRed">Sun</th>
	            <th>Mon</th>
	            <th>Tue</th>
	            <th>Wed</th>
	            <th>Thu</th>
	            <th>Fri</th>
	            <th class="mopCalendarDayRed">Sat</th>    
	        </tr>
	    </thead>
    	    
	    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

	    </table>
            <button class="mopCalendarBtnToday">Today</button>
<button class="mopCalendarBtnClear">Clear</button>
        </body>
    </html>