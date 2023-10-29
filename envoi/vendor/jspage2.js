
  $( function() {
    $( "#accordion" ).accordion({
      collapsible:true
    });//code js for accordion
  } );


  $( function() {
    $( "#datepicker" ).datepicker();//// code js for datepicker
  } );
  
$( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
      var options={};
      if(selectedEffect==="slide"){
        options={to:{width:200,height:60}};
        
      }else if (selectedEffect==="slide") {
        options={percent:50};
      }
      // Run the effect
      $( ".effect" ).toggle( selectedEffect,options,500);
    };
 
    // Set effect from select menu value
    $( "#dak" ).on( "click", function() {
      runEffect();
    });
  } );
  


 