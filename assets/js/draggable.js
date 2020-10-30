$(document).on('dragstart', '.draggable-item', function() {
    $(this).addClass('hold');
});

$(document).on('dragend', '.draggable-item', function() {
    $(this).removeClass('hold');
    itemSelected = parseInt(this.id);
    reorderItems();
});

$(document).on('dragenter', '.draggable-item', function() {
    itemOver = parseInt(this.id);
    reorderItems();
});

var itemSelected = 0;
var itemOver = 0;

class Item {
    constructor() {
        this.name;
        this.order;
        this.id;
    }
    html() {
        return `<p draggable="true" class="draggable-item" id="${this.id}">${this.name}</p>`;
    }
}

apple = new Item();
apple.name = 'Apple';
apple.order = 0;
apple.id = 0;

banana = new Item();
banana.name = 'Banana';
banana.order = 2;
banana.id = 1;

orange = new Item();
orange.name = 'Orange';
orange.order = 3;
orange.id = 2;

var items = [apple, banana, orange];
var itemsSorted = [apple, banana, orange];

function reorderItems() {
    itemFrom = items[itemSelected]['order'];
    itemGoingTo = items[itemOver]['order'];
    if (itemFrom < itemGoingTo) {
        items[itemSelected]['order'] = items[itemOver]['order'] + 1;
    } else if (itemFrom > itemGoingTo) {
        items[itemSelected]['order'] = items[itemOver]['order'] - 1;
    }

    // empty the container
    $('.draggable-container').html('');

    // sort the objects
    itemsSorted.sort(function(a, b) {
        return a['order'] - b['order']
    });

    // append the objects to the page
    for (let i = 0; i < itemsSorted.length; i++) {
        $('.draggable-container').append(itemsSorted[i].html());
    }
}

reorderItems();