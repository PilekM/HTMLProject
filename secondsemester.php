<?php
require_once("pageStarter.php");

$OPIS = "Strona przedstawiająca przedmioty z jakimi zmagał się Piotr Masarczyk w 2 semestrze";
$STYL =<<<EOT

body {
  background-color:	  #f5f5f0;
}
EOT;


$P =  new myPage("2 semestr");
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
	   
	   function createA($class, $href, $text){
		  $s = "<a class=\"{$class}\" href=\"{$href}\">\n";
		  $s.= " " . $text;
		  $s.= "\n</a>\n";
		  return $s;
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
	 
		function createOl($class, $txt){ 
		  $s = "<ol class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</ol>\n";
		  return $s;
		}
	  
		function addLi2($class, $txt){ 
		  $s = "<li class=\"{$class}\">\n";
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
					<h4>2 semestr Informatyka WPPT Politechnika Wrocławska</h4>".$v);		
		 $s.= "</header>\n";	
		 return $s;

		}
		
		function createAboutSubject($subjectname, $did_learn_array, $to_learn_array){
			$s = createDiv("subjectname", "<h2>{$subjectname}</h2>");
			$u = createHeader("smalltitle", "<h2 class=\"smalltitletitle\">Czego się nauczyłem</h2>");
			$li="";
			for($i = 0; $i < count($did_learn_array); $i = $i + 1){
				$li.=addLi2("", $did_learn_array[$i]);	
			}	
			$ol = createOl("a", $li);
			$u.= createDiv("borderek1", $ol);
			$t = createSection("minibox", $u);
			$t1 = createHeader("smalltitle2", "<h2 class=\"smalltitletitle\">Co warto pogłębić</h2>");
			$li2 = "";
			for($i = 0; $i < count($to_learn_array); $i = $i + 1){
				$li2.=addLi2("", $to_learn_array[$i]);	
			}
			$ol2 = createOl("a", $li2);
			$t1.= createDiv("borderek2", $ol2);
			$t.= createSection("minibox", $t1);
			$s.= createDiv("boxforminibox", $t);
			
			return $s;
			
		}
		
		echo createMainHeader("header", "new1.php", "_self", "photo.png", "picture", "Avatar", "holder", "2 semestr PWR");
		echo createAboutSubject("Analiza matematyczna 2", array("Ładnie liczyć całki", "Obliczać granice", "Prawidłowe zastosowanie d'lopitala"), array("Fajna rzecz 1", "Fajna rzecz 2"));
		echo createAboutSubject("Algebra abstrakcyjna i kodowanie", array("Ładnie liczyć całki", "Obliczać granice", "Prawidłowe zastosowanie d'lopitala"), array("Fajna rzecz 1", "Fajna rzecz 2"));
		echo createAboutSubject("Kurs programowania", array("Ładnie liczyć całki", "Obliczać granice", "Prawidłowe zastosowanie d'lopitala"), array("Fajna rzecz 1", "Fajna rzecz 2"));
		echo createAboutSubject("Matematyka dyskretna", array("Ładnie liczyć całki", "Obliczać granice", "Prawidłowe zastosowanie d'lopitala"), array("Fajna rzecz 1", "Fajna rzecz 2"));
		echo createAboutSubject("Problemy prawne informatyki", array("Ładnie liczyć całki", "Obliczać granice", "Prawidłowe zastosowanie d'lopitala"), array("Fajna rzecz 1", "Fajna rzecz 2"));
		echo createAboutSubject("Fizyka", array("Ładnie liczyć całki", "Obliczać granice", "Prawidłowe zastosowanie d'lopitala"), array("Fajna rzecz 1", "Fajna rzecz 2"));

echo $P->End();
?>	 