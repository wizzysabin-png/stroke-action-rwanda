<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Go Out With Me cherissa? 💗</title>

<!-- Handwriting font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Great+Vibes&display=swap" rel="stylesheet">

<style>
/* =========================================
   GENERAL
========================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #160813;
    --bg2: #230b1d;
    --card: #21101e;
    --card2: #2c1326;

    --pink: #ff4d91;
    --pink-light: #ff8ab7;
    --soft-pink: #ffc2d8;

    --text: #fff4f8;
    --muted: #aa859a;

    --border: rgba(255,255,255,.08);
}

body {
    min-height: 100vh;
    font-family: "DM Sans", sans-serif;
    background:
        radial-gradient(circle at 15% 15%, rgba(255, 0, 100, .15), transparent 30%),
        radial-gradient(circle at 85% 70%, rgba(155, 0, 100, .12), transparent 35%),
        linear-gradient(135deg, #120611, #260a20);

    color: white;

    display: flex;
    justify-content: center;
    align-items: center;

    overflow: hidden;
}

/* background soft hearts */

.background-heart {
    position: fixed;
    color: rgba(255, 80, 145, .15);
    pointer-events: none;
    animation: floatHeart 8s linear infinite;
}

@keyframes floatHeart {
    0% {
        transform: translateY(110vh) scale(.7);
        opacity: 0;
    }

    20% {
        opacity: 1;
    }

    100% {
        transform: translateY(-20vh) scale(1.4);
        opacity: 0;
    }
}

/* =========================================
   PHONE / MAIN CONTAINER
========================================= */

.app {
    width: min(92vw, 420px);
    height: min(92vh, 760px);

    background:
        linear-gradient(
            180deg,
            rgba(47, 14, 39, .93),
            rgba(22, 8, 20, .98)
        );

    border: 1px solid var(--border);
    border-radius: 28px;

    box-shadow:
        0 30px 80px rgba(0,0,0,.65),
        0 0 60px rgba(255, 60, 140, .12);

    overflow: hidden;
    position: relative;
}

/* =========================================
   PROGRESS
========================================= */

.progress {
    position: absolute;
    top: 18px;
    left: 22px;
    right: 22px;

    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 7px;

    z-index: 10;
}

.progress span {
    height: 3px;
    border-radius: 10px;

    background: rgba(255,255,255,.12);
}

.progress span.active {
    background: linear-gradient(
        90deg,
        #ff80ae,
        #ff3d83
    );

    box-shadow: 0 0 8px rgba(255,62,135,.4);
}

/* =========================================
   SCREENS
========================================= */

.screen {
    position: absolute;
    inset: 0;

    padding: 70px 28px 30px;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    opacity: 0;
    transform: translateX(50px);

    pointer-events: none;

    transition:
        opacity .45s ease,
        transform .45s ease;
}

.screen.active {
    opacity: 1;
    transform: translateX(0);
    pointer-events: auto;
}

.screen.leave {
    opacity: 0;
    transform: translateX(-50px);
}

/* =========================================
   BACK BUTTON
========================================= */

.back {
    position: absolute;
    top: 44px;
    left: 26px;

    color: #b899aa;
    font-size: 12px;

    cursor: pointer;
    user-select: none;

    transition: .2s;
}

.back:hover {
    color: white;
}

/* =========================================
   BEAR / IMAGE AREA
========================================= */

.character {
    height: 190px;

    display: flex;
    justify-content: center;
    align-items: center;

    margin-bottom: 4px;
}

.character img {
    max-height: 180px;
    max-width: 250px;

    object-fit: contain;

    filter:
        drop-shadow(0 10px 15px rgba(0,0,0,.25));
}

/*
If you do not have your own images yet,
these emoji placeholders are shown.
*/

.emoji-bears {
    font-size: 85px;
    animation: bearFloat 2.8s ease-in-out infinite;
}

@keyframes bearFloat {
    50% {
        transform: translateY(-7px);
    }
}

