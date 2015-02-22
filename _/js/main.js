
// json data calling starts here in plain js and json built in functions

function dataHandler(info) {
	//console.log('take 0');
	var output='';
	for (var i = 0; i <= info.links.length-1; i++) {
	//console.log(i);
		for (key in info.links[i]) {
			if (info.links[i].hasOwnProperty(key)) {
	//console.log(key);
				output += '<li>' + 
				'<a href = "' + info.links[i][key] +
				'">' + key + '</a>';
				'</li>';
	    }   
		}
	}

	var update = document.getElementById('links');
	update.innerHTML = output;

}

//json data working ends here