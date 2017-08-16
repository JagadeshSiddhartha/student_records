<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Student Details</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #9ACD32;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #228B22;
}
.jumbotron{
    background-color:#2E2D88;
    color:white;
}

.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}
.btn-space {
    margin-right: 5px;
	 margin-left: 10px;
}

.btn-space2 {
    margin-left: 30px;
}
.modal-content  {
    word-wrap: break-word;
}
.borderless td, .borderless th {
    border: none;
}
</style>

</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class = "container">
  <div class="page-header">
   <h1>Student details admin panel</h1>
</div>
<!-- main table starts -->
</div>

  <div class = "container">
     <form action="http://localhost/student/index.php" method="POST">


     <table>
      <tr>
      <td class="col-md-4">
        <div class = "form-group">
            <input type="text" class="form-control input-lg" name = "name" placeholder="Full Name">
        </div>
      </td>
      <td>
            &nbsp;
            &nbsp;
            &nbsp;
      </td>
      <td class="col-md-2">
        <div class = "form-group">
            <input type="submit" class = "btn btn-info btn-lg" value = "Search Student">
        </div>
      </td>
      <td class="col-md-6"></td>
      <td></td>
      <td></td>
      <td class="col-md-2">
              <div class = "form-group">
                   <div class="text-right">
                    <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">+ Add User</button>
                    </div>
              </div>
      </td>
    </table>
     </tr>
    </form>
  </div>


<div class = "container">

<?php
require_once ('connect.php');
if (isset($_POST["name"])) {
	$name     = $_POST['name'];
	$query    = "SELECT name, email, phone FROM student_details WHERE name = '$name'";
	$i        = 99;
	$response = @mysqli_query($conn, $query);
	$row      = mysqli_fetch_array($response);

	echo '<table     class = "table table-bordered table-responsive">
                            <td align="center" class="col-md-3"><b>Name</b></td>
                            <td align="center" class="col-md-5"><b>Email</b></td>
                            <td align="center" class="col-md-3"><b>Phone</b></td>
                            <td align="center" class="col-md-2"><b>Update</b></td>
                            <td align="center" class="col-md-2"><b>Delete</b></td>';
	$valo   = "delete.php"."?name=".$row['name'];
	$upvalo = "update.php"."?name=".$row['name'];
	echo '<tr><td align="center">'.
	$row['name'].'</td><td align="center" >'.
	$row['email'].'</td><td align="center">'.

	$row['phone'].'</td><td align="center">';

	echo "<form action ='updated.php' method = 'GET'>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#update$i'><span class=\"glyphicon glyphicon-pencil\"></span>
    </button>
  <div class='modal fade' id='update$i' role='dialog'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
           <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Student Details</h4>
          </div>
              <div class='modal-body'>
                <form action='updated.php' method ='GET'>
                       <label for='name'>name:</label>
                       <input type='name' class='form-control' id='name' name='name' value =" .$row['name']." readonly>

                       <label for='email'>Email address:</label>
                       <input type='email' class='form-control' id='email' name='email' value =".$row[1].">

                       <label for='phone'>mobile:</label>
                       <input type='number_format' class='form-control' id='phone' name='phone' value =".$row[2].">
                   <span>
                         <button type='submit' class='btn btn-default'>Submit</button>
                   </span>
                </form>
            </div>
    </div>
</div></td>
</form>";
	echo "</td>";

	echo "<td align='center'>";

	echo "<a  input type='button'value='DELETE ' class= \"btn btn-space btn-danger\" onclick=\"document.location.href='".$valo."'\"> <span class=\"glyphicon glyphicon-trash\"></span></a>";
	echo '</tr>';
	echo '</table>';
	echo '<a href="index.php">.</a>';
}
?>
</div>
<div class = "container">


<!--  Model Starts-->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Student</h4>
        </div>


<?php
include 'add.php';
?>
</div>

    </div>
  </div>
</div>

<div class = "container">

<!--  Model Starts-->

            <div class="modal fade" id="sendupdate" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Student</h4>
                    </div>
                </div>
                </div>
              </div>
</div>
</br>
  <div class = "container">

<?php
$limit                           = 15;
if (isset($_GET["page"])) {$page = $_GET["page"];} else { $page = 1;};

$start_from = ($page-1)*$limit;
$i          = 0;

$sql = "SELECT name, email,  phone  FROM student_details  LIMIT $start_from, $limit";

$response = @mysqli_query($conn, $sql);

echo '<table     class = "table table-bordered table-responsive">
        <td align="center" class="col-md-3"><b>Name</b></td>
        <td align="center" class="col-md-5"><b>Email</b></td>

        <td align="center" class="col-md-3"><b>Phone</b></td>
        <td align="center" class="col-md-2"><b>Update</b></td>
        <td align="center" class="col-md-2"><b>Delete</b></td>';
while ($row = mysqli_fetch_array($response)) {
	$valo   = "delete.php"."?name=".$row['name'];
	$upvalo = "update.php"."?name=".$row['name'];
	echo '<tr><td align="center">'.
	$row['name'].'</td><td align="center" >'.
	$row['email'].'</td><td align="center">'.

	$row['phone'].'</td><td align="center">';
	$first = $row['name'];
	echo "<form action ='updated.php' method = 'GET'>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#update$i'><span class=\"glyphicon glyphicon-pencil\"></span>
    </button>
  <div class='modal fade' id='update$i' role='dialog'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
           <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Student Details</h4>
          </div>
              <div class='modal-body'>
                <form action='updated.php' method ='GET'>
                       <label for='name'>name:</label>
                       <input type='name' class='form-control' id='name' name='name' value =" .$row[0]." readonly>

                       <label for='email'>Email address:</label>
                       <input type='email' class='form-control' id='email' name='email' value =".$row[1].">

                       <label for='phone'>mobile:</label>
                       <input type='number_format' class='form-control' id='phone' name='phone' value =".$row[2].">
                   <span>
                         <button type='submit' class='btn btn-default'>Submit</button>
                   </span>
                </form>
            </div>
      </div>
    </div>
</div></td>
</form>";

	echo "</td>";
	echo "<td align='center'>";

	echo "<a  input type='button'value='DELETE ' class= \"btn btn-space btn-danger\" onclick=\"document.location.href='".$valo."'\"> <span class=\"glyphicon glyphicon-trash\"></span></a></td>";

	echo '</tr>';
	$i++;
}
echo '</table>';

?>
</div>
</div>
<div class = "container">
<?php
$sql           = "SELECT COUNT(name) FROM student_details";
$rs_result     = mysqli_query($conn, $sql);
$row           = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages   = ceil($total_records/$limit);
$pagLink       = "<nav><ul class='pagination pagination-lg light-theme simple-pagination'>";
for ($i = 1; $i <= $total_pages; $i++) {
	$pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";
};
echo $pagLink."</ul></nav>";
?>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
    currentPage : <?php echo $page;?>,
    hrefTextPrefix : 'index.php?page='
    });
  });
</script>