/* =========================================
   TEXT
========================================= */

.title {
    font-family: "Great Vibes", cursive;
    font-size: 46px;
    line-height: .98;

    color: #ffd0df;

    text-align: center;

    text-shadow:
        0 0 20px rgba(255, 78, 145, .25);

    margin-bottom: 13px;
}

.subtitle {
    color: var(--muted);

    font-size: 12px;

    text-align: center;

    margin-bottom: 22px;
}

/* =========================================
   PRIMARY BUTTON
========================================= */

.btn {
    border: none;
    outline: none;

    min-width: 110px;

    padding: 14px 28px;

    border-radius: 999px;

    cursor: pointer;

    font-weight: 700;
    font-size: 14px;

    transition:
        transform .2s,
        box-shadow .2s;
}

.btn:hover {
    transform: scale(1.05);
}

.btn-pink {
    color: white;

    background:
        linear-gradient(
            180deg,
            #ff6ca3,
            #ff347e
        );

    box-shadow:
        0 8px 28px rgba(255, 52, 126, .38),
        inset 0 1px rgba(255,255,255,.3);
}

/* YES / NO */

.answer-row {
    display: flex;
    align-items: center;
    justify-content: center;

    gap: 10px;

    position: relative;
}

.no-btn {
    color: #ccb6c3;

    background: rgba(255,255,255,.055);

    border: 1px solid rgba(255,255,255,.06);

    min-width: 80px;
}

#noBtn {
    transition: .18s ease;
}

/* =========================================
   GRID OPTIONS
========================================= */

.options {
    width: 100%;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 10px;
}

.option {
    position: relative;

    min-height: 80px;

    padding: 15px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.05),
            rgba(255,255,255,.025)
        );

    border: 1px solid rgba(255,255,255,.055);

    border-radius: 12px;

    cursor: pointer;

    transition: .22s ease;
}

.option:hover {
    border-color: rgba(255, 81, 145, .35);

    background:
        linear-gradient(
            145deg,
            rgba(255, 72, 140, .11),
            rgba(255,255,255,.03)
        );

    transform: translateY(-2px);
}

.option.selected {
    border-color: #ff4f91;

    background:
        linear-gradient(
            145deg,
            rgba(255, 67, 139, .2),
            rgba(255,255,255,.04)
        );

    box-shadow:
        0 0 18px rgba(255,70,140,.12);
}

.option-icon {
    font-size: 18px;

    margin-bottom: 8px;
}

.option-title {
    font-size: 12px;
    font-weight: 600;
}

.option-small {
    color: #8d7081;

    margin-top: 3px;

    font-size: 9px;
}

/* =========================================
   DATE SELECTOR
========================================= */

.date-grid {
    width: 100%;

    display: grid;
    grid-template-columns: repeat(3, 1fr);

    gap: 8px;

    margin-bottom: 14px;
}

.date-choice {
    border-radius: 10px;

    padding: 11px 5px;

    background: rgba(255,255,255,.04);

    border: 1px solid rgba(255,255,255,.05);

    color: #ccb6c3;

    text-align: center;

    cursor: pointer;

    transition: .2s;
}

.date-choice strong {
    display: block;

    color: #f9e7ef;

    font-size: 11px;
}

.date-choice small {
    color: #927484;

    font-size: 8px;
}

.date-choice:hover,
.date-choice.selected {
    border-color: #ff508f;

    background: rgba(255, 70, 140, .12);
}

.and-around {
    font-family: "Great Vibes", cursive;

    color: #b98aa0;

    font-size: 20px;

    margin: 3px 0 10px;
}

.time-grid {
    width: 100%;

    display: grid;
    grid-template-columns: repeat(4, 1fr);

    gap: 7px;
}

.time-choice {
    padding: 10px 3px;

    border-radius: 9px;

    text-align: center;

    background: rgba(255,255,255,.035);

    border: 1px solid rgba(255,255,255,.05);

    cursor: pointer;

    font-size: 9px;

    color: #b99eac;
}

