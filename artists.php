<!DOCTYPE html>


<head>

    <title>browse artists</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" href="media/ArtistIcon.png">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">

</head>

<body>

<?php include 'components/header.php' ?>

        <div class="mainContainer bordersnotop paperBackground">

            <!-- <div class="column">

                <h1>artists with us</h1>

                <div class="columnContentRow">

                    <img class="artistImage bordersall" src="media/artist1.jpg" alt="Artist 1">
                    <img class="artistSeparator look" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Lee Luli (이루리) is a singer-songwriter from South Korea who performs internationally under the name Luli Lee (previously Lulileela). She is also the bassist in Bye Bye Badman, Seoulmoon, and LEEXLEE.</p>
    
                </div> -->

                class Artist{
                    ArtistID;
                    $ArtistName;
                    $ArtistDesc;
                    $ArtistImagePath;

                    function echoArtists(){
                        echo "<div class="column">";
                        echo "<img class="artistSeparator look" src="media/artist separator.png" alt="separator">";
                        echo "
                    <img class="artistSeparator look" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Lee Luli (이루리) is a singer-songwriter from South Korea who performs internationally under the name Luli Lee (previously Lulileela). She is also the bassist in Bye Bye Badman, Seoulmoon, and LEEXLEE.</p>";
                        echo "</div>";

                        
                    }
                
                Artist LeeLuli=new Artist("Lee Luli","Lee Luli (이루리) is a singer-songwriter from South Korea who performs internationally under the name Luli Lee (previously Lulileela). She is also the bassist in Bye Bye Badman, Seoulmoon, and LEEXLEE","media/artist1.jpg");
                LeeLuli.echoArtist();
                
<!--     
                <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist2.jpeg" alt="Artist 2">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Claire Elise Boucher, born March 17, 1988, known professionally as Grimes, is a Canadian musician, singer, songwriter, record producer, music video director, and visual artist. Her music incorporates elements of varied styles and genres including art pop, synth-pop, dream pop, R&B, electronic music, and hip hop.</p>
    
                </div>
     -->                
                        echo "<div class="columnContentRow">";
                        echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                        echo "<p class="artistText">Claire Elise Boucher, born March 17, 1988, known professionally as Grimes, is a Canadian musician, singer, songwriter, record producer, music video director, and visual artist. Her music incorporates elements of varied styles and genres including art pop, synth-pop, dream pop, R&B, electronic music, and hip hop.</p>";
                        echo " </div>";  

                      Artist ClaireEliseBoucher=new Artist('Claire Elise Boucher','Claire Elise Boucher, born March 17, 1988, known professionally as Grimes, is a Canadian musician, singer, songwriter, record producer, music video director, and visual artist. Her music incorporates elements of varied styles and genres including art pop, synth-pop, dream pop, R&B, electronic music, and hip hop','media/artist2.jpg');
                      ClaireEliseBoucher.echoArtist();

                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist3.jpg" alt="Artist 3">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Myra Ellen "Tori" Amos, born August 22, 1963, is an American singer-songwriter and pianist. She is a classically trained musician with a mezzo-soprano vocal range. Having already begun composing instrumental pieces on piano, Amos won a full scholarship to the Peabody Institute at Johns Hopkins University at the age of five, the youngest person ever to have been admitted. </p>
    
                </div> -->

                        echo "<div class="columnContentRow">";
                        echo "<img class="artistImage bordersall" src="media/artist3.jpg" alt="Artist 3">";
                        echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                        echo "<p class="artistText">Myra Ellen "Tori" Amos, born August 22, 1963, is an American singer-songwriter and pianist. She is a classically trained musician with a mezzo-soprano vocal range. Having already begun composing instrumental pieces on piano, Amos won a full scholarship to the Peabody Institute at Johns Hopkins University at the age of five, the youngest person ever to have been admitted. </p>";
                        echo "</div>"

                        Artist MyraEllenToriAmos=new Artist('Myra Ellen "Tori" Amos','Myra Ellen "Tori" Amos, born August 22, 1963, is an American singer-songwriter and pianist. She is a classically trained musician with a mezzo-soprano vocal range. Having already begun composing instrumental pieces on piano, Amos won a full scholarship to the Peabody Institute at Johns Hopkins University at the age of five, the youngest person ever to have been admitted','media/artist3.jpg');
                        MyraEllenToriAmos.echoArtist();
    
                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist4.png" alt="Artist 4">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Elizabeth Eden Harris, born May 31, 1997, known professionally as Cupcakke (often stylized as cupcakKe), is an American rapper, singer and songwriter from Chicago, Illinois. She is known for her hyper-sexualized, brazen, and often comical persona and music, and has also included themes such as LGBT and female empowerment in her music.</p>
    
                </div> -->
                        

                    echo "<div class="columnContentRow">";
                    echo "<img class="artistImage bordersall" src="media/artist4.png" alt="Artist 4">";
                    echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                    echo "<p class="artistText">Elizabeth Eden Harris, born May 31, 1997, known professionally as Cupcakke (often stylized as cupcakKe), is an American rapper, singer and songwriter from Chicago, Illinois. She is known for her hyper-sexualized, brazen, and often comical persona and music, and has also included themes such as LGBT and female empowerment in her music.</p>";
                    echo "</div>";"
    
                    Artist ElizabethEdenHarris=new Artist('Elizabeth Eden Harris','Elizabeth Eden Harris, born May 31, 1997, known professionally as Cupcakke (often stylized as cupcakKe), is an American rapper, singer and songwriter from Chicago, Illinois. She is known for her hyper-sexualized, brazen, and often comical persona and music, and has also included themes such as LGBT and female empowerment in her music','media/artist4.jpg');
                    ElizabethEdenHarris.echoArtist();

                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist5.pjg.jpg" alt="Artist 5">  too lazy to rename this 
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Aseul (아슬; formerly known as Yukari (유카리)) is a South Korean singer and musician. She officially made her debut on December 20, 2012 with the digital EP Echo under the name Yukari.Her latest release, Slow Dance, garnered critical acclaim.</p>
                </div> -->

                        echo "<div class="columnContentRow">";
                        echo "<img class="artistImage bordersall" src="media/artist5.pjg.jpg" alt="Artist 5">";
                        echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                        echo "<p class="artistText">Aseul (아슬; formerly known as Yukari (유카리)) is a South Korean singer and musician. She officially made her debut on December 20, 2012 with the digital EP Echo under the name Yukari.Her latest release, Slow Dance, garnered critical acclaim.</p>";
                        echo "</div>";
    
                    Artist Aseul=new Artist('Aseul','Aseul (아슬; formerly known as Yukari (유카리)) is a South Korean singer and musician. She officially made her debut on December 20, 2012 with the digital EP Echo under the name Yukari.Her latest release, Slow Dance, garnered critical acclaim','media/artist5.jpg');
                    Aseul.echoArtist()

                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist6.jpg" alt="Artist 6">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Ana is an American ambient artist based in Los Angeles. Born & raised in the Bay Area to immigrant parents, Ana's love for music and singing began through her mother's CD collection of 80's/90's R&B divas. Raised in the Catholic church, she became a devout choir nerd and found any opportunity to sing.</p>
    
                </div> -->

                    echo "<div class="columnContentRow">";
                    echo "<img class="artistImage bordersall" src="media/artist6.jpg" alt="Artist 6">";
                    echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                    echo "<p class="artistText">Ana is an American ambient artist based in Los Angeles. Born & raised in the Bay Area to immigrant parents, Ana's love for music and singing began through her mother's CD collection of 80's/90's R&B divas. Raised in the Catholic church, she became a devout choir nerd and found any opportunity to sing.</p>";
                    echo "</div>";

                    Artist Ana=new Artist(Ana','Ana is an American ambient artist based in Los Angeles. Born & raised in the Bay Area to immigrant parents, Anas love for music and singing began through her mothers CD collection of 80s/90s R&B divas. Raised in the Catholic church, she became a devout choir nerd and found any opportunity to sing','media/artist6.jpg');
                    Ana.echoArtist();
    
                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist7.jpg" alt="Artist 7">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Natalie Laura Mering, known professionally as Weyes Blood, is an American singer, songwriter, and musician. She was primarily raised in Doylestown, Pennsylvania. She has been performing her own material under variations of the name Weyes Blood since 2003.</p>
    
                </div> -->

                 echo "<div class="columnContentRow">";"
                 echo "<img class="artistImage bordersall" src="media/artist7.jpg" alt="Artist 7">";
                 echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                 echo "<p class="artistText">Natalie Laura Mering, known professionally as Weyes Blood, is an American singer, songwriter, and musician. She was primarily raised in Doylestown, Pennsylvania. She has been performing her own material under variations of the name Weyes Blood since 2003.</p>";
                 echo "</div>";

                 Artist NatalieLauraMering=new Artist('Natalie Laura Mering','Natalie Laura Mering, known professionally as Weyes Blood, is an American singer, songwriter, and musician. She was primarily raised in Doylestown, Pennsylvania. She has been performing her own material under variations of the name Weyes Blood since 2003','media/artist7.jpg');
                 NatalieLauraMering.echoArtist();
                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist8.jpg" alt="Artist 8">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Frank Ocean (born October 28, 1987) is an American singer, songwriter, record producer, photographer, and visual artist. He is recognized for his idiosyncratic musical style, introspective and elliptical songwriting, unconventional production techniques, and wide vocal range.</p>
    
                </div> -->

                   echo "<div class="columnContentRow">";
                   echo  "<img class="artistImage bordersall" src="media/artist8.jpg" alt="Artist 8">";
                   echo  "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";"
                   echo  "<p class="artistText">Frank Ocean (born October 28, 1987) is an American singer, songwriter, record producer, photographer, and visual artist. He is recognized for his idiosyncratic musical style, introspective and elliptical songwriting, unconventional production techniques, and wide vocal range.</p>";
                   echo "</div>";

                   Artist FrankOcean=new Artist('Frank Ocean','Frank Ocean (born October 28, 1987) is an American singer, songwriter, record producer, photographer, and visual artist. He is recognized for his idiosyncratic musical style, introspective and elliptical songwriting, unconventional production techniques, and wide vocal range','media/artist8.jpg');
                   FrankOcean.echoArtist();
    
                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist9.jpg" alt="Artist 9">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Sophia Regina Allison, better known by her stage name Soccer Mommy, is a Swiss-born American singer-songwriter and musician from Nashville, Tennessee. Allison released her first studio album, Clean, on March 2, 2018. Her follow up, Color Theory, was released on February 28, 2020.</p>
    
                </div> -->

                   echo "<div class="columnContentRow">";
                   echo "<img class="artistImage bordersall" src="media/artist9.jpg" alt="Artist 9">";
                   echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";"
                   echo  "<p class="artistText">Sophia Regina Allison, better known by her stage name Soccer Mommy, is a Swiss-born American singer-songwriter and musician from Nashville, Tennessee. Allison released her first studio album, Clean, on March 2, 2018. Her follow up, Color Theory, was released on February 28, 2020.</p>";
                   echo "</div>";

                   Artist SophiaReginaAllison=new Artist('Sophia Regina Allison','Sophia Regina Allison, better known by her stage name Soccer Mommy, is a Swiss-born American singer-songwriter and musician from Nashville, Tennessee. Allison released her first studio album, Clean, on March 2, 2018. Her follow','media/artist9.jpg');
                   SophiaReginaAllison.echoArtist();
    
                <!-- <div class="columnContentRow">
    
                    <img class="artistImage bordersall" src="media/artist10.jpg" alt="Artist 10">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Yeule is the musical project of London-based songwriter and producer Nat Ćmiel. Formed in 2012, it incorporates elements of ambient, glitch and Southeast Asian post-pop. The name Yeule is derived from the Final Fantasy character of the same name.</p>
    
                </div> -->

                 echo "<div class="columnContentRow">";
                 echo "<img class="artistImage bordersall" src="media/artist10.jpg" alt="Artist 10">";
                 echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                 echo "<p class="artistText">Yeule is the musical project of London-based songwriter and producer Nat Ćmiel. Formed in 2012, it incorporates elements of ambient, glitch and Southeast Asian post-pop. The name Yeule is derived from the Final Fantasy character of the same name.</p>";
                 echo "</div>";

                 Artist Yeule=new Artist('Yeule','Yeule is the musical project of London-based songwriter and producer Nat Ćmiel. Formed in 2012, it incorporates elements of ambient, glitch and Southeast Asian post-pop. The name Yeule is derived from the Final Fantasy character of the same name','media/artist10.jpg');
                 Yeule.echoArtist();
    
                    <!-- <div class="columnContentRow">
                    <img class="artistImage bordersall" src="media/artist11.jpg" alt="Artist 11">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Chris d'Eon, mononymously known as d'Eon, is a Canadian electronic musician, singer-songwriter, producer and composer based in Montreal, Quebec. He is known for his musical eclectism, which encompasses various elements of electronica, pop, avant-garde music and world music.</p>
                    </div> -->

                    echo "<div class="columnContentRow">";
                    echo "<img class="artistImage bordersall" src="media/artist11.jpg" alt="Artist 11">";
                    echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                    echo "<p class="artistText">Chris d'Eon, mononymously known as d'Eon, is a Canadian electronic musician, singer-songwriter, producer and composer based in Montreal, Quebec. He is known for his musical eclectism, which encompasses various elements of electronica, pop, avant-garde music and world music.</p>";
                    echo "</div>";"

                    Artist ChrisdEon=new Artist('Chris dEon','Chris dEon, mononymously known as dEon, is a Canadian electronic musician, singer-songwriter, producer and composer based in Montreal, Quebec. He is known for his musical eclectism, which encompasses various elements of electronica, pop, avant-garde music and world music','media/artist11.jpg');
                    ChrisdEon.echoArtist();
    
                    <!-- <div class="columnContentRow">
                    <img class="artistImage bordersall" src="media/artist12.jpg" alt="Artist 12">
                    <img class="artistSeparator" src="media/artist separator.png" alt="separator">
                    <p class="artistText">Let's Eat Grandma are a British pop group formed in 2013 by childhood friends Rosa Walton and Jenny Hollingworth. They released their debut studio album I, Gemini in 2016 through Transgressive Records.</p>
                    </div> -->

                    echo "<div class="columnContentRow">";
                    echo "<img class="artistImage bordersall" src="media/artist12.jpg" alt="Artist 12">";
                    echo "<img class="artistSeparator" src="media/artist separator.png" alt="separator">";
                    echo "<p class="artistText">Let's Eat Grandma are a British pop group formed in 2013 by childhood friends Rosa Walton and Jenny Hollingworth. They released their debut studio album I, Gemini in 2016 through Transgressive Records.</p>";
                    echo "</div>";"

                    Artist LetsEatGrandma=new Artist('Lets Eat Grandma','Lets Eat Grandma are a British pop group formed in 2013 by childhood friends Rosa Walton and Jenny Hollingworth. They released their debut studio album I, Gemini in 2016 through Transgressive Records','media/artist12.jpg');
                    LetsEatGrandma.echoArtist();

            </div>

        </div>

    </main>

    <?php include 'components/footer.php' ?>

</body>

</html>
