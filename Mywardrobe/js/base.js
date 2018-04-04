//var fabricValue = "";
function getRotataionImg()
	{
	 
	$.ajax({
        type:"post",
        url:"360View.php",
		async:false,
        data:"",
        success:function(data){alert(data);
			$('#buildSuit').html(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}

function getImgPic(id)
	{
	 
	//alert(id);
	var image="<img src='img/buildSuit/"+id+".jpg'  width='81%' />";
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#replaceView').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}


function changeStatus(id){	
	 if($("#userStatus"+id).is(":checked")==false){
		 var status='0';
	 }else{
		 var status='1';
	}
	$.ajax({
        type:"post",
        url:"updateUserStatus.php",
		async:false,
        data:"id="+id+"&status="+status,
        success:function(data){
			window.location.href = 'viewUser.php?msg=4';
          },
		 error: function() {
         alert("error");
        }
       });
	 
}
  
  
$("#updateUserform").submit(function(event){
	event.preventDefault();
	//var uid=base64_decode(uid);
	 var uidd=$("#uid").val();
	 var uid=base64_decode(uidd);
//	  alert(uid);
	  
	  var name=$("#name").val();
	  var username=$("#username").val();
      var email=$("#email").val();
      var role=$("#role").val();
	  var contact=$("#contact").val();
	  var address=$("#address").val();
  	  var district=$("#district").val();
	  $.ajax({
        type:"post",
        url:"updateUser.php",
		async:false,
        data:"id="+uid+"&name="+name+"&username="+username+"&email="+email+"&role="+role+"&contact="+contact+"&address="+address+"&district="+district,
        success:function(data){
			window.location.href = 'viewUser.php?msg=3';

          },
		 error: function() {
         alert("error");
        }
       });
	   
   });


//inserting data in mysql  
$("#createBuildSuit").submit(function(event){
	event.preventDefault();
	alert("hello");
      var fabric=$("#fabric").val();
	 
	  $.ajax({
        type:"post",
        url:"build-suit.php",
		async:false,
        data:"fabric="+fabric,
        success:function(data){alert(data);
			window.location.href = 'build-suit.php';
          },
		 error: function() {
         alert("error");
        }
       });
	   
   });


function setMeasurements()
	{
	var arm = $("#arm").val();
	var chest = $("#chest").val();
	var overarm = $("#overarm").val();
	var waist = $("#waist").val();
	var pant = $("#pant").val();
	var seat = $("#seat").val();
	var thigh = $("#thigh").val();
	var outseam = $("#outseam").val();
	var suitWaist = $("#suitWaist").val();

	$.ajax({
   type:"post",
   url:"saveMeasurements.php",
   async:false,
   data:"arm="+arm+"&chest="+chest+"&overarm="+overarm+"&waist="+waist+"&pant="+pant+"&seat="+seat+"&thigh="+thigh+"&outseam="+outseam+"&suitWaist="+suitWaist,
   success:function(data){//alert(data);
   		 //getMyMeasurement();
     },
    error: function() {
    //alert("error");
   }
     });
}
	

function checkOut(id)
{
	$.ajax({
        type:"post",
        url:"checkout.php",
		async:false,
        data:"id="+id,
        success:function(data){//alert(data);
			$('#profile').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
}

function cancelBuildSuit(){
	   
	   window.location.href='build-suit.php';
	   
	   }
	   
function cancelWishList(){
	   
	   window.location.href='myWhishListPage.php';
	   
	   }	   
	   
   // delete user
   function deleteUser(id)
   {
	//alert(id);
	$.ajax({
        type:"post",
        url:"deleteUser.php",
		async:false,
        data:"id="+id,
        success:function(data){
			window.location.href = 'logout.php';
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
  
  function deleteOrder(id)
   {
	
	$.ajax({
        type:"post",
        url:"deleteOrder.php",
		async:false,
        data:"id="+id,
        success:function(data){
			window.location.href = 'myOrdersPage.php';
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
	function deleteWishList(id)
   {
	//alert(id);
	$.ajax({
        type:"post",
        url:"deleteOrder.php",
		async:false,
        data:"id="+id,
        success:function(data){
			window.location.href = 'myWhishListPage.php';
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
	
	function editUser(id)
   {	   
 
	$.ajax({
        type:"post",
        url:"editUser.php",
		async:false,
        data:"id="+id,
        success:function(data){
			$('#page-wrapper').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
 function viewOrder(id)
   {	   
	$.ajax({
        type:"post",
        url:"editMyOrder.php",
		async:false,
        data:"id="+id,
        success:function(data){
			$('#content').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
	
	
  function viewwishList(id)
   {	   
	$.ajax({
        type:"post",
        url:"viewWishList.php",
		async:false,
        data:"id="+id,
        success:function(data){
			$('#content').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
	 function editwishList(id)
   {	   
   
	$.ajax({
        type:"post",
        url:"editMyWishList.php",
		async:false,
        data:"id="+id,
        success:function(data){
			$('#content').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
function getDetail()
	{
	
	var	fabric = $("#fabric").val();
	alert(fabric);

	}	
	
   
  function getJacketButtons(id)
   {	   
   $('#36View').css('display', 'none');
 //var code=$('input[type="radio"]:checked').val();
   var image="<img src='img/buildSuit/"+fabricValue+"/jacket/buttons/"+id+".jpg'  width='100%' />";
  //alert(image);
  /* if($('input[type="radio"]:checked').length == "0")
	{
	alert("Select any value");
	}
	else
	{*/
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	//}
	}
	
	
	 function getJacketLapelType(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/jacket/lapel/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	function getJacketVent(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/jacket/vent/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	function getJacketPockets(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/jacket/pockets/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
		function getJacketStitching(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/jacket/stitching/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	function getJacketType(id)
   {	   
   $('#36View').css('display', 'none');
   //alert(fabricValue);
   var image="<img src='img/buildSuit/"+fabricValue+"/jacket/type/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
///////////////// End JACKET///////////////////////////////	
function getPantsPleats(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/pants/pleat/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getPantsBeltLoops(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/pants/belt-loops/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
function getPantsCuff(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/pants/cuff/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
function getPantsLegBreak(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/pants/leg-break/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getPantsPleat(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/pants/pleat/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getPantsPockets(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/pants/pockets/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getPantsWaistClosure(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/pants/waist-closure/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}	
//////////////////End Pant////////////////////////////////
function getVestBackStyle(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/vest/back-style/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getVestButtons(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/vest/buttons/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getVestPockets(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/vest/pockets/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getVestType(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/vest/type/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}	
//////////////////End Vest Coat////////////////////////////////

function getLabelabel(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/extras/label/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}	
function getLabelJacket(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/extras/jacket/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}	
function getLabelLining(id)
   {	   
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/extras/lining/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getLabelPants(id)
   {	
   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/extras/pants/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
function getLabelPiping(id)
   {
	   $('#36View').css('display', 'none');
   var image="<img src='img/buildSuit/"+fabricValue+"/extras/piping/"+id+".jpg'  width='100%' />";
  //alert(image);
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}	
//////////////////End Label////////////////////////////////

	  function getPicMeasurement(id)
   {	   
   
   var image="<img src='img/Measurement/"+id+".jpg' width='100%' />";

	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#measurement').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	//}
	}
function run(sel) {

    fabricValue = $("input:radio[name=fabric]:checked").val();
//alert(fabricValue);
}	
	
	
function getFabrics(id)
   {	   
   $('#36View').css('display', 'block');
   
   var image="<img src='img/buildSuit/"+id+".jpg'  width='100%' />";
	$.ajax({
        type:"post",
        url:"",
		async:false,
        data:"",
        success:function(data){//alert(data);
			$('#buildSuit').html(image);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}

function getMyWhishList()
   {	   
   
	$.ajax({
        type:"post",
        url:"myWhishList.php",
		async:false,
        //data:,
        success:function(data){
			$('#content').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
	
   function getPersonalIfo()
   {	   
   
	$.ajax({
        type:"post",
        url:"personalInfo.php",
		async:false,
        //data:,
        success:function(data){
			$('#content').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
	
	   function getMesurement()
   {	   
   
	$.ajax({
        type:"post",
        url:"editMeasurement.php",
		async:false,
        //data:,
        success:function(data){
			$('#content').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
//show data in conformassion form  
$("#sendValues").submit(function(event){
	event.preventDefault();
	var fabric = $("input:radio[name=fabric]:checked").val();
	var type_button = $("input:radio[name=type_button]:checked").val();
	var lapel_type = $("input:radio[name=lapel_type]:checked").val();
	var lapel_size = $("input:radio[name=lapel_size]:checked").val();
	var vent = $("input:radio[name=vent]:checked").val();
	var brest_pockets = $("input:radio[name=brest_pockets]:checked").val();
	var side_pockets = $("input:radio[name=side_pockets]:checked").val();
	var hacking_pockets = $("input:radio[name=hacking_pockets]:checked").val();
	var ticket_pockets = $("input:radio[name=ticket_pockets]:checked").val();
	var button_types = $("input:radio[name=button_types]:checked").val();
	var button_styles = $("input:radio[name=button_styles]:checked").val();
	var stitching = $("input:radio[name=stitching]:checked").val();
	var pleat = $("input:radio[name=pleat]:checked").val();
	var pant_side_pockets = $("input:radio[name=pant_side_pockets]:checked").val();
	var pant_back_pockets = $("input:radio[name=pant_back_pockets]:checked").val();
	var pant_cuff = $("input:radio[name=pant_cuff]:checked").val();
	var leg_break = $("input:radio[name=leg_break]:checked").val();
	var waist_closure = $("input:radio[name=waist_closure]:checked").val();
	var belt_loops = $("input:radio[name=belt_loops]:checked").val();
	var vest_coat_type = $("input:radio[name=vest_coat_type]:checked").val();
	var vest_coat_buttons = $("input:radio[name=vest_coat_buttons]:checked").val();
	var vest_coat_pocket_number = $("input:radio[name=vest_coat_pocket_number]:checked").val();
	var vest_coat_pocket_type = $("input:radio[name=vest_coat_pocket_type]:checked").val();
	var vest_coat_back_style = $("input:radio[name=vest_coat_back_style]:checked").val();
	var label = $("input:radio[name=label]:checked").val();
	var under_collar_fabric = $("input:radio[name=under_collar_fabric]:checked").val();
	var lapel_eyelet_color = $("input:radio[name=lapel_eyelet_color]:checked").val();
	var cuff_type = $("input:radio[name=cuff_type]:checked").val();
	var linig_style = $("input:radio[name=linig_style]:checked").val();
	var piping_saddle_stitch = $("input:radio[name=piping_saddle_stitch]:checked").val();
	var watch_pockets = $("input:radio[name=watch_pockets]:checked").val();
	var suspender_buttons = $("input:radio[name=suspender_buttons]:checked").val();
	  $.ajax({
        type:"post",
        url:"suit-check.php",
		async:false,
        data:"fabric="+fabric+"&type_button="+type_button+"&lapel_type="+lapel_type+"&lapel_size="+lapel_size+"&vent="+vent+"&brest_pockets="+brest_pockets+"&side_pockets="+side_pockets+"&hacking_pockets="+hacking_pockets+"&ticket_pockets="+ticket_pockets+"&button_types="+button_types+"&button_styles="+button_styles+"&stitching="+stitching+"&pleat="+pleat+"&pant_side_pockets="+pant_side_pockets+"&pant_back_pockets="+pant_back_pockets+"&pant_cuff="+pant_cuff+"&leg_break="+leg_break+"&waist_closure="+waist_closure+"&belt_loops="+belt_loops+"&vest_coat_type="+vest_coat_type+"&vest_coat_buttons="+vest_coat_buttons+"&vest_coat_pocket_number="+vest_coat_pocket_number+"&vest_coat_pocket_type="+vest_coat_pocket_type+"&vest_coat_back_style="+vest_coat_back_style+"&label="+label+"&under_collar_fabric="+under_collar_fabric+"&lapel_eyelet_color="+lapel_eyelet_color+"&cuff_type="+cuff_type+"&linig_style="+linig_style+"&piping_saddle_stitch="+piping_saddle_stitch+"&watch_pockets="+watch_pockets+"&suspender_buttons="+suspender_buttons,
        success:function(data){//alert(data);
			
			$('#showResult').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       });
	   
   });
function setFormValues()
{
	var fabric = $("#fabric").val();
	var type_button = $("#type_button").val();
	var lapel_type = $("#lapel_type").val();
	var lapel_size = $("#lapel_size").val();
	var vent = $("#vent").val();
	var brest_pockets = $("#brest_pockets").val();
	var side_pockets = $("#side_pockets").val();
	var hacking_pockets = $("#hacking_pockets").val();
	var ticket_pockets = $("#ticket_pockets").val();
	var button_types = $("#button_types").val();
	var button_styles = $("#button_styles").val();
	var stitching = $("#stitching").val();
	var pleat = $("#pleat").val();
	var pant_side_pockets = $("#pant_side_pockets").val();
	var pant_back_pockets = $("#pant_back_pockets").val();
	var pant_cuff = $("#pant_cuff").val();
	var leg_break = $("#leg_break").val();
	var waist_closure = $("#waist_closure").val();
	var belt_loops = $("#belt_loops").val();
	var vest_coat_type = $("#vest_coat_type").val();
	var vest_coat_buttons = $("#vest_coat_buttons").val();
	var vest_coat_pocket_number = $("#vest_coat_pocket_number").val();
	var vest_coat_pocket_type = $("#vest_coat_pocket_type").val();
	var vest_coat_back_style = $("#vest_coat_back_style").val();
	var label = $("#label").val();
	var under_collar_fabric = $("#under_collar_fabric").val();
	var lapel_eyelet_color = $("#lapel_eyelet_color").val();
	var cuff_type = $("#cuff_type").val();
	var linig_style = $("#linig_style").val();
	var piping_saddle_stitch = $("#piping_saddle_stitch").val();
	var watch_pockets = $("#watch_pockets").val();
	var suspender_buttons = $("#suspender_buttons").val();

	  $.ajax({
        type:"post",
        url:"addBuilSuit.php",
		async:false,
        data:"fabric="+fabric+"&type_button="+type_button+"&lapel_type="+lapel_type+"&lapel_size="+lapel_size+"&vent="+vent+"&brest_pockets="+brest_pockets+"&side_pockets="+side_pockets+"&hacking_pockets="+hacking_pockets+"&ticket_pockets="+ticket_pockets+"&button_types="+button_types+"&button_styles="+button_styles+"&stitching="+stitching+"&pleat="+pleat+"&pant_side_pockets="+pant_side_pockets+"&pant_back_pockets="+pant_back_pockets+"&pant_cuff="+pant_cuff+"&leg_break="+leg_break+"&waist_closure="+waist_closure+"&belt_loops="+belt_loops+"&vest_coat_type="+vest_coat_type+"&vest_coat_buttons="+vest_coat_buttons+"&vest_coat_pocket_number="+vest_coat_pocket_number+"&vest_coat_pocket_type="+vest_coat_pocket_type+"&vest_coat_back_style="+vest_coat_back_style+"&label="+label+"&under_collar_fabric="+under_collar_fabric+"&lapel_eyelet_color="+lapel_eyelet_color+"&cuff_type="+cuff_type+"&linig_style="+linig_style+"&piping_saddle_stitch="+piping_saddle_stitch+"&watch_pockets="+watch_pockets+"&suspender_buttons="+suspender_buttons,
        success:function(data){
			window.location.href='myWhishListPage.php';
          },
		 error: function() {
         alert("error");
        }
       });
}

function checkOutPage()
{
	var fabric = $("#fabric").val();
	var type_button = $("#type_button").val();
	var lapel_type = $("#lapel_type").val();
	var lapel_size = $("#lapel_size").val();
	var vent = $("#vent").val();
	var brest_pockets = $("#brest_pockets").val();
	var side_pockets = $("#side_pockets").val();
	var hacking_pockets = $("#hacking_pockets").val();
	var ticket_pockets = $("#ticket_pockets").val();
	var button_types = $("#button_types").val();
	var button_styles = $("#button_styles").val();
	var stitching = $("#stitching").val();
	var pleat = $("#pleat").val();
	var pant_side_pockets = $("#pant_side_pockets").val();
	var pant_back_pockets = $("#pant_back_pockets").val();
	var pant_cuff = $("#pant_cuff").val();
	var leg_break = $("#leg_break").val();
	var waist_closure = $("#waist_closure").val();
	var belt_loops = $("#belt_loops").val();
	var vest_coat_type = $("#vest_coat_type").val();
	var vest_coat_buttons = $("#vest_coat_buttons").val();
	var vest_coat_pocket_number = $("#vest_coat_pocket_number").val();
	var vest_coat_pocket_type = $("#vest_coat_pocket_type").val();
	var vest_coat_back_style = $("#vest_coat_back_style").val();
	var label = $("#label").val();
	var under_collar_fabric = $("#under_collar_fabric").val();
	var lapel_eyelet_color = $("#lapel_eyelet_color").val();
	var cuff_type = $("#cuff_type").val();
	var linig_style = $("#linig_style").val();
	var piping_saddle_stitch = $("#piping_saddle_stitch").val();
	var watch_pockets = $("#watch_pockets").val();
	var suspender_buttons = $("#suspender_buttons").val();

	  $.ajax({
        type:"post",
        url:"checkoutPage.php",
		async:false,
        data:"fabric="+fabric+"&type_button="+type_button+"&lapel_type="+lapel_type+"&lapel_size="+lapel_size+"&vent="+vent+"&brest_pockets="+brest_pockets+"&side_pockets="+side_pockets+"&hacking_pockets="+hacking_pockets+"&ticket_pockets="+ticket_pockets+"&button_types="+button_types+"&button_styles="+button_styles+"&stitching="+stitching+"&pleat="+pleat+"&pant_side_pockets="+pant_side_pockets+"&pant_back_pockets="+pant_back_pockets+"&pant_cuff="+pant_cuff+"&leg_break="+leg_break+"&waist_closure="+waist_closure+"&belt_loops="+belt_loops+"&vest_coat_type="+vest_coat_type+"&vest_coat_buttons="+vest_coat_buttons+"&vest_coat_pocket_number="+vest_coat_pocket_number+"&vest_coat_pocket_type="+vest_coat_pocket_type+"&vest_coat_back_style="+vest_coat_back_style+"&label="+label+"&under_collar_fabric="+under_collar_fabric+"&lapel_eyelet_color="+lapel_eyelet_color+"&cuff_type="+cuff_type+"&linig_style="+linig_style+"&piping_saddle_stitch="+piping_saddle_stitch+"&watch_pockets="+watch_pockets+"&suspender_buttons="+suspender_buttons,
        success:function(data){// alert(data);
			window.location.href='myWhishListPage.php';
          },
		 error: function() {
         alert("error");
        }
       });
}

function editWishListValues()
{
	var id = $("#id").val();
	var fabric = $("#fabric").val();
	var type_button = $("#type_button").val();
	var lapel_type = $("#lapel_type").val();
	var lapel_size = $("#lapel_size").val();
	var vent = $("#vent").val();
	var brest_pockets = $("#brest_pockets").val();
	var side_pockets = $("#side_pockets").val();
	var hacking_pockets = $("#hacking_pockets").val();
	var ticket_pockets = $("#ticket_pockets").val();
	var button_types = $("#button_types").val();
	var button_styles = $("#button_styles").val();
	var stitching = $("#stitching").val();
	var pleat = $("#pleat").val();
	var pant_side_pockets = $("#pant_side_pockets").val();
	var pant_back_pockets = $("#pant_back_pockets").val();
	var pant_cuff = $("#pant_cuff").val();
	var leg_break = $("#leg_break").val();
	var waist_closure = $("#waist_closure").val();
	var belt_loops = $("#belt_loops").val();
	var vest_coat_type = $("#vest_coat_type").val();
	var vest_coat_buttons = $("#vest_coat_buttons").val();
	var vest_coat_pocket_number = $("#vest_coat_pocket_number").val();
	var vest_coat_pocket_type = $("#vest_coat_pocket_type").val();
	var vest_coat_back_style = $("#vest_coat_back_style").val();
	var label = $("#label").val();
	var under_collar_fabric = $("#under_collar_fabric").val();
	var lapel_eyelet_color = $("#lapel_eyelet_color").val();
	var cuff_type = $("#cuff_type").val();
	var linig_style = $("#linig_style").val();
	var piping_saddle_stitch = $("#piping_saddle_stitch").val();
	var watch_pockets = $("#watch_pockets").val();
	var suspender_buttons = $("#suspender_buttons").val();

	  $.ajax({
        type:"post",
        url:"updateMyWishList.php",
		async:false,
        data:"id="+id+"&fabric="+fabric+"&type_button="+type_button+"&lapel_type="+lapel_type+"&lapel_size="+lapel_size+"&vent="+vent+"&brest_pockets="+brest_pockets+"&side_pockets="+side_pockets+"&hacking_pockets="+hacking_pockets+"&ticket_pockets="+ticket_pockets+"&button_types="+button_types+"&button_styles="+button_styles+"&stitching="+stitching+"&pleat="+pleat+"&pant_side_pockets="+pant_side_pockets+"&pant_back_pockets="+pant_back_pockets+"&pant_cuff="+pant_cuff+"&leg_break="+leg_break+"&waist_closure="+waist_closure+"&belt_loops="+belt_loops+"&vest_coat_type="+vest_coat_type+"&vest_coat_buttons="+vest_coat_buttons+"&vest_coat_pocket_number="+vest_coat_pocket_number+"&vest_coat_pocket_type="+vest_coat_pocket_type+"&vest_coat_back_style="+vest_coat_back_style+"&label="+label+"&under_collar_fabric="+under_collar_fabric+"&lapel_eyelet_color="+lapel_eyelet_color+"&cuff_type="+cuff_type+"&linig_style="+linig_style+"&piping_saddle_stitch="+piping_saddle_stitch+"&watch_pockets="+watch_pockets+"&suspender_buttons="+suspender_buttons,
        success:function(data){//alert(data);
			window.location.href='myWhishListPage.php';
          },
		 error: function() {
         alert("error");
        }
       });
}	