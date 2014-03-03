<script>
function clicker() {
	var od=document.getElementById('testoverlay');
	if (od.style.display == "none") {
		od.style.display="";
		od.innerHTML="my first overlay <br><a href='#' onclick='return clicker();'>close window</a>";
					}else{
			od.style.display="none";
			od.innerHTML='';
					}
			return false;
		}
</script>