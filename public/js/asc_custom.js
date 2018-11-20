function readURL(input,preview) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      preview.attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
function checkImage(input)
{
    var filename = input.value;
            var extension = filename.replace(/^.*\./, '');
            if (extension == filename) {
            extension = '';
            } else {
            extension = extension.toLowerCase();
            }
            if(extension=='jpg'||extension=='png'||extension=='jpeg'){
                return true;
            }
            alert("Your selected file is not an image");
            return false;
}
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
            $('.alert').fadeOut(3000);
        });
