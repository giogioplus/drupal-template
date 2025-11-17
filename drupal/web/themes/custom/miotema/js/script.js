console.log('no codice quacustom JS');
Drupal.behaviors.ciao = {
    attach: function (context,settings ){
     once('ciao', 'body').forEach(
      function (element) {
        console.log('ciao qua codice', element);
      }
    );
    }
}