// Automatic stick footer

var footerHeight = $( '#footer' ).outerHeight();

$( '#footer' ).css( { "margin-top" : -footerHeight } );
$( '#main' ).css( { "padding-bottom" : footerHeight } );
	
// Auto absolute centering
var absHeight = $( '.absCenter' ).outerHeight(),
	absWidth = $( '.absCenter' ).outerWidth();

$( '.absCenter' ).css( {
	"position" : "absolute",
	"top" : "50%",
	"margin-top" : - ( absHeight / 2 ),
	"left" : "50%",
	"margin-left" : - ( absWidth / 2 )
} );

$( '.absHorizontalCenter' ).css( {
	"position" : "absolute",
	"left" : "50%",
	"margin-left" : - ( absWidth / 2 )
} );

$('#dock').Fisheye({
	maxWidth: 10,
	items: 'a',
	itemsText: 'span',
	container: '.container',
	itemWidth: 56,
	proximity: 50,
	alignment : 'left',
	valign: 'bottom',
	halign : 'center'
})

$('.dock-item span').addClass('').append('<img src="img/tooltip_tail.png" />');