var controllers = document.getElementsByClassName("audioController");

var presentPlay = 0;

function allowDrop(ev)
{
	ev.preventDefault();
}

function drag(ev)
{
	ev.dataTransfer.setData("Text",ev.target.id);
}

function dropForSpace2(ev)
{
	var dstElement = document.getElementsByClassName(ev.target.className)[0];
	if(dstElement.dataset.allowDrop == "true"){
		var data=ev.dataTransfer.getData("Text");
		var srcElement = document.getElementById(data);
		srcElement.style.height = 103 + "px";
		srcElement.style.width = 103 + "px";
		ev.target.appendChild(srcElement);
		dstElement.dataset.allowDrop = false;
		if(presentPlay == 0){
			for(var i = 0; i < 4; i++){
				controllers[i].load();
				controllers[i].play();
				controllers[i].volume = 0;
			}
		}
		controllers[srcElement.dataset.mindex].volume = 0.8
		presentPlay++;
	}
}

function dropForSpace1(ev){
	var data = ev.dataTransfer.getData("Text");
	var srcElement = document.getElementById(data);
	if(srcElement.parentNode.parentNode.id != "space2"){
		return;
	}
	isChanged = true;
	srcElement.parentNode.dataset.allowDrop = true;
	ev.target.appendChild(srcElement);	
	presentPlay--;
	controllers[srcElement.dataset.mindex].volume = 0;
	if(presentPlay == 0){
		for(var i = 0; i < 4; i++){
			controllers[i].pause();
		}
	}
}
