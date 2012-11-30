Drupal.behaviors.features = function(context) {
  Drupal.behaviors.features.feature = $('body.front .feature');
  
  $('body.front .feature li.tab1').bind('mouseenter', function(){
    Drupal.behaviors.features.removeClasses();
    Drupal.behaviors.features.feature.addClass('tab1');
  });
  
  $('body.front .feature li.tab2').bind('mouseenter', function(){
    Drupal.behaviors.features.removeClasses();    
    Drupal.behaviors.features.feature.addClass('tab2');
  });  

  $('body.front .feature li.tab3').bind('mouseenter', function(){
    Drupal.behaviors.features.removeClasses();    
    Drupal.behaviors.features.feature.addClass('tab3');
  });
    
  $('body.front .feature li.tab4').bind('mouseenter', function(){
    Drupal.behaviors.features.removeClasses();    
    Drupal.behaviors.features.feature.addClass('tab4');
  });  
};

Drupal.behaviors.features.removeClasses = function(context) {
  Drupal.behaviors.features.feature
    .removeClass('tab1')
    .removeClass('tab2')
    .removeClass('tab3')
    .removeClass('tab4');
};

cycle = function(){
  var tab = 'tab2';
  Drupal.behaviors.features.feature.addClass('tab1');
  window.setInterval(function(){
    Drupal.behaviors.features.removeClasses();
    Drupal.behaviors.features.feature.addClass(tab);
    switch(tab){
      case 'tab1':
        tab = 'tab2';
        break;
      case 'tab2':
        tab = 'tab3';
        break;
      case 'tab3':
        tab = 'tab4';
        break;
      case 'tab4':
        tab = 'tab1';
        break;
      }
  }, 8000);
};



jQuery(document).ready(function($){
  cycle();
 
});
