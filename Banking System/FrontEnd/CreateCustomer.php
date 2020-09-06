<?php
    require "header.php";
?>

<main>

    <section class="section-default">
        <h2>Set Account Information</h2>
        <form class="form-signup" action="Include/CreateCustomerAccount.php"method="post">
        <input type="number" name="AccountID" placeholder="AccountID">
        <input type="number" name="CurrentBalance" placeholder="Current Balance">
        <input type="number" name="AccountTypeID" placeholder="AccountTypeID">
        <input type="number" name="AccountStatusTypeID" placeholder="AccountStatusTypeID">
        <input type="number" name="InterestSavingsRateID" placeholder="InterestSavingsRateID">
        <h3>Customer Details</h3>
        <!--Account ID store in a var and set it as customer's Account ID later -->
        <input type="number" name="CustomerID" placeholder="CustomerID">
        <input type="name" name="CustomerAddress" placeholder="CustomerAddress">
        <input type="name" name="CustomerFirstName" placeholder="CustomerFirstName">
        <input type="name" name="CustomerLastName" placeholder="CustomerLastName">
        <input type="name" name="City" placeholder="City">
        <input type="name" name="Nation" placeholder="Nation">
        <input type="name" name="EmailAddress" placeholder="EmailAddress">
        <input type="name" name="Phone" placeholder="Phone">
        <!--Set Username in a var and then assign it to Customer-->
        <h3>Set Customer Account Information</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="create">Create Account</button>
        </form>
    </section>
    

</main>

<?php
    require "footer.php";
?>