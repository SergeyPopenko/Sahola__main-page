
//Modal form
  function closeModal(){
    jQuery(".modal__overlay").fadeOut();
    
    if(jQuery(".modal").hasClass("modal-show")){
      jQuery(".modal").removeClass("modal-show");
    }
    if(jQuery(".modalsend").hasClass("modal-show")){
      jQuery(".modalsend").removeClass("modal-show");
    }
    if(jQuery(".modalnosend").hasClass("modal-show")){
      jQuery(".modalnosend").removeClass("modal-show");
    }
  }
  jQuery(".button__modal").on("click", function(e){
    e.preventDefault();
    jQuery(".modal__overlay").fadeIn(function(){
      jQuery(".modal").addClass("modal-show");
    });
    jQuery(".modal").find(".inp-hidden").val(jQuery(this).attr("data-section"));
    console.log(jQuery(".modal").find(".inp-hidden").val());
  });
//______________________

  jQuery(".landing__modal__close").on("click", function(e){
    e.preventDefault();
    closeModal();
  });
  jQuery(window).keydown(function(e){
    if (e.which == "27") {
      e.preventDefault();
      closeModal();
    }
  });
  jQuery(".btn__modal-close").on("click", function(e){
    e.preventDefault();
    closeModal();
  });

  jQuery(".btn__modal-again").on("click", function(e){
    e.preventDefault();
    jQuery(".modalnosend").removeClass("modal-show");
    jQuery(".modal").addClass("modal-show");
  });
//___________________________
//Validation form
  var form = document.querySelectorAll(".modal__form");
  for (var i = 0; i < form.length; i++) {
    form[i].addEventListener("submit", function(event) {
      var login = this.querySelector(".login"),
          email = this.querySelector(".email"),
          tel = this.querySelector(".tel");
      if (!login.value || !email.value || !tel.value) {
        event.preventDefault();
        for (var j = 0; j < form.length; j++) {
          form[j].classList.add("modal-error");
        }
      }
    });
  }

//________________________
//Modalsend window
  function modalSendOk(){
    if(jQuery(".modal").hasClass("modal-show")){
      jQuery(".modal").removeClass("modal-show");
    }
    jQuery(".modalsend").addClass("modal-show");
  }
  function modalSendFalse(){
    if(jQuery(".modal").hasClass("modal-show")){
        jQuery(".modal").removeClass("modal-show");
    }
    jQuery(".modalnosend").addClass("modal-show");
  }
//________________________________

// Toggle bars
  jQuery(".toggle-btn").on("click", function(){
    if(jQuery(this).hasClass("foto__toggle-btn")){
      if (window.innerWidth < 769) {
        jQuery(this).toggleClass("active");
        jQuery(this).next(".toggle-block").slideToggle( "slow" );
      }
    }else{
      jQuery(this).next(".toggle-block").slideToggle( "slow" );
        jQuery(this).toggleClass("active");
    }
    
     
  })
  jQuery("body").on("click", function(){
    if(jQuery(".toggle-btn").hasClass("active")){
      jQuery(".toggle-btn").removeClass("active");
    }
  }
  //send modal    
  jQuery(".modal__form").on("click", "[type=submit]", function(e){        
	var validation = 0,            
	action_form = jQuery(this).parent().closest(".modal__form");        
	e.preventDefault();        
	var jQueryform = jQuery(this).parent().closest(".modal__form");        
	jQueryform.validate();        
	// check if the input is valid        
	if (jQueryform.valid()) { //тут должна была быть валидация            
		jQuery.ajax({                
			type: "POST",                
			url: action_form.attr("action"),                
			data: action_form.serialize(),                
			success: function() {                    
				modalSendOk();                
			},                
			error: function() {                    
				modalSendFalse();                
			}           
		});        
	} else {            
		jQueryform.find('[type=submit]').html(jQueryform.valid);        
	}    
  });
  