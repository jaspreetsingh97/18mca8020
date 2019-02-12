<TABLE><FORM METHOD='POST' ACTION='c_action.php'>

  <tr>
		<td> FIRST NUMBER</td>
		<td><INPUT TYPE="text" name="n1" required placeholder="enter first number" value= <?php echo @$_GET['a1']; ?>></td>
	</tr>
	<tr>
   	<td>SECOND NUMBER</td>
   	<td><INPUT TYPE="text" name="n2" required placeholder="enter second number" value= <?php echo @$_GET['a2'] ?>
      ></td>
	</tr>
	<tr>
			<td>OUTPUT</td>
			<td><input type="text" name="o1" value= <?php echo @$_GET['o1'] ?>></td>
	</tr>
	<tr>
			<td>OPERATION</td>
			<td>
				<input type="radio" name="OP" value="add" <?php if($_GET['op']=="add") {  ?> checked <?php } ?> > ADD<br>
				<input type="radio" name="OP" value="sub" <?php if(@$_GET['op']=="sub") {  ?> checked <?php } ?>> SUB<br>
				<input type="radio" name="OP" value="div" <?php if(@$_GET['op']=="div") {  ?> checked <?php } ?>> DIVIDE<br>
        <input type="radio" name="OP" value="MUL" <?php if(@$_GET['op']=="MUL") {  ?> checked <?php } ?>> MULTIPLY
			</td>
	</tr>
  <tr>
    <td>
    </td>
  <td>
  <input type="submit" name="Calculate">
</td>
</tr>
</form>
</table>
