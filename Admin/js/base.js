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
			if(status==0){
				window.location.href = 'viewUser.php?msg=5';	
				}else{
			window.location.href = 'viewUser.php?msg=4';
				}
          },
		 error: function() {
         alert("error");
        }
       });
	 
}

function changeOrderStatus(id){	
	 if($("#userStatus"+id).is(":checked")==false){
		 var status='1';	 
	 }else{
		 var status='0';
	}
	//alert(status);
	$.ajax({
        type:"post",
        url:"updateOrderStatus.php",
		async:false,
        data:"id="+id+"&status="+status,
        success:function(data){//alert(data);
			if(status==1){
				window.location.href = 'viewOrders.php?msg=5';	
				}else{
			window.location.href = 'viewOrders.php?msg=4';
				}
          },
		 error: function() {
         alert("error");
        }
       });
	 
}

function changeAppointmentStatus(id){	
	 if($("#userStatus"+id).is(":checked")==false){
		 var status='0';
	 }else{
		 var status='1';
	}
	$.ajax({
        type:"post",
        url:"updateAppointmentStatus.php",
		async:false,
        data:"id="+id+"&status="+status,
        success:function(data){
			if(status==0){
				window.location.href = 'ViewAppointments.php?msg=2';	
				}else{
			window.location.href = 'ViewAppointments.php?msg=4';
				}
          },
		 error: function() {
         alert("error");
        }
       });
	 
}

	function cancelUpdate(){
	   
	   window.location.href='viewUser.php';
	   
	   }
	   
	   
	function cancelDetailOrder(){
	   
	   window.location.href='viewOrders.php';
	   
	}
	
	function cancelDetailAppointment(){
	   
	   window.location.href='viewAppointments.php';
	   
	}
   
   // delete user
   function deleteUser(id)
   {
	   var del=confirm("Are you sure you want to delete this user?");
	   if (del==true){
   //alert ("record deleted")
	//alert(id); 
	$.ajax({
        type:"post",
        url:"deleteUser.php",
		async:false,
        data:"id="+id,
        success:function(data){
			window.location.href = 'viewUser.php?msg=2';
          },
		 error: function() {
         alert("error");
        }
       });
   }
	}
	
	   // delete user
   function deleteOrder(id)
   {
	    var del=confirm("Are you sure you want to delete this Order?");
	   if (del==true){
	$.ajax({
        type:"post",
        url:"deleteOrder.php",
		async:false,
        data:"id="+id,
        success:function(data){//alert(data);
			window.location.href = 'ViewOrders.php?msg=2';
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	}
	//delete appointment
	   function deleteAppointment(id)
   {
	    var del=confirm("Are you sure you want to delete this Appointment?");
	   if (del==true){
	$.ajax({
        type:"post",
        url:"deleteAppointment.php",
		async:false,
        data:"id="+id,
        success:function(data){//alert(data);
			window.location.href = 'ViewAppointments.php?msg=3';
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
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
	
		function editOrder(id)
   {	   
 
	$.ajax({
        type:"post",
        url:"editOrder.php",
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
        url:"viewDetailOrder.php",
		async:false,
        data:"id="+id,
        success:function(data){//alert(data);
			$('#page-wrapper').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	function viewAppointment(id)
   {	   
 
	$.ajax({
        type:"post",
        url:"viewDetailAppointment.php",
		async:false,
        data:"id="+id,
        success:function(data){//alert(data);
			$('#page-wrapper').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}
	
    function newUser()
   {	   
   
	$.ajax({
        type:"post",
        url:"createUser.php",
		async:false,
        //data:,
        success:function(data){
			$('#page-wrapper').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}

	function newOrder()
   {	   
   
	$.ajax({
        type:"post",
        url:"createUser.php",
		async:false,
        //data:,
        success:function(data){
			$('#page-wrapper').replaceWith(data);
          },
		 error: function() {
         alert("error");
        }
       }); 
	}	
	
function setFormValues()
{
	var uid = $("#uid").val();
	var fabric = $("#fabric").val();
	var deliver_date = $("#deliver_date").val();
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
	var vest_coat_side_pockets = $("#vest_coat_side_pockets").val();
	var vest_coat_back_pockets = $("#vest_coat_back_pockets").val();
	var vest_coat_cuff = $("#vest_coat_cuff").val();
	var vest_coat_leg_break = $("#vest_coat_leg_break").val();
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
        url:"updateOrder.php",
		async:false,
        data:"fabric="+fabric+"&type_button="+type_button+"&lapel_type="+lapel_type+"&lapel_size="+lapel_size+"&vent="+vent+"&brest_pockets="+brest_pockets+"&side_pockets="+side_pockets+"&hacking_pockets="+hacking_pockets+"&ticket_pockets="+ticket_pockets+"&button_types="+button_types+"&button_styles="+button_styles+"&stitching="+stitching+"&pleat="+pleat+"&pant_side_pockets="+pant_side_pockets+"&pant_back_pockets="+pant_back_pockets+"&pant_cuff="+pant_cuff+"&leg_break="+leg_break+"&waist_closure="+waist_closure+"&belt_loops="+belt_loops+"&vest_coat_type="+vest_coat_type+"&vest_coat_side_pockets="+vest_coat_side_pockets+"&vest_coat_back_pockets="+vest_coat_back_pockets+"&vest_coat_cuff="+vest_coat_cuff+"&vest_coat_leg_break="+vest_coat_leg_break+"&label="+label+"&under_collar_fabric="+under_collar_fabric+"&lapel_eyelet_color="+lapel_eyelet_color+"&cuff_type="+cuff_type+"&linig_style="+linig_style+"&piping_saddle_stitch="+piping_saddle_stitch+"&watch_pockets="+watch_pockets+"&suspender_buttons="+suspender_buttons+"&uid="+uid,
        success:function(data){ //alert(data);
			window.location.href='viewOrder.php';
          },
		 error: function() {
         alert("error");
        }
       });
}
	