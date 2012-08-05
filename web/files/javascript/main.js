var pageLoadTime;
var bindlinks;
        var scnWid,scnHei;
        if (self.innerHeight)
        {
                scnWid = self.innerWidth;
                scnHei = self.innerHeight;
        }
        else if (document.documentElement && document.documentElement.clientHeight)

        {
                scnWid = document.documentElement.clientWidth;
                scnHei = document.documentElement.clientHeight;
        }
        else if (document.body)
        {
                scnWid = document.body.clientWidth;
                scnHei = document.body.clientHeight;
        }

$(document).ready(pageLoadTime = setTimeout('pageLoad()', 1200));
//$(document).ready(pageLoad());
function pageLoad() {
	console.log('pageload');
	bindlinks = $("[data-opanel=bindlink]");
	$("[data-opanel=bindlink]").bind({
  click: function() {
	console.log("clicked");
	pageSwitch('files/places/' + this.innerHTML + '.php');
  },
  mouseenter: function() {
     this.style.background =  "rgba(255,0,0,.30)";
  },
  mouseleave: function() {
	this.style.background = "";
}
});
$("[data-opanel=target]").css("height", scnHei-95-15-15);
}
function pageSwitch(page) {
	console.log('pageSwitch');
	var iframe = $("#mainiframe");
	iframe.src =  "files/scripts/html/loading.html";
//	iframe.contentDocument.location.reload(true);
	$("#mainiframe").attr('src', page);
}
function pageRefresh(iframe) {
	iframe.src = iframe.src;
}
