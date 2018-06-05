<html>
	<head>
		<meta charset="utf-8"/>
		<title>Beyond Joy</title>
		<link rel="icon" href="img/biantongzhou.png">
		<link href="css/style.css" rel="stylesheet"/>
		<link href="css/footer.css" rel="stylesheet"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<script src="js/count_down.js"></script>
		<script src="js/title_hide.js"></script>
		<script src="js/pulldown_changecolor.js"></script>	
		<style>
			.pic{
				width:200px;
				height:250px;
				/*width:100%;*/
				border:2px solid green;
			}
			.modal{
				position:fixed;
				width:100%;
				height:100%;
				background-color:grey;
				z-index:5;
				left:0;
				top:0;
				display:none;
			}
			#special{
				margin:auto;
				padding:20px;
				border:1px solid #888;
				width:80%;
				display:block;
			}
			#close_Picture24,#close_Picture37,#close_Picture18,#close_Picture20,#close_Picture34,#close_Picture14,#close_Picture22,#close_Picture28,#close_Picture23,#close_Picture38,#close_Picture26,#close_Picture39{
				/*color:#aaaaaa;*/
				color:#000;
				float:right;
				font-size:28px;
				font-weight:bold;
				cursor:pointer;
				text-decoration:none;
			}
			
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<script src="js/count_down.js"></script>
		<script src="js/title_hide.js"></script>
		<script src="js/pulldown_changecolor.js"></script>
	</head>
	<body>
		<div class="page">
			<?php require("header.php");?>
			<img class="main_img" src="img/courtyard.jpg" alt="bian tongzhou"  style="width:100%; display:block"/>
			<div style="position: absolute; top:40%;left: 50%;">
				<text class="theme" style="color:blue">留学申请</text>
			</div>
			<div class="content">
				<p style="font-size:28px">留学申请</p>
				<p>服务流程：十年金牌顾问前期评估，留学申请方案制定，留学考试指导，软实力背景提升，选校选专业，完美文书展现优势，面试培训，获得Offer，签证办理，行前准备，转学转校，成功留学</p>
				<img src="apply.png" style="width:100%;" />
				<p>服务种类：美国中学，本科，研究生申请，并且提供英国，澳大利亚，加拿大，意大利，日本，韩国，西班牙，香港，新加坡等国家留学申请</p>			
			</div>	
			<table id="offer">
				<tr>
					<td>
						<img class="pic" src="img/offer/Picture24.png" >
						<div id="Picture24" class="modal">
							<span id="close_Picture24">&times;</span>
							<img id="special" src="img/offer/Picture24.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture37.png" >
						<div id="Picture37" class="modal">
							<span id="close_Picture37">&times;</span>
							<img id="special" src="img/offer/Picture37.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture18.png" >
						<div id="Picture18" class="modal">
							<span id="close_Picture18">&times;</span>
							<img id="special" src="img/offer/Picture18.png">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<img class="pic" src="img/offer/Picture20.png" >
						<div id="Picture20" class="modal">
							<span id="close_Picture20">&times;</span>
							<img id="special" src="img/offer/Picture20.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture34.png" >
						<div id="Picture34" class="modal">
							<span id="close_Picture34">&times;</span>
							<img id="special" src="img/offer/Picture34.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture14.png" >
						<div id="Picture14" class="modal">
							<span id="close_Picture14">&times;</span>
							<img id="special" src="img/offer/Picture14.png">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<img class="pic" src="img/offer/Picture22.png" >
						<div id="Picture22" class="modal">
							<span id="close_Picture22">&times;</span>
							<img id="special" src="img/offer/Picture22.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture28.png" >
						<div id="Picture28" class="modal">
							<span id="close_Picture28">&times;</span>
							<img id="special" src="img/offer/Picture28.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture23.png" >
						<div id="Picture23" class="modal">
							<span id="close_Picture23">&times;</span>
							<img id="special" src="img/offer/Picture23.png">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<img class="pic" src="img/offer/Picture38.png" >
						<div id="Picture38" class="modal">
							<span id="close_Picture38">&times;</span>
							<img id="special" src="img/offer/Picture38.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture26.png" >
						<div id="Picture26" class="modal">
							<span id="close_Picture26">&times;</span>
							<img id="special" src="img/offer/Picture26.png">
						</div>
					</td>
					<td>
						<img class="pic" src="img/offer/Picture39.png" >
						<div id="Picture39" class="modal">
							<span id="close_Picture39">&times;</span>
							<img id="special" src="img/offer/Picture39.png"></td>
						</div>
				</tr>
			</table>
		</div>
	</body>
</html>
<script>
		var pics=document.getElementsByClassName("pic");
		for(var i=0; i<=pics.length; i++)
		{
			pics[i].addEventListener("click", function(e){
				e=e || window.event;
				var pic=e.target.src;
				pic=pic.slice(pic.length-13,pic.length-4);
				//alert(pic);
				var clicked_img=document.getElementById(pic);
				clicked_img.style.display="block";

				var close="close_";
				close +=pic; 
				close=document.getElementById(close);
				close.onclick=function(){
					clicked_img.style.display="none";
				}
				window.onclick = function(event) {
				    if (event.target == clicked_img) {
				    	clicked_img.style.display = "none";
				    }
				}	
			});
		}
		</script>