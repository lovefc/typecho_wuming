<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<script>
function toggleClass(element, className) {
  if (element.classList.contains(className)) {
    element.classList.remove(className);
  } else {
    element.classList.add(className);
  }
}
function style(style_name){
    let links = document.getElementsByTagName("a");	
	for (let i = 0; i < links.length; i++) {
		toggleClass(links[i],style_name);
	}	
	let body = document.body;	
    toggleClass(body,style_name); //切换样式
}
function checkDayOrNight() {
  let date = new Date();
  let hour = date.getHours();
  console.log(hour);
  if (hour >= 6 && hour <= 20) {
    style('day');
  } else {
    style('night');
  }
}
checkDayOrNight();
</script>
</body>
</html>
