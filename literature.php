<?php
require_once("pageStarter.php");

$OPIS = "Strona opisująca jedno z hobby Piotra Masarczyk - literaturę";
$STYL =<<<EOT

body {
  background-color:	  #f5f5f0;
}

EOT;

$P =  new myPage("Literatura");
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
	   
	   function createMainHeader($headerclass, $page, $target, $img, $imgclass, $imgalt, $divclass, $name){
		 $s = "<header class=\"{$headerclass}\">\n";
	     $s.= "<a href=\"{$page}\" target=\"{$target}\">\n";
		 $s.= "<img class=\"{$imgclass}\" src=\"{$img}\" alt=\"{$imgalt}\">\n";
		 $s.= "</a>\n";
		 $v = createMenu($name);
		 $s.= createDiv("holder", "<h1>Piotr Masarczyk</h1>
					<h3>Moje przygody z edukacją</h3>
					<h4>Hobby - Literatura</h4>".$v, "");		
		 $s.= "</header>\n";	
		 return $s;

		}  
	   
	   function createUl($class, $txt){ 
		  $s = "<ul class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</ul>\n";
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
	 
		function createImg($class, $alt, $src, $method){ 
			$s = "<img class=\"{$class}\" onclick=\"{$method}\" alt=\"{$alt}\" src=\"{$src}\"></img>\n";
			return $s;
		}
		
		function createDiv($class, $txt, $id){ 
			$s = "<div id=\"{$id}\" class=\"{$class}\">\n";
			$s.= " " . $txt;
			$s.= "\n</div>\n";
			return $s;
		}
		
		function createNav($class, $txt){ 
			$s = "<nav class=\"{$class}\">\n";
			$s.= " " . $txt;
			$s.= "\n</nav>\n";
			return $s;
		}
		
		function createSection($class, $txt, $id){ 
		  $s = "<section id=\"{$id}\" class=\"{$class}\">\n";
		  $s.= " " . $txt;
		  $s.= "\n</section>\n";
		  return $s;
		}
		
		function createLibrary(){
		  $div = createDiv("subjectname2", "<h1 class=\"center\">Przeczytane książki</h1>", "");
		  $imgs = createImg("", "Okładka książki", "book/drach.jpg", "hide1()");
		  $imgs.= createImg("", "Okładka książki", "book/krol.jpg", "hide2()");
		  $imgs.= createImg("", "Okładka książki", "book/morfina.jpg", "hide3()");
		  $imgs.= createImg("", "Okładka książki", "book/sztuka.jpg", "hide4()");
		  $nav = createNav("books", $imgs); 
		  $div.= $nav;
		  $sect = createSection("", $div, "read");
		  	
			return $sect;
		}
		
		function addBook($id, $title, $author, $grade, $description){
			$fill = "<h3> Tytuł:"." ".$title."</h3>\n";
			$fill.= "<h4> Autor:"." ".$author."</h4>\n";
			$fill.= "<h5> Moja ocena:"." ".$grade."/10 </h5>\n";
			$fill.= "<p class=\"justify\">".$description."</p>\n";
			
			$div = createDiv("hide", $fill, $id);
			return $div;
		}
		
		function createCurrBook($title, $author, $description){
			$s = createImg("bookcover", "Okładka książki", "book/geek.jpg", "");
			$s.= "<h3>Tytuł: ".$title."</h3>\n";
			$s.= "<h4>Autor: ".$author."</h4>\n";
			$s.= "<h5 onclick=\"hide()\">Opis znajdujący się na rewersie książki</h5>\n";
			$s.= "<button id=\"hs\" onclick=\"hide()\">Ukryj</button>\n";
			$s.= "<p id=\"descript\" class=\"show\">".$description."</p>\n";
			
			return createSection("currentbook", $s, "");
			
		}
		
		echo createMainHeader("header", "new1.php", "_self", "photo.png", "picture", "Avatar", "holder", "Literatura");
		echo createDiv("subjectname", "<h1 class=\"center\"> Moja biblioteka </h1>", "");
		echo createDiv("subjectname2", "<h4 class=\"center\">Tutaj znajduję się kilka tytułów wraz z autorem, które aktualnie czytam lub które skończyłem czytać.</h4>", "");
		echo createDiv("subjectname3", "<h1 class=\"center\">Obecnie czytam</h1>", "");
		echo createCurrBook("Gotowanie dla geeków", "Jeff Potter", "Choć trudno to sobie wyobrazić, w życiu każdego programisty, administratora, webmastera czy hakera przychodzi w końcu taka chwila, kiedy musi wyjść zza ukochanego monitora… i najzwyczajniej w świecie coś zjeść! W końcu informatyk też człowiek i nie tylko głód wiedzy zagląda mu w oczy! Niestety nikt nie wymyślił jeszcze sposobu na to, by ściągnąć z sieci aplikację z technikami kuchennymi i załadować ją bezpośrednio do komórek pamięci. Jeśli więc błąd w programie włącza w Tobie automatyczny mechanizm rozwiązywania pasjonującej zagadki, a w kuchni kończy się poważną awarią skutkującą zamówieniem pizzy - pora spojrzeć na gotowanie jak na nowy, pasjonujący algorytm. Wbrew pozorom tutaj także ciąg jasno zdefiniowanych czynności daje oczekiwany wynik, a nauka gotowania podobnie jak zgłębianie linijek kodu nierozerwalnie łączy się z dociekliwością, zadawaniem pytań i znajdowaniem źródeł informacji. Chyba coś o tym wiesz, prawda?

Trzymasz w rękach coś więcej niż zwykłą książkę kucharską. Oto pierwsza publikacja dla informatyków, która zamiast zagonić Cię do klawiatury, wypędzi Cię zza niej i zainspiruje do smakowitych kulinarnych eksperymentów! Otrzymasz przy tym solidną porcję sycącej umysł i żołądek wiedzy, m.in. na temat niezbędnych w kuchni narzędzi, składników, czasu i temperatury gotowania poszczególnych produktów czy fizjologii smaku i zapachu. Autor i pasjonat sztuki kulinarnej, Jeff Potter, udzieli Ci mnóstwa praktycznych wskazówek i zasypie świetnymi przepisami o różnym stopniu trudności — od tych słodkich i dziecinnie prostych po niezwykle wyrafinowane. Na kartach książki znajdziesz także mnóstwo podsycających Twoją kreatywność wywiadów oraz rozmów z naukowcami, technologami żywienia, mistrzami kulinarnymi i autorami kuchennych blogów. Wszystko po to, aby szybko i przyjemnie przybliżyć Cię do realizacji ambitnego zadania, przygotowania smacznego i zdrowego posiłku!");
		echo createLibrary();
		echo addBook("drach", "Drach", "Szczepan Twardoch", "7", "Lektura nie jest specjalnie łatwa. Pisarz pokazał nam losy kilku bohaterów, rodziny, rozmieszczone jednak na planie praktycznie stu lat; ogromna większość tego, co poznamy dzieje się między rokiem 1914 a 2014.. Twardoch pisze głównie o tym, że historia i ludzkie życie jest chaosem oraz że wszyscy trafimy ostatecznie do ziemi. Trochę za mało jak na 400 stron, nawet jeśli czytało się je z przyjemnością (pod koniec z mniejszą).");
		echo addBook("krol", "Król", "Szczepan Twardoch", "8.5", "W powieści \"Król\", podobnie jak w \"Morfinie\", nie ma pozytywnych bohaterów. A jednak, co dziwne i zaskakujące, nie do wszystkich postaci czuje się antypatię. Mało tego, tytułowemu bohaterowi nieraz się kibicuje. Stworzenie takich kreacji na pewno wymaga od autora talentu i pomysłowości - należy się za to duży plus. Książka „Król” Szczepana Twardocha, to opowieść o warszawskim Nalewkach, Woli i eleganckim Śródmieściu. O Żydach i Polakach tuż przed II wojną. Warszawie, gdzie różne religijne i polityczne konflikty coraz bardziej narastały. Gdzie szemrane interesy wspólnie zawierali Polacy z Żydami. Pokazany świat w którym liczy się tylko siła pięści i rewolweru. Liczne zwroty akcji dodają kolorytu tej książce.");
		echo addBook("morfina", "Morfina", "Szczepan Twardoch", "7.5", "Moje pierwsze spotkanie z twórczością Szczepana Twardocha oraz pierwsze z dzieł (spośród umieszczonych tutaj), które ów autor napisał. Od początku do końca historię Konstantego Willemanna czytałem z zaciekawieniem. Byłem zaskoczony z jaką łatwością autor posługuje się brutalnością, erotyką i bezpośredniością przy tworzeniu świata przedstawionego w powieści. Po ukończeniu tej pozycji od razu sięgnąłem po kolejne dzieło Szczepana Twardocha, zafascynował mnie jego styl pisania.");
		echo addBook("sztuka", "Sztuka życia dla mężczyzn", "Szczepan Twardoch", "6", "Jak wielu Czytelników, zauważyłem, że książka jest nierówna, niektóre fragmenty czyta się z uśmiechem na ustach i zainteresowaniem, inne męczą i zmuszają do sprawdzenia, czy daleko jeszcze do końca rozdziału. Niektóre porady rzeczywiście trafne i gdyby mężczyźni się do nich stosowali, nasze życie mogłoby wyglądać trochę lepiej, a przynajmniej ładniej... Autorzy wychodzą momentami na bufonów i zdają się zapominać, że nie da się całego życia spędzić pod krawatem i z poszetką...");

echo $P->End();
?>	 