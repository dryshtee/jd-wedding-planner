<?php
session_start();
?>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("jd", $connection);
?>
<?php
/*
 * Function requested by Ajax
 */
if(isset($_POST['func']) && !empty($_POST['func'])){
	switch($_POST['func']){
		case 'getCalender':
			getCalender($_POST['year'],$_POST['month']);
			break;
		case 'getEvents':
			getEvents($_POST['date']);
			break;
		//For Add Event
		case 'addEvent':
			addEvent($_POST['date'],$_POST['title'],$_POST['user_id'],$_POST['fname'],$_POST['address'],$_POST['contact'],$_POST['email'],$_POST['location'],$_POST['vlocation'],$_POST['hour'],$_POST['minutes'],$_POST['music'],$_POST['music1'],$_POST['music2'],$_POST['music3'],$_POST['music4'],$_POST['info'],$_POST['confirmation']);
			break;
		default:
			break;
	}
}

/*
 * Get calendar full HTML
 */
function getCalender($year = '',$month = '')
{
	$dateYear = ($year != '')?$year:date("Y");
	$dateMonth = ($month != '')?$month:date("m");
	$date = $dateYear.'-'.$dateMonth.'-01';
	$currentMonthFirstDay = date("N",strtotime($date));
	$totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
	$totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
	$boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
?>
	<div id="calender_section">
		<h2>
        	<a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">&lt;&lt;</a>
            <select name="month_dropdown" class="month_dropdown dropdown"><?php echo getAllMonths($dateMonth); ?></select>
			<select name="year_dropdown" class="year_dropdown dropdown"><?php echo getYearList($dateYear); ?></select>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">&gt;&gt;</a>
        </h2>
		<div id="event_list" class="none"></div>
        <!--For Add Event-->
        <div id="event_add" class="none">
        	<h5>Provide your booking details for <span id="eventDateView"></span></h5><br>
            <form>
			
                <div class="form-group">
				<?php
                            $query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=11") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['supplier_id'];
                                ?>
                    <label for="eventTitle">Music and Entertainment: </label>
                   <input type="text"  class="form-control" id="eventTitle"  value="<?php echo $row['supplier_name']; ?>" disabled>
					
                </div>
				
                <?php
                                            $con = mysqli_connect("localhost", "root", "");      #connect database with the php form
                                            mysqli_select_db($con, "jd");

                                            $user = $_SESSION['email'];

                                            $get_user = "select * from users where email= '$user' ";

                                            $run_user = mysqli_query($con, $get_user);

                                            $row_user = mysqli_fetch_array($run_user);

                                            $user_id = $row_user['user_id'];

                                            $user_fullname = $row_user['fullname'];

                                            $user_userName = $row_user['username'];

                                            $user_email = $row_user['email'];
											
											$user_location= $row_user['location'];
											
											$user_contact= $row_user['contact'];


// Check connection
                                            if ($con->connect_error) {
                                                die("Connection failed: " . $con->connect_error);
                                            }
                                            ?>
				<div class="form-group">
			
                    <label for="email">Email: </label>
                  <input type="text" class="form-control" id="email" name="email" required value="<?php echo $user_email; ?>" disabled>
                </div>
                <div class="form-group">
				
                    <label for="fname">Full Name: </label>
                    <input type="text" class="form-control" id="fname" required value="<?php echo $user_fullname; ?>" disabled>
							
                </div>
                 <div class="form-group">
                    <label for="address">Address: </label>
                    <input type="text"  class="form-control" id="address" required value="<?php echo $user_location; ?>" disabled>
                </div>
                 <div class="form-group">
                    <label for="contact">Contact Number: </label>
                    <input type="text" class="form-control" id="contact" required value="<?php echo $user_contact; ?>" disabled>
                </div>
				
				<div class="form-group">
                     <label for="location">Ceremony Venue: </label> 
					<select name="location" id="location" onchange="return FilterStatus()" >
					<option value = "domainesdesaubineaux">Domaines Des Aubineaux</option>
					<option value = "longbeachresort">Long Beach spa & resort</option>
					<option value = "royalparbeaux">Royal Parbeaux Hall</option>
					<option value = "chateaumondesir">Chateau Mon Desir</option>
					<option value = "Other">Other</option>
					</select>
					&nbsp;  <textarea class="form-control" id="vlocation" placeholder="Please specify your address" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,}$" title ="No special characters and at least 5 characters"  title="Enter a valid address " maxlength="30" required/></textarea>
                

				 <label for="hour">Ceremony Starting Time: </label>
					<select name="hour" id="hour">
					
					<option value = "09">09</option>
					<option value = "10">10</option>
					<option value = "11">11</option>
					<option value = "12">12</option>
					<option value = "13">13</option>
					<option value = "14">14</option>
					<option value = "15">15</option>
					<option value = "16">16</option>
					<option value = "17">17</option>
					<option value = "18">18</option>
					<option value = "19">19</option>
					<option value = "20">20</option>
					</select> 
					&nbsp;
					: <label for="minutes"> </label>
					<select name="minutes" id="minutes">
					
					<option value = "00">00</option>
					<option value = "05">05</option>
					<option value = "10">10</option>
					<option value = "15">15</option>
					<option value = "20">20</option>
					<option value = "25">25</option>
					<option value = "30">30</option>
					<option value = "35">35</option>
					<option value = "40">40</option>
					<option value = "45">45</option>
					<option value = "50">50</option>
					<option value = "55">55</option>
					</select>
					 &nbsp;&nbsp;
					<label for="pricing">Pricing: </label>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">View</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Music and Entertainment</h4>
      </div>
      <div class="modal-body">
