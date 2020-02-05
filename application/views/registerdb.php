<?php include("connect.php") ?>
<?php
if(isset($_POST["member_name"])){

$sql_select_old_username = "SELECT member_name FROM member";
$query_old_username = mysqli_query($conn, $sql_select_old_username);
while (list($old_username) = mysqli_fetch_row($query_old_username)) {
    if ($_POST['member_name'] == $old_username) {
        ?>
        <script>
            alert("username ซ้ำกันในระบบ!");
            window.history.back();
       </script>
        <?php
        exit();
    }
}
	$member_name = $_POST["member_name"];
	$member_name_lastname = $_POST["member_name_lastname"];
  $member_email = $_POST["member_email"];
  $member_date = $_POST["member_date"];
  $member_phonenumber = $_POST["member_phonenumber"];
	$member_type = $_POST["member_type"];
  $member_pass = $_POST["member_pass"];
	$sql = "INSERT INTO member SET member_name = '$member_name' ,member_name_lastname = '$member_name_lastname', member_pass = '$member_pass',member_email = '$member_email',
	member_phonenumber = '$member_phonenumber'";
	$insert = mysqli_query($conn, $sql);

    }
?>

<script>
                alert("สมัครสมาชิก เรียบร้อยแล้ว!");
                window.location = "<?php echo site_url('welcome'); ?>";
            </script>
