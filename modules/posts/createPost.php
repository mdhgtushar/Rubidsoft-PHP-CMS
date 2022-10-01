
<a class="w3-button w3-block w3-teal" href="?moduleName=posts">Contact List</a>
<br>

  <div class="w3-container w3-teal">
  <h2>Input Form</h2>
</div>

<form method="post" action="?moduleName=posts&add">
  <label class="w3-text-teal"><b>Title</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="title">

  <label class="w3-text-teal"><b>Slug</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="slug">

  <label class="w3-text-teal"><b>Category</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="category">

  <label class="w3-text-teal"><b>Body</b></label>
  <textarea class="w3-input w3-border w3-light-grey" type="text" name="description"></textarea>
<br>
  <input type="submit" value="Create" class="w3-btn w3-blue-grey" name="addNew">
</form>