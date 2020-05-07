
function add_to_cart(id) {
     var button = $("#"+id);
     button.prop('disabled',true);
     var route = button.attr('route');
    $.ajax({
        type: "get",
        url: route,
        data: { id: id},
        dataType:'json',
        success:function(response){
            $( "#totalQty" ).show();
            $( "#totalQty" ).text(response.cart.totalQty);
            button.prop('disabled',false);
        },
        error:function(result)
        {
            alert('Error occur!Please try again.');
            button.prop('disabled',false);
            return false;
        }
    });
    return false;

}

/*
return $(document).on('click', 'button[data-id]', function (e) {
    e.preventDefault();
    $(this).prop('disabled',true);
    var requested_to = $(this).attr('data-id');
    var button = $(this);
    alert(requested_to);
    $.ajax({
        type: "get",
        url: $(this).attr('route'),
        data: { id: requested_to},
        dataType:'json',
        success:function(response){
            $( "#totalQty" ).text(response.cart.totalQty);
            button.prop('disabled',false);
            alert('Item added successfully!');
            return true;
        },
        error:function(result)
        {
            alert('Error occur!Please try again.');
            button.prop('disabled',false);
            return false;
        }
    });
    return false;


    // Do whatever else you need to do.
});
*/



/*
let element =   document.getElementById('add-cart');

  element.addEventListener("click", function(e)
  {

  });*/
/*
  function sendAjaxRequest(element,id) {
      $.ajax({
          type: "get",
          url: element.attr('route'),
          data: { id: id},
          dataType:'json',
          success:function(response){
              $( ".add" ).text(response.cart.totalQty);
              $(element).prop('disabled',false);
          },
          error:function(result)
          {
              alert('Error occur!Please try again.');
              $(element).prop('disabled',false);
              return false;
          }
      });
  }*/
  /*$("button").click(function(e) {

  });*/

