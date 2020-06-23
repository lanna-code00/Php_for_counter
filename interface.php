<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="interface.css">
	<link rel="stylesheet" href="jQuery-Plugin-For-iOS-like-Swipe-To-Delete-swipeTo/src/css/swipeTo.css">
</head>
	
<body>

<?php
  include 'navbar.php';
?>
<center>
	<div id="delDiv" style="background-color: #0E096E;position:absolute; width:100%; height: 100%; z-index: 10000;background: transparent; display: none">
		<div class="card" style="width: 26rem; height: 7rem; margin-left:30%; justify-content:center; margin-top: 40% ">
  <div class="card-body">
    <h4 class="card-title text-center">Are you sure you want to delete ?</h4>
	   <button class="btn btn-dark mr-5 ml-5 mt-3" id="confirmDel">OK</button>
		 <button class="btn btn-danger ml-5 mt-3" id="cancele">Cancel</button>
	</div>
</div>
	</div>
    </center>

    <center>
<!--	This contains the vehicles at default and both the menu bar and also where the items will be dropping-->
	<div class="container">
        <div class="row">
			<div class="col-md-12">
			  <div class="col-md-6 text-white">TRAFFIC COUNTER APP</div> 

			  <div id="vehicleDiv" style="width:100%" class="forDel">

				<div class="input-group mb-3 rounded mt-5 col-md-6">
					<table id="carTable">
						<tr>
					<td><div class="input-group-prepend">
					<span class="input-group-text"
					onmouseup="countMe()" id="countNume" data-long-press-delay="2000" 
					style="background: #0F0096 !important;min-height: 35px"><span class="fa fa-car text-white"></span></span>
				  </div></td>
				  <td><input type="text" class="form-control" value= 'CAR' onmouseup="countMe()"></td>
				  <td><input type="number" readonly id="inlineCheckbox1" class="form-control p-3 text-white allcounters" value="0" readonly onmouseup="countMe()" data-long-press-delay="2000" style="background:#0F0096 !important"></td>
				  <td><div class="input-group-append">
					<span class="input-group-text" onclick="subDef2()" style="min-height: 35px"><span class="fa fa-minus"></span></span>
					<span class="input-group-text" style="min-height: 35px"><span class="fa fa-edit"></span></span>
					<span class="input-group-text" style="min-height: 35px" onclick="del('car')"><span class="fa fa-times"></span></span>
				  </div></td>
				</tr>
				</table>
				</div>
					
				
				
				
				<div class="input-group mb-3 rounded mt-5 col-md-6">
					<table id="bikeTable">
						<tr>
					<td><div class="input-group-prepend">
					<span class="input-group-text"
					onmouseup="clickTocount()" id="countNume" data-long-press-delay="2000" 
					style="background: #0F0096 !important;min-height: 35px"><span class="fa fa-biking text-white"></span></span>
				  </div></td>
				  <td><input type="text" class="form-control" value= 'BIKING' onmouseup="clickTocount()"></td>
				  <td><input type="number" readonly id="inlineCheckbox2" class="form-control p-3 text-white allcounters" value="0" readonly onmouseup="clickTocount()" data-long-press-delay="2000" style="background:#0F0096 !important"></td>
				  <td><div class="input-group-append">
					<span class="input-group-text" onclick="subDef()" style="min-height: 35px"><span class="fa fa-minus"></span></span>
					<span class="input-group-text" style="min-height: 35px"><span class="fa fa-edit"></span></span>
					<span class="input-group-text" style="min-height: 35px" onclick="del('bike')"><span class="fa fa-times"></span></span>
				  </div></td>
				</tr>
				</table>
				</div>
											   
                </div>
                
                <div style="width:100%" id="defaltDiv"> 
				
                </div>
			  </div>
        </div>
        
		<div class="form-group col-6">
            <input type="submit" class="btn btn-success"  readonly>
        </div>

        <div class="form-group col-6">
            <input type="text" class="form-control text-center" onkeyup="calc()" readonly value="0">
        </div>
	</div>
        
    

    </center>
	
<!--	Modal Box for Items and their  description Starts Here-->
	<div class="modal fade" id="myModal" style="font-size: 20px">
		<div id="scrolle">
		<div class="modal-dialog modal-md p-3">
			<div class="modal-content">
				<div class="modal-header bg-secondary text-white">
					<h6 class="modal-title">
						ADD ITEM :
						</h6>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="input1">ITEM :</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><span id="car1" class="fa fa-car-alt"></span></span>
							</div>
							<input type="text" class="form-control form-control-sm" id="itemList" list="item1" placeholder="Type in your choice of vehicles">
							</div>
<!--						This is where users choose Options for what they want-->
						<datalist id="item1">
							<option value="TRUCK">
							<option value="BUS">
							<option value="BICYCLE">
							<option value="TRAILER">
							<option value="WALKING">
						    <option value="BIKE">
						    <option value="CAR">
						</datalist>
					</div>
<!--
					<div class="form-group">
						<label for="input1">DESCRIPTION :</label>
						<input type="text" class="form-control form-control-sm" id="item1">
					</div>
					
-->
						<div class="form-group" id="chooseAnyIcon">
						<label for="input1">CHOOSE ANY ICON OF YOUR CHOICE :</label>
<!--							Icon are been choosed here-->
							<div>
								<ul id="chooseIcons" >
									<li  id="car6" title="Train"><a href=""><button id="car6" class="btn btn-success text-black-50" style="background:none"><span class="text-black-50 fa fa-train setIcon" ></span></button></a></li>
									<li   id="car5" title="Walking"><a href=""><button class="btn btn-success text-black-50" id="car5" style="background:none"><span class="fa fa-walking setIcon"></span></button></a></li>
								   <li   id="car4"  title="Biking"><a href=""><button id="car4" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-biking setIcon"></span></button></a> </li>
								  <li   id="car3"  title="Bicycle"><a href=""><button id="car3" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-bicycle setIcon"></span></button></a></li>
									<li id="car1" title="Car"><a href=""><button id="car1" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-car setIcon"></span></button></a></li>	 
								   <li   id="car2" title="Bus"><a href=""><button id="car2" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-bus-alt setIcon"></span></button></a></li>	
								  <li   id="car7" title="Truck"><a href=""><button id="car7" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-truck setIcon"></span></button></a></li>				 
								  <li   id="car8" title="Van"><a href=""><button id="car8" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-shuttle-van setIcon"></span></button></a></li>
								  <li   id="car9" title="Taxi"><a href=""><button id="car9" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-taxi setIcon"></span></button></a></li>
								  <li   id="car10" title="Ambulance"><a href=""><button id="car10" class="btn btn-success text-black-50" style="background:none"><span class="fa fa-ambulance setIcon"></span></button></a></li>
								  
								</ul>
                   </div>

			</div>		
<!--					<select id="select" name="threads-icon" class="fa-select"></select>-->
				</div>
				<div class="modal-footer">
<!--					Button that triggers when the user finish with the description and item -->
					<button type="button" class="btn btn-primary" name="addsmth" id="additem" onclick="addItem()">ADD</button>
				
				</div>
			</div>
		</div>
	</div>
		</div>
	
	<!--	Modal Box for Items and their  description Ends Here-->
	
<!--	Button that triggers the modal for item and their Description-->
	<button id="add" data-position="fixed" class="btn shadow-sm border rounded-circle float-right m-3 text-white" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span></button>
</body>
	<!-- <script src="jquery/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="src/long-press-event.js"></script>
<script src="js/swipeTo.js"></script>
<script src="js/bootstrap.js"></script>
<script src="interface.js"></script>
	
</html>
