var i = 0;
self.addEventListener("message", function(e) {
    // the passed-in data is available via e.data
    var admin_ajax = e.data;
    var t = new XMLHttpRequest;
    t.open("POST", admin_ajax, !0), t.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"), t.onload = function() {
      if (200 === t.status) {
         self.postMessage(t.responseText);
      }
    }, t.send("action=getCountry")
}, false);