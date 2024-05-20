<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorials</title>
    <link rel="stylesheet" href="tutorial_style.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <img class='logo-gif' src="3d_printing.gif" alt="PrintGif">
        </div>

        <div class="right-links">
            <a href="home.php" > <button class="btn  hbtn">Home</button></a>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="box-1">
                <h1 class='Headline'>Slicer</h1>
                <h2 class='h2-left'>Vad är en slicer?</h2>
                <h3 class='h3-left'>En slicer tar ett 3d objekt, oftast i fromen av en STL fil och konverterar objektet till g-code (instruktionskod) som 3d skrivaren kan läsa och förstå. En slicer ger även användaren möjligheter att ändra 3d skrivarens inställningar för utskriften, till exempel hastighet och temperatur.</h3>
                <h2 class='h2-left'>Vanliga slicers</h2>
                <ul class='ul-left'>
                    <h3 class='h3-left'>
                        <li>Ultimaker Cura</li>
                        <li>PrusaSlicer</li>
                        <li>Simplify3D</li>
                    </h3>
                </ul>
                <h2 class='h2-left'>Inställningar du ofta ändrar</h2>
                <ul class='ul-left'>
                    <h3 class='h3-left'>
                        <li>Layer height</li>
                        <li>Infill</li>
                        <li>Print speed</li>
                        <li>Print temperature</li>
                        <li>Build plate temperature</li>
                        <li>Build plate adhesion</li>
                        <li>Support</li>
                    </h3>
                </ul>
                <hr>
                <img id='tdmodels' src="3dmodels.png" alt="picture of 3dmodels">
                <hr>
                <h2 class='h2-left medm'>Modifiera en 3d modell</h2>
                <h3 class='h3-left'>En bra metod för att skiva ut stora eller avancerade objekt är att dela upp modellen i ett flertal mindre delar. Genom att modifiera 3d modellen kan du göra just det. Du kan också ta bort eller lägga till önskade eller oänskade delar och funktionalitet.</h3>
                <h2 class='h2-left'>Fördelar med uppdelning</h2>
                <ul class='ul-left'>
                    <h3 class='h3-left'>
                        <li>Mindre risk</li>
                        <li>Ökad kvalité</li>
                        <li>Mindre användning av supports</li>
                        <li>Större orienteringsvalmöjligheter</li>
                    </h3>
                </ul>
                <h2 class='h2-left'>Hur gör man?</h2>
                <h3 class='h3-left'>Det första man bör göra är att välja en programvara. I exemplet kommer gratisprogramet Meshmixer att användas för att demonstrera hur man delar upp en modell.</h3>
                <h3 class='h3-left'><a href='https://www.thingiverse.com/thing:2134321' target=”_blank”>Ladda ned exempelmodell här</a></h3>
                <h3 class='h3-left'>Steg 1 (bild 1) <br> Ladda ner och starta Meshmixer. Välj sedan knappen import för att importera valfri fil.</h3>
                <h3 class='h3-left'>Steg 2 (bild 2) <br> Välj sedan knappen "select" upp till vänster och markera delen av modellen som du önskar att ta bort.</h3>
                <h3 class='h3-left'>Steg 3 (bild 3) <br> Håll sedan musen över knappen "Edit" i listan uppe till vänster och välj "Plane Cut" bland alternativen.</h3>
                <h3 class='h3-left'>Steg 4 (bild 4) <br> Placera sedan planet i position och tryck på accept för att dela modellen. Du kan även under "Cut type" välja om du vill ha kvar båda sidorna av planet eller inte</h3>
                <h3 class='h3-left'>Steg 5 (bild 5) <br> Tryck sedan på knappen "Edit" till vänster och välj "Separate Shells" i listan. </h3>
                <h3 class='h3-left'>Steg 6 (bild 6) <br> Välj den delen av modellen som du vill behålla och tryck sedan på "File" uppe till vänster följt av knappen "Export" för att exportera filen.</h3>
                <h3 class='h3-left'>Detta är det lättaste sättet att markera och beskära en modell snabbt. Det finns också mer avancerade och flexibla metoder för att uppnå samma reslutat men som kan vara bra att använda vid beskärning av mer avancerade modeller. Dessa kommer dock inte visas upp här.</h3>
                <hr id='meshmixerLine'>
                <img id='threeDprints' src="3dprints.png" alt="picture of 3dmodels">
                <hr>
                <h1 class='Headline'>Felsökning</h1>
                <h3 class='h3-left'>Ett väldigt vanligt problem som ofta kan förekomma inom 3d-printing är att utskriften inte fastnar eller lossnar från platan under utskriften. Detta problemet kan vara extremt irriterande men det finns några saker du kan göra. Med hjälp av följande steg borde problemet lösas.</h3>
                <h3 class='h3-left'><u>Steg 1</u> <br> Det första som du bör göra är att tvätta av byggplattan med tvål och varmt vatten. Det kan även vara bra att rengöra plattan med lite alkohol för att ta bort de sista fettfläckarna. När man vidrör plattan med händerna kan den bli flottig vilket ofta leder till att utskrifterna inte fastnar. </h3>
                <h3 class='h3-left'><u>Steg 2</u> <br> Det andra du kan göra om problemet inte löser sig är att justera nivån på bädden. Vissa 3d-skrivare kan göra detta automatiskt men på vissa måste man göra det manuellt. Om du skall göra det manuellt gör du det genom att ta ett A4 papper och dra mellan nozzlen och bädden i ena hörnet samtidigt som du justerar höjden med hjälp av skruven på undersidan av bädden. När pappret har lite motstånd när du drar den fram och tillbaka upprepar du processen i alla andra hörn tills bädden är i nivå. Detta kan vara en tidskrävande process, du kan för att kontrollera göra en testutskrift för att se ifall nozzlen är för högt eller lågt över bädden.</h3>
                <h3 class='h3-left'><u>Steg 3</u> <br> Om problemet kvarstår kan du också kontrollera dina slicerinställningar. Specifikt bäddtemperaturen, om du till exempel använder PLA och skriver ut på en glasskiva kan det vara bra att öka temeperaturen på bädden till 60-70 grader för att plasten skall få ännu bättre fäste. Detta gäller inte bara för glasbäddar utan fungerar även på de flesta anda typer.</h3>
                <h3 class='h3-left'><u>Steg 4</u> <br> Om inget av ovanstående hjälper kan det vara en bra idé att kolla om din bädd är böjd. Eftersom det handlar om väldigt små marginaler när det kommer till 3d-printing kan även en lite böjning i mitten påverka extremt mycket. Om du vill vara helt säker på att din bädd inte är böjd kan du använda spegelskivor och skriva ut på. Speglar är bra eftersom de garanterat är raka. Om de inte är det kommer det att synas i spegelbilden.</h3>
                <h3 class='h3-left'><u>Steg 5</u> <br> En annan metod du kan använda för att få dina utskrifter att fastna när att använda ett limmstift eller hårspray och apliceera det på bädden. Detta kommer att ge bädden en klibbig och lite texturerad yta vilket nästan garanterat kommer att få din utskrift att fastna. Oavsett om nivån är perfekt, du har rätt temperatur eller om bädden är lite flottig.</h3>
                <h3 class='h3-left'>Om du förljer ovanstående steg borde problemet med att dina utskrifter inte fastnar nästan garanterat lösa sig.</h3>
                <br>
            </div>

            <div class="box-2">
                <img id='slicer-pic' src="slicers.png" alt="picture of slicericons">
                <h1 class='Headline-2'>3D-modeller</h1>
                <h2 class='h2-right'>Vad är en 3d-modell?</h2>
                <h3 class='h3-right'>Ett digitalt 3d objekt är oftast i fromen av en STL eller OBJ fil</h3>
                <h3 class='h3-right'>Det lättaste sättet att få tag på en 3d objektsfil är att gå in på någon av följande hemsidor och ladda ned valfri design.</h3>
                <ul class='ul-right'>
                    <h3 class='h3-left'>
                        <li>Thingiverse</li>
                        <li>Cults 3D</li>
                        <li>Printables</li>
                    </h3>
                </ul> 
                <h3 class='h3-right'>Det är även möjligt att göra sina egna 3d objekt. Till detta används oftast något av följande program. Vilket program som används beror oftast på vilken typ av design användaren vill skapa.</h3>
                <h2 class='h2-right'>Vanliga program</h2>
                <ul class='ul-right'>
                    <h3 class='h3-left'>
                        <li>Blender</li>
                        <li>Meshmixer</li>
                        <li>Fusion360</li>
                        <li>Onshape</li>
                        <li>Tinkercad</li>
                    </h3>
                </ul>
                <img id='meshmixer' src="Meshmixer1.png" alt="MeshmixerStep1">
                <img id='meshmixer' src="Meshmixer2.png" alt="MeshmixerStep2">
                <img id='meshmixer' src="Meshmixer3.png" alt="MeshmixerStep3">
                <img id='meshmixer' src="Meshmixer4.png" alt="MeshmixerStep4">
                <img id='meshmixer' src="Meshmixer5.png" alt="MeshmixerStep5">
                <img id='meshmixer' class='meshmixer-6'src="Meshmixer6.png" alt="MeshmixerStep6">
                
                <h1 class='Headline-3'>Plast</h1>
                <h3 class='h3-right'>Det första man måste göra innan man börjar skriva ut med sin 3d-skrivare är att välja vilken typ av plast man vill använda. Det finns en enormt stor mängd plast att välja mellan. Här är några sorter.</h3>
                <ul class='ul-right'>
                    <h3 class='h3-left'>
                        <li>PLA</li>
                        <li>ABS</li>
                        <li>PETG</li>
                        <li>TPE</li>
                        <li>Nylon</li>
                    </h3>
                </ul>
                <h3 class='h3-right'>Det finns även olika underkategorier, till exempel finns det PLA med träfibrer vilket gör att utskriften får ett träaktigt utseende. Det finns också PLA med kolfiber, vilket ökar utskriftens hålfasthet.</h3>
                <h3 class='h3-right'>Majoriteten av dagens 3d-skrivare använder plast som har en diameter på 1,75mm. Men det finns även äldre 3d-skrivare som använder plast med en diameter upp mot 3mm.</h3>
                <h3 class='h3-right'>Här kommer information om vad som kännetäcknar några olika typer av plast av plast.</h3>
                <h3 class='h3-right'><u>PLA</u> är den typ av plast som är vanligast och som används mest. Det är lätt att skiva ut med och finns i en nästan oändlig mängd färger och variationer. Vanlig PLA skriver man oftas ut med en nozzle temperatur mellan 190-210 grader, en uppvärmd buildplate behövs igentligen inte för PLA men det kan hjälpa för att få utskiften att fastna bättre på plattan.</h3>
                <h3 class='h3-right'><a href="https://www.123-3d.se/page/allt-om-PLA-filament.html" target=”_blank”> Du kan läsa mer om PLA här. </a></h3>
                <h3 class='h3-right'><u>ABS</u> är en annan typ av plast som också ofta används. Jämfört med PLA är den dock mycket svårare att skriva ut med och sammtidigt få bra resultat. ABS kräver till exempel en högre nozzle temperatur (210-250 grader) och även en väldigt varm buildplate (100-110 grader). Fördelen med att använda ABS är dock att din utskrift tål högre temperaturer och även större påfrestningar. Utskriften får alltså en högre hållfasthet.</h3>
                <h3 class='h3-right'><a href="https://www.123-3d.se/page/allt-om-ABS-filament.html" target=”_blank”>Du kan läsa mer om ABS här.</a></h3>
                <img id='felsokning-pic' src="felsökning.png" alt="picture of errors">
            </div>
        </div>
    </main>
</body>
</html>