.time-choice:hover,
.time-choice.selected {
    background: rgba(255,70,140,.12);
    border-color: #ff4d8f;
    color: white;
}

/* =========================================
   DATE TICKET
========================================= */

.ticket {
    width: 100%;

    background: #fff0f5;
    color: #302128;

    border-radius: 13px;

    overflow: hidden;

    display: grid;
    grid-template-columns: 95px 1fr;

    margin-top: 8px;
}

.ticket-left {
    padding: 15px;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    background: #ffc7d9;

    border-right: 2px dashed rgba(65,20,40,.2);
}

.ticket-bear {
    font-size: 40px;
}

.admit {
    font-size: 8px;
    letter-spacing: 1.5px;

    margin-top: 8px;
}

.saved-stamp {
    margin-top: 5px;

    border: 1px solid #d55b87;

    color: #c14e78;

    font-size: 8px;

    padding: 2px 7px;

    transform: rotate(-7deg);

    border-radius: 3px;
}

.ticket-right {
    padding: 16px 14px;
}

.ticket-row {
    display: grid;
    grid-template-columns: 48px 1fr;

    margin-bottom: 7px;

    font-size: 10px;
}

.ticket-row span:first-child {
    color: #9d7584;

    font-size: 7px;
    letter-spacing: .5px;
}

.ticket-row strong {
    font-size: 10px;
}

/* =========================================
   COUNTDOWN
========================================= */

.countdown-label {
    margin-top: 18px;

    color: #806474;

    font-size: 8px;

    letter-spacing: 2px;
}

.countdown {
    font-family: monospace;

    margin-top: 4px;

    font-size: 13px;

    color: #ffb1cb;
}

/* =========================================
   FINAL BUTTONS
========================================= */

.final-actions {
    display: flex;
    gap: 8px;

    margin-top: 13px;
}

.calendar-button,
.share-button {
    padding: 10px 14px;

    border-radius: 999px;

    font-size: 9px;

    cursor: pointer;

    border: 1px solid transparent;
}

.calendar-button {
    color: #16492d;

    background: #9de9be;
}

.share-button {
    color: #ff9abd;

    border-color: rgba(255,74,140,.35);

    background: rgba(255,70,140,.08);
}

/* =========================================
   TOAST
========================================= */

.toast {
    position: absolute;

    left: 50%;
    bottom: 22px;

    transform: translateX(-50%) translateY(80px);

    background: #fff4f8;

    color: #6d4155;

    padding: 10px 18px;

    border-radius: 999px;

    white-space: nowrap;

    font-size: 10px;

    opacity: 0;

    transition: .3s;

    box-shadow: 0 10px 30px rgba(0,0,0,.25);

    z-index: 60;
}

.toast.show {
    opacity: 1;

    transform: translateX(-50%) translateY(0);
}

/* =========================================
   CALENDAR MODAL
========================================= */

.modal {
    position: fixed;

    inset: 0;

    background: rgba(10,4,9,.88);

    backdrop-filter: blur(10px);

    display: none;

    justify-content: center;
    align-items: center;

    z-index: 100;
}

.modal.show {
    display: flex;
}

.calendar-card {
    width: min(90vw, 330px);

    background: #22101e;

    border: 1px solid rgba(255,255,255,.08);

    border-radius: 18px;

    padding: 26px;

    box-shadow: 0 30px 90px rgba(0,0,0,.65);
}

.calendar-label {
    color: #9f7689;

    font-size: 8px;

    letter-spacing: 2px;

    text-align: center;
}

.calendar-title {
    text-align: center;

    font-family: "Great Vibes", cursive;

    color: #ffc6da;

    font-size: 32px;

    margin: 3px 0 20px;
}

.calendar-days,
.calendar-numbers {
    display: grid;

    grid-template-columns: repeat(7, 1fr);

    gap: 6px;

    text-align: center;
}

.calendar-days span {
    color: #7d6070;

    font-size: 8px;
}

