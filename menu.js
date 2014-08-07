var m_show = 0;
var m_popupid = 0;
var m_color = "FFFFFF";
var m_hcolor = "FFBF74";
var m_scolor = "0E3F6E";
setInterval("out_call()",10);
//var m_selected = "0"

function init()
{
	document.getElementById("menu_list"+m_selected).style.display = "block";
 	document.getElementById("menuid"+m_selected).style.color = m_hcolor;
 	document.getElementById("menuid"+m_selected).style.textDecoration = "none"; 	
}

function over_call(m_id)
 {
 	if(m_popupid > 0)
 	{
 		if(m_popupid != m_selected)
 		{
			//alert(m_id);
			document.getElementById("menu_list"+m_popupid).style.display = "none";
 			document.getElementById("menuid"+m_popupid).style.color = m_color;
			document.getElementById("menuid"+m_popupid).style.textDecoration = "none";			
 		}
 	}
	 
 	m_popupid = m_id;	
	document.getElementById("menu_list"+m_selected).style.display = "none";
	document.getElementById("menu_list"+m_popupid).style.display = "block";
 	document.getElementById("menuid"+m_popupid).style.color = m_hcolor;
 	document.getElementById("menuid"+m_popupid).style.textDecoration = "none"; 	
 	m_show = 1;
	
 }

function out_call()
 {
 	if(m_show == 0 && m_popupid > 0)
 	{
 		if(m_popupid != m_selected)
 		{
			document.getElementById("menu_list"+m_selected).style.display = "block";
	 		document.getElementById("menu_list"+m_popupid).style.display = "none";
			
			document.getElementById("menuid"+m_popupid).style.color = m_color; 			
 		}
 		document.getElementById("menuid"+m_popupid).style.textDecoration= "none";
 		m_popupid = 0;
 	}
 }

function open_link(m_obj)
{
	var Stamp = new Date();
	var Hours = Stamp.getHours();
	var Mins = Stamp.getMinutes();

	if(m_obj=="1")
		window.location = "http://moneybhai.moneycontrol.com/india_smartinvestor_game/index.php";
	else if(m_obj=="2")
		window.location = "http://moneybhai.moneycontrol.com/india/stockmarket/moneybhaigame/"+Hours+"/"+Mins+"/portfolio";
	else if(m_obj=="3")
		window.location = "http://moneybhai.moneycontrol.com/india/stockmarket/moneybhaigame/"+Hours+"/"+Mins+"/pendingordersstocks";
	else if(m_obj=="4")
		window.location = "http://moneybhai.moneycontrol.com/india/stockmarket/moneybhaigame/"+Hours+"/"+Mins+"/myspace/";		
	else if(m_obj=="5")
		window.location = "http://moneybhai.moneycontrol.com/india/stockmarket/moneybhaigame/"+Hours+"/"+Mins+"/leading_players";
	else if(m_obj=="6")
		window.location = "http://moneybhai.moneycontrol.com/india/stockmarket/moneybhaigame/"+Hours+"/"+Mins+"/messageboard";
	else if(m_obj=="7")
		window.location = "http://moneybhai.moneycontrol.com/india/stockmarket/moneybhaigame/"+Hours+"/"+Mins+"/howtoplay";	
	
		
	/*if(m_obj=="1")
		window.location = "http://moneybhai.moneycontrol.com/india_smartinvestor_game/index.php";
	else if(m_obj=="2")
		window.location = "http://moneybhai.moneycontrol.com/india/stockmarket/moneybhaigame/14/27/portfolio";
	else if(m_obj=="3")
		window.location = "http://moneybhai.moneycontrol.com/india_smartinvestor_game/coming_soon.php?id=3";
	else if(m_obj=="4")
		window.location = "http://moneybhai.moneycontrol.com/india_smartinvestor_game/coming_soon.php?id=4";		
	else if(m_obj=="5")
		window.location = "http://moneybhai.moneycontrol.com/india_smartinvestor_game/coming_soon.php?id=5";
	else if(m_obj=="6")
		window.location = "http://moneybhai.moneycontrol.com/india_smartinvestor_game/coming_soon.php?id=6";
	else if(m_obj=="7")
		window.location = "http://moneybhai.moneycontrol.com/india_smartinvestor_game/howtoplay.php";	*/
	
}