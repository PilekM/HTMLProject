<?php
require_once("pageStarter.php");

$OPIS = "Strona opisująca jedno z hobby Piotra Masarczyk - siłownię";
$STYL =<<<EOT

body {
  background-color:	  #f5f5f0;
}

EOT;


$P =  new myPage("Siłownia");
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
	 
		function addLi3($class, $method, $txt){ 
		  $s = "<li class=\"{$class}\" onclick=\"{$method}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</li>\n";
		  return $s;
		}
	 
		function createHeader($class, $txt){ 
		  $s = "<header class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</header>\n";
		  return $s;
		}
		
		function createArticle($class, $id, $txt){ 
		  $s = "<article id=\"{$id}\" class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</article>\n";
		  return $s;
		}
		
		
	 
		function createSection($class, $txt){ 
		  $s = "<section class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</section>\n";
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
					<h4>Hobby - Zdrowy tryb życia</h4>".$v);		
		 $s.= "</header>\n";	
		 return $s;

		} 
		
		function createInteractiveBox(){
			$s = createDiv("aboutpage", "<h3> Sport i zdrowy tryb życia odgrywają bardzo dużą rolę w moim życiu. Największe znaczenie z nich mają jednak 3 rzeczy. </h3>");
			$li = addLi3("ab1", "gymhide1()", "Bieganie");
			$li.= addLi3("ab2", "gymhide2()", "Siłownia");
			$li.= addLi3("ab3", "gymhide3()", "Zdrowe odżywianie");
			$ul = createUl("menu-v", $li);
			$ul.= createArticle("descript1", "run", "<p> Bieganiem zainteresowałem się już w młodym wieku. Ciekawość do tego sportu zakrzewił we mnie mój najstarszy kuzyn, który uczęszcza na liczne biegi przełajowe, maratony i thriatlony. Podejście do uprawiania tego sportu mamy jednak różne. Moje jest mniej kompetetywne. Dla mnie jest to chwila oderwania od myślenia. Relaks poprzez nieduży wysiłek. Uwielbiam ten czas gdy jestem tylko ja, muzyka z słuchawek w uszach i trasa przede mną.</p>");
			$ul.= createArticle("hide", "gym", "<p> Siłownię poznałem dzięki znajomym, z którymi zapisałem się na zajęcia z Muay Thai. Tam po treningach zaczęliśmy ćwiczyć z małymi ciężarami. Szybko upodobałem sobie taki sposób spędzania czasu wolnego. Jest to dla mnie poniekąd praca nad sobą oraz walka z własnymi słabościami. Czasem ciężko jest utrzymać regularność treningów próbując łączyć je z studiami, ale kto powiedział, że musi być łatwo..</p>");
			$ul.= createArticle("hide", "nutrit", "<p> Udając się na studia z dala od rodzinnego domu byłem przygotowany na sytuację, w której sam sobie zostanę kucharzem, garnkiem i patelnią. Mniej-więcej w tym samym czasie, w którym zainteresowałem się ćwiczeniem na siłowni, zacząłem czytać o zdrowym odżywianiu, tabelach kalorii i okrutnych tłuszczach trans. Prawdę mówiąc głównie staram się nie nadużywać słodyczy oraz cukru, wciągu dnia zjadać zbilansowane kalorycznie posiłki i trzymać się wyznaczonych dla siebie ilości kalorii do spożycia dziennie. Nie można popadać w skrajności.</p>");
			$s.= createSection("flexcontainer", $ul);
			
			return $s;
		}
		
	    echo createMainHeader("header", "new1.php", "_self", "photo.png", "picture", "Avatar", "holder", "Zdrowy tryb życia");
		echo createInteractiveBox();
		
echo $P->End();
?>	 