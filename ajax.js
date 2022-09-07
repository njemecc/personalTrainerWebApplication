var ajax = new XMLHttpRequest();

var method = "Get";

var url = "send.php";

var asynchronous = true;

ajax.open(method, url, asynchronous);

// sending ajax request
ajax.send();

// receiving response from data.php
ajax.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    //coverting json back to array

    var data = JSON.parse(this.responseText);
    console.log(data);
    // html value for <tbody>
    var html = "";

    // looping trough the data

    for (var a = 0; a < data.length; a++) {
      let prviVideo = data[a];

      // storing in html

      let prvi = (document.getElementById(
        "prvi"
      ).src = `images/${data[a]}.jpg`);
    }

    // replacing the <tbody> of <table>
    //document.getElementById("data").innerHTML = html;
  }
};
