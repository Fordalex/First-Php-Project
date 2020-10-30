$('.draggable-item').on('dragstart', function() {
    $(this).addClass('hold');
});
$('.draggable-item').on('dragend', function() {
    $(this).removeClass('hold');
});