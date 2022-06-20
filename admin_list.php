<?php

session_start();

require 'config/db.php';
require 'config/checklogin.php';

include("inc/head.php");

if (isset($_GET['page_no']) && $_GET['page_no']!="") 
{
    $page_no = $_GET['page_no'];
} 

else 
{
    $page_no = 1;
}

$total_records_per_page = 20;
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;

$result_count = mysqli_query(
    $con, "SELECT COUNT(*) AS total_records FROM `admintable`"
);

$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;

?>

<div class="card-body">
    <?php
        include("inc/nav.php");
        include("inc/header.php");
    ?>

    <div class="article">
        <div class="title2">
            <h1>Employees Details</h1>
        </div>

        <table class="table-employees">

        <tr>
          <th>Admin Name</th>
          <th>Admin Username</th>
          <th>Register Date</th>

          
        </tr>

        <?php

        $ret=mysqli_query($con,"SELECT * FROM admintable LIMIT $offset, $total_records_per_page");
        while ($rowProfile=mysqli_fetch_array($ret)) {

        ?>

        <tr>
          <td><?php  echo $rowProfile['AdminName'];?></td>
          <td><?php echo $rowProfile['AdminUsername'];?></td>
            <td><?php echo $rowProfile['RegisterDate'];?></td>
        </tr>
        
        <?php 
        }
        ?>

</table>

<ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?>
    
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>
    
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no != $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>

<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>

<div class="countPages">
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
    
</div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
