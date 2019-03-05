

<html>
<head>
<title> Sell and Rent Your Property For Free on Magicbricks </title>
<link rel="stylesheet" type="text/css" href="styleown.css">
</head>
<body>
<h1> Personal Details</h1>
<form name="myform" method="post" action="./ownd.php">
<h4> Name of the owner</h4>
<input type="text" name="uname" placeholder="Enter your name">
<br>
<br>

<h4> Property Details </h4>
  <input type="radio" name="prodetails" value="Sale" checked> Sale
  <input type="radio" name="prodetails" value="Rent"> Rent
  <input type="radio" name="prodetails" value="PG"> PG
  <br><br><br>
  
                        
Property Details                	 
                <select id="propertyType" name="propertyType" class="areaList" onchange="_gaq.push([&quot;_trackEvent&quot;,&quot;FieldTracking&quot;,&quot;Start&quot;]);imageHeadingUpdate(this.value,&quot;step1&quot;);getProjecImage();">
                         <option value="-1">Select Property Type</option>
						 
							<optgroup label="ALL RESIDENTIAL"></optgroup>
							
								<option value="10002">Multistorey Apartment</option>
							
								<option value="10003">Builder Floor Apartment</option>
							
								<option value="10001">Residential House</option>
							
								<option value="10017">Villa</option>
							
								<option value="10000">Residential Plot</option>
							
								<option value="10021">Penthouse</option>
							
								<option value="10022">Studio Apartment</option>
							
						
							<optgroup label="ALL COMMERCIAL"></optgroup>
							
								<option value="10007">Commercial Office Space</option>
							
								<option value="10018">Office in IT Park/ SEZ</option>
							
								<option value="10008">Commercial Shop</option>
							
								<option value="10009">Commercial Showroom</option>
							
								<option value="10006">Commercial Land</option>
							
								<option value="10011">Warehouse/ Godown</option>
							
								<option value="10012">Industrial Land</option>
							
								<option value="10013">Industrial Building</option>
							
								<option value="10014">Industrial Shed</option>
							
						
							<optgroup label="ALL AGRICULTURAL"></optgroup>
							
								<option value="10005">Agricultural Land</option>
							
								<option value="10004">Farm House</option>
							
						
 					</select>
					
					<br><br>
				<h4>	Phone Number : <input type="text" ></h4><br><br>
					
	<h4>Property Location</h4>
	<div class="mapContainer">
                	
                	
                	
                
	        	
	                   City
	                    
	                            <select id="quickCity" name="quickCity" class="areaList" onchange="updateLocalityMap(this);showHidePhotoShootService();">
		                             <option value="-1">---Select City---</option>
		                             <optgroup label="Delhi NCR" style="background:#ececec"></optgroup>
    <option value="2951">Gurgaon</option>
    <option value="6403">Noida</option>
    <option value="2624">New Delhi</option>
    <option value="2624-1001028">New Delhi - Central</option>
    <option value="2624-1001024">New Delhi - North</option>
    <option value="2624-1001026">New Delhi - East</option>
    <option value="2624-1001025">New Delhi - South</option>
    <option value="2624-1001027">New Delhi - West</option>
    <option value="2624-1001023">New Delhi - Dwarka</option>
    <option value="2624-1001022">New Delhi - Rohini</option> 
    <option value="7045">Greater Noida</option>
    <option value="6146">Ghaziabad</option>
    <option value="2944">Faridabad</option>
    
    <option class="heading-dd" value="4320">Mumbai</option>
    <option value="4320-1001041">Mumbai - Central Mumbai</option>
    <option value="4320-1001042">Mumbai - South Mumbai</option>
    <option value="4320-1001043">Mumbai - Western Suburbs</option>
    <option value="4320-1001044">Mumbai - Harbour Line</option>
    <option value="4320-1001045">Mumbai - Central Line</option>
    <option value="4320-1001054">Mumbai - Around Mumbai</option>
    <option value="4320-1001055">Mumbai - North Mumbai</option>
    <option value="4341">Navi Mumbai</option>

    <option class="heading-dd" value="3327">Bangalore</option>
    <option value="3327-1001009">Bangalore - North</option>
    <option value="3327-1001011">Bangalore - East</option>
    <option value="3327-1001010">Bangalore - South</option>
    <option value="3327-1001012">Bangalore - West</option>
    <option value="3327-1001005">Bangalore - North West</option>
    <option value="3327-1001006">Bangalore - North East</option>
    <option value="3327-1001007">Bangalore - South West</option>
    <option value="3327-1001008">Bangalore - South East</option>
    <option value="3327-1001013">Bangalore - Central</option>
    <option value="3327-1001056">Bangalore - Anekal</option>
    
    <option class="heading-dd" value="4378">Pune</option>
    <option value="4378-1001049">Pune - North</option>
    <option value="4378-1001048">Pune - South</option>
    <option value="4378-1001046">Pune - East</option>
    <option value="4378-1001047">Pune - West</option>
    <option value="4378-1001050">Pune - Central</option>
    <option value="4378-1001051">Pune - Suburb</option>
    
    <option class="heading-dd" value="2060" >Hyderabad</option>
    <option value="2060-1001032">Hyderabad - North</option>
    <option value="2060-1001031">Hyderabad - South</option>
    <option value="2060-1001029">Hyderabad - East</option>
    <option value="2060-1001030">Hyderabad - West</option>
    <option value="2060-1001033">Hyderabad - Central</option>
    <option value="2060-1001034">Hyderabad - Suburb</option>
    
    <option class="heading-dd" value="5196">Chennai</option>
    <option value="5196-1001016">Chennai - North</option>
    <option value="5196-1001017">Chennai - South</option>
    <option value="5196-1001014">Chennai - East</option>
    <option value="5196-1001015">Chennai - West</option>
    <option value="5196-1001018">Chennai - Central</option>
    <option value="5196-1001019">Chennai - Suburb</option>
    
    <option class="heading-dd" value="6903" >Kolkata</option>
    <option value="6903-1001038">Kolkata - North</option>
    <option value="6903-1001037">Kolkata - South</option>
    <option value="6903-1001035">Kolkata - East</option>
    <option value="6903-1001036">Kolkata - West</option>
    <option value="6903-1001039">Kolkata - Central</option>
    <option value="6903-1001040">Kolkata - Suburb</option>
    
    <option class="heading-dd" value="2690" >Ahmedabad</option>
    <option value="2690-1001003">Ahmedabad - North</option>
    <option value="2690-1001002">Ahmedabad - South</option>
    <option value="2690-1001000">Ahmedabad - East</option>
    <option value="2690-1001001">Ahmedabad - West</option>
    <option value="2690-1001004">Ahmedabad - Central</option>
    
    <option  class="heading-dd" value="4442" >Thane</option>
    <option value="4442-1202032">Thane - Beyond Thane</option>
    
    <optgroup label="Other Cities" style="background:#ececec"></optgroup>
    <option value="6317">Lucknow</option>
    <option value="2481">Chandigarh</option>
    <option value="4949">Jaipur</option>
    <option value="5216">Coimbatore</option>
    <option value="3886">Indore</option>
    <option value="3637">Kochi</option>
    <option value="4596">Bhubaneswar</option>
    <option value="2669">Goa</option>
    <option value="2899">Vadodara</option>
    <option value="2202">Visakhapatnam</option>
    <option value="3225">Jamshedpur</option>
    <option value="3475">Mangalore</option>
    <option value="3177">Bokaro Steel City</option>

	
		<optgroup label="Andhra Pradesh" style="background:#ececec"></optgroup>
	 	
			<option value="2011">Anantapur</option>
		
			<option value="2035">Chittoor</option>
		
			<option value="2046">Eluru</option>
		
			<option value="2058">Guntur</option>
		
			<option value="2060">Hyderabad</option>
		
			<option value="2071">Kakinada</option>
		
			<option value="2082">Khammam</option>
		
			<option value="1200191">Krishna</option>
		
			<option value="2090">Kurnool</option>
		
			<option value="2105">Medak</option>
		
			<option value="2111">Nalgonda</option>
		
			<option value="2121">Nellore</option>
		
			<option value="2145">Rajahmundry</option>
		
			<option value="1200041">Ranga Reddy</option>
		
			<option value="2165">Secunderabad</option>
		
			<option value="2172">Srikakulam</option>
		
			<option value="2188">Tirupathi</option>
		
			<option value="2200">Vijayawada</option>
		
			<option value="2202">Visakhapatnam</option>
		
			<option value="2203">Vizianagaram</option>
		
			<option value="2205">Warangal</option>
		
	
		<optgroup label="Assam" style="background:#ececec"></optgroup>
	 	
			<option value="2280">Guwahati</option>
		
			<option value="2290">Jorhat</option>
		
	
		<optgroup label="Bihar" style="background:#ececec"></optgroup>
	 	
			<option value="2373">Bhagalpur</option>
		
			<option value="2384">Darbhanga</option>
		
			<option value="2395">Gaya</option>
		
			<option value="2445">Muzaffarpur</option>
		
			<option value="2453">Patna</option>
		
	
		<optgroup label="Chandigarh" style="background:#ececec"></optgroup>
	 	
			<option value="2481">Chandigarh</option>
		
	
		<optgroup label="Chhattisgarh" style="background:#ececec"></optgroup>
	 	
			<option value="7085">BHILAI</option>
		
			<option value="2501">Bilaspur</option>
		
			<option value="2518">Durg</option>
		
			<option value="2562">Raipur</option>
		
	
		<optgroup label="Dadra & Nagar Haveli" style="background:#ececec"></optgroup>
	 	
			<option value="2580">Silvassa</option>
		
	
		<optgroup label="Delhi NCR" style="background:#ececec"></optgroup>
	 	
			<option value="3327">Bangalore</option>
		
			
		
	


	                           </select>
	                            
	                    	</div>
<h4>Enter Locality</h4><br>
<input id="locality" name="locality" type="text" max="25" placeholder="Enter Locality" required>
<br><br>
<h4>Enter Address</h4><br>
 
<textarea rows="4" name="address" cols="100" name="comment" placeholder="Enter Address" required>
Enter text here...</textarea>				
  
  
<h5> Floor Number</h5><input type="text" name="floorno" placeholder="Enter Floor Number" required><br>

 
 <h4>Area</h4>
 <h5>Covered Area</h5>
 <input type="text" name="areaper" placeholder="Enter area covered" required> in sqft<br>
 <br>
 Post Proof 
 Select image to upload:
    <input type="file" name="propproof" id="fileToUpload" required><br><br>
 Post Images
 <br><br>
  
	Select image to upload:
	<input type="file" name="img1" id="fileToUpload1" ><br><br>
	Select image to upload:
	<input type="file" name="img2" id="fileToUpload2" ><br><br>
	Select image to upload:
	<input type="file" name="img3" id="fileToUpload3" ><br><br>
    
 
 <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
 <br>
 <input type="submit" >
 <input type="reset" > 
  
</form>
</body>
</html>