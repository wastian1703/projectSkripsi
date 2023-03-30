<script src="{{ url('bootstrap/js/bootstrap.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {

  // $('.sidebar').hover(
  //     function() {
  //         $('.pilihan-menu, h5').show(50);
  //         $('.container1').css('width', '75%');
  //         $('.container1').css('transition', '1s');
  //         $('body').css('background-color', 'rgb(233, 239, 239');
  //     },
  //     function() {
  //         $('.pilihan-menu, h5').hide(100);
  //         $('.container1').css('width', '90%');
  //         $('body').css('background-color', 'white');
  //     }
  // );

  function normalImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
  }
  $('.pilihan-menu').hover(function() {
      $(this).css('color', 'aqua');
      $(this).css('text-shadow', '2px 0px 5px white');
      // $(this).css('font-size','20px')

    },
    function() {
      $(this).css('color', 'white');
      $(this).css('font-size', '16px');
      $(this).css('text-shadow', 'none');
    });
});
// $('.menuandro').on("click", function() {
//     $('.sidebar').css('display', 'block');
// });
// function lihat(x){
//     x.style.display = "block";
// }
</script>