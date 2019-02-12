<TABLE><FORM METHOD='POST' ACTION='c_action.php'>
    <tr>
	<td> FIRST NUMBER</td>
	<td><INPUT TYPE="text" name="n1" required placeholder="enter first number" value= <?php echo @$_GET['a1']; ?>></td>
    </tr>
    <tr>
        <td>SECOND NUMBER</td>
   	<td><INPUT TYPE="text" name="n2" required placeholder="enter second number" value= <?php echo @$_GET['a2'] ?>></td>
    </tr>
    <tr>
	<td>OUTPUT</td>
	<td><input type="text" name="o1" value= <?php echo @$_GET['sigma'] ?>></td>
    </tr>
    <tr>
	<td>OPERATION</td>
	<td>
    <select name="OP">
      <option value="add" <?php if($_GET['op']=="add") { echo 'selected="selected"'; } ?>  >Add</option>
      <option value="sub" <?php if($_GET['op']=="sub") { echo 'selected="selected"'; } ?>  >Sub</option>
      <option value="div" <?php if($_GET['op']=="div") { echo 'selected="selected"'; } ?>  >Div</option>
      <option value="mul" <?php if($_GET['op']=="mul") { echo 'selected="selected"'; } ?>  >Mul</option>
	    <?php /*<input type="radio" name="OP" value="add" <?php if(@$_GET['op']=="add") {  echo 'checked';} ?> > ADD<br>
	    <input type="radio" name="OP" value="sub" <?php if(@$_GET['op']=="sub") {  echo 'checked';} ?>> SUB<br>
	    <input type="radio" name="OP" value="div" <?php if(@$_GET['op']=="div") {  echo 'checked';} ?>> DIVIDE<br>
      <input type="radio" name="OP" value="MUL" <?php if(@$_GET['op']=="MUL") {  echo 'checked';} ?>> MULTIPLY*/?>
	</td>
    </tr>
    <tr>
        <td></td>
        <td>  <input type="submit" name="Calculate"> </td>
    </tr>

</form> </table>
