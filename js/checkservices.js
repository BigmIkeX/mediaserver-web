

// Checking DELUGE

var image = new Image();
image.src = "http://192.168.1.101:8112/images/s.gif";
setTimeout
(
    function () {
        if (!image.complete || !image.naturalWidth) {
            // alert("DELUGE DOES NOT WORK");
            document.getElementById("deluge").className = document.getElementById("deluge").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("deluge").className += " ping-red";

        }
        else {
            // alert("DELUGE DOES  WORK");
            document.getElementById("deluge").className = document.getElementById("deluge").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("deluge").className += " ping-green";
        }
    },
    2500
);

// Checking COUCHPOTATO

var image2 = new Image();
image2.src = "http://192.168.1.101:5050/api/d83193a554ca4c3f971a723fb140181c/file.cache/05650212ddadc5f99ebddf3376a8a80f.jpg";
setTimeout
(
    function () {
        if (!image2.complete || !image2.naturalWidth) {
            // alert("COUCHPOTATO DOES NOT WORK");
            document.getElementById("couchpotato").className = document.getElementById("couchpotato").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("couchpotato").className += " ping-red";
        }
        else {
            // alert("COUCHPOTATO DOES  WORK");
            document.getElementById("couchpotato").className = document.getElementById("couchpotato").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("couchpotato").className += " ping-green";
        }
    },
    2500
);

// Checking SONARR

var image3 = new Image();
image3.src = "http://192.168.1.101:8989/Content/Images/background/logo.png";
setTimeout
(
    function () {
        if (!image3.complete || !image3.naturalWidth) {
            //  alert("SONARR DOES NOT WORK");
            document.getElementById("sonarr").className = document.getElementById("sonarr").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("sonarr").className += " ping-red";
        }
        else {
            // alert("SONARR DOES  WORK");
            document.getElementById("sonarr").className = document.getElementById("sonarr").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("sonarr").className += " ping-green";
        }
    },
    2500
);
// Checking HEADPHONES

var image4 = new Image();
image4.src = "http://192.168.1.101:8181/images/headphoneslogo.png";
setTimeout
(
    function () {
        if (!image4.complete || !image4.naturalWidth) {
            // alert("HEADPHONES DOES NOT WORK");
            document.getElementById("headphones").className = document.getElementById("headphones").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("headphones").className += " ping-red";
        }
        else {
            // alert("HEADPHONES DOES WORK");
            document.getElementById("headphones").className = document.getElementById("headphones").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("headphones").className += " ping-green";
        }
    },
    2500
);
// Checking OWNCLOUD

var image5 = new Image();
image5.src = "http://192.168.1.101/owncloud/core/img/logo-icon.svg";
setTimeout
(
    function () {
        if (!image5.complete || !image5.naturalWidth) {
            // alert("OWNCLOUD DOES NOT WORK");
            document.getElementById("owncloud").className = document.getElementById("owncloud").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("owncloud").className += " ping-red";
        }
        else {
            // alert("OWNCLOUD DOES WORK");
            document.getElementById("owncloud").className = document.getElementById("owncloud").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("owncloud").className += " ping-green";
        }
    },
    2500
);
// Checking SHELL IN A BOX

var image6 = new Image();
image6.src = "http://192.168.1.101:4222/enabled.gif";
setTimeout
(
    function () {
        if (!image2.complete || !image6.naturalWidth) {
            //alert("SHELL IN A BOX DOES NOT WORK");
            document.getElementById("shell").className = document.getElementById("shell").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("shell").className += " ping-red";
        }
        else {
            //alert("SHELL IN A BOX DOES  WORK");
            document.getElementById("shell").className = document.getElementById("shell").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("shell").className += " ping-green";
        }
    },
    2500
);
// Checking STRETTO

var image7 = new Image();
image7.src = "http://192.168.1.101:2000/static/images/unknown.jpg";
setTimeout
(
    function () {
        if (!image7.complete || !image7.naturalWidth) {
            // alert("MOPIDY DOES NOT WORK");
            document.getElementById("stretto").className = document.getElementById("stretto").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("stretto").className += " ping-red";
        }
        else {
            //alert("MOPIDY DOES  WORK");
            document.getElementById("stretto").className = document.getElementById("stretto").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("stretto").className += " ping-green";
        }
    },
    2500
);
// Checking KANBOARD

var image8 = new Image();
image8.src = "http://192.168.1.101/owncloud/core/img/background.jpg";
setTimeout
(
    function () {
        if (!image8.complete || !image8.naturalWidth) {
            //alert("KANBOARD DOES NOT WORK");
            document.getElementById("kanboard").className = document.getElementById("kanboard").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("kanboard").className += " ping-red";
        }
        else {
            //alert("KANBOARD DOES  WORK");
            document.getElementById("kanboard").className = document.getElementById("kanboard").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("kanboard").className += " ping-green";
        }
    },
    2500
);
// Checking 2048

var image9 = new Image();
image9.src = "http://192.168.1.101/2048/imgs/Demo_start.png";
setTimeout
(
    function () {
        if (!image9.complete || !image9.naturalWidth) {
            //alert("2048 DOES NOT WORK");
            document.getElementById("2048").className = document.getElementById("2048").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("2048").className += " ping-red";
        }
        else {
            //alert("2048 DOES  WORK");
            document.getElementById("2048").className = document.getElementById("2048").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("2048").className += " ping-green";
        }
    },
    2500
);

var image10 = new Image();
image10.src = "http://192.168.1.101:32400/web/img/base/plex-logo.96faf245690b14fdd33eccd3294ac57f.svg";
setTimeout
(
    function () {
        if (!image10.complete || !image10.naturalWidth) {
            //alert("plex DOES NOT WORK");
            document.getElementById("plex").className = document.getElementById("plex").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("plex").className += " ping-red";
        }
        else {
            //alert("plex DOES  WORK");
            document.getElementById("plex").className = document.getElementById("plex").className.replace(/(?:^|\s)ping-orange(?!\S)/g, '');
            document.getElementById("plex").className += " ping-green";
        }
    },
    2500
);
