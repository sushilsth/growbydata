var i=0;self.addEventListener("message",function(e){var t=e.data,s=t.split("|")[0];console.log(s);var n=t.split("|")[1];if(void 0!==s){var o=new XMLHttpRequest;o.open("POST",n,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8"),o.onload=function(){200===o.status&&self.postMessage(o.responseText)},o.send("action=get_blog_content&postid="+s)}},!1);