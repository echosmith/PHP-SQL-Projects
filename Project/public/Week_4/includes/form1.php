<form action="#" method="get">
    <fieldset>        
        <div>Columns to Group by</div>  
        <select name="datatwo">
            <option value="corp">Corporation</option>
            <option value="email">Email Address</option>
            <option value="zipcode">Zipcode</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone Number</option>
        </select>

        <label>Ascending</label>  
        <input type="radio" name="dataone" value="ASC" />
        <label>Descending</label>  
        <input type="radio" name="dataone" value="DESC" />

        <input type="hidden" name="action" value="sort" />
        <input type="submit" value="Submit1" />
        <a class="btn btn-primary" href="./formprocess.php">Reset</a>      
    </fieldset>    
</form>