.calendar-numbers span {
    font-size: 9px;

    color: #b89eab;

    padding: 8px 3px;

    border-radius: 7px;
}

.calendar-numbers .active-day {
    background: #ff4a8c;

    color: white;

    box-shadow: 0 0 18px rgba(255,72,140,.35);
}

.close-calendar {
    width: 100%;

    margin-top: 20px;

    border: none;

    border-radius: 999px;

    padding: 11px;

    color: white;

    background: #ff3d82;

    cursor: pointer;
}

/* =========================================
   MOBILE
========================================= */

@media(max-height:700px) {

    .app {
        height: 96vh;
    }

    .character {
        height: 135px;
    }

    .emoji-bears {
        font-size: 65px;
    }

    .title {
        font-size: 39px;
    }
}

</style>
</head>

<body>


<!-- ======================================
     FLOATING HEART BACKGROUND
======================================= -->

<div id="heartContainer"></div>


<!-- ======================================
     APP
======================================= -->

<div class="app">

    <!-- progress -->

    <div class="progress">

        <span id="p1"></span>
        <span id="p2"></span>
        <span id="p3"></span>
        <span id="p4"></span>

    </div>


    <!-- ==================================
         PAGE 1
    =================================== -->

    <section class="screen active" id="screen1">

        <div class="character">

            <!-- Replace this later with your bear GIF -->
            <div class="emoji-bears">
                🐻💞🐻
            </div>

        </div>


        <h1 class="title">
            Will you go out with me cherissa?
        </h1>


        <p class="subtitle">
            There is only one right answer...
        </p>


        <div class="answer-row">

            <button class="btn btn-pink"
                    onclick="nextScreen(2)">
                Yes!
            </button>


            <button
                class="btn no-btn"
                id="noBtn"
                onmouseenter="runAway()"
                onclick="runAway()">

                No

            </button>

        </div>

    </section>



    <!-- ==================================
         PAGE 2 DATE
    =================================== -->

    <section class="screen" id="screen2">

        <div class="back"
             onclick="nextScreen(1)">
             ← back
        </div>


        <div class="character">

            <div class="emoji-bears">
                💗🐻
            </div>

        </div>


        <h1 class="title">
            Yay! When are you free?
        </h1>


        <div class="date-grid">

            <div class="date-choice"
                 onclick="selectDate(this,'Today')">

                <strong>Today</strong>
                <small>Aug 8</small>

            </div>


            <div class="date-choice"
                 onclick="selectDate(this,'Tomorrow')">

                <strong>Tomorrow</strong>
                <small>Aug 9</small>

            </div>


            <div class="date-choice"
                 onclick="selectDate(this,'Saturday')">

                <strong>Sat</strong>
                <small>Aug 8</small>

            </div>


            <div class="date-choice"
                 onclick="selectDate(this,'Sunday')">

                <strong>Sun</strong>
                <small>Aug 9</small>

            </div>


            <div class="date-choice"
                 onclick="selectDate(this,'Monday')">

                <strong>Mon</strong>
                <small>Aug 10</small>

            </div>


            <div class="date-choice"
                 onclick="customDate()">

                <strong>Sometime</strong>
                <small>you choose</small>

            </div>

        </div>


        <div class="and-around">
            and around...
        </div>


        <div class="time-grid">

            <div class="time-choice"
                 onclick="selectTime(this,'10:30 AM')">

                Morning
                <br>
                <small>10:30</small>

            </div>


            <div class="time-choice"
                 onclick="selectTime(this,'2:00 PM')">

                Afternoon
                <br>
                <small>2:00</small>

            </div>


            <div class="time-choice"
                 onclick="selectTime(this,'7:00 PM')">

                Evening
                <br>
                <small>7:00</small>

            </div>


            <div class="time-choice"
                 onclick="selectTime(this,'10:30 PM')">

                Late night
                <br>
                <small>10:30</small>

            </div>

        </div>

    </section>



    <!-- ==================================
         PAGE 3 WHERE
    =================================== -->

    <section class="screen" id="screen3">

        <div class="back"
             onclick="nextScreen(2)">
            ← back
        </div>


        <div class="character">

            <div class="emoji-bears">
                🐻🤝🐻
            </div>

        </div>


        <h1 class="title">
            And then?
        </h1>


        <div class="options">


            <div class="option"
                 onclick="selectPlace(this,'Dessert')">

                <div class="option-icon">
                    🍰
                </div>

                <div class="option-title">
                    Dessert
                </div>

                <div class="option-small">
                    obviously
                </div>

            </div>


            <div class="option"
                 onclick="selectPlace(this,'Stargazing')">

                <div class="option-icon">
                    ☆
                </div>

                <div class="option-title">
                    Stargazing
                </div>

                <div class="option-small">
                    if it's cozy clear
                </div>

            </div>


            <div class="option"
                 onclick="selectPlace(this,'A drive')">

                <div class="option-icon">
                    🚗
                </div>

                <div class="option-title">
                    A drive
                </div>

                <div class="option-small">
                    windows down
                </div>

            </div>


            <div class="option"
                 onclick="selectPlace(this,'Not going home')">

                <div class="option-icon">
                    🏠
                </div>

                <div class="option-title">
                    Not going home
                </div>

                <div class="option-small">
                    not yet, anyway
                </div>

            </div>

        </div>

    </section>



    <!-- ==================================
         PAGE 4 BRING
    =================================== -->

    <section class="screen" id="screen4">

        <div class="back"
             onclick="nextScreen(3)">
            ← back
        </div>


        <div class="character">

            <div class="emoji-bears">
                🐻🥤
            </div>

        </div>


        <h1 class="title">
            And what should I bring?
        </h1>


        <div class="options">


            <div class="option"
                 onclick="selectBring(this,'Flowers')">

                <div class="option-icon">
                    🌷
                </div>

                <div class="option-title">
                    Flowers
                </div>

                <div class="option-small">
                    obviously
                </div>

            </div>


            <div class="option"
                 onclick="selectBring(this,'Something sweet')">

                <div class="option-icon">
                    🧁
                </div>

                <div class="option-title">
                    Something sweet
                </div>

                <div class="option-small">
                    for the walk after
                </div>

            </div>


            <div class="option"
                 onclick="selectBring(this,'A playlist')">

                <div class="option-icon">
                    ♫
                </div>

                <div class="option-title">
                    A playlist
                </div>

                <div class="option-small">
                    made this morning
                </div>

            </div>


            <div class="option"
                 onclick="selectBring(this,'Just me')">

                <div class="option-icon">
                    ♡
                </div>

                <div class="option-title">
                    Just me
                </div>

                <div class="option-small">
                    bold, but fair
                </div>

            </div>

        </div>

    </section>



    <!-- ==================================
         FINAL PAGE
    =================================== -->

    <section class="screen" id="screen5">


        <h1 class="title">
            It's a date!
        </h1>


        <div class="ticket">


            <div class="ticket-left">

                <div class="ticket-bear">
                    🐻💗
                </div>

                <div class="admit">
                    ADMIT TWO
                </div>

                <div class="saved-stamp">
                    SAVED
                </div>

            </div>



            <div class="ticket-right">


                <div class="ticket-row">

                    <span>WHEN</span>

                    <strong id="finalDate">
                        Saturday
                    </strong>

                </div>


                <div class="ticket-row">

                    <span>TIME</span>

                    <strong id="finalTime">
                        7:00 PM
                    </strong>

                </div>


                <div class="ticket-row">

                    <span>WHERE</span>

                    <strong id="finalPlace">
                        Dessert
                    </strong>

                </div>


                <div class="ticket-row">

                    <span>BRING</span>

                    <strong id="finalBring">
                        Flowers
                    </strong>

                </div>


                <div class="ticket-row">

                    <span>THEN</span>

                    <strong>
                        Stargazing
                    </strong>

                </div>


            </div>

        </div>


        <div class="countdown-label">
            STARTS IN
        </div>


        <div id="countdown" class="countdown">
            2D 07:12:44
        </div>


        <div class="final-actions">


            <button
                class="calendar-button"
                onclick="openCalendar()">

                ✓ In your calendar

            </button>


            <button
                class="share-button"
                onclick="shareDate()">

                Share

            </button>

        </div>


    </section>



    <!-- TOAST -->

    <div class="toast" id="toast">

        Saved — see you then 💗

    </div>


