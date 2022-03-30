<?php 
include ("connect.php");
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$social = $_POST["Social"];
$address = $_POST["address"];
$address2 = $_POST["address2"];
$state = $_POST["State"];
$zip = $_POST["zip"];
$email = $_POST["email"];
$phone = $_POST["Phone"];
$employer = $_POST["Employer"];
$salary = $_POST["Salary"];
$term = $_POST["term"];
$credit = $_POST["credit"];
$dti = $_POST["dti"];
$sql = "insert into altamushloans.customer (firstname, lastname, Social, address, State, zipcode, phonenumber, email, employer, salary, 
term, creditScore, dti) values (?,?,?,?,?,?,?,?,?,?,?,?,?) ";
// Connecting the variables from visual studio to the mysql database. Just so it goes in the right place when the program goes through. 

// when the application runs and putting all the data into an array and putting into the customers table. 
$statement = $DB->prepare($sql);
try{
  $statement->execute(array($firstName,$lastName, $social, $address, $state, $zip, $phone, $email,$employer, $salary, $term, $credit, $dti));

}catch(Exception $e){
  die($e);
  exit;
}

// Going through the application and here are the criteria for a customer to get approved for a loan. If the customer doesnt meet any
// of these criteria, customer is denied a loan. 

// credit score (<750) dti <50% income >= 40,000 = 10000 for 1 % interest
$approved = false;
$loanAmount = 0;
$interest = 0;
$loanID = 0;
if(($credit >= 750) && ($dti <50) && ($salary >= 40000) ) 
{
  $approved = true;
  $loanAmount = 10000;
  $interest = 1;
  $loanID = 5;
  $term = 60;
  $payment = 170.94;

  // credit score (690-749) dti <45% income >= 45,0000 = 9000 for 3 % interest
  
}
else if (($credit >= 690 && $credit <= 749) && ($dti <45) && ($salary >= 45000) ) 
{
  $approved = true;
  $loanAmount = 9000;
  $interest = 3;
  $loanID = 4;
  $term = 60;
  $payment = 161.72;

}
// credit score (640-689) dti <40% income >= 50,0000 = 5000 for 5 % interest


else if(($credit >= 640 && $credit <= 689) && ($dti <40) && ($salary >= 50000) ) 
{
  $approved = true;
  $loanAmount = 8000;
  $interest = 5;
  $loanID = 3;
  $term = 60;
  $payment = 150.97;


  
}

// credit score (590-639) dti <35% income >= 55,0000 = 7000 for 7 % interest
else if (($credit >= 590 && $credit <= 639) && ($dti <35) && ($salary >= 55000) ) 
{
  $approved = true;
  $loanAmount = 7000;
  $interest = 7;
  $loanID = 2;
  $term = 60;
  $payment = 138.61;


  
}

// credit score (540-589) dti <35% income >= 55,0000 = 7000 for 10 % interest
else if(($credit >= 540 && $credit <= 589) && ($dti <35) && ($salary >= 55000) ) 
{
  $approved = true;
  $loanAmount = 7000;
  $interest = 10;
  $loanID = 1;
  $term = 60;
  $payment = 148.73;



  
}

// When the loan application goe through, if the customer is approved, it goes into an array and puts it in the approvals table. But it catches the 
// customer ID number just making it specific to that person. 
$ID = null;
$sql = "select ID from customer where lastname = '$lastName' and firstname = '$firstName'";
$statement = $DB->prepare($sql);
try{
  $statement->execute();
  $result = $statement-> fetchAll();
  $ID = $result[0]["ID"];


}catch(Exception $e){
  die($e);
  exit;
}

// When approved, in the approved table it will display LoanID, ID, first name, last name, social, creditscore, loan amount, payment and term of the loan.
if($approved == true){
  $sql = "insert into altamushloans.approvals (loanID, ID, firstname, lastname, Social, creditScore, loanAmount, payment, term, 
  interestRate) values (?,?,?,?,?,?,?,?,?,?) ";
$statement = $DB->prepare($sql);
try{
  $statement->execute(array($loanID, $ID, $firstName, $lastName, $social, $credit, $loanAmount, $payment, $term, $interest));

}catch(Exception $e){
  die($e);
  exit;
}

// When the application goes through and customer gets denied. It gos through an array and puts in the denied table just to keep in track who is approved and who 
// is not. 

}
else{
  $sql = "insert into altamushloans.denied (ID,firstname,lastname ) values (?,?,?) ";
$statement = $DB->prepare($sql);
try{
  $statement->execute(array($ID, $firstName, $lastName));

}catch(Exception $e){
  die($e);
  exit;
}

}




?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cover Template </title>

    <!--  core CSS -->
    <link href="bootstrap-4.0.0./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Altamush Loans Inc</h3>  <!-- h3 = header -->
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link " href="index.php">Home</a>
            <a class="nav-link " href="contact.php">Contact</a>
          </nav>
        </div>
      </header>

      

      <main role="main" class="inner cover">
        <h1 class="cover-heading"></h1>
       <p class = lead> <?php if ($approved === true) echo "You are approved for $$loanAmount for $interest % interest";
        else echo "You were not approved at this time, you can apply again in the next 30 days"; ?> </p>
          <br>   <!-- When the application is finished it displays if you are approved or not. If approved, it tells the the amount and interest rate -->
          <br>
        <p class="lead"> If you have any additional question or need help <br>
          You can contact us at our customer service at 800-888-8888 <br>
Hours of operation- <br>
Monday thru Friday 8am-10pm EST <br>
Saturday and Sunday 9am-3pm EST<br>

Or you can email us at <br>
altamushloans@support.com <br>

</p>

  
 
        
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p> C Altamush Loan inc </p>
        </div>
      </footer>
    </div>


    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
