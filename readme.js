/* readme for bs and jq 


.rc from 0px to 480px;

*/

.bs{
	.media{
		.xs{ from: 0px , to: 768px; }
		.sm{ from: 768px , to: 992px; }
		.md{ from: 992px, to: 1200px; }
		.lg{ from: 1200px, to: any(max-width) }
		
	}
	.customMedia{
		.rc{ from:0px to 480px; }
		
		}
	.container{
		.container-fluid
		.row
		.row .featurette	
	}
	.col{
		col-xs-pull-x{right: X%}
		col-xs-push-x{left: X%}
		col-xs-offset-x{margin-left: X%}	
	}
	.visible{
		
		visible-xs-*
		visible-print-*
		visible-*-block
		visible-*-inline
		visible-*-inline-block
		visible-xs, .visible-sm, visible-print, .visible-md, and .visible-lg
		hidden-xs
		
	}
	.buttons{
		
		btn btn-danger dropdown-toggle
		primary
		info
		success
		warning 
		default	
		
	}
	.dropdown{
		
		
		
	}
}
	
.jq{
	
}