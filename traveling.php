<?php
require_once("pageStarter1.php");

$OPIS = "Strona opisująca jedno z hobby Piotra Masarczyk - podróżowanie";
$STYL =<<<EOT

body {
  background-color:	  #f5f5f0;
}

EOT;

$P =  new myPage("Podróżowanie");
$P->SetDescription($OPIS);
$P->AddInnerStyle($STYL);

echo $P->Begin();
echo $P->PageHeader();

	  function createMenu($name){
		  $classes = array("active", "unactive", "dropdown-contents");
		  $buttons = array("1 semestr PWR", "2 semestr PWR", "3 semestr PWR", "4 semestr PWR");
		  $links = array("firstsemester.php", "secondsemester.php", "thirdsemester.php", "fourthsemester.php");
		  $buttons1 = array("Literatura", "Podróżowanie", "Zdrowy tryb życia");
		  $links1 = array("literature.php", "traveling.php", "gym.php");
		  
		  $as="";
		  for($i = 0; $i < count($buttons); $i++){
			  if($name == $buttons[$i]){
				  
			  }
			  else
				$as.=createA("dropdown-contents", $links[$i], $buttons[$i]);
		  }
		  $anav = createA("dropbtn", "javascript:void(0)", "Edukacja");
		  $anav.= createNav("dropdown-content", $as);
		  $li = addLi2("dropdown", $anav);
		  
		  $as1="";
		  for($i = 0; $i < count($buttons1); $i++){
			  if($name == $buttons1[$i]){}
			  else
		       $as1.=createA("dropdown-contents", $links1[$i], $buttons1[$i]);
		  }
		  $anav1 = createA("dropbtn", "javascript:void(0)", "Hobby");
		  $anav1.= createNav("dropdown-content", $as1);
		  $li.= addLi2("dropdown", $anav1);
		  
		  $mainpage = createA("active", "new1.php", "Strona główna");
		  $li.= "<li>".$mainpage."</li>";
		  $ul = createUl("a", $li);
		  
		  $nav = createNav("navbar", $ul);
		  
		  return $nav;
	   }
	   
	   function createUl($class, $txt){ 
		  $s = "<ul class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</ul>\n";
		  return $s;
	  }
	  
	  function createNav($class, $txt){ 
		  $s = "<nav class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</nav>\n";
		  return $s;
	  }
	  
	  function addLi2($class, $txt){ 
		  $s = "<li class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</li>\n";
		  return $s;
	  }
	 
	  function createA($class, $href, $text){
		  $s = "<a class=\"{$class}\" href=\"{$href}\">\n";
		  $s.= " " . $text;
		  $s.= "\n</a>\n";
		  return $s;
	  }
	  function createDiv($class, $txt){ 
			$s = "<div class=\"{$class}\">\n";
			$s.= " " . $txt;
			$s.= "\n</div>\n";
			return $s;
	    }
		
		function createMainHeader($headerclass, $page, $target, $img, $imgclass, $imgalt, $divclass, $name){
		 $s = "<header class=\"{$headerclass}\">\n";
	     $s.= "<a href=\"{$page}\" target=\"{$target}\">\n";
		 $s.= "<img class=\"{$imgclass}\" src=\"{$img}\" alt=\"{$imgalt}\">\n";
		 $s.= "</a>\n";
		 $v = createMenu($name);
		 $s.= createDiv("holder", "<h1>Piotr Masarczyk</h1>
					<h3>Moje przygody z edukacją</h3>
					<h4>Hobby - Podróżowanie</h4>".$v);		
		 $s.= "</header>\n";	
		 return $s;

		}  
		
		function createTitle(){
			$fill = "<h1>Galeria podróży</h1>\n";
			$fill.= "<h3>Poniżej znajduje się mała galeria, w której zobaczyć można zdjęcia z moich podróży. Fotografie umieszczone w niej zostały zrobione w <a class=\"place\" href=\"https://www.google.pl/maps/place/Praga,+Czechy/@50.0595854,14.3255407,11z/data=!3m1!4b1!4m5!3m4!1s0x470b939c0970798b:0x400af0f66164090!8m2!3d50.0755381!4d14.4378005\" target=\"_blank\">Pradze</a>, <a class=\"place\" target=\"_blank\" href=\"https://www.google.pl/maps/place/Stalida,+Grecja/@35.2931605,25.4205516,15z/data=!3m1!4b1!4m5!3m4!1s0x149a64f5ca6d506f:0x7b16004ccc4880f4!8m2!3d35.2926492!4d25.4330368\">Stalida(Kreta)</a>, <a class=\"place\" href=\"https://www.google.pl/maps/place/Polana+Chocho%C5%82owska/@49.2469377,19.7912332,14.5z/data=!4m5!3m4!1s0x47159395d92fcd0b:0xe7f581b6f391979a!8m2!3d49.2377759!4d19.7946596\" target=\"_blank\">Polana Siwa/Polana Chochołowska</a> oraz (...).</h3>\n";
			$fill.= "<p class=\"quote\">Jeśli chcesz podróżować daleko i szybko, podróżuj lekko. Zdejmij całą zawiść, zazdrość, brak przebaczenia, egoizm i strach.</p>\n";
			$fill.= "<p class=\"quote\">Cesare Pavese</p>";
			
			return createDiv("title", $fill);
		}	
		
		function createPictureRow(){
			$column1 = createDiv("picturecolumn", "<a href=\"traveling fotos/góry/horizontal1.jpg\"><img src=\"traveling fotos/góry/horizontal1.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/góry/horizontal2.jpg\"><img src=\"traveling fotos/góry/horizontal2.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/góry/vertical1.jpg\"><img src=\"traveling fotos/góry/vertical1.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/góry/horizontal3.jpg\"><img src=\"traveling fotos/góry/horizontal3.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/góry/horizontal4.jpg\"><img src=\"traveling fotos/góry/horizontal4.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/góry/horizontal5.jpg\"><img src=\"traveling fotos/góry/horizontal5.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/góry/vertical2.jpg\"><img src=\"traveling fotos/góry/vertical2.jpg\" style=\"width:100%\"></a>");
			$column1.= createDiv("picturecolumn", "<a href=\"traveling fotos/grecja/vertical1.jpg\"><img src=\"traveling fotos/grecja/vertical1.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/grecja/horizontal2.jpg\"><img src=\"traveling fotos/grecja/horizontal2.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/grecja/horizontal.jpg\"><img src=\"traveling fotos/grecja/horizontal.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/grecja/horizontal4.jpg\"><img src=\"traveling fotos/grecja/horizontal4.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/grecja/horizontal3.jpg\"><img src=\"traveling fotos/grecja/horizontal3.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/grecja/vertical2.jpg\"><img src=\"traveling fotos/grecja/vertical2.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/grecja/horizontal1.jpg\"><img src=\"traveling fotos/grecja/horizontal1.jpg\" style=\"width:100%\"></a>");	
			$column1.= createDiv("picturecolumn", "<a href=\"traveling fotos/praga/horizontal4.jpg\"><img src=\"traveling fotos/praga/horizontal4.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/praga/vertical1.jpg\"><img src=\"traveling fotos/praga/vertical1.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/praga/horizontal2.jpg\"><img src=\"traveling fotos/praga/horizontal2.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/praga/vertical2.jpg\"><img src=\"traveling fotos/praga/vertical2.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/praga/horizontal3.jpg\"><img src=\"traveling fotos/praga/horizontal3.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/praga/horizontal1.jpg\"><img src=\"traveling fotos/praga/horizontal1.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/praga/horizontal5.jpg\"><img src=\"traveling fotos/praga/horizontal5.jpg\" style=\"width:100%\"></a>");	
			$column1.= createDiv("picturecolumn", "<a href=\"traveling fotos/polanasiwa/vertical1.jpg\"><img src=\"traveling fotos/polanasiwa/vertical1.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/polanasiwa/horizontal1.jpg\"><img src=\"traveling fotos/polanasiwa/horizontal1.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/polanasiwa/horizontal2.jpg\"><img src=\"traveling fotos/polanasiwa/horizontal2.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/polanasiwa/horizontal3.jpg\"><img src=\"traveling fotos/polanasiwa/horizontal3.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/polanasiwa/vertical2.jpg\"><img src=\"traveling fotos/polanasiwa/vertical2.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/polanasiwa/horizontal4.jpg\"><img src=\"traveling fotos/polanasiwa/horizontal4.jpg\" style=\"width:100%\"></a>
				<a href=\"traveling fotos/polanasiwa/horizontal5.jpg\"><img src=\"traveling fotos/polanasiwa/horizontal5.jpg\" style=\"width:100%\"></a>");	
			return createDiv("picturerow", $column1);	
		}
		
		function createPictureColumn($class, $txt){
			$div = createDiv($class, $txt);
			return $div;
		}
		
		echo createMainHeader("header", "new1.php", "_self", "photo.png", "picture", "Avatar", "holder", "Podróżowanie");
		echo createTitle();
		echo createPictureRow();
		
	
echo $P->End();
?>	  