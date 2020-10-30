$(document).on('dragstart', '.draggable-item', function() {
    $(this).addClass('hold');
});

$(document).on('dragend', '.draggable-item', function() {
    $(this).removeClass('hold');
    reorderItems();
});

$(document).on('mouseover', '.draggable-item', function() {
    console.log(this)
});

itemOne = '<p draggable="true" class="draggable-item">One</p>';
itemTwo = '<p draggable="true" class="draggable-item">Two</p>';
itemThree = '<p draggable="true" class="draggable-item">Three</p>';
itemFour = '<p draggable="true" class="draggable-item">Four</p>';

var items = [itemOne, itemTwo, itemThree, itemFour]

function reorderItems() {
    $('.draggable-container').html('');
    for (let i = 0; i < items.length; i++) {
        $('.draggable-container').append(items[i]);
    }
}


reorderItems();