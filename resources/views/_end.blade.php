<!-- Scripts -->
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/materialize.js')}}"></script>
<script src="{{asset('/js/scripts.js')}}" ></script>
<script>
    var lat1 = <?php echo json_decode($firstItem->location)->lat ; ?>;
    var long1 = <?php echo json_decode($firstItem->location)->lon ; ?>;
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTL6n0wwXGh8bAXa2NTLfYCHtLsBKNAcQ&callback=initMap" async defer></script>
</body>
</html>