<?

$_REQUEST['func'];

if($_REQUEST['func']=='recovery')
  recovery();

if($_REQUEST['func' == 'login'])
  login();

if($_REQUEST['func'] == 'saveSort')
   saveSort();

if($_REQUEST['func'] == 'display')
  display();

if($_REQUEST['func'] == 'login')
  login();

if($_REQUEST['func'] == 'content')
{
	if($_REQUEST['val'] == 'sub-menu-2-btn1')
 	  sortable2();
	else if($_REQUEST['val'] == 'sub-menu-3-btn1')
	  input();
 	else
	  content($_REQUEST['val']);
}

if($_REQUEST['func'] == 'subMenu')
   subMenu($_REQUEST['val']);  
 
if($_REQUEST['func'] == 'subContent')  
subContent($_REQUEST['val']);
	//sortable();

if($_REQUEST['func'] == 'edit')
   edit();
 
if($_REQUEST['func'] == 'delete')   
   delete();
   
   
function recovery()
{
	sleep(1);
	$arr = array ('content'=>"");
     echo json_encode($arr);
    	
}

function display()
{
	for($i=0; $i<5; $i++)
	{
       $html =$html.'<li class="listWrapper" url="admin.html"><img src="tempimages/display-icon-'.($i+1).'.png"><span class="title">Title </span></li>';	
	}
	
	$arr = array ('content'=>$html);
     echo json_encode($arr);
	
	
}

function input()
{
	 sleep(1);
	$html = $html.'   <div>
   <h1 id="content-title" style="width:50%; float:left">Input</h1>
   <div align="right" style="width:50%; float:left">
   <label class="selects">
   <select>
    <option>Selection</option>
    <option>Selection</option>
    <option>Selection</option>
    <option>Selection</option> 
    </select>
    </label>
   </div>
    </div>
	<div class="clearfloat"></div>
	<div id="content-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibheuismod tincidunt.</div>';
	
	$html = $html.'
	<form>
	<div id="input-container">
	   <div id="input-left">
	      <label class="input-label"> Field 1</label> <input type="text" class="input-field" >
		  <div class="clearfloat"> </div>
		  <label class="input-label"> Field 2 </label> <input type="text" class="input-field">
	      <div class="clearfloat"> </div>
		  <label class="input-label"> Field 3 </label> <input type="text" class="input-field">
	      <div class="clearfloat"> </div>
		  <label class="input-label"> Field 4 </label> <input type="text" class="input-field">
	      <div class="clearfloat"> </div>
		  <label class="input-label"> Field 5 </label> <input type="text" class="input-field">
	      <div class="clearfloat"> </div>
	   </div>
	   
	   <div id="input-right">
	       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibheuismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibheuismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibheuismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibheuismod tincidunt.
	     
	   </div>
	   <div class="clearfloat"> </div>
	   <div class="spacer"></div>
	   <div class="float-right">
	   <input id="input-reset" class="btnGrey" type="button" value="RESET" /> <input id="input-reset" class="btnBlue" type="button" value="SUBMIT" />
	   </div>
	   <div class="clearfloat"> </div>
	</div>
	</form> 
	';
	$arr = array ('content'=>$html);
     echo json_encode($arr);
}


function saveSort()
{
   sleep(1);
    return "";	
	
}
   
function sortable2()
{   
   sleep(1);
	$html = $html.'   <div>
   <h1 id="content-title" style="width:50%; float:left">Sortable</h1>
   <div align="right" style="width:50%; float:left">
   <label class="selects">
   <select>
    <option>Selection</option>
    <option>Selection</option>
    <option>Selection</option>
    <option>Selection</option> 
    </select>
    </label>
   </div>
    </div>
	<div class="clearfloat"></div>
	<div id="content-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibheuismod tincidunt.</div>';
	$html = $html.'<div><input type="button" id="saveMenu" class="btnBlue float-right" value="Save Menu" ></div><div class="clearfloat"></div>';
	$html = $html. '<div id="sortable-container"><ul id="sections">';
	for($i=0; $i<4; $i++)
	{
       $html =$html.'<li class="listWrapper" url="admin.html" id="tab-'.($i+1).'"><img src="tempimages/display-icon-'.($i+1).'.png"><span class="title">Title </span></li>';	
	}
	$html = $html.'</ul></div> <script type="text/javascript">
    $(document).ready(function() {
    $("#sections").sortable({
    update: function(event, ui) {
            $("ul#sections li").each(function(){
                var position = $("ul#sections li").index(this);
                var section = $(this).attr("id");
                $.post("/Sections/Position", { position: position, section: section });
                })
            }
        }).disableSelection();
    });
</script>';
	

	$arr = array ('content'=>$html);
     echo json_encode($arr);
	
	
}   
   
function edit()
{
   $data[] ='<form id="edit" style="padding:5px"><table width="400px"> <tr><td>Item 1</td><td><input type="text" ></td></tr><tr><td>Item 2</td><td><input type="text" ></td></tr><tr><td>Item 3</td><td><input type="text" ></td></tr><tr><td></td><td><input type="submit" value="EDIT" class="btnBlue"   /></td></tr></table></form>';
   
   	echo json_encode($data);
}

