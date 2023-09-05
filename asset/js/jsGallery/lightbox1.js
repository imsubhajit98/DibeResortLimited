var $galleryContainer = $('.gallery').isotope({
    itemSelector: '.item',
      layoutMode: 'fitRows'
  })
  
  console.log($galleryContainer);
  
  $('.button-group .button').on('click', function(){
    $('.button-group .button').removeClass('active');
    $(this).addClass('active');
  
    var value = $(this).attr('data-filter');
    // var value = document.attr('data-filter');
    console.log(value);
  
  
    
    
    $galleryContainer.isotope({
      filter: value 
    })
  })
  
  
  
  
  // Heading text change
  
  let galleryHeading= document.querySelector('#galleryHeading');
  let galleryAll= document.querySelector('#all');
  
  let galleryMountain= document.querySelector('#mountain');
  let galleryBeach= document.querySelector('#beach');
  let galleryWaterfall= document.querySelector('#waterfall');
  let galleryForest= document.querySelector('#forest');
  
  
  
  galleryAll.addEventListener('click',()=>{
    // galleryHeading.innerHTML=galleryAll.innerHTML +" " + 'VIEW';
    galleryHeading.innerHTML="GALLERY VIEW";
  
  })
  galleryMountain.addEventListener('click',()=>{
    galleryHeading.innerHTML=galleryMountain.innerHTML +" " + 'VIEW';
  })
  
  galleryBeach.addEventListener('click',()=>{
    galleryHeading.innerHTML=galleryBeach.innerHTML +" "+ 'VIEW';
  })
  
  galleryWaterfall.addEventListener('click',()=>{
    galleryHeading.innerHTML=galleryWaterfall.innerHTML +" "+ 'VIEW';
  })
  
  galleryForest.addEventListener('click',()=>{
    galleryHeading.innerHTML=galleryForest.innerHTML +" "+ 'VIEW';
  })
  
  