function selectBox(selectType){
	
    var checkboxis = document.getElementsByName("checkboxes[]");
    if(selectType == "reverse"){
        for (var i=0; i<checkboxis.length; i++){
        checkboxis[i].checked = !checkboxis[i].checked;
		}
    }
    else if(selectType == "all"){
        for (var i=0; i<checkboxis.length; i++){
        checkboxis[i].checked = true;
		}
    }
}