<table>
  <tr>
    <th>Name</th>
    <th>Price</th>
	<th>Additional Charge</th>
  </tr>
  <tr>
  <td>Wedding Bands</td>
  <td>Rs. <?php echo $row['price']; ?> For 2 Hour</td>
  <td> Additional hour at Rs.1500 per hour. </td>
  
  </tr>
   <tr>
  <td>Magicians</td>
  <td>Rs. <?php echo $row['price2']; ?> For 3 Hour</td>
  <td>Additional hour at Rs.1550 per hour. </td>
  
  </tr>
   <tr>
  <td>DJ's</td>
  <td>Rs. <?php echo $row['price3']; ?> For 5 Hour</td>
  <td>Additional hour at Rs.2000 per hour. </td>
  
  </tr>
  <tr>
  <td>Dancers</td>
  <td>Rs. <?php echo $row['price4']; ?> For 3 Hour</td>
  <td>Additional hour at Rs.1380 per hour. </td>
  
  </tr>
   <tr>
  <td>Comedy Acts</td>
  <td>Rs. <?php echo $row['price5']; ?> For 3 Hour</td>
  <td>Additional hour at Rs.2500 per hour. </td>
  </tr>
  
  
  
  
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
  </div>
  </div>
					
				 <div class="form-group">
					<label for="music">  Type of Entertainment(s): </label>
					<select class="test" id="music">
				<option value="None">--Please choose--</option>
				<option value="Wedding Bands">Wedding Bands</option>
				<option value="Magicians">Magicians</option>
				<option value="DJs">DJs</option>
				<option value="Dancers">Dancers</option>
				<option value="Comedy Acts">Comedy Acts</option>
				</select>
				<br/><br/>
				<select class="test" id="music1">
				<option value="None">--Please choose--</option>
				<option value="Wedding Bands">Wedding Bands</option>
				<option value="Magicians">Magicians</option>
				<option value="DJs">DJs</option>
				<option value="Dancers">Dancers</option>
				<option value="Comedy Acts">Comedy Acts</option>
				</select>
				
				<select class="test" id="music2">
				<option value="None">--Please choose--</option>
				<option value="Wedding Bands">Wedding Bands</option>
				<option value="Magicians">Magicians</option>
				<option value="DJs">DJs</option>
				<option value="Dancers">Dancers</option>
				<option value="Comedy Acts">Comedy Acts</option>
				</select>
			
				<select class="test" id="music3">
				<option value="None">--Please choose--</option>
				<option value="Wedding Bands">Wedding Bands</option>
				<option value="Magicians">Magicians</option>
				<option value="DJs">DJs</option>
				<option value="Dancers">Dancers</option>
				<option value="Comedy Acts">Comedy Acts</option>
				</select>
			
				<select class="test" id="music4">
				<option value="None">--Please choose--</option>
				<option value="Wedding Bands">Wedding Bands</option>
				<option value="Magicians">Magicians</option>
				<option value="DJs">DJs</option>
				<option value="Dancers">Dancers</option>
				<option value="Comedy Acts">Comedy Acts</option>
				</select>
				</div>
				<div class="form-group">
                    <label for="info">Additional Information: </label>
                    <textarea class="form-control" id="info"  placeholder="Please specify number of hours for selected entertainment" maxlength="100"required/></textarea>
                </div>
				
              
				<input type="hidden" id="eventDate" value=""/>
				<input type="hidden" id="confirmation" value="pending"/>
				<input type="hidden" id="user_id" value="<?php echo $user_id; ?>"/>
                <button type="button" id="addEventBtn" class="btn btn-success pull-right">Submit</button>
				
            </form>
			<?php }  ?>
        </div>
		
		<div id="calender_section_top">
			<ul>
				<li>Sun</li>
				<li>Mon</li>
				<li>Tue</li>
				<li>Wed</li>
				<li>Thu</li>
				<li>Fri</li>
				<li>Sat</li>
			</ul>
		</div>
		<div id="calender_section_bot">
			<ul>
			<?php 
				$dayCount = 1; 
				for($cb=1;$cb<=$boxDisplay;$cb++){
					if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
						//Current date
						$currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
						$eventNum = 0;
						//Include db configuration file
						include 'dbConfig.php';
						//Get number of events based on the current date
						$result = $db->query("SELECT title FROM musicbookings WHERE date = '".$currentDate."' AND status = 1");
						$eventNum = $result->num_rows;
						//Define date cell color
						if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
							echo '<li date="'.$currentDate.'" class="grey date_cell">';
						}elseif($eventNum > 0){
							echo '<li date="'.$currentDate.'" class="light_sky date_cell">';
						}else{
							echo '<li date="'.$currentDate.'" class="date_cell">';
						}
						//Date cell
						echo '<span>';
						echo $dayCount;
						echo '</span>';
						
						//Hover event popup
						echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
						echo '<div class="date_window">';
						echo '<div class="popup_event">Booking ('.$eventNum.')</div>';
						
						//For Add Event
						echo '<a href="javascript:;" onclick="addEvent(\''.$currentDate.'\');">Place Booking</a>';
						echo '</div></div>';
						
						echo '</li>';
						$dayCount++;
			?>
			<?php }else{ ?>
				<li><span>&nbsp;</span></li>
			<?php } } ?>
			
			</ul>
		</div>
	</div>

	<script type="text/javascript">
		function getCalendar(target_div,year,month){
			$.ajax({
				type:'POST',
				url:'musicfunctions.php',
				data:'func=getCalender&year='+year+'&month='+month,
				success:function(html){
					$('#'+target_div).html(html);
				}
			});
		}
		
		function getEvents(date){
			$.ajax({
				type:'POST',
				url:'musicfunctions.php',
				data:'func=getEvents&date='+date,
				success:function(html){
					$('#event_list').html(html);
					$('#event_add').slideUp('slow');
					$('#event_list').slideDown('slow');
				}
			});
		}
		//For Add Event
		function addEvent(date){
			$('#eventDate').val(date);
			$('#eventDateView').html(date);
			$('#event_list').slideUp('slow');
			$('#event_add').slideDown('slow');
		}
		//For Add Event
		$(document).ready(function(){
			$('#addEventBtn').on('click',function(){
				var date = $('#eventDate').val();
				var title = $('#eventTitle').val();
				var user_id = $('#user_id').val();
				var fname = $('#fname').val();
				var address = $('#address').val();
				var contact = $('#contact').val();
				var email = $('#email').val();
				var location = $('#location').val();
				var vlocation = $('#vlocation').val();
				var hour = $('#hour').val();
				var minutes = $('#minutes').val();
				var music = $('#music').val();
				var music1 = $('#music1').val();
				var music2 = $('#music2').val();
				var music3 = $('#music3').val();
				var music4 = $('#music4').val();
				var info = $('#info').val();
				var confirmation = $('#confirmation').val();
				

				$.ajax({
					type:'POST',
					url:'musicfunctions.php',
					data:'func=addEvent&date='+date+'&title='+title+'&user_id='+user_id+'&fname='+fname+'&address='+address+'&contact='+contact+'&email='+email+'&location='+location+'&vlocation='+vlocation+'&hour='+hour+'&minutes='+minutes+'&music='+music+'&music1='+music1+'&music2='+music2+'&music3='+music3+'&music4='+music4+'&info='+info+'&confirmation='+confirmation,
					success:function(msg){
						if(msg == 'ok'){
							var dateSplit = date.split("-");
							$('#eventTitle').val('');
							$('#user_id').val('');
							$('#fname').val('');
							$('#address').val('');
							$('#contact').val('');
							$('#email').val('');
							$('#location').val('');
							$('#vlocation').val('');
							$('#hour').val('');
							$('#minutes').val('');
							$('#music').val('');
							$('#music1').val('');
							$('#music2').val('');
							$('#music3').val('');
							$('#music4').val('');
							$('#info').val('');
							$('#confirmation').val('');
							
							alert('Booking Created Successfully.');
							getCalendar('calendar_div',dateSplit[0],dateSplit[1]);
						}else{
							alert('Some problem occurred, please try again.');
						}
					}
				});
			});
		});
		
		$(document).ready(function(){
			$('.date_cell').mouseenter(function(){
				date = $(this).attr('date');
				$(".date_popup_wrap").fadeOut();
				$("#date_popup_"+date).fadeIn();	
			});
			$('.date_cell').mouseleave(function(){
				$(".date_popup_wrap").fadeOut();		
			});
			$('.month_dropdown').on('change',function(){
				getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
			});
			$('.year_dropdown').on('change',function(){
				getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
			});
			$(document).click(function(){
				$('#event_list').slideUp('slow');
			});
		});
	</script>
