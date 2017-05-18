// =================ARRAY / masyvas==========================

console.log("labas");

//============ ========================
$( "div" ).on( "click", function() {
     $( this ).css({
       width: function( index, value ) {
         return parseFloat( value ) * 1.2;
       },
       height: function( index, value ) {
         return parseFloat( value ) * 1.2;
       }
     });
});

function increaseSize (element) {
       $( element ).css({
         width: function( index, value ) {
           return parseFloat( value ) * 1.2;
         },
         height: function( index, value ) {
           return parseFloat( value ) * 1.2;
         }
       });
}

// -- trumpesnis variantas
$( "div" ).on( "click", increaseSize 
});
// ===========================================





// ===========================================