</div>



<!-- ======================================
     CALENDAR POPUP
======================================= -->

<div class="modal" id="calendarModal">


    <div class="calendar-card">


        <div class="calendar-label">

            ADDING TO YOUR CALENDAR

        </div>


        <div class="calendar-title">

            August 2026

        </div>


        <div class="calendar-days">

            <span>M</span>
            <span>T</span>
            <span>W</span>
            <span>T</span>
            <span>F</span>
            <span>S</span>
            <span>S</span>

        </div>


        <div class="calendar-numbers">

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>

            <span>1</span>
            <span>2</span>

            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>

            <span class="active-day">
                8
            </span>

            <span>9</span>

            <span>10</span>
            <span>11</span>
            <span>12</span>
            <span>13</span>
            <span>14</span>
            <span>15</span>
            <span>16</span>

            <span>17</span>
            <span>18</span>
            <span>19</span>
            <span>20</span>
            <span>21</span>
            <span>22</span>
            <span>23</span>

        </div>


        <button
            class="close-calendar"
            onclick="closeCalendar()">

            Done 💗

        </button>

    </div>


</div>



<script>

/* =========================================
   DATA
========================================= */

let currentScreen = 1;

let dateData = {

    date: "Saturday",

    time: "7:00 PM",

    place: "Dessert",

    bring: "Flowers"

};


