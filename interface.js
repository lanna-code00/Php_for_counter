function countMe(){
		inlineCheckbox1.value++;//Increment the value
	}
function countMe(){
		inlineCheckbox1.value++;
	}
function clickTocount(){
		inlineCheckbox2.value++;
}

let subDef =()=>{
	let bt = inlineCheckbox2.value;
	if(bt > 0){
		inlineCheckbox2.value--;
	}
}
let subDef2 =()=>{
	let bt = inlineCheckbox1.value;
	if(bt > 0){
		inlineCheckbox1.value--;
	}
}
var fafa = '';//Variable for icons

addEventListener('click', (event)=>{
	event.preventDefault();
	if( event.target.id == 'car1'){	
		fafa = '';
		fafa = 'fa fa-car';
		
	}
	if( event.target.id == 'car2'){
		fafa = '';	
		fafa = 'fa fa-bus-alt';
		
	}
	if( event.target.id == 'car3'){
		fafa = '';
		fafa = 'fa fa-bicycle';
		
	}
	if( event.target.id == 'car4'){	
		fafa = '';
		fafa = 'fa fa-biking';
		
	}
	if( event.target.id == 'car5'){	
		fafa = '';
		fafa = 'fa fa-train';
	}
	if( event.target.id == 'car6'){	
		fafa = '';
		fafa = 'fa fa-truck ';
		
	}
	console.log(fafa);
});

var item;

var addItem = () =>{
	//  $('#myModal').modal('hide');
     all = [];
	var c = Math.random();
    var s = Math.floor(c*1000);
	var v = 'ann'+ s;
	var ey;
    var ar = document.getElementsByClassName('allcounters');
    for(var i = 0; i < ar.length;i++){
        all.push(ar[i].value);
    }
    item = itemList.value;

   defaltDiv.innerHTML += `<p><div class="input-group mb-3 rounded mt-5 col-md-6" id=`+v+s+`>
		<table id=`+v+`Table>
			<tr>
		<td><div class="input-group-prepend">
		<span class="input-group-text"
		onmouseup="generalCount(`+s+`)" id="countNume" data-long-press-delay="2000" 
		style="background: #0F0096 !important;min-height: 35px"><span class="${fafa} text-white">
		</span></span>
	  </div></td>
	  <td><input type="text" class="form-control" value=`+item+` onmouseup="generalCount(`+s+`)"></td>
	  <td><input type="number"  class="form-control p-3 text-white allcounters" value="0" readonly onmouseup="generalCount(`+s+`)"
	  id=`+v+` data-long-press-delay="2000" style="background:#0F0096 !important"></td>
	  <td><div class="input-group-append" id=`+v+`>
		<span class="input-group-text" onclick="subInp(`+s+`)" style="min-height: 35px"><span class="fa fa-minus"></span></span>
		<span class="input-group-text" style="min-height: 35px"><span class="fa fa-edit"></span></span>
		<span class="input-group-text" style="min-height: 35px" onclick="del(`+s+`)"><span class="fa fa-times"></span></span>
	  </div></td>
	</tr>
	</table>
	</div>
		</p>`;
    document.getElementById('defaltDiv').style.display= "block";
  
         for(var i = 0; i < ar.length;i++){
            ar[i].value = all[i];
		} 
		if(item!="")
		{
			console.log('inserting...');
			$.ajax({
			method: "POST",
			url: "http://localhost/Counter1/backendhome2.php",
			data: {item, icons : fafa, noofitems:0},
            error: (xhr)=>{

				console.log(`Error: ${xhr}`);
			}, 
			success: function(data, xhr) 
			{
				console.log(`Success: ${xhr}`);
				/*if(res==1)
				{
				alert('Data saved successfully');	
				}
				else
				{
				alert('Data not saved');	
				}
				
				*/
			},
		   
			});
				
		}
	}
function clearall(){
    defaltDiv.innerHTML = "";
    showtot.value = "";
}
var bbt;

var addInppt;
function generalCount(c){
	console.log('updating...');
   var addInppt = 'ann' + c;
   console.log(addInppt);
   noOfItem = Number(document.getElementById(addInppt).value)+1;
   document.getElementById(addInppt).value =noOfItem ;

   $.ajax({
	method: "POST",
	url: "http://localhost/Counter1/backendhome2.php",
	data: {item, icons : fafa, noofitems:noOfItem},
	error: (xhr)=>{

		console.log(`Error: ${xhr}`);
	}, 
	success: function(data, xhr) 
	{
		console.log(`Success: ${xhr}`);
	},
   
	});
}
let subInp = c => {
   var rt = 'ann' + c;
  console.log(rt);
  var yy = document.getElementById(rt).value;
	if(yy > 0){
	document.getElementById(rt).value = Number(document.getElementById(rt).value)-1;
	}
}


 addEventListener('click', (event)=>{
    if(event.target.id == 'cancele'){
        $('#delDiv').hide();
    }
});
function del(type){
    if (typeof(type)=='number') {
        type = 'ann'+type
    }
    _type = type;
    $("#delDiv").show();
}
addEventListener('click', (event)=>{
    if(event.target.id == 'confirmDel'){
		$(`#${_type}Table`).remove();
        $('#delDiv').hide();
		
  }
});




