
.newsContainer {

    position: relative;
    box-sizing: border-box;
    width: 80%;
    left: 10%;
    top: 20px;
    height: auto;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    border:solid 3px rgba(179, 179, 179, 0.432);
    border-top: none;
    border-radius: 255px 15px 225px 15px/15px 225px 15px;
    background: url(../media/transpaper.png) repeat!important;
    margin-bottom: 150px;
    flex-wrap: wrap;
    z-index: -1;

}

main {

    height: auto;

}

header {

    height: 60px !important;
}

.newsContainer h1 {

    font-size: 1.4em;
    font-weight: 700;
    margin-bottom: 30px;

}

iframe {

    width: 100%;
    margin: 30px;
    border:solid 3px rgba(179, 179, 179, 0.432);
   border-radius: 255px 15px 225px 15px/15px 225px 15px;

}

.newsColumn {

    left: 0;
    width: 40%;
    height: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 5%;
    margin-bottom: 5%;

}

.news {

    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: auto;
    margin-bottom: 10px;
    padding: 15px;
    transition: filter 0.2s linear;
    

}

.news h3 {

    text-align: center;
    width: 100%;
    font-size: 0.8em;

}

.news img {

   width: 100%;
   height: auto;
   margin: 20px;
   border:solid 3px rgba(179, 179, 179, 0.432);
   border-radius: 255px 15px 225px 15px/15px 225px 15px;
   transition: transform 0.2s linear;

}

.news img:hover {

    transform: scale(1.1);

}

.news:hover {

    filter: drop-shadow(10px 10px 3px rgba(179, 179, 179, 0.432));

}

.news:active {

    filter: drop-shadow(10px 10px 3px rgba(179, 179, 179, 0.8));

}

.news p {

    font-size: 0.6em;
    text-align: justify;
    font-weight: 600;

}

.separator {

    width: 30%;
    height: auto;
    margin: 30px;

}

@media only screen and (min-width: 768px) and (max-width: 991px) {

    .newsContainer {

        width: 100%;
        left: 0;

    }


}

@media only screen and (max-width: 767px) {

    .newsContainer {

        width: 100%;
        left: 0;
        padding: 5%;

    }

    .newsColumn {

        flex-basis: 100%;

    }

    .news p {

        font-size: 1em;

    }

    .news h3 {

        font-size: 1.2em;
        font-weight: 700;

    }

}