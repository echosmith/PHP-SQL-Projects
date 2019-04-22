<form action="#" method="get">
    <fieldset>
        <div>Columns to Search by</div>  
        <select name="datatwo">
            <option value="corp">Corporation</option>
            <option value="email">Email Address</option>
            <option value="zipcode">Zipcode</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone Number</option>
        </select>

        <label>Search Bar</label>
        <input name="dataone" type="search" placeholder="Search...." />   

         <input type="hidden" name="action" value="search" />
        <input type="submit" value="Submit" />
        <a class="btn btn-primary" href="./formprocess.php">Reset</a>      

    </fieldset>            
</form>