/* =========================================
   SCREEN NAVIGATION
========================================= */

function nextScreen(number) {

    const current =
        document.querySelector(
            ".screen.active"
        );


    if (current) {

        current.classList.remove("active");

    }


    setTimeout(() => {

        document
            .getElementById("screen" + number)
            .classList.add("active");

    }, 150);


    currentScreen = number;


    updateProgress();


    if (number === 5) {

        updateTicket();

        showToast();

    }

}



/* =========================================
   PROGRESS BAR
========================================= */

function updateProgress() {

    const progressNumber =
        Math.min(currentScreen,4);


    for (let i = 1; i <= 4; i++) {

        const bar =
            document.getElementById("p" + i);


        if (i <= progressNumber) {

            bar.classList.add("active");

        }

        else {

            bar.classList.remove("active");

        }

    }

}


updateProgress();



/* =========================================
   NO BUTTON RUNS AWAY
========================================= */

let noCount = 0;


function runAway() {

    const button =
        document.getElementById("noBtn");


    noCount++;


    const x =
        Math.random() * 130 - 65;

    const y =
        Math.random() * 90 - 45;


    button.style.transform =
        `translate(${x}px, ${y}px)`;


    if (noCount === 1) {

        button.innerText = "Think again...";

    }

    else if (noCount === 2) {

        button.innerText = "Are you sure? 🥺";

    }

    else if (noCount === 3) {

        button.innerText = "Wrong answer 😭";

    }

    else {

        button.innerText = "YES 😌";

        button.onclick = function() {

            nextScreen(2);

        };

    }

}



/* =========================================
   DATE
========================================= */

function selectDate(element, value) {

    document
        .querySelectorAll(".date-choice")
        .forEach(item =>
            item.classList.remove("selected")
        );


    element.classList.add("selected");


    dateData.date = value;


    tryContinueDate();

}



/* =========================================
   CUSTOM DATE
========================================= */

function customDate() {

    const value =
        prompt(
            "What day works for you?"
        );


    if (value) {

        dateData.date = value;

    }

}



/* =========================================
   TIME
========================================= */

