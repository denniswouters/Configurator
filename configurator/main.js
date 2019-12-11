function on() {
    document.getElementById("overlay").style.display = "block";
  }

  function off() {
    document.getElementById("overlay").style.display = "none";
  }

// slepen

var before = [];
var after = [];

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();

  if ($(ev.target).hasClass("dragmenuItem") || $(ev.target).parents('.dragmenuItem').length){
    console.log("binnen dragmenuItem");
  } else {
    console.log("niet binnen dragmenuItem");
    var data = ev.dataTransfer.getData("text");
    after.push(document.getElementById(data).innerHTML);
    // ev.target.appendChild(document.getElementById(data));

    // dragItemHtml = document.getElementById(data).innerHTML;
    // wrappedDragItem = $(dragItemHtml).wrap( "<div class='col-lg-6'></div>" );
    // console.log(wrappedDragItem);

    // $(".dragmenu > .row").prepend(wrappedDragItem);



    dataDiv = document.getElementById(data);

    if ($(document.getElementById(data)).parents('.page').length){
      console.log("binnen page");
    } else {
      jQuery(document.getElementById(data)).clone().appendTo(ev.target);
    }
    $(".page .dragmenuItem").removeAttr("ondragstart");
  }
}

$( function() {
  $( ".page .page-sortable" ).sortable();
  $( ".page .page-sortable" ).disableSelection();
} );



// Ordenen binnen pagina
var dragSrcEl = null;

function handleDragStart(e) {
  // Target (this) element is the source node.
  dragSrcEl = this;

  e.dataTransfer.effectAllowed = 'move';
  e.dataTransfer.setData('text/html', this.outerHTML);

  this.classList.add('dragElem');
}
function handleDragOver(e) {
  if (e.preventDefault) {
    e.preventDefault(); // Necessary. Allows us to drop.
  }
  this.classList.add('over');

  e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.

  return false;
}

function handleDragEnter(e) {
  // this / e.target is the current hover target.
}

function handleDragLeave(e) {
  this.classList.remove('over');  // this / e.target is previous target element.
}

function handleDrop(e) {
  // this/e.target is current target element.

  if (e.stopPropagation) {
    e.stopPropagation(); // Stops some browsers from redirecting.
  }

  // Don't do anything if dropping the same column we're dragging.
  if (dragSrcEl != this) {
    // Set the source column's HTML to the HTML of the column we dropped on.
    //alert(this.outerHTML);
    //dragSrcEl.innerHTML = this.innerHTML;
    //this.innerHTML = e.dataTransfer.getData('text/html');
    this.parentNode.removeChild(dragSrcEl);
    var dropHTML = e.dataTransfer.getData('text/html');
    this.insertAdjacentHTML('beforebegin',dropHTML);
    var dropElem = this.previousSibling;
    addDnDHandlers(dropElem);

  }
  this.classList.remove('over');
  return false;
}

function handleDragEnd(e) {
  // this/e.target is the source node.
  this.classList.remove('over');

  /*[].forEach.call(cols, function (col) {
    col.classList.remove('over');
  });*/
}

function addDnDHandlers(elem) {
  elem.addEventListener('dragstart', handleDragStart, false);
  elem.addEventListener('dragenter', handleDragEnter, false)
  elem.addEventListener('dragover', handleDragOver, false);
  elem.addEventListener('dragleave', handleDragLeave, false);
  elem.addEventListener('drop', handleDrop, false);
  elem.addEventListener('dragend', handleDragEnd, false);

}

var cols = document.querySelectorAll('.page .dragmenuItem');
[].forEach.call(cols, addDnDHandlers);













// toevoegen page

$(document).ready(function() {
    var max_fields = 6;
    var wrapper = $(".addPage");
    var addPage = $(".addPageText");

    var x = 1;
    $(addPage).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            // $(wrapper).parent().prepend('<div class="page col-lg-3" ondrop="drop(event)" ondragover="allowDrop(event)"><div class="page-label">Homepagina</div><a href="#" class="delete">Delete</a></div>');
            $('<div class="page offset-lg-1 col-lg-3" ondrop="drop(event)" ondragover="allowDrop(event)"><div class="page-label">Homepagina</div><a href="#" class="delete">Delete</a></div>').insertBefore(".addPage");
        } else {
            alert('Maximaal aantal tabbladen bereikt')
        }
    });

    $(document).on("click", ".delete", function() {
      $(this).parent().remove();
      x--;
    });
});
