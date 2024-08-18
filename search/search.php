<?php 

include ('../php/header.php') ;
if (isset($_GET['page_no']) && $_GET ['page_no'] !==""){
    $page_no = $_GET ['page_no'];
}else {
$page_no = 1 ;
}    

$total_records_per_page = 10;

$offset = ($page_no -1) * $total_records_per_page;

$previous_page = $page_no -1;

$next_page = $page_no + 1;

$result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM
preenrollment.enrollment ") or die (mysqli_error($conn)) ;

$records = mysqli_fetch_array($result_count);

$total_records = $records ['total_records'];
    
$total_no_of_page =ceil($total_records / $total_records_per_page) ;

$sql = "SELECT * FROM preenrollment.enrollment  LIMIT $offset, $total_records_per_page";

$results = mysqli_query($conn, $sql) or die (mysqli_query($conn));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/example15.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="../images/logo.jpg" alt="">
            </div>

            <span class="logo_name">SLSU Tayabas City Campus</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
            <li><a href="..include/dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="../include/enrollment.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Pre-Enrollment</span>     
                </a></li>
                <li><a href="../include/studenttable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Student</span>
                </a></li>
                <li><a href="../include/subjecttable.php">
                    <i class="uil uil-book-open"></i>
                    <span class="link-name">Subject</span>
                </a></li>
                <li><a href="../include/coursetable.php">
                    <i class="uil uil-graduation-cap"></i>
                    <span class="link-name">Course</span>
                </a></li>
                <li><a href="../include/instructortable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Instructor</span>
                </a></li>
                <li><a href="../include/tbleuser.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Users</span>
                </a></li>
              
            </ul>
            
            <ul class="logout-mode">
             <li><a href="../selectuser.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <form action="../search/search.php" method="POST">
                <button name = "searchsubmit"></button>
                <input type ="text" name= "search" placeholder="Search here...">
            </div>
            
           
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-calendar-alt"></i>
                    <span class="text">Pre-Enrollment</span>
                </div>
                <table class ="table" >
        <thead>
            <tr>
            <th scope="col">Student ID No.</th>
            <th >First Name</th>
            <th >Middle Name</th>
            <th >Last Name</th>
            <th >Sex</th>
            <th >Course</th>
            <th >Semester</th>
            <th >Year Level</th>
            <th >Student Type</th>
            <th >Insert Subject</th>
            <th >Action</th>
            <th >Edit</th>
            </tr>
        </thead>
        </tbody>
<?php
    if(isset($_POST['searchsubmit'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM enrollment WHERE idno LIKE '%$search%' OR fname LIKE '%$search%'OR mname LIKE '%$search%'
        OR lname LIKE '%$search%'" ;
        $results = mysqli_query($conn, $sql);
        $query_Result = mysqli_num_rows($results);

        if ($query_Result > 0){
            while ($row = mysqli_fetch_assoc($results)){
                ?>
                 
                        <tr>
                        <td scope = "row"><?php echo $row ['idno']; ?></td>  
                        <td><?php echo $row ['fname']; ?></td>  
                        <td><?php echo $row ['mname']; ?></td>  
                        <td><?php echo $row ['lname']; ?></td>  
                        <td><?php echo $row ['sex']; ?></td>  
                        <td><?php echo $row ['course']; ?></td>  
                        <td><?php echo $row ['sem']; ?></td>  
                        <td><?php echo $row ['yearlvl']; ?></td> 
                        <td><?php echo $row ['student_type']; ?></td>   
                        <td> 
                        <a href="enrolsubject.php?enroll_id=<?php echo $row['enroll_id'] ?>" class= "btn-link-blue" >Subject<i class="uil uil-image-check"></i></a>
                        </td>   
                        <td> 
                        <a href="../printschedule.php?enroll_id=<?php echo $row['enroll_id'] ?>" class= "btn-link-blue" >Confirm<i class="uil uil-image-check"></i></a>
                        </td>   
                        <td> 
                        <a href="../php/edit.php?enroll_id=<?php echo $row['enroll_id'] ?>" class= "link-sky" ><i class="uil uil-edit"></i></a>
                        </td>   
                    </tr>
                    
                <?php 
                } 
                } 
                  }
                mysqli_close($conn)  ?>           
         
         </div>
        </tbody>
    </table> 
   
            <ul class="pagination">

            <li class="page-item"><a class="page-link <? = ($page_no <=1)?'disabled'
            : '';?>" <?= ($page_no > 1)? 'href=?page_no='.$previous_page: ''; ?>  
            >Previous</a></li>

            <?php for($counter = 1; $counter <=$total_no_of_page; $counter++) { ?>
            
                <?php if($page_no !== $counter) {?>
                <li class="page-item"><a class="page-link" href="?page_no=<?=
                $counter; ?>"><?= $counter; ?></a></li>
                <?php }else { ?>  
                <li class="page-item"><a class="page-link active"><?= $counter; ?></a></li>

                <?php }?>
            <?php } ?>

            <li class="page-item"><a class="page-link <?= ($page_no >= 
            $total_no_of_page)? 'disabled': ''; ?>" <?= ($page_no <
            $total_no_of_page)? 'href=?page_no='.$next_page : '';?>>Next</a></li>

        </ul>
   
        <div class ="p-10">
            <strong>Page <?= $page_no; ?> of <?=
            $total_no_of_page; ?></strong>
                </div>   
    
         
            </div>
        </div>  
    </div>
<div>
   
</body>
</html>
            
       