<?php
}

/*
 * Get months options list.
 */
function getAllMonths($selected = ''){
	$options = '';
	for($i=1;$i<=12;$i++)
	{
		$value = ($i < 01)?'0'.$i:$i;
		$selectedOpt = ($value == $selected)?'selected':'';
		$options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
	}
	return $options;
}

/*
 * Get years options list.
 */
function getYearList($selected = ''){
	$options = '';
	for($i=2017;$i<=2025;$i++)
	{
		$selectedOpt = ($i == $selected)?'selected':'';
		$options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
	}
	return $options;
}

/*
 * Get events by date
 */
function getEvents($date = ''){
	//Include db configuration file
	include 'dbConfig.php';
	$eventListHTML = '';
	$date = $date?$date:date("Y-m-d");
	//Get events based on the current date
	$result = $db->query("SELECT title FROM musicbookings WHERE date = '".$date."' AND status = 1");
	if($result->num_rows > 0){
		$eventListHTML = '<h2>Events on '.date("l, d M Y",strtotime($date)).'</h2>';
		$eventListHTML .= '<ul>';
		while($row = $result->fetch_assoc()){ 
            $eventListHTML .= '<li>'.$row['title'].'</li>';
        }
		$eventListHTML .= '</ul>';
	}
	echo $eventListHTML;
}

/*
 * Add event to date
 */
function addEvent($date,$title,$user_id,$fname,$address,$contact,$email,$location,$vlocation,$hour,$minutes,$music,$music1,$music2,$music3,$music4,$info,$confirmation){
	//Include db configuration file
	include 'dbConfig.php';
	$currentDate = date("Y-m-d H:i:s");
	//Insert the event data into database
	$insert = $db->query("INSERT INTO musicbookings (title,date,created,modified,user_id,fname,address,contact,email,location,vlocation,hour,minutes,music,music1,music2,music3,music4,info,confirmation) VALUES ('".$title."','".$date."','".$currentDate."','".$currentDate."','".$user_id."','".$fname."','".$address."','".$contact."','".$email."','".$location."','".$vlocation."','".$hour."','".$minutes."','".$music."','".$music1."','".$music2."','".$music3."','".$music4."','".$info."','".$confirmation."')");
	if($insert){
		echo 'ok';
	}else{
		echo 'err';
	}
}

?>