function delete()
{
   $data[] = "DELETE CALL BACK HERE...";	
	echo json_encode($data);
}

function login()
{
   sleep(3);
   	$arr = array ('id'=>$id,'pass'=>"0");
   echo json_encode($arr);
	
}

function subContent($id)
{sleep(1);
	$data = '      
       <table width="100%" border="0" cellpadding="5" cellspacing="0">
         <tr>
            <th width="10%" class="firstrow "  >ITEM</td>
            <th width="75%" class = "firstrow">DESCRIPTION</td>
            <th width="15%" class = "firstrow">ACTION</td>
           <tr>
            <tr >
              <td  class = "row firstColumn">Item 1</td>
              <td  class = "row"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim ad minim veniam.</td>
              <td  class = "row" valign="middle" align="center"><a class="edit" href="#data"><img src="images/content-line-edit.png"  /></a> <a class="delete"   onclick="fancyConfirm(\'are you sure?\')"><img src="images/content-line-remove.png" /></a></td>
            <tr>
            <tr>
              <td  class = "row firstColumn">Item 2</td>
              <td  class = "row"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim ad minim veniam.</td>
              <td class = "row" valign="middle" align="center"><a class="edit" href="#data"><img src="images/content-line-edit.png"  /></a> <a class="delete" onclick="fancyConfirm(\'are you sure?\')"><img src="images/content-line-remove.png" /></a></td>
            <tr>
            <tr>
              <td  class = "row firstColumn">Item 3</td>
              <td  class = "row"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim ad minim veniam.</td>
              <td  class = "row" valign="middle" align="center"><a class="edit" href="#data"><img src="images/content-line-edit.png"  /></a> <a class="delete" onclick="fancyConfirm(\'are you sure?\')"><img src="images/content-line-remove.png" /></a></td>
            <tr>
            <tr>
              <td  class = "row firstColumn">Item 4</td>
              <td  class = "row"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim ad minim veniam.</td>
              <td  class = "row" valign="middle" align="center"><a class="edit" href="#data"><img src="images/content-line-edit.png"  /></a> <a class="delete" onclick="fancyConfirm(\'are you sure?\')"><img src="images/content-line-remove.png" /></a></td>
            <tr>
            <tr>
              <td  class = "row firstColumn">Item 5</td>
              <td  class = "row"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim ad minim veniam.</td>
              <td  class = "row" valign="middle" align="center"><a class="edit" href="#data"><img src="images/content-line-edit.png"  /></a> <a class="delete" onclick="fancyConfirm(\'are you sure?\')"><img src="images/content-line-remove.png" /></a></td>
            <tr>
           
       </table>';
	   
	   //echo json_encode($data);
	$arr = array ('content'=>$data);
     echo json_encode($arr);
}


function content($id)
{
	sleep(1);
	
   $data = '
   <div>
   <h1 id="content-title" style="width:50%; float:left">'.$id.'</h1>
   <div align="right" style="width:50%; float:left">
   <label class="selects" >
 
   <select name="URL" id="select-box">
    <option value="index.html">Selection</option>
    <option value="index.html">Selection</option>
    <option value="index.html">Selection</option>
    <option value="index.html">Selection</option> 
	
    </select>
    </label>
   </div>
    </div>
<div class="clearfloat"></div>
 <div id="content-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
euismod tincidunt.</div>
       <div id="content-nav"><li class="content-nav-list" identity="content-nav-1">Item 1</li><li class="content-nav-list" identity="content-nav-2">Item 2</li><li class="content-nav-list" identity="content-nav-3">Item 3</li><li class="content-nav-list" identity="content-nav-4">Item 4</li></div>
       <div id="content-table">

	   
       </div>
	   
	   	<script type="text/javascript">
	   $(".side-menu-list").ready(function() {
		     $(".content-nav-list").first().click();
		   
	   });
	
	   
	   ';
	   
	   //$data="asdadasda";
	   $arr = array ('content'=>$data);
     echo json_encode($arr);
	   //echo json_encode($data);
}

function subMenu($id)
{
	$data = '<h1 id="side-title">'.$id.'</h1>
    <div id="side-instruction">Choose the elements you’d like<br /> to add below:</div> 
    <div id="side-more"><a href="#" class="tip2">Learn More<span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,<br> sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam </span></a></div> 
    <div id="side-menu"> 
      <li class="side-menu-list" identity ="sub-menu-1-'.$id.'" ><img src="images/side-icon1.png" />Manage</li>
      <li class="side-menu-list" identity ="sub-menu-2-'.$id.'"><img src="images/side-icon2.png" />Photo</li>
      <li class="side-menu-list" identity ="sub-menu-3-'.$id.'"><img src="images/side-icon3.png" />Setting</li>
      <li class="side-menu-list" identity ="sub-menu-4-'.$id.'"><img src="images/side-icon4.png" />Store</li>
    </div>
	<script type="text/javascript">
	   $(".side-menu-list").ready(function() {
		 	 $(".side-menu-list").first().click();
		   
	   });
	
	</script>
	';
  	$arr = array ('content'=>$data);
     echo json_encode($arr);
	//echo json_encode($data);
}

?>