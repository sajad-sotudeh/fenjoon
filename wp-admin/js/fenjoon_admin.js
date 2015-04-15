function get_string(){
	var checkboxes = document.getElementsByClassName('checkbox');
	var string = '';
	var array = new Array();
	for(var j=0;j<checkboxes.length;j++){
		if (checkboxes[j].checked) array.push(checkboxes[j].value);
	}
	string = array.join('+');
	return string;
}
window.onload = function(){
	var checkboxes = document.getElementsByClassName('checkbox');
	var string = get_string();
	for(var i=0;i<checkboxes.length;i++){
		checkboxes[i].onclick = function(){
			string = get_string();
			document.getElementsByName('string')[0].setAttribute('value', string);
		}
	}
}