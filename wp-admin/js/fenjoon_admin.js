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

window.onload = function(){
	var checkboxes = document.getElementsByClassName('checkbox');
	var string = get_string( 'checkbox' );
	for( var i=0; i<checkboxes.length; i++ ){
		checkboxes[i].onclick = function(){
			string = get_string( 'checkbox' );
			document.getElementsByName('string')[0].setAttribute('value', string);
		}
	}

	var checkboxes_done = document.getElementsByClassName('checkbox_done');
	var string_done = get_string( 'checkbox_done' );
	for( var i=0; i<checkboxes_done.length; i++ ){
		checkboxes_done[i].onclick = function(){
			string_done = get_string( 'checkbox_done' );
			document.getElementsByName('string_done')[0].setAttribute('value', string_done);
		}
	}
}
