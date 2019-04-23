<div class="col s12 m3">
  <div class="card">
    <div class="card-image">
      <img src="images/sample1.jpg">
    </div>
    <div class="card-content">
      <blockquote><?php echo $squotes['saying']; ?></blockquote>
      <p><?php echo $squotes['author']; ?></p>
      <table>
        <tr>
          <th>
             <form action="manager/update_quote_form.php" method="Post" id="update_quote_form">
                <input type="hidden" name="quote_id" value="<?php echo $squotes['quoteID']; ?>"/>
                <button class="btn waves-effect waves-light" type="submit" name="Update">Update
                </button>
             </form>
          </th>
          <th>
             <form action="models/delete.php" method="Post" id="delete_qoute_form">
                <input type="hidden" name="quote_id" value="<?php echo $squotes['quoteID']; ?>"/>
                <button class="btn waves-effect waves-light" type="submit" name="Delete" id="delete_button">Delete
                </button>
             </form>
          </th>
        </tr>
      </table>
    </div>
  </div>
</div>