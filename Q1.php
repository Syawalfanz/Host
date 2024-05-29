<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PSP PC-Shop Buying Form</title>
<style>
body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

.container {
  margin: 20px auto;
  width: 80%;
}

.container table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  border: 1px solid #ddd;
}

.container th, .container td {
  padding: 10px;
  border: 1px solid #ddd;
}

th {
  background-color: purple;
  color: white;
}

label {
  font-weight: bold;
  color: black;
}

td label {
    font-weight: bold;
    color: black;
}


input[type="text"] {
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


input[type="email"] {
  width: calc(100% - 18px);
  padding: 8px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  font-weight: bold;
  color:#333;
}


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


input[type="number"] {
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
  font-size: 14px; /* Adjust the font size as needed */
  width: 150px; /* Adjust the width as needed */
  padding: 6px; /* Adjust the padding as needed */
}

input[type="checkbox"],
input[type="radio"] {
  margin-right: 5px;
}
input[type="submit"] {
  background-color: purple;
  color: white;
  padding: 15px 50px;
  border: center;
  border-radius: 5px;
  width: 200px;
  margin: 10px auto; /* Center the submit button horizontally */
  display: block; /* Ensure each button appears on a new line */
  float: left; /* Float the submit button to the left */
}

input[type="reset"] {
  background-color: purple;
  color: white;
  padding: 15px 50px;
  border: center;
  border-radius: 5px;
  width: 200px;
  margin: 10px auto; /* Center the reset button horizontally */
  display: block; /* Ensure each button appears on a new line */
  float: left; /* Float the reset button to the left */
  margin-left: 20px; /* Add some space between the buttons */
}

input[type="submit"]:hover,
input[type="reset"]:hover {
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

<div class="container">
  <table>
    <tr>
      <th colspan="5"><h1>Welcome To Penang PC-SHOP</h1></th>
    </tr>
    <tr>
      <td>
      
	   <form method="post" action="pcShopForm.php">

         <table>
        <tr>
            <td>Full Name:</td>
            <td><input type="text" id="full_name" name="full_name" pattern="[A-Za-z ]+" title="Please enter only letters and whitespace" required></td>
        </tr>
         <tr>
            <td>Email:</td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
<tr>
    <td>Phone Number:</td>
    <td><input type="text" placeholder="Enter your Phone Number" name="phone" pattern="\d{3}-\d{7}" title="Please enter numbers only in the format 012-3456789" required></td>
</tr>

        <tr>
          <td>Address:</td>
           <td><textarea id="address" name="address" rows="2" cols="30" required></textarea></td>
        </tr>

<tr>
    <td>Date:</td>
    <td><input type="date" id="date" name="date" required min="2023-12-01" max="2030-12-31"></td>
</tr>

    </table>
	  
<table align="center">
    <tr>
        <th></th>
        <th></th>
        <th>Product</th>
        <th>Price (RM)</th>
        <th>Quantity</th>
    </tr>
	
    <tr>
        <td>
            <input type="checkbox" name="item1" value="1" onchange="toggleQuantity('quantity1', this)">
        </td>
        <td>
            <img src="laptop.png" alt="HP Pavilion" class="product-image">
        </td>
        <td class="product-info">
            <label for="item1">HP Pavilion x360 14 inch 2-in-1 Laptop 14-ek1039TU Silver</label>
        </td>
        <td class="product-price">
            <span>RM 3,999.00</span>
        </td>
        <td class="product-quantity">
            <input type="number" id="quantity1" name="quantity1" value="0" min="0" max="10" required>  
        </td>
    </tr>
			
<tr>
    <td>
        <input type="checkbox" name="item2" value="1" onchange="toggleQuantity('quantity2', this)">
    </td>
    <td>
        <img src="PC.png" alt="HP Desktop" class="product-image">
    </td>
    <td class="product-info">
        <label for="item2">HP 24 Inch All-in-One Desktop PC</label>
    </td>
    <td class="product-price">
        <span>RM 2,599.00</span>
    </td>
    <td class="product-quantity">
        <input type="number" id="quantity2" name="quantity2" value="0" min="0" max="10" required> 
    </td>
</tr>



			
            <tr>
              <td>
                <input type="checkbox" name="item3" value="1" onchange="toggleQuantity('quantity3', this)">
              </td>
              <td>
                <img src="externalHD.png" alt="Western Digital Passport" class="product-image">
              </td>
              <td class="product-info">
                <label for="item3">Western Digital My Passport 1TB USB 3.0 External Hard Drive New Design</label>
              </td>
              <td class="product-price">
                <span>RM 239.00</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity3" name="quantity3" value="0" min="0" max="10" required> 
              </td>
            </tr>
			
            <tr>
              <td>
                <input type="checkbox" name="item4" value="1" onchange="toggleQuantity('quantity4', this)">
              </td>
              <td>
                <img src="mouse.png" alt="Wireless Mouse" class="product-image">
              </td>
              <td class="product-info">
                <label for="item4">2.4GHz Mini Wireless Optical Game Mouse / USB Receiver</label>
              </td>
              <td class="product-price">
                <span>RM 25.99</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity4" name="quantity4" value="0" min="0" max="10" required> 
              </td>
            </tr>
			
            <tr>
              <td>
                <input type="checkbox" name="item5" value="1" onchange="toggleQuantity('quantity5', this)">
              </td>
              <td>
                <img src="laptop_bag.png" alt="Anti-Theft Backpack" class="product-image">
              </td>
              <td class="product-info">
                <label for="item5">Anti Theft Backpack Business Fits for 15.6 inch Laptop USB Charging Water Repellent</label>
              </td>
              <td class="product-price">
                <span>RM 124.00</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity5" name="quantity5" value="0" min="0" max="10" required>  
              </td>
            </tr>
			
            <tr>
              <td>
                <input type="checkbox" name="item6" value="1" onchange="toggleQuantity('quantity6', this)">
              </td>
              <td>
                <img src="headphone.png" alt="Razer Headset" class="product-image">
              </td>
              <td class="product-info">
                <label for="item6">Razer BlackShark V2 Multi-Platform Wired E-Sports Headset</label>
              </td>
              <td class="product-price">
                <span>RM 339.00</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity6" name="quantity6" value="0" min="0" max="10" required>  
              </td>
            </tr>

          </table>
<label for="paymentMethod">Payment Method:</label><br>
<input type="radio" id="cash" name="paymentMethod" value="Cash" required>
<label for="cash">Cash</label><br>
<input type="radio" id="visaMasterCard" name="paymentMethod" value="Visa / Master Card">
<label for="visaMasterCard">Visa / Master Card</label><br>
<input type="radio" id="onlineTransfer" name="paymentMethod" value="Online Transfer">
<label for="onlineTransfer">Online Transfer</label><br>

<br>


          <input type="hidden" id="includequantity1" name="includequantity1" value="0">
          <br>
          
		  <p class="sst-tax-info">6% SST Sales Tax rate will be charged on computer products</p>

          <div class="center-buttons">
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
          </div>
        </form>
      </td>
    </tr>
  </table>
</div>

<script>
function toggleQuantity(quantityId, checkbox) {
  var quantityInput = document.getElementById(quantityId);
  var includeHiddenInput = document.getElementById('include' + quantityId);
  if (!checkbox.checked) {
    quantityInput.value = 0;
    includeHiddenInput.value = 0;
  } else {
    quantityInput.value = 1;
    includeHiddenInput.value = 1;
  }
  quantityInput.disabled = !checkbox.checked;
  if (checkbox.checked) {
    quantityInput.removeAttribute('required');
  } else {
    quantityInput.setAttribute('required', 'required');
  }
}
</script>

</body>
</html>