<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; Since 2021 <div class="bullet"></div> DansBlog Official Website</a>
  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('public') }}/assets/js/stisla.js"></script>
<script src="{{ asset('public') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- JS Libraies -->
<!-- Script Real Time -->
<script type="text/javascript">
   <!--
       function showTime() {
           var a_p = "";
           var today = new Date();
           var curr_hour = today.getHours();
           var curr_minute = today.getMinutes();
           var curr_second = today.getSeconds();
           if (curr_hour < 12) {
               a_p = "AM";
           } else {
               a_p = "PM";
           }
           if (curr_hour == 0) {
               curr_hour = 12;
           }
           if (curr_hour > 12) {
               curr_hour = curr_hour - 12;
           }
           curr_hour = checkTime(curr_hour);
           curr_minute = checkTime(curr_minute);
           curr_second = checkTime(curr_second);
           document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
       }

       function checkTime(i) {
           if (i < 10) {
               i = "0" + i;
           }
           return i;
       }
       setInterval(showTime, 500);
 //-->
</script>

<!-- Menampilkan Hari, Bulan dan Tahun -->
<br>
<script type='text/javascript'>
   <!--
       var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
       var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
       var date = new Date();
       var day = date.getDate();
       var month = date.getMonth();
       var thisDay = date.getDay(),
       thisDay = myDays[thisDay];
       var yy = date.getYear();
       var year = (yy < 1000) ? yy + 1900 : yy;
       document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
 //-->
</script>
<!-- Template JS File -->
<script src="{{ asset('public') }}/node_modules/select2/dist/js/select2.full.min.js"></script>
<script src="{{ asset('public') }}/assets/js/scripts.js"></script>
<script src="{{ asset('public') }}/assets/js/custom.js"></script>
<!-- Page Specific JS File -->
</body>
</html>
