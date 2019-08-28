function readURL(input) {
    if (input.files && input.files[0]) {
      let reader = new FileReader();
      reader.onload = function (e) {
        $('#current_img')
          .attr('src', e.target.result)
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

// Удаление
$(document).ready(function () {
  $(document).on("click", ".js-delete-button", function () {
    let $item = $(this);
    let url = $item.data('delete-href');
    let itemId = $item.data('id');

    let choose = confirm("Are you sure?");

    if(!choose) {
      return;
    }

    $.post(url, {id: itemId}).done(function () {
      window.location.href = window.location.origin;
    });
  });
});