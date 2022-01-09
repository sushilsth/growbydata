var i = 0;
self.addEventListener("message", function(e) {
    // the passed-in data is available via e.data
      var data = e.data
      var post_id = data.split("|")[0];
      console.log(post_id);
      var admin_ajax = data.split("|")[1];
      if(typeof post_id != "undefined"){
        var t = new XMLHttpRequest;
        t.open("POST", admin_ajax, !0), t.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"), t.onload = function() {
          if (200 === t.status) {
             self.postMessage(t.responseText);
          }
        }, t.send("action=get_blog_content&postid=" + post_id)  
      }
}, false);