function selectTime(element, value) {

    document
        .querySelectorAll(".time-choice")
        .forEach(item =>
            item.classList.remove("selected")
        );


    element.classList.add("selected");


    dateData.time = value;


    setTimeout(() => {

        nextScreen(3);

    }, 350);

}


function tryContinueDate() {

    /* waits for time selection */

}



/* =========================================
   PLACE
========================================= */

function selectPlace(element, value) {

    document
        .querySelectorAll("#screen3 .option")
        .forEach(item =>
            item.classList.remove("selected")
        );


    element.classList.add("selected");


    dateData.place = value;


    setTimeout(() => {

        nextScreen(4);

    }, 350);

}



/* =========================================
   WHAT TO BRING
========================================= */

function selectBring(element, value) {

    document
        .querySelectorAll("#screen4 .option")
        .forEach(item =>
            item.classList.remove("selected")
        );


    element.classList.add("selected");


    dateData.bring = value;


    setTimeout(() => {

        nextScreen(5);

    }, 400);

}



/* =========================================
   UPDATE FINAL TICKET
========================================= */

function updateTicket() {

    document.getElementById(
        "finalDate"
    ).innerText = dateData.date;


    document.getElementById(
        "finalTime"
    ).innerText = dateData.time;


    document.getElementById(
        "finalPlace"
    ).innerText = dateData.place;


    document.getElementById(
        "finalBring"
    ).innerText = dateData.bring;

}



/* =========================================
   TOAST
========================================= */

function showToast() {

    const toast =
        document.getElementById("toast");


    setTimeout(() => {

        toast.classList.add("show");

    }, 500);


    setTimeout(() => {

        toast.classList.remove("show");

    }, 3500);

}



/* =========================================
   CALENDAR
========================================= */

function openCalendar() {

    document
        .getElementById("calendarModal")
        .classList.add("show");

}


function closeCalendar() {

    document
        .getElementById("calendarModal")
        .classList.remove("show");

}



/* =========================================
   SHARE
========================================= */

async function shareDate() {

    const text =
`It's a date! 💗

When: ${dateData.date}
Time: ${dateData.time}
Where: ${dateData.place}
Bring: ${dateData.bring}`;


    if (navigator.share) {

        await navigator.share({

            title:
                "It's a date! 💗",

            text: text

        });

    }

    else {

        navigator.clipboard.writeText(text);

        alert(
            "Date details copied 💗"
        );

    }

}



/* =========================================
   COUNTDOWN
========================================= */

let seconds =
    (2 * 24 * 60 * 60)
    +
    (7 * 60 * 60)
    +
    (12 * 60)
    +
    44;


function updateCountdown() {

    const days =
        Math.floor(
            seconds / 86400
        );


    const hours =
        Math.floor(
            (seconds % 86400)
            /
            3600
        );


    const minutes =
        Math.floor(
            (seconds % 3600)
            /
            60
        );


    const secs =
        seconds % 60;


    document
        .getElementById("countdown")
        .innerText =

        `${days}D ` +

        `${String(hours)
            .padStart(2,"0")}:` +

        `${String(minutes)
            .padStart(2,"0")}:` +

        `${String(secs)
            .padStart(2,"0")}`;


    if (seconds > 0) {

        seconds--;

    }

}


setInterval(
    updateCountdown,
    1000
);


updateCountdown();



/* =========================================
   FLOATING HEARTS
========================================= */

function createHeart() {

    const heart =
        document.createElement("div");


    heart.className =
        "background-heart";


    heart.innerText = "♥";


    heart.style.left =
        Math.random() * 100 + "vw";


    heart.style.fontSize =
        (Math.random() * 15 + 9)
        +
        "px";


    heart.style.animationDuration =
        (Math.random() * 5 + 6)
        +
        "s";


    document.body.appendChild(heart);


    setTimeout(() => {

        heart.remove();

    }, 11000);

}


setInterval(
    createHeart,
    1000
);

</script>

</body>
</html>
