<?php

echo "<div class='sidebar_left'>"
	
$links = array("Lien 1" => "/page-1", "Lien 2" => "/page-2", "Lien 3" => "/page-3");
foreach($links as $title => $link){
	echo "<a title='".$title."' href='".$link."'>".$title."</a>";
}
echo "</div>"