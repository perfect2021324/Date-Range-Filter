var clic=false;
var x = "";
var y = "";
var empty = false;
var canvas=document.getElementById("canvas");
fitToContainer(canvas);

var cntx = canvas.getContext("2d");
cntx.lineCap = 'round';
cntx.lineWidth = 2;
cntx.fillStyle = "white";
cntx.fillRect(0, 0, canvas.width, canvas.height);

function fitToContainer(canvas){
  canvas.style.width ='100%';
  canvas.style.height='200px';
  canvas.width  = canvas.offsetWidth;
  canvas.height = canvas.offsetHeight;
}

canvas.addEventListener("mousedown", function (canvas) {
   clic=true;
   cntx.save();
   x = canvas.pageX-this.offsetLeft;
   y = canvas.pageY-this.offsetTop;
}, false);

canvas.addEventListener("mouseup", function (canvas) {
   clic=false;
}, false);

$(document).click(function(){
   clic=false;
});

canvas.addEventListener("mousemove", function (canvas) {
    canvas.preventDefault();
   if(clic==true){
       cntx.beginPath();
       cntx.moveTo(canvas.pageX-this.offsetLeft,canvas.pageY-this.offsetTop);
       cntx.lineTo(x, y);
       cntx.stroke();
       x = canvas.pageX-this.offsetLeft;
       y = canvas.pageY-this.offsetTop;
       empty = true;
   }
}, false);

canvas.addEventListener("touchstart", function (e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousedown", {
        clientX: touch.pageX,
        clientY: touch.pageY
    });
    canvas.dispatchEvent(mouseEvent);
}, false);

canvas.addEventListener("touchend", function (e) {
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(mouseEvent);
}, false);

canvas.addEventListener("touchmove", function (e) {
    e.preventDefault();
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousemove", {
        clientX: touch.pageX,
        clientY: touch.pageY
    });
    canvas.dispatchEvent(mouseEvent);
}, false);

// Get the position of a touch relative to the canvas
function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
        x: touchEvent.touches[0].pageX - rect.left,
        y: touchEvent.touches[0].pageY - rect.top
    };
}

jQuery(document).ready(function($) {
    $('.btn-reset').click(function(){
        cntx.fillRect(0, 0,  canvas.width, canvas.height);
        $('.submit-form').html('');
        empty = false;
    });
    //save result img canvas
    $(document).on('click', '.btn-save', function(){
      var mycanvas = document.getElementById('canvas');
      if(mycanvas && empty == true) {
        var img = mycanvas.toDataURL("image/png");
        anchor = document.getElementById("signature-input");
        $(anchor).val(img);
        $('.submit-form').html('<button type="submit"> Enviar a Oficina <span aria-hidden="true" class="arrow_right"></span></button>');
      }else{
        alert('Draw your signature on canvas');
      }
    });

    //send email via ajax
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();
        var url = "send.php";

        $.ajax({
            type: "POST",
            url: url,
            data: $(this).serialize(),
            success: function (data)
            {
                $('#contact-form').find('input, textarea').val('');
                cntx.fillRect(0, 0,  canvas.width, canvas.height);
                $('.submit-form').html('');
                empty = false;
                $(window).scrollTop(0);
                $('#message-send').html(data);
                console.log(data);
            },
            error: function(data)
            {
                $('#message-send').html(data);
                console.log(data);
            }
        });
        return false;
    });
    $(document).on('click', '.close-btn', function(){
        $(this).parent().remove();
    });
});