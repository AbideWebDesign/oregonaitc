jQuery(document).ready((function($){$("#library-hold").click((function(e){var a=0,s=!1;$("#error-max-qty").addClass("d-none"),$("#error-kit-qty").addClass("d-none"),$.each($(".resource-qty"),(function(e,t){0==$(this).val()?($(this).addClass("is-invalid"),$("#error-kit-qty").removeClass("d-none"),s=!0):parseInt($(this).val())>parseInt($(this).attr("max"))?($(this).addClass("is-invalid"),$("#error-kit-qty-max").removeClass("d-none"),$("#error-kit-qty-max-text").append(" Max amount you can order is "+$(this).attr("max")+"."),s=!0):$(this).removeClass("is-invalid"),a+=parseInt($(this).val())})),a>30&&(s=!0,$("#error-max-qty").removeClass("d-none")),$("#termCheck").prop("checked")?$("#termCheck").removeClass("is-invalid"):(s=!0,$("#termCheck").addClass("is-invalid")),$("#shippingCheck").prop("checked")?$("#shippingCheck").removeClass("is-invalid"):(s=!0,$("#shippingCheck").addClass("is-invalid")),$("#students").val()?($("#error-students").addClass("d-none"),$("#students").removeClass("is-invalid")):(s=!0,$("#error-students").removeClass("d-none"),$("#students").addClass("is-invalid")),s||$("#confirmationModal").modal("show")})),$(document).on("click","[data-gaevent]",(function(e){var a=$(this).data("gaevent").split(",");a&&(eventCategory=a[0],eventAction=a[1],eventLabel=a[2],gtag("event",eventAction,{event_category:eventCategory,event_label:eventLabel}))}))}));