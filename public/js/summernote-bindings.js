    $(document).ready(function() {
      $('#body').summernote({
          height: 300,                 // set editor height

          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor

          focus: false,                 // set focus to editable area after initializing summernote

          
        });

jQuery.fn.selectText = function() {
  var range, selection;
  return this.each(function() {
    if (document.body.createTextRange) {
      range = document.body.createTextRange();
      range.moveToElementText(this);
      range.select();
    } else if (window.getSelection) {
      selection = window.getSelection();
      range = document.createRange();
      range.selectNodeContents(this);
      selection.removeAllRanges();
      selection.addRange(range);
    }
  });
};


$('#body').on('summernote.paste', function (customEvent, nativeEvent) {
setTimeout(function () {
$('.note-editable').selectText();
$("#body").summernote("removeFormat");
}, 100);
});
 });