<table>
	<th>Make</th>
	<th>Model</th>
	<th>Year</th>
	<th>Date & Time</th>
    <th>Amount</th>
	<?php foreach($sales as $i => $iv): ?>
		<tr>		 
			<td><?php echo($iv['make']);        ?></td>
			<td><?php echo($iv['model']);       ?></td>
			<td><?php echo($iv['year_of_production']);        ?></td>
			<td><?php echo($iv['date_sale']);?></td>
            <td class="acc"><?php echo($iv['amount']); ?></td>
		</tr>
	<?php endforeach; ?>
    <hr>
    <tr>
        <td colspan="4">Total</td>
        <td class="acc"><?php echo($sales_total); ?></td>
    </tr>
</table>