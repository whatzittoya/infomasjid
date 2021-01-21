<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>


var fallbackToStore = function() {
  window.location.replace('https://play.google.com/store/apps/details?id=com.riausoftwarehouse.infomasjid');
};
var openApp = function() {
 const page="{{$page}}";
 var prefix=""
 if(page==='berita'){
     prefix="BeritaShow"
 }
  window.location.replace('exp://192.168.43.62:19000/--/'+prefix+'?id={{$id}}');
};
var triggerAppOpen = function() {
  openApp();
  setTimeout(fallbackToStore, 700);
};

triggerAppOpen();

</script>
</head>
<body>

</body>

</html>