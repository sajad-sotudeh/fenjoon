function get_string( classname ){
	var checkboxes = document.getElementsByClassName( classname );
	var string = '';
	var array = new Array();
	for( var j=0; j<checkboxes.length; j++ ){
		if( checkboxes[j].checked ) array.push( checkboxes[j].value );
	}
	string = array.join('+');
	return string;
}

function get_string_dropdown( classname ){
	var dropdowns = document.getElementsByClassName( classname );
	var string_dropdown = '';
	var array = new Array();
	for( var j=0; j<dropdowns.length; j++ ){
		var e = dropdowns[j];
		var selectedIndex = e.selectedIndex;
		var strUser = e.options[selectedIndex].value;
		array.push( e.getAttribute('post')+'-'+strUser );
	}
	string_dropdown = array.join('+');
	return string_dropdown;
}

window.onload = function(){
	var checkboxes = document.getElementsByClassName('checkbox');
	for( var i=0; i<checkboxes.length; i++ ){
		checkboxes[i].onclick = function(){
			string = get_string( 'checkbox' );
			document.getElementsByName('string')[0].setAttribute('value', string);
		}
	}

	var checkboxes_done = document.getElementsByClassName('checkbox_done');
	for( var i=0; i<checkboxes_done.length; i++ ){
		checkboxes_done[i].onclick = function(){
			string_done = get_string( 'checkbox_done' );
			document.getElementsByName('string_done')[0].setAttribute('value', string_done);
		}
	}

	var dropdowns = document.getElementsByClassName('dropdown');
	for( var i=0; i<dropdowns.length; i++ ){
		dropdowns[i].onchange = function(){
			string_dropdown = get_string_dropdown( 'dropdown' );
			document.getElementsByName('string_dropdown')[0].setAttribute('value', string_dropdown);
		}
	}
}
