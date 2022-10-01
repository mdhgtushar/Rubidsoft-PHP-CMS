<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }
</style>

<p><b>Name: </b> <span id="getName">Please type</span></p>

<input type="text" name="name" id="name">

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
  $("#name").onFocus(() => {
    $("#getName").toggle();
  })
</script>