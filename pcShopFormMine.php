<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
<style>
    /* Your CSS styles here */
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }

  h2 {
    background-color: purple;
    color: white;
    padding: 20px; /* Adjust padding as needed */
    margin-top: 20px;
    border: 2px solid black; /* Add or adjust border properties */
    border-radius: 3px; /* Add border radius for rounded corners */
}

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    th, td {
        padding: 20px;
        border: 1px solid #ddd;
    }

    th {
        background-color: purple;
        color: white;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: calc(100% - 18px);
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        font-weight: bold;
        color: #333;
    }

    input[type="date"] {
        font-size: 14px;
        width: 150px;
        padding: 6px;
    }

    input[type="submit"],
    input[type="reset"],
	input[type="button"] {
        background-color: purple;
        color: white;
        padding: 15px 50px;
        border: center;
        border-radius: 5px;
        width: 200px;
        margin: 10px auto;
        display: block;
        float: left;
    }

   
    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover {
        background-color: #8a2be2;
    }

    .product-image {
        max-width: 100px;
        max-height: 100px;
    }

    .product-info {
        text-align: left;
    }

    .product-price {
        text-align: right;
    }

    .product-quantity {
        text-align: right;
    }

    .sst-tax-info {
        font-weight: bold;
        color: blue;
    }
</style>

</head>
<body>
<?php
// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
$full_name = $_POST['full_name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$date = $_POST['date'] ?? '';
$payment = $_POST['paymentMethod'] ?? '';

    // Initialize quantities and sales for each product
    $quantity1 = $_POST['quantity1'] ?? 0;
    $quantity2 = $_POST['quantity2'] ?? 0;
    $quantity3 = $_POST['quantity3'] ?? 0;
    $quantity4 = $_POST['quantity4'] ?? 0;
    $quantity5 = $_POST['quantity5'] ?? 0;
    $quantity6 = $_POST['quantity6'] ?? 0;

    // Calculate sales for each product
    $sales1 = $quantity1 * 3999.00;
    $sales2 = $quantity2 * 2599.00;
    $sales3 = $quantity3 * 239.00;
    $sales4 = $quantity4 * 25.99;
    $sales5 = $quantity5 * 124.00;
    $sales6 = $quantity6 * 339.00;

    // Calculate total sales
    $total_sales = $sales1 + $sales2 + $sales3 + $sales4 + $sales5 + $sales6;

    // Calculate discount 
    $discount = ($total_sales > 2000) ? ($total_sales * 0.05) : 0;

    // Calculate tax 
    $tax = $total_sales * 0.06;

    // Calculate total amount
    $total_amount = $total_sales + $tax - $discount;

    // Display the form submission details
    ?>
	
    <div style="text-align: center;">
    <h2>Penang PC-Shop Payment Details</h2>
</div>
	
	
    <table>
        <tr>
            <td>Full Name:</td>
            <td><input type="text" value="<?php echo $full_name; ?>" name="full_name" readonly></td>
        </tr>
        <tr>
    <tr>
    <td>Email:</td>
    <td><input type="text" value="<?php echo $email; ?>" name="email" readonly></td>
   
</tr
        <tr>
            <td>Phone Number:</td>
            <td><input type="text" value="<?php echo $phone; ?>" name="phone" readonly></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea rows="2" cols="30" name="address" readonly><?php echo $address; ?></textarea></td>
        </tr>
        <tr>
            <td>Date:</td>
            <td><input type="date" id="date" name="date" value="<?php echo $date; ?>" readonly></td>
        </tr>
    </table>
	
        <div style="text-align: center;">
    <h2>Products Details</h2>
</div>
	
    <table>
        <tr>
            <th>Item Name</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Item Total</th>
        </tr>
        <tr>
            <td>HP Pavilion x360 14 inch 2-in-1 Laptop 14-1039TU</td>
            <td>RM 3,999.00</td>
            <td><?php echo $quantity1; ?></td>
            <td>RM <?php echo number_format($sales1, 2); ?></td>
        </tr>
        <tr>
            <td>HP 24 inch All-in-One Desktop PC</td>
            <td>RM 2,599.00</td>
            <td><?php echo $quantity2; ?></td>
            <td>RM <?php echo number_format($sales2, 2); ?></td>
        </tr>
        <tr>
            <td>Western Digital My Passport 1TB USB 3.0 External Hard Drive</td>
            <td>RM 239.00</td>
            <td><?php echo $quantity3; ?></td>
            <td>RM <?php echo number_format($sales3, 2); ?></td>
        </tr>
        <tr>
            <td>2.4GHz Mini Wireless Optical Game Mouse / USB Receiver</td>
            <td>RM 25.99</td>
            <td><?php echo $quantity4; ?></td>
            <td>RM <?php echo number_format($sales4, 2); ?></td>
        </tr>
        <tr>
            <td>Anti Thief Backpack BusinessFit for 15.6 inch Laptop</td>
            <td>RM 124.00</td>
            <td><?php echo $quantity5; ?></td>
            <td>RM <?php echo number_format($sales5, 2); ?></td>
        </tr>
        <tr>
            <td>Razer BlackShark V2 Multi-Platform Wired E-Sports Headset</td>
            <td>RM 339.00</td>
            <td><?php echo $quantity6; ?></td>
            <td>RM <?php echo number_format($sales6, 2); ?></td>
        </tr>
    </table>
	
     <div style="text-align: center;">
    <h2>Bill</h2>
</div>
	
    <table>
        <tr>
            <td>PAYMENT METHOD</td>
            <td><?php echo htmlspecialchars($payment); ?></td>
        </tr>
        <tr>
            <td>Total Sales</td>
            <td>RM <?php echo number_format($total_sales, 2); ?></td>
        </tr>
        <tr>
            <td>Discount 5% (if total sales above RM2000)</td>
            <td>RM <?php echo number_format($discount, 2); ?></td>
        </tr>
        <tr>
            <td>6% SST charged</td>
            <td>RM <?php echo number_format($tax, 2); ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td style="background-color: purple; color: white;">RM <?php echo number_format($total_amount, 2); ?> </td>
        </tr>
        <tr>
            <td><input type="button" onclick="history.back()" value="Back"></td>
        </tr>
    </table>
    <?php
}
?>
</body>
</html>
